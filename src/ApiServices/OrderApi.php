<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class OrderApi
 * @package itsmeabde\TiketApi\ApiServices
 */
class OrderApi extends BaseApi
{
    /**
     * for add order flight
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function addOrderFlight(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.order_addFlight'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for add order hotel
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function addOrderHotel(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.order_addHotel'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for add order event
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function addOrderEvent(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.order_addEvent'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for add order train
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function addOrderTrain(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.order_addTrain'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function order()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.order'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function deleteOrder(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.order_delete'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * Uri can be get from order, variable checkout
     * @param $uri
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkoutPageRequest($uri)
    {
        $params = [];
        $url = $uri;

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for check order
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkOrder(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.check_order'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e){
            throw parent::convertException($e);
        }

        return $response;
    }
}