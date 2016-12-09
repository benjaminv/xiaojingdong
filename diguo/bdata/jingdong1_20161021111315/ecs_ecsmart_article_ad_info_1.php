<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_article_ad_info`;");
E_C("CREATE TABLE `ecs_ecsmart_article_ad_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_id` int(11) DEFAULT NULL COMMENT '用户广告id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `article_id` int(11) DEFAULT NULL COMMENT '网站文章id',
  `article_text` varchar(1000) DEFAULT NULL,
  `acount` int(11) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL COMMENT '添加时间',
  `ifweizhi` int(10) DEFAULT NULL COMMENT '显示位置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>