<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_auto_manage`;");
E_C("CREATE TABLE `ecs_auto_manage` (
  `item_id` mediumint(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `starttime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  PRIMARY KEY (`item_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_auto_manage` values('143','article','1464768000','0');");
E_D("replace into `ecs_auto_manage` values('130','article','1465372800','1466064000');");
E_D("replace into `ecs_auto_manage` values('122','article','1467014400','0');");
E_D("replace into `ecs_auto_manage` values('117','article','1465977600','0');");

require("../../inc/footer.php");
?>