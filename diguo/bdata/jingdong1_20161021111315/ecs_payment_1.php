<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_payment`;");
E_C("CREATE TABLE `ecs_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_pickup` tinyint(1) NOT NULL,
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_payment` values('1','alipay','支付宝','0','支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color=\"red\"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><font color=\"red\">注意:申请时请选择\"即时到帐\"业务进行申请</font><br/><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=alipay\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:15:\"chaligou@qq.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"1ogppay7zk8y4of13dokkk8672i4b540\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"2088121527757498\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"2\";}}','1','0','1','0');");
E_D("replace into `ecs_payment` values('2','unionpay','中国银联全渠道商户','0','申请全渠道相关信息与相关信息请查看链接:https://merchant.unionpay.com/portal/login.jsp?locale=zh_CN','0','a:3:{i:0;a:3:{s:4:\"name\";s:16:\"unionpay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:15:\"802360051220501\";}i:1;a:3:{s:4:\"name\";s:18:\"SDK_SIGN_CERT_PATH\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:45:\"./includes/modules/payment/unionpay/jxdzr.pfx\";}i:2;a:3:{s:4:\"name\";s:17:\"SDK_SIGN_CERT_PWD\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:6:\"888888\";}}','1','0','1','0');");

require("../../inc/footer.php");
?>