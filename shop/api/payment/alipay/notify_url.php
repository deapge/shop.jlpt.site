<?php
/**
 * 支付宝通知地址
 *
 * 
 
 * 
 * 
 * @since      
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'notify';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>