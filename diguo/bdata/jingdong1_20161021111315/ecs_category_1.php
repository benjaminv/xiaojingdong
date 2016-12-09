<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `category_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `category_index_dwt` tinyint(1) NOT NULL DEFAULT '0',
  `index_dwt_file` varchar(150) DEFAULT NULL,
  `show_in_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `cat_index_rightad` varchar(255) NOT NULL,
  `cat_adimg_1` varchar(255) NOT NULL,
  `cat_adurl_1` varchar(255) NOT NULL,
  `cat_adimg_2` varchar(255) NOT NULL,
  `cat_adurl_2` varchar(255) NOT NULL,
  `cat_nameimg` varchar(255) NOT NULL,
  `brand_qq` varchar(255) NOT NULL DEFAULT '',
  `attr_qq120029121` varchar(255) NOT NULL DEFAULT '',
  `path_name` varchar(100) NOT NULL DEFAULT '',
  `is_virtual` int(11) NOT NULL DEFAULT '0',
  `show_goods_num` int(11) NOT NULL,
  `type_img` varchar(100) NOT NULL COMMENT '微信商城分类图标',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','ecshop功能插件','','','0','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('2','ecshop支付插件','','','0','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('3','采集天猫评论区','','','0','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('4','商品属性图片展示区','','','0','50','','','0','','1','0','121','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('5','小京东功能插件','','','1','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('6','采集功能','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('7','授权登录','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('8','批量上传','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('9','短信功能','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('10','物流跟踪','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('11','升级程序','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('12','批量修改','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('13','阿里大鱼','','','5','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('14','生活用品','','','3','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('15','衣服区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('16','箱包区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('17','玩具区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('18','手机区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('19','保健品区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('20','手表区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('21','鲜花区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('22','美食区','','','14','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('23','淘宝属性商品展示区','','','4','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('24','鲜花','','','23','50','','','0','','1','0','121','0','0','','0','','','','','','','','','','0','0','');");
E_D("replace into `ecs_category` values('25','ecshop模板','','','0','50','','','0','','1','0','','0','0','','0','','','','','','','','','','0','0','');");

require("../../inc/footer.php");
?>