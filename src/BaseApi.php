<?php

namespace itsmeabde\TiketApi;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

/**
 * Class BaseService for all request Api
 * @package itsmeabde\tiketApi
 */
class BaseApi extends AuthApi
{
    /**
     * GuzzleHTTP Client Implementation to use for HTTP requests
     * @var Client
     */
    protected $client;
    /**
     * Helper function to return required headers for making an HTTP request with Tiket.com
     * @return array
     */
    private static function userAgent()
    {
        return [
            'twh' => Config::get('tiket.user_agent')
        ];
    }
    /**
     * Constructor with the option to supply an alternative rest client to be used
     * BaseApi constructor.
     */
    public function __construct()
    {
        $this->client = new Client(self::userAgent(), parent::onStat());
    }
    /**
     * Create send request for the API Calls
     * @param $method
     * @param $url
     * @param array $params
     * @return string
     */
    protected function send($method, $url, array $params)
    {
        $params = [
            'verify' => Config::get('tiket.verify'),
            'query' => [
                'output' => Config::get('tiket.response'),
                'token' => parent::access_token()
            ]
        ];
        $response = $this->client->request($method, $url, $params);
        return $response->getBody()->getContents();
    }

    /**
     * for request payment gateway
     * @param $uri
     * @return string
     */
    protected function urlPaymentGateway($uri)
    {
        return sprintf(Config::get('tiket.base_url'), Config::get('tiket.pg')) . $uri;
    }

    /**
     * for request dummy confirm page payment gateway
     * @param $uri
     * @return string
     */
    protected function urlDummyConfirmPagePaymentGateway($uri)
    {
        return sprintf(Config::get('tiket.base_url'), Config::get('tiket.pg_dummyConfirm')) . $uri;
    }
    
}