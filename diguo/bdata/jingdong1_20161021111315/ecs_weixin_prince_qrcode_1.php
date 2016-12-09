<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_prince_qrcode`;");
E_C("CREATE TABLE `ecs_weixin_prince_qrcode` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `qr_path` varchar(255) DEFAULT NULL,
  `scene` varchar(255) DEFAULT NULL,
  `scene_id` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL COMMENT 'prince qq 120029121',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>