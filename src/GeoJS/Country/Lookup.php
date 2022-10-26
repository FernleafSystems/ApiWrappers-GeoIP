<?php

namespace FernleafSystems\ApiWrappers\GeoIP\GeoJS\Country;

class Lookup extends Base {

	/**
	 * @return IpCountryVO|null
	 */
	public function me() {
		return $this->ip( '' );
	}

	/**
	 * @param string $ip
	 */
	public function ip( $ip ) :?IpCountryVO {
		$ips = $this->ips( [ $ip ] );
		return array_shift( $ips );
	}

	/**
	 * @param string[] $ips
	 * @return IpCountryVO[]
	 */
	public function ips( array $ips ) :array {
		$result = [];

		$ips = array_filter(
			$ips,
			function ( $ip ) {
				return filter_var( $ip, FILTER_VALIDATE_IP ) !== false;
			}
		);

		// Only set the IP param if you have IPs, or you get an empty response
		if ( !empty( $ips ) ) {
			$this->setRequestDataItem( 'ip', implode( ',', $ips ) );
		}

		if ( $this->req()->isLastRequestSuccess() ) {
			$aResp = $this->getDecodedResponseBody();
			if ( empty( $ips ) ) {
				$result[] = $this->getVO()->applyFromArray( $aResp );
			}
			else {
				foreach ( $this->getDecodedResponseBody() as $aIp ) {
					$result[] = $this->getVO()->applyFromArray( $aIp );
				}
			}
		}
		return $result;
	}
}