<?php
namespace itsmeabde\TiketApi;

use itsmeabde\TiketApi\ApiServices\CheckoutApi;
use itsmeabde\TiketApi\ApiServices\DepositPaymentApi;
use itsmeabde\TiketApi\ApiServices\EventApi;
use itsmeabde\TiketApi\ApiServices\FlightApi;
use itsmeabde\TiketApi\ApiServices\GeneralApi;
use itsmeabde\TiketApi\ApiServices\HotelApi;
use itsmeabde\TiketApi\ApiServices\OrderApi;
use itsmeabde\TiketApi\ApiServices\TrainApi;

/**
 * Class TiketApi expose all implemented Tiket.com API functionality
 * @package itsmeabde\TiketApi
 */
class TiketApi
{
    /**
     * @var GeneralApi
     */
    public $generalApi;
    public $flightApi;
    public $hotelApi;
    public $eventApi;
    public $trainApi;
    public $orderApi;
    public $checkoutApi;
    public $depositPaymentApi;

    /**
     * TiketApi constructor.
     */
    public function __construct()
    {
        $this->generalApi = new GeneralApi();
        $this->flightApi = new FlightApi();
        $this->hotelApi = new HotelApi();
        $this->eventApi = new EventApi();
        $this->trainApi = new TrainApi();
        $this->orderApi = new OrderApi();
        $this->checkoutApi = new CheckoutApi();
        $this->depositPaymentApi = new DepositPaymentApi();
    }
}