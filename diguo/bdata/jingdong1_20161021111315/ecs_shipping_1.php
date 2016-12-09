<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping`;");
E_C("CREATE TABLE `ecs_shipping` (
  `shipping_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(20) NOT NULL DEFAULT '',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `shipping_desc` varchar(255) NOT NULL DEFAULT '',
  `insure` varchar(10) NOT NULL DEFAULT '0',
  `support_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) DEFAULT NULL,
  `config_lable` text,
  `print_model` tinyint(1) DEFAULT '0',
  `shipping_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `support_pickup` tinyint(1) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_default_show` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否默认前台显示',
  PRIMARY KEY (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping` values('1','sto_express','申通快递','由商家选择合作快递为您配送：','0','0','1','','/images/receipt/dly_sto_express.jpg','t_shop_address,网店-地址,235,48,131,152,b_shop_address||,||t_shop_name,网店-名称,237,26,131,200,b_shop_name||,||t_shop_tel,网店-联系电话,96,36,144,257,b_shop_tel||,||t_customer_post,收件人-邮编,86,23,578,268,b_customer_post||,||t_customer_address,收件人-详细地址,232,49,434,149,b_customer_address||,||t_customer_name,收件人-姓名,151,27,449,231,b_customer_name||,||t_customer_tel,收件人-电话,90,32,452,261,b_customer_tel||,||','2','0','0','0','1');");

require("../../inc/footer.php");
?>