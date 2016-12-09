<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_lucky_buy`;");
E_C("CREATE TABLE `ecs_lucky_buy` (
  `lucky_buy_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_id` mediumint(8) NOT NULL DEFAULT '0',
  `schedule_id` int(11) NOT NULL,
  `total` int(11) unsigned NOT NULL,
  `available` int(11) unsigned NOT NULL,
  `lock` int(11) unsigned NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `handl_status` int(1) NOT NULL DEFAULT '0' COMMENT '开奖后的处理状态',
  `start_time` int(10) unsigned NOT NULL,
  `lock_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `sum_of_calculate_number` int(11) NOT NULL DEFAULT '0',
  `lucky_code` int(11) NOT NULL,
  `lucky_user_id` mediumint(8) NOT NULL,
  `lucky_user_name` varchar(256) NOT NULL,
  `lucky_user_head` varchar(256) NOT NULL,
  `lucky_user_order_id` mediumint(8) NOT NULL,
  `lucky_user_order_sn` varchar(20) NOT NULL,
  PRIMARY KEY (`lucky_buy_id`),
  UNIQUE KEY `act_id` (`act_id`,`schedule_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>