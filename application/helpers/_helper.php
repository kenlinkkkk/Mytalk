<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 07/31/2019
 * Time: 09:23 AM
 */


//get content
function getHtml($url, $post = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT,3);
	if(!empty($post)) {
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

//convert content to array
function convert_to_array($data) {
	$lines = explode(PHP_EOL, $data);
	$result = array();
	foreach ($lines as $data) {
		$pos = stripos($data, ':');

		$key = substr($data,0, $pos);
		$value = substr($data, $pos + 2, strlen($data) -1);
		$result[$key] = $value;
	}

	return $result;
}

function rewitePhoneNumb($str, $mode) {
	$text = substr($str, 2, strlen($str) - 2);
	if ($mode == 1) {
		$result = substr($text, 0, 5);
		$result = '0' . $result;
		$result .= 'xxxx';
	} elseif ($mode == 2) {
		$result = '0' . $text;
	}

	return $result;
}

function aes128Encrypt($key, $data) {
	if(16 !== strlen($key)) $key = hash('MD5', $key, true);
	$padding = 16 - (strlen($data) % 16);
	$data .= str_repeat(chr($padding), $padding);
	return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_ECB, str_repeat("\0", 16)));
}
function aes128Decrypt($key, $data) {
	$data = base64_decode($data);
	if(16 !== strlen($key)) $key = hash('MD5', $key, true);
	$data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_ECB, str_repeat("\0", 16));
	$padding = ord($data[strlen($data) - 1]);
	return substr($data, 0, -$padding);
}

function redirectBackurl() {
	$backurl = "http://www.mytalk.vn/backurl";

	$link = 'http://free.mobifone.vn/isdn?sp=1048&link='. base64_encode(aes128_ecb_encrypt(MYTALK_KEY_MOBI, $backurl, ""));

	header("Location: ". $link);
}

function getMsisdn() {
	$current_url = urldecode(current_url());
	log_message("ERROR", "getMsisdn::current_url=" . $current_url);

	$split_data = substr($current_url, 26, strlen($current_url) - 26);
	log_message("ERROR", "getMsisdn::split_data=" . $split_data);

	$phone = base64_decode(aes128_ecb_decrypt(MYTALK_KEY_MOBI, $split_data, ""));
	log_message("ERROR", "getMsisdn::phone=" . $phone);

	return $phone;
}

?>
