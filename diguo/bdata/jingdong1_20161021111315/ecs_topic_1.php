<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','母婴活动专场','','1436947200','1563782400','O:8:\"stdClass\":2:{s:15:\"婴幼儿奶粉\";a:0:{}s:15:\"婴幼儿用品\";a:4:{i:0;s:53:\"哈罗闪sanosan婴儿洗发露沐浴乳二合一|216\";i:1;s:68:\"盈泰 充气游泳池家庭成人大型超大号儿童游泳池|217\";i:2;s:71:\"欧培(OPEN)儿童洗澡桶 加厚环保塑料宝宝沐浴桶大号|218\";i:3;s:71:\"润本 儿童宝宝无味电热蚊香液 婴儿无刺激(无味型)|219\";}}','','','data/afficheimg/20150723obwvpb.jpg','','012877','','母婴','');");
E_D("replace into `ecs_topic` values('2','食品生鲜专场','','1437465600','1595404800','O:8:\"stdClass\":2:{s:12:\"进口食品\";a:0:{}s:12:\"糖果专区\";a:6:{i:0;s:81:\"意大利费列罗巧克力食品进口零食礼盒576粒整箱装结婚喜糖|29\";i:1;s:58:\"日本进口 KRACIE（KRACIE）牌玫瑰香味糖果32g|30\";i:2;s:88:\"台湾进口 百年老店糖之坊夏威夷果牛轧糖奶糖（蔓越莓味）120克|31\";i:3;s:102:\"Lindt瑞士莲黑巧克力特醇排装德国进口 70%可可黑巧克力10块组合 特惠分享装|32\";i:4;s:62:\"嘉云糖 300g玻璃罐装 水果硬糖 喜糖 德国进口|55\";i:5;s:63:\"韩国进口X-5花生夹心巧克力棒盒装（24根）864g|26\";}}','topic1.dwt','','data/afficheimg/20150723ugrpxx.jpg','data/afficheimg/20150723fcjzpt.jpg','eaed6c','','','');");
E_D("replace into `ecs_topic` values('3','手机数码专场','','1437465600','1469174400','O:8:\"stdClass\":2:{s:12:\"手机专区\";a:0:{}s:12:\"手机配件\";a:6:{i:0;s:126:\"幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶|183\";i:1;s:80:\"赛鲸 常青藤懒人手机支架 床上床头支架 万向调节 太空蓝|185\";i:2;s:90:\"洛斐（Lofree）创意无线蓝牙音箱音响 电脑音箱 EDGE锋芒3C建筑美学|206\";i:3;s:85:\"索爱（soaiy）S-20 便携式蓝牙数码插卡智能音箱 青春版 珍珠白|205\";i:4;s:101:\"爱度ay819无线蓝牙音箱便携迷你小音响插卡u盘低音炮电脑笔记本音箱 白色|199\";i:5;s:104:\"爱度AY800蓝牙音箱手机电脑迷你音响无线便携插卡低音炮 带蓝牙自拍 土豪金|200\";}}','topic2.dwt','','data/afficheimg/20150723ciboqt.jpg','','','','','');");
E_D("replace into `ecs_topic` values('4','家用电器专场','','1437465600','1562572800','O:8:\"stdClass\":2:{s:12:\"清洁家电\";a:0:{}s:12:\"厨房电器\";a:8:{i:0;s:86:\"美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏火锅电池炉灶|101\";i:1;s:82:\"养生壶玻璃加厚分体保温电煎药壶全自动花茶壶隔水炖正品|110\";i:2;s:69:\"JYL-D022料理机家用多功能榨汁辅食搅拌机电动绞肉|106\";i:3;s:65:\"Galanz/格兰仕 G90F25CN3L-C2(G2) 微波炉 光波炉 正品|103\";i:4;s:86:\"电饼铛 美的 JCN30A蛋糕机 正品悬浮双面加热 家用煎烤机烙饼锅|112\";i:5;s:58:\"米酒机酸奶机全自动家用不锈钢正品包邮|114\";i:6;s:56:\"酸奶机家用全自动8个陶瓷分杯正品特价|115\";i:7;s:86:\"Midea/美的 MK-HJ1501电热水壶不锈钢烧水壶保温自动断电进口温控|127\";}}','topic3.dwt','','data/afficheimg/20150723astlky.jpg','','b9ecfd','','','');");
E_D("replace into `ecs_topic` values('5','家居家纺专场','','1437379200','1471593600','O:8:\"stdClass\":2:{s:12:\"精品餐具\";a:4:{i:0;s:36:\"光触媒灭蚊灯（黑色）|32375\";i:1;s:52:\"高档半透明收纳筐(颜色随机发货）|32371\";i:2;s:49:\"弹盖时尚垃圾桶(颜色随机发货）|32368\";i:3;s:40:\"海绵杯刷(颜色随机发货）|32370\";}s:12:\"实用家具\";a:4:{i:0;s:53:\"乐和居 双人床 床 榻榻米床 头层真皮|223\";i:1;s:61:\"美姿蓝 家具 床 皮床 皮艺床 双人床 真皮床|222\";i:2;s:92:\"中派 进口芬兰松木家具实木儿童高低床子母床上下铺带梯柜双层床|224\";i:3;s:45:\"樱之歌 52头 紫玉情缘 餐具套装|225\";}}','topic4.dwt','','data/afficheimg/20150723yenzlm.jpg','','DAE3E0','','','');");

require("../../inc/footer.php");
?>