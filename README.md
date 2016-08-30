# Laravel Tiket Api's

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This package provides you to use [tiket.com][link-tiket] api with simple usage and it will let you focus on development of the api's user interface.
See the [DOCS][link-docs] for documentation

## Install

Via Composer

``` bash
$ composer require itsmeabde/TiketApi
```

Once this has finish, you will need to add the service provider to the ```providers``` array in your ```app.php``` config as follows:
``` php
itsmeabde/TiketApi/TiketApiServiceProvider::class
```

Finally, you will want to publish the config using the following command:
``` bash
$ php artisan vendor:publish
```
## Usage

Before usage, you mush configure ```api_key, user_agent, response ``` in ```tiket.php``` config file. by default ``` 'response' => 'json'``` , do not change any uri if there is no available updated.

This package by default store token api in cookie with key ```token```. do not forget to configure your ```EncryptCookies.php``` in ```App\Http\Middleware``` folder.

``` php
protected $except = [
    'token'
];
```

Example request search flight:
``` php
use Illuminate\Http\Request;
use itsmeabde\TiketApi\TiketApi;

class FlightController extends Controller
{
    public function searchFlight(Request $request)
    {
        $query = $request->all();
        $tiket = new TiketApi();
        $response = $tiket->flightApi->searchFlight($query);
        
        return $response;
    }
}
```

Or you want create your own BaseTiketController extends BaseController
``` php
use Illuminate\Routing\Controller as BaseController;
use itsmeabde\TiketApi\TiketApi;

class BaseTiketController extends BaseController
{
    public $tiket;
    public function __construct()
    {
        $this->tiket = new TiketApi();
    }
}
```

So you can call tiket Object from class inheritance BaseTiketController without declare new Object TiketApi for many times.
``` php
use Illuminate\Http\Request;

class FlightController extends BaseTiketController
{
    public function searchFlight(Request $request)
    {
        $query = $request->all();
        
        return $this->tiket->flightApi->searchFlight($query);
    }
}
```

For more information, See [DOCS][link-docs].
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Bug

If you discover any bug related issues, please email <itsmeabde@gmail.com> instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/itsmeabde/tiketapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/itsmeabde/tiketapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/itsmeabde/TiketApi
[link-downloads]: https://packagist.org/packages/itsmeabde/TiketApi
[link-author]: https://github.com/itsmeabde
[link-tiket]: https://www/.tiket.com
[link-docs]: http://docs.tiket.com