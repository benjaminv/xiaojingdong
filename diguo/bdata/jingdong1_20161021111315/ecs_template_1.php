<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  `ext_info` text COMMENT '扩展字段',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('category','','/library/recommend_promotion.lbi','0','0','8','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_hot.lbi','0','0','3','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('category','','/library/recommend_best.lbi','0','0','4','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城通栏广告','/library/ad_position.lbi','0','49','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告1','/library/ad_position.lbi','0','44','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告2','/library/ad_position.lbi','0','45','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告3','/library/ad_position.lbi','0','46','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('exchange_list','积分商城banner广告4','/library/ad_position.lbi','0','47','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('index','首页店铺展示广告','/library/ad_position.lbi','0','6','0','4','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','首页主广告右侧公告','/library/cat_articles.lbi','0','12','3','3','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('exchange_list','','/library/exchange_hot.lbi','0','0','5','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告1','/library/ad_position.lbi','0','51','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告2','/library/ad_position.lbi','0','52','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告3','/library/ad_position.lbi','0','53','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('auction_list','拍卖列表banner广告4','/library/ad_position.lbi','0','54','1','4','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_hot.lbi','0','0','3','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('article','左边广告区域','/library/goods_related.lbi','0','0','0','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_best.lbi','0','0','3','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('article','','/library/recommend_promotion.lbi','0','0','3','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('index','商品分类楼层','/library/cat_goods.lbi','4','25','8','1','pc_paleng_moban','','a:2:{s:10:\"short_name\";s:12:\"天猫评论\";s:9:\"cat_color\";s:6:\"e31939\";}');");
E_D("replace into `ecs_template` values('index','商品分类楼层','/library/cat_goods.lbi','3','4','8','1','pc_paleng_moban','','a:2:{s:10:\"short_name\";s:12:\"设计模板\";s:9:\"cat_color\";s:6:\"e31939\";}');");
E_D("replace into `ecs_template` values('category','','/library/brands.lbi','0','0','3','0','pc_paleng_moban','','');");
E_D("replace into `ecs_template` values('index','商品分类楼层','/library/cat_goods.lbi','2','2','8','1','pc_paleng_moban','','a:2:{s:10:\"short_name\";s:12:\"设计服务\";s:9:\"cat_color\";s:6:\"e31939\";}');");
E_D("replace into `ecs_template` values('index','商品分类楼层','/library/cat_goods.lbi','0','1','8','1','pc_paleng_moban','','a:2:{s:10:\"short_name\";s:12:\"功能插件\";s:9:\"cat_color\";s:6:\"e31939\";}');");
E_D("replace into `ecs_template` values('index','商品分类楼层','/library/cat_goods.lbi','1','3','8','1','pc_paleng_moban','','a:2:{s:10:\"short_name\";s:12:\"支付插件\";s:9:\"cat_color\";s:6:\"e31939\";}');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','13','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','5','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','5','0','pc_paleng_moban','',NULL);");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','5','0','pc_paleng_moban','',NULL);");

require("../../inc/footer.php");
?>