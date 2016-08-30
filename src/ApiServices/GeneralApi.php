<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Config;

/**
 * Class GeneralApi request
 * @package itsmeabde\TiketApi\ApiServices
 */
class GeneralApi extends BaseApi
{
    /**
     * get list currencies
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function listCurrency()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.listCurrency'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
    /**
     * get list countries
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function listCountry()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.listCountry'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
    /**
     * get list languages
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function listLang()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.listLang'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException( $e );
        }

        return $response;
    }

    /**
     * get transaction policies
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function getTransactionPolicies()
    {
        $params = [];

        $url = parent::url(Config::get('tiket.transaction_policies'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for register user
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function register(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.register'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}