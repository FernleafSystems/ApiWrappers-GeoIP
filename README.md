# IPStack
PHP Wrapper for IPStack API

## Installation

To get started, add the package to your project by issuing the following command:

    composer require fernleafsystems/apiwrappers-ipstack

## Getting Started

Very simple to use. As with all our API you define a Connection to the API first, then
inject this into the various API components as you need.

In this case:

```php
	use FernleafSystems\ApiWrappers\IPStack;

	$oConn = new IPStack\Connection();
	$oConn->api_key = 'your_ipstack_api_key';
    
    /** @var GeoIp\GeoIpVO $oIp */
	$oIP = ( new IPStack\GeoIp\Lookup() )
			->setConnection( $oConn )
			->ip( '123.123.123.123' );
```

In this case $oIP will be a GeoIpVO object with all the properties defined for that class.