<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_config`;");
E_C("CREATE TABLE `ecs_weixin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `token` varchar(60) NOT NULL,
  `appid` varchar(60) NOT NULL,
  `appsecret` varchar(60) NOT NULL,
  `partnerId` varchar(64) NOT NULL,
  `partnerKey` varchar(64) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT '管理员ec',
  `followmsg` varchar(255) NOT NULL,
  `helpmsg` varchar(255) NOT NULL,
  `bindmsg` varchar(255) NOT NULL,
  `bonustype` int(11) NOT NULL COMMENT '绑定赠送红包类型',
  `bonustype2` tinyint(4) NOT NULL COMMENT '关注红包',
  `buynotice` tinyint(4) NOT NULL COMMENT '开启下单提醒',
  `sendnotice` tinyint(4) NOT NULL COMMENT '开启发货提醒',
  `access_token` text NOT NULL,
  `expire_in` int(11) NOT NULL,
  `buymsg` varchar(200) NOT NULL COMMENT '下单提醒内容',
  `sendmsg` varchar(200) NOT NULL COMMENT '发货提醒内容',
  `reg_type` int(11) NOT NULL COMMENT '1关注注册2邮箱注册3邮箱+密码4用户名注册5用户名+密码注册6手机注册7手机+密码注册',
  `reg_notice` varchar(200) NOT NULL COMMENT '注册引导提示',
  `wap_url` varchar(128) NOT NULL,
  `auto_reply` varchar(255) NOT NULL,
  `is_everyday` tinyint(1) NOT NULL DEFAULT '0',
  `is_thumbnail` tinyint(1) NOT NULL DEFAULT '0' COMMENT '分享缩略图选择',
  `sharemsg` varchar(200) NOT NULL COMMENT '分享语内容',
  `weixin_logo` varchar(255) NOT NULL,
  `open_guide` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启未关注用户引导关注',
  `guide_qrcode` varchar(255) NOT NULL COMMENT '引导关注二维码',
  `is_pengyou` tinyint(1) NOT NULL DEFAULT '0',
  `pengyou_times` int(11) NOT NULL DEFAULT '0',
  `pengyou_point` int(11) NOT NULL DEFAULT '0',
  `pengyou_point_up` int(11) NOT NULL DEFAULT '0' COMMENT '分享朋友送积分  上限',
  `pengyou_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '分享朋友送余额  下限',
  `pengyou_money_up` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '分享朋友送余额  上限',
  `is_pengyouquan` tinyint(1) NOT NULL DEFAULT '0',
  `pengyouquan_times` int(11) NOT NULL DEFAULT '0',
  `pengyouquan_point` int(11) NOT NULL DEFAULT '0',
  `pengyouquan_point_up` int(11) NOT NULL DEFAULT '0',
  `pengyouquan_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pengyouquan_money_up` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_config` values('1','茶立购','29EDE3635A15041C','wx6a15cead43a7cb58','513df456dffbefe237379f8ceefbc4d6','1350038301','dZ29ODCpgdxHDVEAn08HM2qUJ5oUE1Vq','1','您好！欢迎关注茶立购，我们茶立购是茶具、茶叶、居家用品为一体的专业批发平台，同时只要您注册并成为我们的会员就可以享受商品的价格优惠，参加平台的各项促销活动。『茶立购网址』：www.chaligou.com ☏服务热线：15077171666。欢迎您为我们提供宝贵的建议。','helpmsg','恭喜您绑定成功！','5','4','0','0','dYi6dR96VWdlEAKDZdDbhOsXYWTrT8LOZcfYWGsqkHej72R-YT82NdVBjDkIbvzSSVIIH4FZn-QoMJCtH1ZVGjOR-ls2BXjFpSNxziRZ7Z0FoY-tOvcRF96Uf5NqXC0RMNMaAIAIJI','1471924857','','','1','请填写您的邮箱和密码，使用+分割。','http://www.chaligou.com/mobile/','自动回复','1','0','刚刚在【%s】花%s元买的，感觉还不错，您也来看看吧O(∩_∩)O哈哈哈~！！','data/article/1463497515424466866.jpg','1','data/article/1463493516189506183.jpg','1','2','1','10','0.10','0.90','1','1','5','40','0.10','0.90');");

require("../../inc/footer.php");
?>