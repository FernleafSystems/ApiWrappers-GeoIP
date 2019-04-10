<?php

namespace FernleafSystems\ApiWrappers\GeoIP\IPStack\IP;

/**
 * Class GeoIpVO
 * @package FernleafSystems\ApiWrappers\IPStack\GeoIp
 * @property string ip
 * @property string type           - ipv4
 * @property string continent_code - EU
 * @property string continent_name - e.g. Europe
 * @property string country_code   - e.g. GB
 * @property string country_name   - e.g. United Kingdom
 * @property string region_code    - e.g. ENG
 * @property string region_name    - e.g. England
 * @property string city           - e.g. Liverpool
 * @property string zip
 * @property string latitude
 * @property string longitude
 * @property array  location       - use getLocationVO()
 */
class GeoIpVO extends \FernleafSystems\ApiWrappers\Base\BaseVO {

	/**
	 * @return LocationVO
	 */
	public function getLocationVO() {
		return ( new LocationVO() )->applyFromArray( $this->location );
	}
}