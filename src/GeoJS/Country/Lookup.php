<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country;

/**
 * Class Lookup
 * @package FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country
 */
class Lookup extends Base {

	/**
	 * @return IpCountryVO|null
	 */
	public function me() {
		return $this->ip( '' );
	}

	/**
	 * @param string $sIP
	 * @return IpCountryVO|null
	 */
	public function ip( $sIP ) {
		$oIP = null;
		$aIps = $this->ips( [ $sIP ] );
		return array_shift( $aIps );
	}

	/**
	 * @param string[] $aIps
	 * @return IpCountryVO[]
	 */
	public function ips( array $aIps ) {
		$aResult = [];

		$aIps = array_filter(
			$aIps,
			function ( $sIp ) {
				return filter_var( $sIp, FILTER_VALIDATE_IP ) !== false;
			}
		);

		// Only set the IP param if you have IPs, or you get an empty response
		if ( !empty( $aIps ) ) {
			$this->setRequestDataItem( 'ip', implode( ',', $aIps ) );
		}

		if ( $this->req()->isLastRequestSuccess() ) {
			$aResp = $this->getDecodedResponseBody();
			if ( empty( $aIps ) ) {
				$aResult[] = $this->getVO()->applyFromArray( $aResp );
			}
			else {
				foreach ( $this->getDecodedResponseBody() as $aIp ) {
					$aResult[] = $this->getVO()->applyFromArray( $aIp );
				}
			}
		}
		return $aResult;
	}
}