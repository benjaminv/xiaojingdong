<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_ceshi`;");
E_C("CREATE TABLE `ecs_weixin_ceshi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecuid` int(11) NOT NULL COMMENT '绑定用户ID',
  `wxid` varchar(32) NOT NULL,
  `ec_name` varchar(80) NOT NULL,
  `createtime` int(11) NOT NULL,
  `nickname` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fake_id` (`wxid`),
  KEY `ecuid` (`ecuid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_ceshi` values('1','90','','21','0','');");

require("../../inc/footer.php");
?>