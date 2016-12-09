<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_ad_config`;");
E_C("CREATE TABLE `ecs_weixin_ad_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_catid` int(11) DEFAULT NULL COMMENT '广告植入系统id',
  `user_rank` text COMMENT '允许发布广告用户组id',
  `is_deduct_money` tinyint(1) DEFAULT '0' COMMENT '发布广告是否扣除用户余额',
  `deduct_money` decimal(10,2) DEFAULT NULL COMMENT '扣除余额数量',
  `deduct_point` decimal(10,0) DEFAULT NULL,
  `is_zanshang` int(1) DEFAULT NULL COMMENT '是否开启文章赞赏功能',
  `zan_money` decimal(10,2) DEFAULT '0.00' COMMENT '最小赞赏金额  0为不限制',
  `admin_ad` int(1) DEFAULT '1',
  `ad_text` text COMMENT '官方广告语',
  `ad_url` varchar(300) DEFAULT NULL COMMENT '官方广告链接',
  `is_reward` int(1) DEFAULT NULL COMMENT '赞赏成功是否给奖励',
  `reward_point` int(11) DEFAULT '0' COMMENT '奖励消费积分',
  `reward_rank_point` int(11) DEFAULT '0' COMMENT '奖励等级积分',
  `is_ad_reward` int(1) DEFAULT '0' COMMENT '查看广告是否奖励',
  `earnings_times` int(11) DEFAULT '0' COMMENT '收益次数',
  `ad_reward_money` decimal(10,2) DEFAULT '0.00' COMMENT '查看广告奖励金额',
  `ad_reward_point` decimal(10,0) DEFAULT '0' COMMENT '查看广告奖励积分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_ad_config` values('1','23','2,3,4','1','0.50','100','1','0.01','1','累计为用户赚取200万元','http://demo.coolhong.com/mobile/','1','20','200','1','2','0.05','99');");

require("../../inc/footer.php");
?>