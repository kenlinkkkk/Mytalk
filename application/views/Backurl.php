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

		$header = $this->input->request_headers();

		if (empty($header['Msisdn'])) {
			redirectBackurl();

			getMsisdn();
			
		} else {
			$data = $header['Msisdn'];

			$array = array(
				'msisdn' => $data
			);

			$this->session->set_userdata($array);
		}

		echo $data;
		die();

//		header("Location: ". base_url());
	}
}
