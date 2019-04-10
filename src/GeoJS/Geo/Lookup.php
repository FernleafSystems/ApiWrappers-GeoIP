<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Geo;

/**
 * Class Lookup
 * @package FernleafSystems\ApiWrappers\GeoIP\GeoJS\Geo
 */
class Lookup extends \FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country\Lookup {

	/**
	 * @return IpGeoVO
	 */
	protected function getVO() {
		return new IpGeoVO();
	}

	/**
	 * @return string
	 */
	protected function getUrlEndpoint() {
		return 'ip/geo.json';
	}
}