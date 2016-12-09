<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier`;");
E_C("CREATE TABLE `ecs_supplier` (
  `supplier_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '申请入驻人id',
  `supplier_name` varchar(255) NOT NULL COMMENT '供货商名称',
  `rank_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺等级',
  `type_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺类型',
  `company_name` varchar(255) NOT NULL COMMENT '公司名称',
  `country` smallint(5) unsigned NOT NULL COMMENT '公司所在地(国家)',
  `province` smallint(5) unsigned NOT NULL COMMENT '公司所在地(省)',
  `city` smallint(5) unsigned NOT NULL COMMENT '公司所在地(市)',
  `district` smallint(5) unsigned NOT NULL COMMENT '公司所在地(县/区)',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '公司详细地址',
  `tel` varchar(50) NOT NULL COMMENT '公司电话',
  `email` varchar(100) NOT NULL COMMENT '电子邮件',
  `guimo` varchar(255) NOT NULL COMMENT '公司规模',
  `company_type` varchar(50) NOT NULL COMMENT '公司类型',
  `bank` varchar(255) NOT NULL,
  `zhizhao` varchar(255) NOT NULL COMMENT '营业执照电子版',
  `contact` varchar(255) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `contact_back` varchar(255) NOT NULL,
  `contact_shop` varchar(255) NOT NULL,
  `contact_yunying` varchar(255) NOT NULL,
  `contact_shouhou` varchar(255) NOT NULL,
  `contact_caiwu` varchar(255) NOT NULL,
  `contact_jishu` varchar(255) NOT NULL,
  `system_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_bond` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `supplier_rebate` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `supplier_rebate_paytime` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `supplier_remark` varchar(255) NOT NULL DEFAULT '',
  `nav_list` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '申请时间',
  `applynum` smallint(1) unsigned NOT NULL DEFAULT '0' COMMENT '申请入驻步骤',
  `contacts_name` varchar(100) NOT NULL DEFAULT '' COMMENT '联系人',
  `contacts_phone` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人电话',
  `business_licence_number` varchar(100) NOT NULL DEFAULT '' COMMENT '营业执照号',
  `business_sphere` text NOT NULL COMMENT '法定经营范围',
  `organization_code` varchar(100) NOT NULL COMMENT '组织机构代码',
  `organization_code_electronic` varchar(255) NOT NULL COMMENT '组织机构代码证电子版',
  `general_taxpayer` varchar(255) NOT NULL COMMENT '一般纳税人证明',
  `bank_account_name` varchar(100) NOT NULL COMMENT '银行开户名',
  `bank_account_number` varchar(100) NOT NULL COMMENT '公司开户行银行账号',
  `bank_name` varchar(100) NOT NULL COMMENT '开户银行支行名称',
  `bank_code` varchar(100) NOT NULL COMMENT '支行联行号',
  `settlement_bank_account_name` varchar(100) NOT NULL COMMENT '银行开户名(结算)',
  `settlement_bank_account_number` varchar(100) NOT NULL COMMENT '公司银行账号(结算)',
  `settlement_bank_name` varchar(100) NOT NULL COMMENT '开户银行支行名称(结算)',
  `settlement_bank_code` varchar(100) NOT NULL COMMENT '支行联行号(结算)',
  `tax_registration_certificate` varchar(100) NOT NULL COMMENT '税务登记证号',
  `taxpayer_id` varchar(100) NOT NULL COMMENT '纳税人识别号',
  `bank_licence_electronic` varchar(255) NOT NULL COMMENT '开户银行许可证电子版',
  `tax_registration_certificate_electronic` varchar(255) NOT NULL COMMENT '税务登记证号电子版',
  `supplier_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '入驻商的佣金',
  `handheld_idcard` varchar(255) NOT NULL COMMENT '手持身份证照片',
  `idcard_front` varchar(255) NOT NULL COMMENT '身份证证明照片',
  `idcard_reverse` varchar(255) NOT NULL COMMENT '身份证反面照片',
  `id_card_no` varchar(20) NOT NULL COMMENT '身份证号码',
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>