# IPStack
PHP Wrappers for Geo IP/Location APIs

## Installation

To get started, add the package to your project by issuing the following command:

    composer require fernleafsystems/apiwrappers-ipstack

## Redirect.li - Getting Started

Very simple to use. As with all our API you define a Connection to the API first, then
inject this into the various API components as you need.

In this case:

```php
	use FernleafSystems\ApiWrappers\GeoIP\Redirectli;

	$oConn = new Redirectli\Connection();
	$oIpCountry = ( new Redirectli\Geo\Lookup() )
			->setConnection( $oConn )
			->me();
```

This will return an IpGeoVO object that contains all the information for
your IP.

## GeoJS - Getting Started

Very simple to use. As with all our API you define a Connection to the API first, then
inject this into the various API components as you need.

In this case:

```php
	use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

	$oConn = new GeoJS\Connection();
	$oIpCountry = ( new GeoJS\Country\Lookup() )
			->setConnection( $oConn )
			->me();
```

This will return an IpCountryVO object that contains all the country information for
your IP. If you want more detailed info, use `GeoJS\Geo\Lookup`
instead of `GeoJS\Country\Lookup`

You can look up single IPs or multiple IPs. And in this case you'll get back an
array of VOs.

```php
	use FernleafSystems\ApiWrappers\GeoIP\GeoJS;

	$oConn = new GeoJS\Connection();
	$oIpCountry = ( new GeoJS\Geo\Lookup() )
			->setConnection( $oConn )
			->ips( [ '1.1.1.1', '8.8.8.8' ] );
```

## IPStack - Getting Started

Very simple to use. As with all our API you define a Connection to the API first, then
inject this into the various API components as you need.

In this case:

```php
	use FernleafSystems\ApiWrappers\GeoIP\IPStack;

	$oConn = new IPStack\Connection();
	$oConn->api_key = 'your_ipstack_api_key';
    
    /** @var IPStack\IP\GeoIpVO $oIp */
	$oIP = ( new IPStack\IP\Lookup() )
			->setConnection( $oConn )
			->ip( '123.123.123.123' );
```

In this case $oIP will be a GeoIpVO object with all the properties defined for that class.