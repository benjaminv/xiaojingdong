<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_ad`;");
E_C("CREATE TABLE `ecs_ecsmart_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_ad` values('37','20','0','手机端首页广告3-4','http://www.chaligou.com/mobile/category.php?id=1124','1471289044742357391.jpg','1438156800','1629964800','','','','28','1');");
E_D("replace into `ecs_ecsmart_ad` values('42','15','0','品牌街广告1','','1461550494828509479.jpg','1436169600','1630828800','','','','4','1');");
E_D("replace into `ecs_ecsmart_ad` values('35','16','0','手机端首页广告1-3','','1438220618449870578.jpg','1438185600','1440777600','','','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('36','19','0','手机端首页广告2-3','http://www.chaligou.com/mobile/category.php?id=701','1471299043186787866.jpg','1438156800','1691740800','','','','37','1');");
E_D("replace into `ecs_ecsmart_ad` values('32','17','0','手机端首页广告2-1','http://www.chaligou.com/mobile/category.php?id=1020','1471298908781554007.jpg','1438156800','1630137600','','','','84','1');");
E_D("replace into `ecs_ecsmart_ad` values('33','15','0','手机端首页广告1-2','','1471739079997071924.jpg','1438156800','1440748800','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('34','18','0','手机端首页广告2-2','http://www.chaligou.com/mobile/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjEyOiLlj6Tlj6Topb/ph4wiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDcxMzI3MjU0O30=','1471299058236867346.jpg','1438156800','1661500800','','','','30','1');");
E_D("replace into `ecs_ecsmart_ad` values('29','3','0','wap首页幻灯广告2','http://www.chaligou.com/mobile/activity.php','1472060229981313414.jpg','1438156800','1661673600','','','','135','1');");
E_D("replace into `ecs_ecsmart_ad` values('30','3','0','wap首页幻灯广告1','http://www.chaligou.com/mobile/category.php?id=1038','1472060291296921371.jpg','1438156800','1661673600','','','','38','1');");
E_D("replace into `ecs_ecsmart_ad` values('31','14','0','手机端首页广告1-1','','1469844466403049006.jpg','1438156800','1661673600','','','','61','1');");
E_D("replace into `ecs_ecsmart_ad` values('43','26','0','静佳JPLUS全场疯抢，赶快下手！','','1471052336339006751.jpg','1439280000','1663574400','3.1折扣起','全场满128赠249','','8','1');");
E_D("replace into `ecs_ecsmart_ad` values('25','3','0','wap首页幻灯广告3','http://www.chaligou.com/mobile/category.php?id=357','1471916131218574715.jpg','1435478400','1661587200','','','','38','1');");
E_D("replace into `ecs_ecsmart_ad` values('38','21','0','手机端首页广告3-3','http://www.chaligou.com/mobile/category.php?id=1069','1471289032943605646.jpg','1438156800','1630137600','','','','20','1');");
E_D("replace into `ecs_ecsmart_ad` values('39','22','0','手机端首页广告3-2','http://www.chaligou.com/mobile/category.php?id=1039','1471288997388449165.jpg','1438156800','1533369600','','','','44','1');");
E_D("replace into `ecs_ecsmart_ad` values('47','26','0','国际品牌百图女装专卖场','','1439367674108823978.jpg','1439308800','1441900800','8.9折','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('50','100','0','app首页banner1','http://demo.coolhong.com/','appbanner1.jpg','1378627200','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('51','100','0','app首页banner2','http://demo.coolhong.com/','appbanner2.jpg','1378627200','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('52','100','0','app首页banner3','http://demo.coolhong.com/','appbanner3.jpg','1378886400','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('53','100','0','app首页banner4','http://demo.coolhong.com/','appbanner4.jpg','1378886400','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('54','101','0','app首页3张广告1','http://demo.coolhong.com/','appad31.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('55','101','0','app首页3张广告2','goods/15','appad32.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('56','101','0','app首页3张广告3','article/13','appad33.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('57','102','0','app首页通栏广告1_1','article/10','appadtong11.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('58','102','0','app首页通栏广告1_2','article/10','appadtong12.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('59','102','0','app首页通栏广告1_3','article/10','appadtong13.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('60','103','0','app首页通栏广告2_1','article/10','appadtong21.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('61','103','0','app首页通栏广告2_2','article/10','appadtong22.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('62','103','0','app首页通栏广告2_3','article/10','appadtong23.jpg','1388649600','1484640000','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('63','23','0','首页广告3-1(1x1)','http://www.chaligou.com/mobile/category.php?id=1038','1471290211260605308.jpg','1468483200','1597910400','','','','25','1');");
E_D("replace into `ecs_ecsmart_ad` values('64','23','0','手机端首页广告3-1','http://www.chaligou.com/mobile/category.php?id=1038','1471289085346139271.jpg','1468483200','1628841600','','','','22','1');");
E_D("replace into `ecs_ecsmart_ad` values('65','25','0','品牌街左','','1468563807698420215.jpg','1468483200','1566374400','','','','1','1');");

require("../../inc/footer.php");
?>