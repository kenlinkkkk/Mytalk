<?php
/**
 * Created by PhpStorm.
 * User: TungNT
 * Date: 08/05/2019
 * Time: 02:14 PM
 */

class MobiReg extends  MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('_helper');

		date_default_timezone_set('UTC');

		$package_code = $_POST['package_code'];

		$array = array(
			'package_code' => $package_code,
		);

		$this->session->set_userdata($array);

		$backurl = base_url();

		$trans_id = date('ymdhis');

		$msisdn = $this->session->userdata('msisdn');

		$command_code = "DK " . $package_code;

		if (!empty($package_code) && !empty($msisdn)) {
			$data = $trans_id . "&" . $command_code . "&" . $package_code . "&" .$backurl;

			$log_data = MOBIPHONE_CONFIRM ."?sp=1048?link=" . $data;

			log_message('info', 'phoneNumb=' .$msisdn . '|url=' . $log_data);

			$url = MOBIPHONE_CONFIRM . "?sp=1048&link=" . aes128Encrypt(MYTALK_KEY_MOBI, $data);

			log_message('info', 'phoneNumb='.$msisdn . '|url=' . $url);

			$url = str_replace(" ", "+", $url);

			echo $url;

		} else {
			echo base_url();
		}
	}
}
