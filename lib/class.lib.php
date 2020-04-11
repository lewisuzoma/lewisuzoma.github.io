<?php 

class activity {

	// Function get IP
	public function getIp() {
	    $ip = $_SERVER['REMOTE_ADDR'];
	 
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }
	    
	    return  ip2long($ip);
	}


	// Function get users agent/browser
	public function getbrowser() {
		if (!empty($_SERVER['HTTP_USER_AGENT'])) {
			$browser = $_SERVER['HTTP_USER_AGENT'];
		}
	    
	    return $browser;
	}

	//Server time
	public function server_time() {
		$time = date('d-M Y g:i:A');
		return $myFormatForView = $time;
	}
}