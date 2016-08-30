<?php
return [
    /**
     * Your apiKey
     */
    'api_key' => '',
    /**
     * User Agent header required when API request
     * @format 	twh:[BUSINESS_ID];[BUSINESS_NAME];
     */
    'user_agent' => '',
    /**
     * Determine application environment
     * Development: api-sandbox
     * Production: api
     */
    'api' => 'api-sandbox',
    /**
     * payment gateway
     * Development: sandbox
     */
    'pg' => 'sandbox',
    /**
     * dummy confirm page payment gateway
     * development : https://www.tiket.com
     */
    'pg_dummyConfirm' => 'www',
    /**
     * Available version
     */
    'version' => '1.0',
    /**
     * Available format:
     * array
     * json
     * xml
     * serialize
     */
    'response' => 'json',
    /**
     * Handle ssl guzzleHttp
     */
    'verify' => false,
    /**
     * Base url api request
     */
    'base_url' => 'https://%s.tiket.com/',
    /**
     * uri token request
     */
    'get_token' => 'apiv1/payexpress',
    /**
     * General Api request
     */
    'listCurrency' => 'general_api/listCurrency',
    'listCountry' => 'general_api/listCountry',
    'listLang' => 'general_api/listLanguage',
    'transaction_policies' => 'general_api/getPolicies',
    'register' => 'auth/register',
    /**
     * Flight Api request uri
     */
    /**
     * version of the search for flight api
     */
    'flight_search_version' => 3,
    'flight_search' => 'search/flight',
    'flight_getNearestAirport' => 'flight_api/getNearestAirport',
    'flight_getPopularAirportDestination' => 'flight_api/getPopularDestination',
    'flight_searchAirport' => 'flight_api/all_airport',
    'flight_checkUpdated' => 'ajax/mCheckUpdated',
    'flight_getLionCaptcha' => 'flight_api/getLionCaptcha',
    'flight_getFlightData' => 'flight_api/get_flight_data',
    /**
     * Hotel Api request uri
     */
    'hotel_search' => 'search/hotel',
    'hotel_searchByArea' => 'search/search_area',
    'hotel_searchPromo' => 'home/hotelDeals',
    'hotel_searchAutoComplete' => 'search/autocomplete/hotel',
    /**
     * Event Api request uri
     */
    'event_search' => 'search/event',
    /**
     * Train Api request uri
     */
    'train_search' => 'search/train',
    'train_searchStation' => 'train_api/train_station',
    'train_seatMap' => 'general_api/get_train_seat_map',
    'train_searchPromo' => 'train_api/train_promo',
    'train_changeSeat' => 'general_api/train_change_seat',
    /**
     * Order Api request uri
     */
    'order_addFlight' => 'order/add/flight',
    'order_addHotel' => 'order/add/hotel',
    'order_addEvent' => 'order/add/event',
    'order_addTrain' => 'order/add/train',
    'order' => 'order',
    'order_delete' => 'order/delete_order',
    'check_order' => 'check_order',
    /**
     * Checkout api request uri
     */
    'checkout_customer' => 'checkout/checkout_customer',
    'checkout_payment' => 'checkout/checkout_payment',
    'checkout_payment_bankTransfer' => 'checkout/checkout_payment/2',
    'checkout_payment_bankTransferInstant' => 'checkout/checkout_payment/35',
    'checkout_payment_clickBca' => 'checkout/checkout_payment/3',
    'checkout_payment_deposit' => 'checkout/checkout_payment/8',
    /**
     * Payment gateway request uri
     */
    'payment_gateway' => 'payment/checkout_payment',
    'payment_dummyConfirmPage' => 'payment/dummyConfirmPage',
    /**
     * Deposit Payment
     */
    'deposit_checkBalance' => 'partner/transactionApi/get_saldo',
    'deposit_showTransaction' => 'partner/transactionApi',
    'deposit_confirmTransaction' => 'partner/transactionApi/confirmPayment',
];
