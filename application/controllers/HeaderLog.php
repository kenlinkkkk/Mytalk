<?php
/**
 * Created by PhpStorm.
 * User: TungNT
 * Date: 08/05/2019
 * Time: 05:48 PM
 */

class HeaderLog extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('_helper');

		$datas = $this->input->request_headers();
		foreach ($datas as $data => $value) {
			echo $data . ' : ' . $value . '<br>';
		}
	}
}
