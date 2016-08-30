<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class HotelApi
 * @package itsmeabde\TiketApi\ApiServices
 */
class HotelApi extends BaseApi
{
    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchHotel(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.hotel_search'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchByArea(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.hotel_searchByArea'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchPromo(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.hotel_searchPromo'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchAutoComplete(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.hotel_searchAutoComplete'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * link uri to view detail can be get from search hotel, variable business_uri
     * @param $uri
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function viewDetailHotel($uri)
    {
        $params = [];
        $url = $uri;

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}