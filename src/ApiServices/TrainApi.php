<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class TrainApi
 * @package itsmeabde\TiketApi\ApiServices
 */
class TrainApi extends BaseApi
{
    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchTrain(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.train_search'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchStation()
    {
        $params = [];

        $url = parent::url(Config::get('tiket.train_searchStation'));

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
    public function getTrainSeatMap(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.train_seatMap'));

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

        $url = parent::url(Config::get('tiket.train_searchPromo'));

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
    public function changeTrainSeat(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.train_changeSeat'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}