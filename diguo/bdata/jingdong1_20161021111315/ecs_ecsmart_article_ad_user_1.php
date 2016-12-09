<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_article_ad_user`;");
E_C("CREATE TABLE `ecs_ecsmart_article_ad_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL COMMENT '用户ecid',
  `ad_title` varchar(255) DEFAULT NULL COMMENT '广告标题',
  `ad_link` varchar(255) DEFAULT NULL COMMENT '链接',
  `ad_img` varchar(255) DEFAULT NULL COMMENT '图片',
  `nickname` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL COMMENT '添加时间',
  `adtelnumber` varchar(20) DEFAULT NULL COMMENT '手机号/电话',
  `erweima` varchar(255) DEFAULT NULL COMMENT '二维码',
  `ad_status` varchar(11) DEFAULT '0' COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>