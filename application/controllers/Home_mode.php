<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_mode extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('array');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('_helper');
		date_default_timezone_set('UTC');

//		log_message("ERROR", "REDIRECT->");
//		if (empty($this->session->msisdn)) {
//			$backurl = base_url('backurl');
//
//			$link = 'http://free.mobifone.vn/isdn?sp=1048&link='. aes128Encrypt(MYTALK_KEY_MOBI, $backurl);
//
//			header("Location:  ". $link);
//		}
	}

	public function index()
	{
//		if ($this->session->msisdn == 'empty') {
			$home = $this->_home_content();
			$footer = $this->_home_footer();
//		} else {
//			$home = $this->_mobi_content();
//			$footer = $this->_mobi_footer();
//
//			$phone = rewitePhoneNumb($this->session->msisdn,1);
//
//			if (!empty($this->session->promotion) || !empty($this->session->ml)) {
//				$checkpkg = checkPackage('http://10.54.132.7:8888/v1/main/check_subs', $this->session->msisdn);
//
//				$check_data = $checkpkg['data'];
//
//				foreach ($check_data as $check) {
//					if (array_search('P', $check, true)) {
//						$array = array(
//							'promotion' => '1'
//						);
//
//						$this->session->set_userdata($array);
//					}
//
//					if (array_search('M', $check, true)) {
//
//						$array = array(
//							'ml' => '1'
//						);
//
//						$this->session->set_userdata($array);
//					}
//				}
//			}
//		}
		
		$segment1 = $this->uri->segment(1);

		switch ($segment1) {
			case 'khuyen-mai':
				$main = $this->_home_km();
				break;
			case 'chinh-sach':
				$main = $this->_chinh_sach();
				break;
            case 'dang-ky-goi':
                $main = $this->_reg_package();
                break;
            case 'thanh-cong':
                $main = $this->_success_reg();
                break;
            case 'that-bai':
                $main = $this->_fail_reg();
                break;
			default:
				$main = $home;
		}


		$data = array(
			'content' => $main,
			'footer' => $footer,
			'login' => $this->load->view('home_login', '', TRUE),
		);

		return $this->load->view('home_layout', $data, FALSE);
	}

	public function _home_footer()
	{
		$logo['link'] = base_url('images/footer.png');

		$data = array(
			'view' => $this->load->view('home_footer', $logo, TRUE),
		);

		return $data;
	}

	public function _home_content() {
		$data = array(
			'view' => $this->load->view('general_content', '', TRUE),
			'title' => 'Trang chủ',
		);

		return $data;
	}

	public function _chinh_sach() {
		$data = array(
			'title' => 'Chính sách',
			'view' => $this->load->view('chinhsach', '', TRUE),
		);

		return $data;
	}

	public function _home_km()
	{
		$data = array(
			'view' => $this->load->view('general_km', '', TRUE),
			'title' => 'Khuyến mại'
		);

		return $data;
	}

	public function _home_login()
	{
		return $this->load->view('home_login', '', TRUE);
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

    public function _reg_package()
    {
        $command = $_POST['command'];
        $url = '';
        $cpId = '1000711';
        $serviceId = '1001095';
        $playType = '';
        $CPName = 'VANO';
        $contentName = 'CONTENT';
        $requestId = date('ymdhis');

        $baseContent = 'http://contentgw.vascloud.com.vn/chargeContent';
        $authenCode = base64_encode('mytalkvanovasgate@13579Mytalk1201vano');
        $successUrl = base_url('thanh-cong');
        $failUrl = base_url('that-bai');
        $backUrl = strtolower(urlencode(base_url('backurl')));
        if ($command == 'DK') {
            $baseUrl = 'http://bss.vascloud.com.vn/unify/register.jsp';

            $returnUrl = strtolower(urlencode(base_url('backurl')));
            $packageId = '1012707';
            $requestDatetime = date('yyyyMMddHHmmss');
            $channel = 'wap';
            $securePass = 'MZP3WAqOCUIWrMfsG7Ac2BfdcOzUfxdA';
            $secureCode = md5(random_int(1, 999999) . '"pre_register.jsp' . '"pre_register.jsp' . $requestDatetime . 'wap' . $securePass);
            $str = 'vasgate@13579' . random_int(1, 999999);
            $h_sc = md5($str);

            $url = $baseUrl . '?requestid=' . $requestId . '&returnurl=' . $returnUrl . '&backurl=' . $backUrl . '&cp=' . $cpId . '&service=' . $serviceId . '&package=' . $packageId . '&requestdatetime=' . $requestDatetime . '&channel=' . $channel . '&securecode=' . $secureCode;
        } elseif ($command == 'M5') {
            $contentIdM5 = '10002';
            $subContentTypeM5 = 'M5';

            $url = $baseContent . '?serviceId=' . $serviceId . '&servicename=MYTALK&requestId=' . $requestId . '&price=5000&originalPrice=5000&promotion=0&note=1&channel=web&subContentType=' . $subContentTypeM5 . '&contentId=' . $contentIdM5 . '&contentName=' . $contentName . '&subContentName=' . $contentName . '&cpName=' . $CPName . '&playType=' . $playType . '&contentPrice=5000&backUrl=' . $backUrl . '&redirectUrlFail=' . $failUrl . '&redirectUrlSuccess=' . $successUrl . '&notifyUrl=&authenCode=' . $authenCode;
        } elseif ($command == 'M10') {
            $contentIdM10 = '10003';
            $subContentTypeM10 = 'M10';

            $url = $baseContent . '?serviceId=' . $serviceId . '&servicename=MYTALK&requestId=' . $requestId . '&price=10000&originalPrice=10000&promotion=0&note=1&channel=web&subContentType=' . $subContentTypeM10 . '&contentId=' . $contentIdM10 . '&contentName=' . $contentName . '&subContentName=' . $contentName . '&cpName=' . $CPName . '&playType=' . $playType . '&contentPrice=10000&backUrl=' . $backUrl . '&redirectUrlFail=' . $failUrl . '&redirectUrlSuccess=' . $successUrl . '&notifyUrl=&authenCode=' . $authenCode;
        }

        header('Location: '. $url);
	}

    public function _success_reg()
    {
        $data = array(
            'view' => $this->load->view('success_reg', '', TRUE),
            'title' => 'Đăng ký thành công',
        );

        return $data;
	}

    public function _fail_reg()
    {
        $data = array(
            'view' => $this->load->view('fail_reg', '', TRUE),
            'title' => 'Đăng ký không thành công',
        );

        return $data;
	}
}
