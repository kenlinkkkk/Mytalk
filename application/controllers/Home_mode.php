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

		log_message("ERROR", "REDIRECT->");
		if (empty($this->session->msisdn)) {
			$backurl = base_url('backurl');

			$link = 'http://free.mobifone.vn/isdn?sp=1048&link='. aes128Encrypt(MYTALK_KEY_MOBI, $backurl);

			header("Location:  ". $link);
		}
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
            case 'clear-session':
                $main = $this->_clear_session();
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
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
        {
            $device = "mobile";
        }
        else{
            $device = "desktop";
        }

        $check_device = array(
            'device' => $device
        );

		$data = array(
			'view' => $this->load->view('general_content', $check_device, TRUE),
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

        $baseContent = 'http://123.31.31.19:80/v1/synch_charge/';
        $authenCode = base64_encode('mytalkvanovasgate@13579Mytalk1201vano');
        $successUrl = base_url('thanh-cong');
        $failUrl = base_url('that-bai');
        $backUrl = strtolower(urlencode(base_url('backurl')));
        if ($command == 'DK') {
            $requestId = date('ymdhis');
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

            $url = $baseContent .'?package_code=M5&charge_price=5000';
            log_message('ERROR', 'content-> '. $url);
        } elseif ($command == 'M10') {
            $contentIdM10 = '10003';
            $subContentTypeM10 = 'M10';

            $url = $baseContent .'?package_code=M10&charge_price=10000';
            log_message('ERROR', 'content-> '. $url);
        } elseif ($command == 'HUYTP') {
            $baseUrl = 'http://bss.vascloud.com.vn/unify/cancel.jsp';
            $backUrl = base_url('backurl');
            $requestId = date('ymdhis');
            $requestDatetime = date('yyyyMMddHHmmss');
            $securePass = 'MZP3WAqOCUIWrMfsG7Ac2BfdcOzUfxdA';
            $secureCode = md5(random_int(1, 999999) . '"pre_register.jsp' . '"pre_register.jsp' . $requestDatetime . 'wap' . $securePass);

            $url = $baseUrl .'?requestId=' .$requestId. '&returnurl' .$backUrl. '&backurl=' .$backUrl. '&cpid=' .$cpId. '&service=' .$serviceId. '&package=1012707&channel=web&securecode='. $secureCode;
            log_message('ERROR',  'cancel->'.$url);
        } elseif (($msisdn = $this->session->userdata('msisdn') !== 'empty') && ($command == 'M' || $command == 'P')) {
            $trans_id = date('ymdhis');
            $command_code = "DK " .$command;
            $backurl = base_url();
            $msisdn = $this->session->userdata('msisdn');

            $data = $trans_id . "&" . $command_code . "&" . $command . "&" .$backurl;

            $log_data = MOBIPHONE_CONFIRM ."?sp=1048?link=" . $data;

            log_message('ERROR', 'phoneNumb=' .$msisdn . '|url=' . $log_data);

            $url = MOBIPHONE_CONFIRM . "?sp=1048&link=" . aes128Encrypt(MYTALK_KEY_MOBI, $data);

            log_message('ERROR', 'phoneNumb='.$msisdn . '|url=' . $url);

            $url = str_replace(" ", "+", $url);
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

	public function _clear_session() {
        $this->session->sess_destroy();
        echo "Session clear";
        die();
    }
}
