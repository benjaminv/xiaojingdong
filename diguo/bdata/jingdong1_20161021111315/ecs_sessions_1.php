<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('cc164ce0e5c8d678aa8b84cde90ad421','1477019467','0','0','0.0.0.0','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:13:\"captcha_login\";s:16:\"YzJiOThjYmUzZA==\";}');");
E_D("replace into `ecs_sessions` values('408440416dc95c9ea3b7c0f1e9181db2','1477019571','0','1','0.0.0.0','admin','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1476990771;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('5e0ef08d73c0ddf49f2e3c05590b569a','1477019234','0','0','0.0.0.0','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3772a0dfc1aa2d27c98c514b0cabe990','1477019214','0','0','0.0.0.0','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:13:\"captcha_login\";s:16:\"YTRlMmY0YTVmOQ==\";}');");
E_D("replace into `ecs_sessions` values('2bf732a2e633a0bd046639f770585697','1477019529','0','0','0.0.0.0','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>