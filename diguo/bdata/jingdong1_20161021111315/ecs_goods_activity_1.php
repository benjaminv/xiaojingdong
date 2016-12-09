<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `ext_act_type` int(1) NOT NULL DEFAULT '1',
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺标识',
  `act_count` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','采集插件砍价活动','<p>采集插件砍价活动 &nbsp;疯狂砍价吧 &nbsp;</p>','8','1','1','0','ecshop小京东采集淘宝，天猫插件，可以采集天猫评论','1476940080','1511183280','0','a:20:{s:5:\"price\";s:3:\"100\";s:12:\"market_price\";s:3:\"150\";s:12:\"virtual_sold\";N;s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:4:\"5.00\";s:9:\"max_price\";s:2:\"50\";s:11:\"cost_points\";i:0;s:9:\"showlimit\";s:1:\"0\";s:13:\"max_buy_price\";s:2:\"-1\";s:18:\"show_max_buy_price\";s:1:\"0\";s:10:\"join_limit\";s:1:\"1\";s:14:\"cut_time_limit\";s:2:\"48\";s:14:\"buy_time_limit\";s:2:\"96\";s:15:\"cut_times_limit\";s:1:\"0\";s:11:\"need_follow\";s:1:\"1\";s:8:\"fencheng\";s:1:\"0\";s:12:\"orders_limit\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('2','小京东V5.0砍价活动','<p>小京东V5.0砍价活动，疯狂砍砍坎</p>','8','1','25','0','小鲸懂V5.0小京东带阿里大鱼短信插件修复手机版支付模板可运营','1476940200','1511183400','0','a:20:{s:5:\"price\";s:3:\"300\";s:12:\"market_price\";s:3:\"500\";s:12:\"virtual_sold\";N;s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:4:\"5.00\";s:9:\"max_price\";s:3:\"200\";s:11:\"cost_points\";i:0;s:9:\"showlimit\";s:1:\"0\";s:13:\"max_buy_price\";s:2:\"-1\";s:18:\"show_max_buy_price\";s:1:\"0\";s:10:\"join_limit\";s:1:\"1\";s:14:\"cut_time_limit\";s:2:\"48\";s:14:\"buy_time_limit\";s:2:\"96\";s:15:\"cut_times_limit\";s:1:\"0\";s:11:\"need_follow\";s:1:\"1\";s:8:\"fencheng\";s:1:\"0\";s:12:\"orders_limit\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('3','包包开始砍价活动了  ','','8','1','14','0','威戈瑞士军刀双肩包男士背包大容量15.6寸电脑旅行背包中学生书包','1476940320','1511183520','0','a:20:{s:5:\"price\";s:3:\"100\";s:12:\"market_price\";s:3:\"150\";s:12:\"virtual_sold\";N;s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:4:\"5.00\";s:9:\"max_price\";s:2:\"50\";s:11:\"cost_points\";i:0;s:9:\"showlimit\";s:1:\"0\";s:13:\"max_buy_price\";s:2:\"-1\";s:18:\"show_max_buy_price\";s:1:\"0\";s:10:\"join_limit\";s:1:\"1\";s:14:\"cut_time_limit\";s:2:\"48\";s:14:\"buy_time_limit\";s:2:\"96\";s:15:\"cut_times_limit\";s:1:\"0\";s:11:\"need_follow\";s:1:\"1\";s:8:\"fencheng\";s:1:\"0\";s:12:\"orders_limit\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('4','通联支付发起拼团活动啦','','10','1','19','0','通联ecshop小京东ecmall通联支付插件定制','1476864000','1510992000','0','a:24:{s:12:\"price_ladder\";a:1:{i:0;a:7:{s:6:\"amount\";i:3;s:5:\"price\";d:150;s:8:\"minprice\";d:150;s:8:\"maxprice\";d:150;s:10:\"orderlimit\";i:0;s:12:\"tuanzhangdis\";d:9;s:8:\"fencheng\";d:0;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:10:\"single_buy\";s:1:\"1\";s:11:\"need_people\";i:0;s:9:\"min_price\";d:0;s:9:\"max_price\";d:0;s:16:\"single_buy_price\";d:200;s:12:\"market_price\";d:300;s:8:\"discount\";d:3.5;s:12:\"virtual_sold\";i:1000;s:10:\"time_limit\";d:24;s:10:\"open_limit\";d:0;s:16:\"lucky_extpintuan\";i:0;s:11:\"lucky_limit\";i:10;s:13:\"choose_number\";i:0;s:13:\"notify_header\";N;s:11:\"need_follow\";s:1:\"0\";s:10:\"qrcode_img\";N;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";s:11:\"goods_brief\";s:0:\"\";s:7:\"deposit\";d:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('5','ecshop,小京东，shopex，ecmall工商银行直连工行支付插件','<p>抢了就有机会哦&nbsp;</p>','12','1','16','0','ecshop,小京东，shopex，ecmall工商银行直连工行支付插件','1476950400','1511251200','0','a:10:{s:12:\"price_ladder\";N;s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:8:\"allprice\";s:6:\"300.00\";s:8:\"oneprice\";s:4:\"1.00\";s:6:\"number\";i:300;s:11:\"need_follow\";i:1;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('6','韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','','10','1','9','0','韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','1476950400','1479542400','0','a:24:{s:12:\"price_ladder\";a:1:{i:0;a:7:{s:6:\"amount\";i:3;s:5:\"price\";d:80;s:8:\"minprice\";d:80;s:8:\"maxprice\";d:80;s:10:\"orderlimit\";i:0;s:12:\"tuanzhangdis\";d:10;s:8:\"fencheng\";d:0;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:10:\"single_buy\";s:1:\"1\";s:11:\"need_people\";i:0;s:9:\"min_price\";d:0;s:9:\"max_price\";d:0;s:16:\"single_buy_price\";d:120;s:12:\"market_price\";d:200;s:8:\"discount\";d:3.5;s:12:\"virtual_sold\";i:1000;s:10:\"time_limit\";d:24;s:10:\"open_limit\";d:0;s:16:\"lucky_extpintuan\";i:0;s:11:\"lucky_limit\";i:10;s:13:\"choose_number\";i:0;s:13:\"notify_header\";N;s:11:\"need_follow\";s:1:\"0\";s:10:\"qrcode_img\";N;s:11:\"share_title\";s:0:\"\";s:11:\"share_brief\";s:0:\"\";s:9:\"share_img\";s:0:\"\";s:11:\"goods_brief\";s:0:\"\";s:7:\"deposit\";d:0;}','0','0');");

require("../../inc/footer.php");
?>