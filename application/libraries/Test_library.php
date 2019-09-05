<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_library {
	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
	}

	public function url_test($url = "") {
	  $timeout = 10;
	  $ch = curl_init();
	  curl_setopt ( $ch, CURLOPT_URL, $url );
	  curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	  curl_setopt ( $ch, CURLOPT_TIMEOUT, $timeout );
	  $http_respond = curl_exec($ch);
	  $http_respond = trim( strip_tags( $http_respond ) );
	  $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

	  curl_close( $ch );
	  return $http_code;
	}
}