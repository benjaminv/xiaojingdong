<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1476080713','1','添加商品分类: ecshop功能插件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('2','1476080732','1','添加商品分类: ecshop支付插件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('3','1476080773','1','添加商品分类: 采集天猫评论区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('4','1476080799','1','添加商品分类: 商品属性图片展示区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('5','1476081753','1','编辑广告: 首页生活的橱窗1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('6','1476082034','1','编辑广告: 首页生活的橱窗2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('7','1476082083','1','编辑广告: 首页生活的橱窗3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('8','1476082123','1','编辑广告: 首页生活的橱窗4','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('9','1476082187','1','编辑广告: 首页生活的橱窗5','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('10','1476083066','1','编辑广告位置: 首页-分类ID1-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('11','1476083071','1','编辑广告位置: 首页-分类ID2-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('12','1476083075','1','编辑广告位置: 首页-分类ID3-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('13','1476083080','1','编辑广告位置: 首页-分类ID4-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('14','1476083085','1','编辑广告位置: 首页-分类ID5-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('15','1476083100','1','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('16','1476083109','1','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('17','1476083111','1','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('18','1476083122','1','编辑广告位置: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('19','1476083127','1','编辑广告位置: 首页-分类ID2通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('20','1476083131','1','编辑广告位置: 首页-分类ID3通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('21','1476083135','1','编辑广告位置: 频道页-分类ID4-图片1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('22','1476083151','1','编辑广告位置: 频道页-分类ID1-图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('23','1476083168','1','编辑广告: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('24','1476083244','1','编辑广告: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('25','1476083395','1','编辑广告: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('26','1476083782','1','编辑广告: 首页幻灯片-小图下6','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('27','1476083885','1','编辑广告: 首页幻灯片-小图下5','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('28','1476084824','1','编辑广告: 首页-分类ID3通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('29','1476084844','1','编辑广告: 首页-分类ID3通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('30','1476332375','1','编辑广告: 首页幻灯片-小图下1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('31','1476332471','1','编辑广告: 首页幻灯片-小图下2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('32','1476332854','1','编辑广告: 首页幻灯片-小图下3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('33','1476332998','1','编辑广告: 首页幻灯片-小图下4','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('34','1476336844','1','删除: QQ客服','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('35','1476338396','1','添加商品分类: 小京东功能插件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('36','1476338466','1','添加商品分类: 采集功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('37','1476338493','1','添加商品分类: 授权登录','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('38','1476338515','1','添加商品分类: 批量上传','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('39','1476338533','1','添加商品分类: 短信功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('40','1476338566','1','添加商品分类: 物流跟踪','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('41','1476338589','1','添加商品分类: 升级程序','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('42','1476338611','1','添加商品分类: 批量修改','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('43','1476338625','1','添加商品分类: 阿里大鱼','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('44','1476338651','1','编辑商品分类: 批量上传','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('45','1476338668','1','编辑商品分类: 短信功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('46','1476338695','1','编辑商品分类: 升级程序','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('47','1476339294','1','编辑广告: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('48','1476339328','1','编辑广告: 首页-分类ID1128-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('49','1476339353','1','编辑广告: 首页-分类ID1-左侧图片3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('50','1476339390','1','编辑广告: 首页-分类ID1-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('51','1476339398','1','编辑广告: 首页-分类ID1-左侧图片1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('52','1476339411','1','编辑广告: 首页-分类ID1-左侧图片1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('53','1476339459','1','编辑广告: 首页-分类ID1-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('54','1476339557','1','添加商品分类: 生活用品','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('55','1476339590','1','添加商品分类: 衣服区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('56','1476339612','1','添加商品分类: 箱包区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('57','1476339630','1','添加商品分类: 玩具区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('58','1476339650','1','添加商品分类: 手机区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('59','1476339673','1','添加商品分类: 保健品区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('60','1476339696','1','添加商品分类: 手表区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('61','1476339728','1','添加商品分类: 鲜花区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('62','1476339742','1','添加商品分类: 美食区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('63','1476340551','1','编辑商品: 韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('64','1476397497','1','编辑商店设置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('65','1476397525','1','编辑商店设置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('66','1476397577','1','编辑商店设置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('67','1476690220','1','编辑广告: 首页-分类ID4-左侧图片3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('68','1476690271','1','编辑广告: 首页-分类ID4-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('69','1476690315','1','编辑广告: 首页-分类ID4-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('70','1476690580','1','编辑广告: 首页-分类ID2通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('71','1476690831','1','编辑广告: 首页生活的橱窗4','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('72','1476691621','1','编辑广告: 首页-分类ID1127-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('73','1476691661','1','编辑广告: 首页-分类ID2-左侧图片2','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('74','1476691665','1','编辑广告: 首页-分类ID2-左侧图片1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('75','1476691719','1','编辑广告: 首页-分类ID1128-左侧图片','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('76','1476691760','1','编辑广告: 首页-分类ID2-左侧图片1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('77','1476691781','1','添加广告: 首页-分类ID2-左侧图片3','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('78','1476692263','1','编辑广告: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('79','1476692300','1','编辑广告位置: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('80','1476692343','1','编辑广告: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('81','1476692532','1','添加商品分类: 淘宝属性商品展示区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('82','1476692560','1','添加商品分类: 鲜花','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('83','1476766320','1','编辑广告: 首页生活的橱窗5','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('84','1476766667','1','安装配送方式: 申通快递','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('85','1476766690','1','添加配送区域: 全国','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('86','1476766970','1','安装支付方式: 支付宝','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('87','1476767111','1','安装支付方式: 中国银联全渠道商户','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('88','1476835351','1','编辑支付方式: 中国银联全渠道商户','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('89','1476937968','1','添加属性: 颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('90','1476938080','1','编辑商品: 御见 红玫瑰花束生日送女友杭州上海北京全国同城配送鲜花速递','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('91','1476938112','1','商品: 23','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('92','1476938112','1','商品: 23','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('93','1476938112','1','商品: 23','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('94','1476938638','1','编辑广告: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('95','1476938659','1','删除广告: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('96','1476938718','1','编辑广告: 首页-分类ID1通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('97','1476938773','1','编辑广告: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('98','1476939083','1','编辑商品: 99朵蓝色妖姬蓝玫瑰花束鲜花北京上海济南速递杭州重庆鲜花店送花','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('99','1476939105','1','商品: 24','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('100','1476939105','1','商品: 24','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('101','1476939105','1','商品: 24','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('102','1476939464','1','编辑商品分类: 商品属性图片展示区','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('103','1476939488','1','编辑商品分类: 鲜花','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('104','1476939627','1','添加商品分类: ecshop模板','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('105','1476939815','1','编辑广告位置: 首页-分类ID3通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('106','1476939889','1','编辑广告: 首页-分类ID4通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('107','1476939914','1','编辑广告位置: 首页-分类ID1131通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('108','1476939915','1','删除广告位置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('109','1476939924','1','编辑广告位置: 首页-分类ID25通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('110','1476940019','1','添加广告: 首页-分类ID25通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('111','1476940057','1','编辑广告: 首页-分类ID25通栏广告','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('112','1476940189','1','添加: 采集插件砍价活动','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('113','1476940296','1','添加: 小京东V5.0砍价活动','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('114','1476940429','1','添加: 包包开始砍价活动了  ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('115','1476940695','1','添加拼团商品: 通联ecshop小京东ecmall通联支付插件定制','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('116','1476940785','1','编辑拼团商品: 通联ecshop小京东ecmall通联支付插件定制[4]','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('117','1476941315','1','添加积分可兑换的商品: 14','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('118','1476990629','1','添加云购商品: ecshop,小京东，shopex，ecmall工商银行直连工行支付插件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('119','1476990663','1','添加拼团商品: 韩都衣舍2016韩版女装秋装新款时尚印花宽松显瘦长袖T恤EQ6111婋','0.0.0.0');");

require("../../inc/footer.php");
?>