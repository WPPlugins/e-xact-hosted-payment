<?php
class Token {
	public static function generate() {
		//return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$plugin_name = crypt("Global Gateway e4 | Payeezy Gateway |");
		return $_POST['token'] = base64_encode(sha1(uniqid( $plugin_name, date("m-j-y@g:i:sa"))));
	}
	public static function check($token) {
		if(isset($_POST['token']) && $token === $_POST['token']) {
			unset($_POST['token']);
			return true;
		}
	return false;
	}
}
?>