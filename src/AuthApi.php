<?php
namespace itsmeabde\TiketApi;

use GuzzleHttp\Client;
use GuzzleHttp\TransferStats;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use itsmeabde\TiketApi\Exceptions\TiketException;

/**
 * Class AuthApi that implement necessary functionality to obtain an access token from a user
 * @package itsmeabde\tiketApi
 */
abstract class AuthApi
{
    /**
     * handle error transfer stats GuzzleHttp
     * @return array
     */
    protected static function onStat()
    {
        return [
            'on_stats' => function(TransferStats $stats){
                return $stats->hasResponse() ? $stats->getResponse()->getStatusCode() : $stats->getHandlerErrorData();
            }
        ];
    }

    /**
     * Obtain access token
     * @return string
     * @throws TiketException
     */
    private static function getToken()
    {
        $params = [
            'verify' => Config::get('tiket.verify'),
            'query' => [
                'method' => 'getToken',
                'secretkey' => Config::get('tiket.api_key'),
                'output' => Config::get('tiket.response')
            ]
        ];

        $url = self::url(Config::get('tiket.get_token'));
        $client = new Client(self::onStat());
        try {
            $response = $client->request('GET', $url, $params);
            $body = $response->getBody();
        } catch (ClientException $e) {
            throw self::convertException($e);
        }

        return $body->getContents();
    }

    /**
     * parse token to String
     * @return string
     * @throws TiketException
     */
    protected function access_token()
    {
        $token = Cookie::get('token');
        if($token === null){
            $getToken = json_decode($this->getToken(), true);
            $parseToken = $getToken['token'];
            $token = response($parseToken)->cookie('token', $parseToken);
        }
        return $token;
    }

    /**
     * Turns a ClientException into a TiketException - like magic.
     * @param ClientException $exception
     * @return TiketException
     */
    protected function convertException(ClientException $exception)
    {
        $tiketException = new TiketException($exception->getResponse()->getReasonPhrase(), $exception->getCode());
        $tiketException->setUrl($exception->getResponse()->getBody()->getContents());
        $tiketException->setErrors(json_decode($exception->getResponse()->getBody()->getContents()));
        return $tiketException;
    }

    /**
     * handle url request all api
     * @param $url
     * @return string
     */
    protected function url($url)
    {
        return sprintf(Config::get('tiket.base_url'), Config::get('tiket.api')) . $url;
    }
}