<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 07/31/2019
 * Time: 09:40 AM
 */

class test extends MX_Controller
{
	/**
	 * test constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('_helper');
		$this->load->helper('url');
		$this->load->library('session');

	}

	public function index()
	{
		$baseUrl = 'http://bss.vascloud.com.vn/unify/register.jsp';
		$requestId = date('ymdhis');
		$backUrl = strtolower(urlencode(base_url('backurl')));
		$returnUrl = strtolower(urlencode(base_url('backurl')));
		$cpId = '1111';
		$serviceId = '1001095';
		$packageId = '1012707';
		$requestDatetime = date(' yyyyMMddHHmmss');
		$channel = 'wap';
		$secureCode = md5(random_int(1, 999999) . '"pre_register.jsp' . '"pre_register.jsp' . $requestDatetime .'wap' . 'vasgate@13579');
		$str = 'vasgate@13579' . random_int(1, 999999);
		$h_sc = md5($str);

		$url = $baseUrl .'?requestid='.$requestId.'&returnurl='.$returnUrl.'&backurl='.$backUrl.'&cp='.$cpId.'&service='.$serviceId.'&package='.$packageId.'&requestdatetime='.$requestDatetime.'&channel='.$channel.'&securecode='.$secureCode;

		echo "<a href=". $url .">Click</a>";
	}
}
