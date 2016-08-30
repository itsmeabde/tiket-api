<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class DepositPaymentApi for Deposit Payment
 * @package itsmeabde\TiketApi\ApiServices
 */
class DepositPaymentApi extends BaseApi
{
    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkDepositBalance(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.deposit_checkBalance'));

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
    public function showTransaction(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.deposit_showTransaction'));

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
    public function confirmTransaction(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.deposit_confirmTransaction'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}