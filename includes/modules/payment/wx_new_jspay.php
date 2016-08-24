<?php
/**
 * ECSHOP微信新版JSAPI支付插件
 */
if (!defined('IN_ECS')) {
    die('Hacking attempt');
}
$payment_lang = ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/payment/wx_new_jspay.php';

if (file_exists($payment_lang))
{
    global $_LANG;

    include_once($payment_lang);
}

/* 模块的基本信息 */
if (isset($set_modules) && $set_modules == TRUE)
{
    $i = isset($modules) ? count($modules) : 0;

    /* 代码 */
    $modules[$i]['code']    = basename(__FILE__, '.php');

    /* 描述对应的语言项 */
    $modules[$i]['desc']    = 'wx_new_jspay_desc';

    /* 是否支持货到付款 */
    $modules[$i]['is_cod']  = '0';

    /* 是否支持在线支付 */
    $modules[$i]['is_online']  = '1';

    /* 作者 */
    $modules[$i]['author']  = '青蜂网络';

    /* 网址 */
    $modules[$i]['website'] = 'http://www.0769web.net';

    /* 版本号 */
    $modules[$i]['version'] = '3.3.0';

    /* 配置信息 */
    $modules[$i]['config']  = array(
        array('name' => 'appid',           'type' => 'text',   'value' => ''),
		array('name' => 'appsecret',           'type' => 'text',   'value' => ''),
        array('name' => 'mchid',               'type' => 'text',   'value' => ''),
        array('name' => 'key',           'type' => 'text',   'value' => ''), 
		array('name' => 'appkey',           'type' => 'text',   'value' => ''),
    );

    return;
}


class wx_new_jspay
{
	function __construct()
	{
		$payment = get_payment('wx_new_jspay');
    
        if(!defined('WXAPPID'))
        {
            $root_url = str_replace('mobile/', '', $GLOBALS['ecs']->url());
            define("WXAPPID", $payment['appid']);
            define("WXMCHID", $payment['mchid']);
            define("WXKEY", $payment['key']); //2015/1/1 api密钥  新版微信支付需自己设置
            define("WXAPPSECRET", $payment['appsecret']);

            define("WXCURL_TIMEOUT", 30);
            define('WXNOTIFY_URL',$root_url.'mobile/wx_jspay_callback.php');

            define('WXSSLCERT_PATH',dirname(__FILE__).'/WxPayPubHelper/cacert/apiclient_cert.pem');
            define('WXSSLKEY_PATH',dirname(__FILE__).'/WxPayPubHelper/cacert/apiclient_key.pem');
        }
        require_once(dirname(__FILE__)."/WxPayPubHelper/WxPayPubHelper.php");

	}

	function get_code($order, $payment)
	{
		
        //add bysam 2015/1/1 最新版微信支付接口
		//使用jsapi接口
		$jsApi = new JsApi_pub();

		//=========步骤1：网页授权获取用户openid============
		//通过code获得openid
		if (!isset($_GET['code']))
		{
			//触发微信返回code码
			$redirect = urlencode($GLOBALS['ecs']->url().'flow.php?step=ok&order_sn='.$order['order_sn']);
			$url = $jsApi->createOauthUrlForCode($redirect); //
			Header("Location: $url"); 
		}else
		{
			//获取code码，以获取openid
			$code = $_GET['code'];
			$jsApi->setCode($code);
			$openid = $jsApi->getOpenId();
		}
		
		//=========步骤2：使用统一支付接口，获取prepay_id============
		//使用统一支付接口
		$unifiedOrder = new UnifiedOrder_pub();
		
		//设置统一支付接口参数
		//设置必填参数
		//appid已填,商户无需重复填写
		//mch_id已填,商户无需重复填写
		//noncestr已填,商户无需重复填写
		//spbill_create_ip已填,商户无需重复填写
		//sign已填,商户无需重复填写
		$unifiedOrder->setParameter("openid","$openid");//商品描述
		$unifiedOrder->setParameter("body", "订单号：".$order['order_sn']);//商品描述
		$out_trade_no = $order['order_sn'];
		$unifiedOrder->setParameter("out_trade_no", "$out_trade_no");//商户订单号 
		$unifiedOrder->setParameter("total_fee", $order['order_amount']*100);//总金额
		$unifiedOrder->setParameter("notify_url",WXNOTIFY_URL);//通知地址 
		$unifiedOrder->setParameter("trade_type","JSAPI");//交易类型

		$prepay_id = $unifiedOrder->getPrepayId();
		//=========步骤3：使用jsapi调起支付============
		$jsApi->setPrepayId($prepay_id);
		$jsApiParameters = $jsApi->getParameters();
		//end

		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$allow_use_wxPay = true;

		if(strpos($user_agent, 'MicroMessenger') === false)
		{
			$allow_use_wxPay = false;
		}
		else
		{
			preg_match('/.*?(MicroMessenger\/([0-9.]+))\s*/', $user_agent, $matches);
			if($matches[2] < 5.0)
			{
				$allow_use_wxPay = false;
			}
		}
		$html = '';
		$html .= '<script language="javascript">';
		if($allow_use_wxPay)
		{
			$html .= "function jsApiCall(){";
			$html .= "WeixinJSBridge.invoke(";
			$html .= "'getBrandWCPayRequest',";
			$html .= $jsApiParameters.",";
			$html .= "function(res){";
			$html .= "WeixinJSBridge.log(res.err_msg);";  //
			$html .= "if(res.err_msg == 'get_brand_wcpay_request:ok'){window.location.href='http://www.0769web.net/mobile/user.php?act=order_info&id=".$order['order_id']."';}else{alert(res.err_msg);}"; 
			//
			$html .= "}";
			$html .= ");";
			$html .= "}";
			$html .= "function callpay(){";
			$html .= 'if (typeof WeixinJSBridge == "undefined"){';
			$html .= "if( document.addEventListener ){";
			$html .= "document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);";
			$html .= "}else if (document.attachEvent){";
			$html .= "document.attachEvent('WeixinJSBridgeReady', jsApiCall); ";
			$html .= "document.attachEvent('onWeixinJSBridgeReady', jsApiCall);";
			$html .= "}";
			$html .= "}else{";
			$html .= "jsApiCall();";
			$html .= "}}";
		}
		else
		{
			$html .= 'function callpay(){';
			$html .= 'alert("您的微信不支持支付功能,请更新您的微信版本")';
			$html .= "}";

		}

		$html .= '</script>';
		$html .= '<button type="button" onclick="callpay()">微信支付</button>';
		return $html;    
	}

    function respond()
    {
        $payment  = get_payment('wx_new_jspay');

        $notify = new Notify_pub();

		//数据获取
        $xml = $GLOBALS['HTTP_RAW_POST_DATA'];
		
		$notify->saveData($xml);

        if($notify->checkSign() == TRUE)
        {
			//根据订单号  获取该订单是否已经付款
			$order_sn = $notify->data["out_trade_no"];  //订单号  获取 log_id
			$order_id = $GLOBALS['db']->getOne('SELECT order_id FROM ' . $GLOBALS['ecs']->table('order_info') ." WHERE order_sn = '$order_sn'");

			$sql = 'SELECT log_id, order_amount, is_paid FROM ' . $GLOBALS['ecs']->table('pay_log') ." WHERE order_id = '$order_id'";
			$pay_log = $GLOBALS['db']->getRow($sql);

			$amount = $pay_log["order_amount"];
			$log_id = $pay_log["log_id"];
			$is_paid = $pay_log["is_paid"];

			if(!$is_paid) //已经支付  1
			{
				if ($notify->data["return_code"] == "FAIL") {
					//此处应该更新一下订单状态，商户自行增删操作
					$this->log(ROOT_PATH.'/data/wx_new_log.txt', "【通信出错】:\r\n".$xml."\n\r");
				}
				elseif($notify->data["result_code"] == "FAIL"){
					//此处应该更新一下订单状态，商户自行增删操作
					$this->log(ROOT_PATH.'/data/wx_new_log.txt', "【业务出错】:\r\n".$xml."\n\r");
				}
				else{
					//此处应该更新一下订单状态，商户自行增删操作
					$this->log(ROOT_PATH.'/data/wx_new_log.txt',"【支付成功】:\r\n".$xml."\n\r");
					order_paid($log_id, 2);
				}
			}
			$notify->setReturnParameter("return_code","SUCCESS");//返回状态码
			$returnXml = $notify->returnXml();
			echo $returnXml;
			return true;

        }
        else
        {
			$notify->setReturnParameter("return_code","FAIL");//返回状态码
			$notify->setReturnParameter("return_msg","签名失败");//返回信息
			$returnXml = $notify->returnXml();
			echo $returnXml;
            $this->log(ROOT_PATH.'/data/wx_new_log.txt',"签名失败\r\n");
        }
        return false;
       
    }
    
    function log($file,$txt)
    {
       $fp =  fopen($file,'ab+');
       fwrite($fp,'-----------'.local_date('Y-m-d H:i:s').'-----------------');
       fwrite($fp,$txt);
       fwrite($fp,"\r\n\r\n\r\n");
       fclose($fp);
    }
    
}