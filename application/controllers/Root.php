<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 07/12/2019
 * Time: 10:47 AM
 */

class root extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('_helper');
	}

	public function _remap() {
		$html ='';
		$segment1 = $this->uri->segment(1);

		$str = substr($segment1, 0, 4);
		if ($str == 'page') {
			$html = modules::run('Test');
		} else {
			switch ($segment1) {
				case 'admin':
					$html = modules::run('Test');
					break;
				case 'mobireg':
					$html = modules::run('MobiReg');
					break;
				case 'header':
					$html = modules::run('HeaderLog');
					break;
				case 'backurl':
					$html = modules::run('Backurl');
					break;
				default:
					$html = modules::run('Home_mode');
					break;
			}
		}

		$this->output->set_output($html);
	}
}
