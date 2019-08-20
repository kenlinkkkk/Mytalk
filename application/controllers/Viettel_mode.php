<?php
/**
 * Created by PhpStorm.
 * User: TungNT
 * Date: 07/29/2019
 * Time: 01:53 PM
 */

class viettel_mode extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('array');
		date_default_timezone_set('UTC');
	}

	public function index()
	{
		$segment1 = $this->uri->segment(1);

		switch ($segment1) {
			case 'khuyen-mai':
				$main = $this->_viettel_km();
				break;
			default:
				$main = $this->_viettel_content();
		}
		$footer = $this->_viettel_footer();

		$data = array(
			'content' => $main,
			'footer' => $footer,
			'login' => $this->load->view('home_login', '', TRUE),
			'node1' => '<a class="nav-link text-white" href="#machinelearning">MẸ KỂ CON NGHE</a>',
			'node2' => '<a class="nav-link text-white" href="#machinelearning">MEDIUM</a>',
			'dangnhap' => '<button id="dangnhapbtn" class="btn btn-primary btn-sm" style="width: 120px;"><strong>Đăng nhập</strong></button>',
			'msg' => '',
		);

		return $this->load->view('home_layout', $data, TRUE);
	}

	public function _viettel_content() {
		$data = array(
			'view' => $this->load->view('viettel_content', '', TRUE),
			'title' => 'Trang chủ',
		);

		return $data;
	}

	public function _viettel_footer()
	{
		$logo['link'] = base_url('images/footer-viettel.png');

		$data = array(
			'view' => $this->load->view('home_footer', $logo, TRUE),
		);

		return $data;
	}

	public function _viettel_km()
	{
		$data = array(
			'view' => $this->load->view('viettel_km', '', TRUE),
			'title' => 'Khuyến mại',
		);
	}
}
