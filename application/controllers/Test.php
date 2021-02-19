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
        $backUrl = strtolower(urlencode('http://mytalk.vn/backurl'));
        $returnUrl = strtolower(urlencode(base_url('backurl')));
        $cpId = '1000711';
        $serviceId = '1001095';
        $packageId = '1012707';
        $requestDatetime = date(' yyyyMMddHHmmss');
        $channel = 'wap';
        $securePass = 'MZP3WAqOCUIWrMfsG7Ac2BfdcOzUfxdA';
        $secureCode = md5(random_int(1, 999999) . '"pre_register.jsp' . '"pre_register.jsp' . $requestDatetime . 'wap' . $securePass);
        $str = 'vasgate@13579' . random_int(1, 999999);
        $h_sc = md5($str);

        $playType = '';
        $CPName = 'VANO';
        $contentName = 'CONTENT';
        $contentIdM5 = '10002';
        $subContentTypeM5 = 'M5';
        $contentIdM10 = '10003';
        $subContentTypeM10 = 'M10';
        $contentType = 'CONTENT';
        $reason = 'CONTENT';

        $url = $baseUrl . '?requestid=' . $requestId . '&returnurl=' . $returnUrl . '&backurl=' . $backUrl . '&cp=' . $cpId . '&service=' . $serviceId . '&package=' . $packageId . '&requestdatetime=' . $requestDatetime . '&channel=' . $channel . '&securecode=' . $secureCode;

        $baseContent = 'http://contentgw.vascloud.com.vn/chargeContent';
        $authenCode = base64_encode('mytalkvanovasgate@13579Mytalk1201vano');
        $urlM5 = $baseContent . '?serviceId=' . $serviceId . '&servicename=MYTALK&requestId=' . $requestId . '&price=5000&originalPrice=5000&promotion=0&note=1&channel=web&subContentType=' . $subContentTypeM5 . '&contentId=' . $contentIdM5 . '&contentName=' . $contentName . '&subContentName=' . $contentName . '&cpName=' . $CPName . '&playType=' . $playType . '&contentPrice=5000&backUrl=' . $backUrl . '&redirectUrlFail=' . $backUrl . '&redirectUrlSuccess=' . $backUrl . '&notifyUrl=&authenCode=' . $authenCode;
        $urlM10 = $baseContent . '?serviceId=' . $serviceId . '&servicename=MYTALK&requestId=' . $requestId . '&price=10000&originalPrice=10000&promotion=0&note=1&channel=web&subContentType=' . $subContentTypeM10 . '&contentId=' . $contentIdM10 . '&contentName=' . $contentName . '&subContentName=' . $contentName . '&cpName=' . $CPName . '&playType=' . $playType . '&contentPrice=10000&backUrl=' . $backUrl . '&redirectUrlFail=' . $backUrl . '&redirectUrlSuccess=' . $backUrl . '&notifyUrl=&authenCode=' . $authenCode;

        echo "<a href=" . $urlM5 . ">M5</a>";
        echo "<a href=" . $urlM10 . ">M10</a>";
    }

    function generateRandomString($length = 32)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
