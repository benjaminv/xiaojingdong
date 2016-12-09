<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_extpintuan`;");
E_C("CREATE TABLE `ecs_extpintuan` (
  `pt_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_nickname` varchar(200) NOT NULL,
  `user_head` varchar(200) NOT NULL,
  `act_id` mediumint(8) NOT NULL,
  `act_type` tinyint(3) NOT NULL,
  `is_lucky_extpintuan` int(1) NOT NULL DEFAULT '0',
  `need_people` int(10) NOT NULL DEFAULT '0',
  `available_people` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `create_succeed` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-1-2',
  PRIMARY KEY (`pt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>