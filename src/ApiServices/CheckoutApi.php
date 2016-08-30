<?php
namespace itsmeabde\TiketApi\ApiServices;

use itsmeabde\TiketApi\BaseApi;
use Illuminate\Support\Facades\Config;
use GuzzleHttp\Exception\ClientException;

/**
 * Class CheckoutApi
 * @package itsmeabde\TiketApi\ApiServices
 */
class CheckoutApi extends BaseApi
{
    /**
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkoutCustomer(array $query)
    {
        $params = [
            'query' => $query
        ];

        $url = parent::url(Config::get('tiket.checkout_customer'));

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
    public function checkoutPayment()
    {
        $params = [];
        $url = parent::url(Config::get('tiket.checkout_payment'));

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
    public function checkoutPaymentBankTransfer(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::url(Config::get('tiket.checkout_payment_bankTransfer'));

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
    public function checkoutPaymentBankTransferInstant(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::url(Config::get('tiket.checkout_payment_bankTransferInstant'));

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
    public function checkoutPaymentClickBca(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::url(Config::get('tiket.checkout_payment_bankTransfer'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for checkout payment using deposit
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function checkoutPaymentDeposit(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::url(Config::get('tiket.checkout_payment_deposit'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for payment gateway
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function paymentGateway(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::urlPaymentGateway(Config::get('tiket.payment_gateway'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }

    /**
     * for dummy confirm page payment gateway
     * @param array $query
     * @return string
     * @throws \itsmeabde\TiketApi\Exceptions\TiketException
     */
    public function dummyConfirmPage(array $query)
    {
        $params = [
            'query' => $query
        ];
        $url = parent::urlDummyConfirmPagePaymentGateway(Config::get('tiket.dummyConfirmPage'));

        try {
            $response = parent::send('GET', $url, $params);
        } catch (ClientException $e) {
            throw parent::convertException($e);
        }

        return $response;
    }
}