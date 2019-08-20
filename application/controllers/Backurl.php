<?php
/**
 * Created by PhpStorm.
 * User: TungNT
 * Date: 08/13/2019
 * Time: 12:30 PM
 */

class Backurl extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('_helper');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('array');
		date_default_timezone_set('UTC');
	}

	public function index()
	{
		$header = $this->input->request_headers();

		if (empty($header['Msisdn'])) {
			if (empty($_GET['link'])) {

				$backurl = 'http://mytalk.vn/backurl';

				$link = 'http://free.mobifone.vn/isdn?sp=1048&link='. aes128Encrypt(MYTALK_KEY_MOBI, $backurl);
				log_message("ERROR","LINK->".$link);

				header("Location: ". $link);
			} else {

				$split_data = $_GET['link'];
				log_message("ERROR", "getMsisdn::split=".$split_data);

				$data = aes128Decrypt(MYTALK_KEY_MOBI, $split_data);
				log_message("ERROR", "getMsisdn::phone=" . $data);

				$array = array(
					'msisdn' => $data,
				);

				$this->session->set_userdata($array);
				header("Location: ".base_url());
			}
		} else {
			$data = $header['Msisdn'];

			$array = array(
				'msisdn' => $data
			);

			$this->session->set_userdata($array);

			log_message("ERROR", "MSISDN-HEADER->". $data);

			header("Location: ".base_url());
		}
	}
}
