<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_ecms_news`;");
E_C("CREATE TABLE `caity_ecms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `caity_ecms_news` values('1','1','0','1','0','0','2015-05-21','1','1','afanda','1','0','1','0','0','0','0','1432167594','1432169365','1','0','0','','/wzgk/2015-05-21/1.html','1','1','1','','公司介绍','1432167585','/d/file/wzgk/2015-05-21/7d8b3353218db5c69e35359fa2e0892e.jpg','','尊敬的客户大家好:\r\n    腾运搬家公司服务部地处于三藩市开发区,交通十分便利,南湾、北湾、东湾都有我们分公司。我们是专业性的搬家公司,我们公司从成立到现在都深受广大客户好评。现在已经具有规模性的专业的搬家公司。所有工作人员都具有很强的敬业精神和专业的操作技能,在公司的培训下,工人可熟练的搬运钢琴 保险柜 及家具 跟 拆装家具,公司承接业务搬房搬厂,办公室搬迁,我们公司同时提供全美长途,码头提货,货运业务,我们的服务理念是客户第一,客户至上,服务一流,这就是我们对客户的承诺,对激烈竞争的市场,服务部全体','0');");
E_D("replace into `caity_ecms_news` values('2','2','0','0','0','0','2015-05-21','2','1','afanda','0','1','1','0','0','0','0','1432167650','1432168058','1','0','0','','/xwzx/2015-05-21/2.html','1','1','1','','正规的搬家公司需要具备哪些条件？','1432167624','/d/file/xwzx/2015-05-21/6c055408c06bb7fc0adff6a4fa5b13b1.jpg','','    搬家这件事，估计很多人都必须会遇到的，一直以来大家都对怎么找正规的搬家公司都很烦恼，很多人都不知道怎么找一个正规的搬家公司搬家。如果可以找到一个搬家费用低的正规搬','0');");
E_D("replace into `caity_ecms_news` values('3','2','0','0','0','0','2015-05-21','3','1','afanda','0','0','0','0','0','0','0','1432167682','1432167682','1','0','0','','/xwzx/2015-05-21/3.html','1','1','1','','搬家为什么要选搬家吉日进行？有什么好处？','1432167652','','','    不知道大家是否有感觉到，中国人比较讲究什么黄道吉日办事的，比如结婚，摆酒席，新房入伙，什么的，都要先选一个好日子才在那天办理的。我们搬家的时候也是一样的情况，首先搬到新房','0');");
E_D("replace into `caity_ecms_news` values('4','2','0','0','0','0','2015-05-21','4','1','afanda','0','0','0','0','0','0','0','1432167719','1432167719','1','0','0','','/xwzx/2015-05-21/4.html','1','1','1','','长途搬家需要注意和做好的六个事项','1432167685','','','    对于搬家的人来说，可能是短途的搬家，也可能是长途的搬家，比如从石家庄搬到北京就算是长途的搬家了，今天小编想跟大家分享的是长途搬家的时候我们需要注意的事项有哪些，如何做','0');");
E_D("replace into `caity_ecms_news` values('5','2','0','0','0','0','2015-05-21','5','1','afanda','0','0','0','0','0','0','0','1432167801','1432167801','1','0','0','','/xwzx/2015-05-21/5.html','1','1','1','','选择搬家公司的时候先考虑费用价格吗？','1432167722','','','    不知道大家有没发现一个情况，我们在消费的时候，往往先考虑的是费用问题，先看看产品的商标价格，同一个品牌的东西，一定是考虑价格低的那个。就连现在的搬家费用也是一样道理，很','0');");
E_D("replace into `caity_ecms_news` values('6','2','0','0','0','0','2015-05-21','6','1','afanda','0','0','0','0','0','0','0','1432167821','1432167821','1','0','0','','/xwzx/2015-05-21/6.html','1','1','1','','朋友搬家送什么礼物好，搬家送花技巧','1432167803','','','    在中国除了酒文化外，应该属于送礼是最容易拉拢人的了。对于搬家的人来说，宴请亲戚朋友是非常普遍的，这时宾客总不能两手空空吧，需要意思意思。那么朋友搬家我们究竟送什么好','0');");
E_D("replace into `caity_ecms_news` values('7','2','0','2','0','0','2015-05-21','7','1','afanda','0','0','0','0','0','0','0','1432167924','1432167924','1','0','0','','/xwzx/2015-05-21/7.html','1','1','1','','搬家注意搬家时间的安排确定','1432167823','','','    对于一些近期需要搬家的朋友来说，了解一些搬家前的准备事项是非常有必要的，了解好这些事项才会顺顺利利完成搬家，开开心心入住新房。今天小编来跟大家说说搬家的时候搬家时','0');");
E_D("replace into `caity_ecms_news` values('8','1','0','1','0','0','2015-05-21','8','1','afanda','0','1','1','0','0','0','0','1432168921','1432169068','1','0','0','','/wzgk/2015-05-21/8.html','1','1','1','','联系我们','1432168906','/d/file/wzgk/2015-05-21/9490d0580ea166e456328effc37f9215.jpg','','地    址：141 THRIFT STREET,SAN FRANCISCO ,CA 94112<br>\r\n办公电话：415-806-1959 (SAN FRANCISCO )\r\n          408-799-5035 (SAN JOSE )\r\n          510-612-5538 （OAKLAND ）\r\n邮    件：FASTRAKMOVER@gmail.com','0');");
E_D("replace into `caity_ecms_news` values('9','1','0','1','0','0','2015-05-21','9','1','afanda','0','0','0','0','0','0','0','1432169603','1432169603','1','0','0','','/wzgk/2015-05-21/9.html','1','1','1','','公司宗旨','1432169593','','','1. 信誉第一 服务周到\r\n2. 热情主动 快速高效\r\n3. 不吃不喝 不拿不要\r\n4. 客户财产 安全可靠\r\n5. 轻拿轻放 不急不躁\r\n6. 收费合理 文明礼貌FASTRAK搬家有限公司&ldquo;六不准&amp;rd','0');");
E_D("replace into `caity_ecms_news` values('10','1','0','0','0','0','2015-05-22','10','1','afanda','0','0','0','0','0','0','0','1432272425','1432272425','1','0','0','','/wzgk/2015-05-22/10.html','1','1','1','','服务问答','1432272414','','','欢迎来到FASTRAK MOVER,INC. .FASTRAK MOVER (CAL P.U.C. T&amp;ndash; 191084 ) 曾对数百个家庭和公司为他们的行动在许多不同的地方&mdash;&mdash; San Francisco, Palo Alto.','0');");
E_D("replace into `caity_ecms_news` values('11','3','0','0','0','0','2015-05-22','11','1','afanda','0','0','1','0','0','0','0','1432272792','1432272792','1','0','0','','/clmm/2015-05-22/11.html','1','1','1','','车辆买卖','1432272773','/d/file/clmm/2015-05-22/d2409e660ae067fc58d56a789c24b6b3.jpg','','','0');");
E_D("replace into `caity_ecms_news` values('12','3','0','0','0','0','2015-05-22','12','1','afanda','0','0','1','0','0','0','0','1432272939','1432272939','1','0','0','','/clmm/2015-05-22/12.html','1','1','1','','车辆买卖','1432272796','/d/file/clmm/2015-05-22/e73bc237bbddc696b5b27468c63cbbea.jpg','','','0');");
E_D("replace into `caity_ecms_news` values('13','3','0','1','0','0','2015-05-22','13','1','afanda','0','0','1','0','0','0','0','1432273507','1432273507','1','0','0','','/clmm/2015-05-22/13.html','1','1','1','','车辆买卖','1432272943','/d/file/clmm/2015-05-22/8e0dc7f70917fb15339cd4a9122494cc.jpg','','','0');");
E_D("replace into `caity_ecms_news` values('14','3','0','1','0','0','2015-05-22','14','1','afanda','0','0','1','0','0','0','0','1432273525','1432273525','1','0','0','','/clmm/2015-05-22/14.html','1','1','1','','车辆买卖','1432273508','/d/file/clmm/2015-05-22/dbff2ba31d0380fc3fa5655ba0098a69.jpg','','','0');");
E_D("replace into `caity_ecms_news` values('15','3','0','0','0','0','2015-05-22','15','1','afanda','0','0','1','0','0','0','0','1432273750','1432273750','1','0','0','','/clmm/2015-05-22/15.html','1','1','1','','车辆买卖','1432273725','/d/file/clmm/2015-05-22/f46b00537971e8176cbb5b7023cf96f3.jpg','','','0');");

require("../../inc/footer.php");
?>