<?php
/**
 * Created by PhpStorm.
 * User: TungNT
 * Date: 07/29/2019
 * Time: 01:53 PM
 */

class mobi_mode extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('array');
		$this->load->helper('_helper');
		$this->load->library('session');
		date_default_timezone_set('UTC');
	}

	public function index()
	{
		$segment1 = $this->uri->segment(1);

		switch ($segment1) {
			case 'khuyen-mai':
				$main = $this->_mobi_km();
				break;
			default:
				$main = $this->_mobi_content();
		}
		$footer = $this->_mobi_footer();

		$data = array(
			'content' => $main,
			'footer' => $footer,
			'login' => $this->load->view('home_login', '', TRUE),
			'node1' => '<li class="nav-item non-padding"><a class="nav-link text-white" href="#machinelearning">MACHINE LEARNING</a></li>',
			'node2' => '<li class="nav-item non-padding"><a class="nav-link text-white" href="#promotion">PROMOTION</a></li>',
			'dangnhap1' => '',
			'dangnhap2' => '',
			'msg' => '<a class="nav-link disabled text-white" href="#">Xin chào '.rewitePhoneNumb($this->session->userdata('msisdn'),1) .'</a>',
		);

		return $this->load->view('home_layout', $data, TRUE);
	}

	public function _mobi_content() {
		$data = array(
			'view' => $this->load->view('mobi_content', '', TRUE),
			'title' => 'Trang chủ',
		);

		return $data;
	}

	public function _mobi_footer()
	{
		$logo['link'] = base_url('images/footer-mobi.png');

		$data = array(
			'view' => $this->load->view('home_footer', $logo, TRUE),
		);

		return $data;
	}

	public function _mobi_km()
	{
		$data = array(
			'view' => $this->load->view('mobi_km', '', TRUE),
			'title' => 'Khuyến mại',
		);

		return $data;
	}
}
