<?php
/**
 * 支付宝返回地址
 *
 * 
 
 * 
 * 
 * @since      
 */
error_reporting(7);
$_GET['act']	= 'payment';
$_GET['op']		= 'return';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>