<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class FlightApi
 * @package itsmeabde\TiketApi\ApiServices
 */
class FlightApi extends BaseApi
{
    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchFlight(array $query)
    {

        $query['v'] = Config::get('tiket.flight_search_version');
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.flight_search'));

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
    public function getNearestAirport(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.flight_getNearestAirport'));

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
    public function getPopularAirportDestination(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.flight_getPopularAirportDestination'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException( $e );
        }

        return $response;
    }

    /**
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function searchAirport()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.flight_searchAirport'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException( $e );
        }

        return $response;
    }

    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkUpdated(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.flight_checkUpdated'));

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
    public function getLionCaptcha()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.flight_getLionCaptcha'));

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
    public function getFlightData(array $query)
    {

        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.flight_getFlightData'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}