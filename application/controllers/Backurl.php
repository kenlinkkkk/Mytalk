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

		log_message('ERROR', 'Back URL ->');

		$header = $this->input->request_headers();

		if (empty($header['Msisdn'])) {
			if (empty($_GET['link'])) {
				$array = array(
					'msisdn' => 'empty'
				);

				$this->session->set_userdata($array);
				header('Location: '. base_url());
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

	public function index()
	{

	}
}
