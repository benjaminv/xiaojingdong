<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_attr_gallery` tinyint(1) unsigned NOT NULL,
  `attr_txm` tinyint(1) NOT NULL DEFAULT '0' COMMENT '判断条形码是否显示',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('120','15','尺码','0','1','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('119','15','颜色','0','1','','0','0','0','0','1','0');");
E_D("replace into `ecs_attribute` values('96','12','类型','1','0','养壶笔\r\n茶巾\r\n个人杯\r\n茶针\r\n保温杯\r\n过滤网架\r\n茶针\r\n进水管\r\n茶刀\r\n毛刷\r\n海绵\r\n茶铺\r\n过滤网\r\n茶道组\r\n茶水桶\r\n茶夹\r\n个人专用袋\r\n真空夹\r\n杯垫\r\n杯架\r\n单壶\r\n茶铲\r\n排水管\r\n壶盖叉\r\n杯叉\r\n桌旗\r\n其他','0','10','0','0','0','0');");
E_D("replace into `ecs_attribute` values('97','12','尺寸','0','0','','0','2','0','0','0','0');");
E_D("replace into `ecs_attribute` values('98','12','材质','1','0','黑檀\r\n黑檀+纯铜\r\n红檀+纯铜\r\n纯棉纤维\r\n木质\r\n亚克力\r\n竹质\r\n棉麻\r\n花梨\r\n304不锈钢\r\n羊角\r\n新型PP塑料\r\n绿檀\r\n鸡翅木\r\n紫檀\r\n不锈钢\r\n食品级PC\r\n塑料\r\n牛角\r\n棉麻+树脂\r\n纯铜','0','1','0','0','0','0');");
E_D("replace into `ecs_attribute` values('99','12','规格','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('100','12','用途','0','0','','0','9','0','0','0','0');");
E_D("replace into `ecs_attribute` values('102','13','规格','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('103','13','尺寸','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('104','13','材质','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('105','13','用途','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('106','13','类型','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('108','14','规格','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('109','14','材质','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('110','14','尺寸','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('111','14','配置','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('112','14','用途','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('113','14','备注','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('114','14','类型','0','0','','0','0','0','0','0','0');");
E_D("replace into `ecs_attribute` values('121','1','颜色','0','1','','0','0','0','0','1','0');");

require("../../inc/footer.php");
?>