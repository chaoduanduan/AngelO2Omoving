<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_ecms_news`;");
E_C("CREATE TABLE `xcaity_ecms_news` (
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
E_D("replace into `xcaity_ecms_news` values('1','1','0','1','0','0','2015-05-21','1','1','afanda','1','0','1','0','0','0','0','1432167594','1433121819','1','0','0','','/wzgk/2015-05-21/1.html','1','1','1','','About Us','1432167585','/d/file/wzgk/2015-05-21/7d8b3353218db5c69e35359fa2e0892e.jpg','','Hello everybody:\r\nFASTRAK MOVER INC. to be at the San Francisco Department of Development, the transportation is very convenient, South Bay, North Bay, East Bay have our branch offices. We are a professional moving company, our company from inception to','0');");
E_D("replace into `xcaity_ecms_news` values('2','2','0','0','0','0','2015-05-21','2','1','afanda','0','1','1','0','0','0','0','1432167650','1433122469','1','0','0','','/xwzx/2015-05-21/2.html','1','1','1','','What are the requirements of the formal moving company?','1432167624','/d/file/xwzx/2015-05-21/6c055408c06bb7fc0adff6a4fa5b13b1.jpg','','Move this thing, it is estimated that many people have to meet, since everyone on how to find the regular moving company are very upset, a lot of people do not','0');");
E_D("replace into `xcaity_ecms_news` values('3','2','0','0','0','0','2015-05-21','3','1','afanda','0','0','0','0','0','0','0','1432167682','1433122433','1','0','0','','/xwzx/2015-05-21/3.html','1','1','1','','Why did you choose to move to move? What benefits?','1432167652','','','Don&#039;t know whether we have to feel that Chinese people pay more attention to the things what a lucky day, such as a marriage feast, admission of new houses, wha','0');");
E_D("replace into `xcaity_ecms_news` values('4','2','0','0','0','0','2015-05-21','4','1','afanda','0','0','0','0','0','0','0','1432167719','1433122391','1','0','0','','/xwzx/2015-05-21/4.html','1','1','1','','Long distance move need to note and do six matters','1432167685','','','For the removal of people may moving is short, may also be a long-distance move, for example from Shijiazhuang moved to Beijing even if is long-distance move, t','0');");
E_D("replace into `xcaity_ecms_news` values('5','2','0','0','0','0','2015-05-21','5','1','afanda','0','0','0','0','0','0','0','1432167801','1433122342','1','0','0','','/xwzx/2015-05-21/5.html','1','1','1','','Do you consider the cost price when you move the company?','1432167722','','','Do not know you have not found a situation, we at the time of consumption, are often the first to consider is the cost, first look at the brand of the product p','0');");
E_D("replace into `xcaity_ecms_news` values('6','2','0','0','0','0','2015-05-21','6','1','afanda','0','0','0','0','0','0','0','1432167821','1433122300','1','0','0','','/xwzx/2015-05-21/6.html','1','1','1','','What is a good gift to send a friend move, move the flowers skills','1432167803','','','    在中国除了酒文化外，应该属于送礼是最容易拉拢人的了。对于搬家的人来说，宴请亲戚朋友是非常普遍的，这时宾客总不能两手空空吧，需要意思意思。那么朋友搬家我们究竟送什么好','0');");
E_D("replace into `xcaity_ecms_news` values('7','2','0','2','0','0','2015-05-21','7','1','afanda','0','0','0','0','0','0','0','1432167924','1433122263','1','0','0','','/xwzx/2015-05-21/7.html','1','1','1','','Moving attention to moving time arrangement determined','1432167823','','','For some recent need to move the friends before moving to prepare the matter is very necessary and good understanding of these matters will be carried out smoot','0');");
E_D("replace into `xcaity_ecms_news` values('8','1','0','1','0','0','2015-05-21','8','1','afanda','0','1','1','0','0','0','0','1432168921','1433121588','1','0','0','','/wzgk/2015-05-21/8.html','1','1','1','','Contact Us','1432168906','/d/file/wzgk/2015-05-21/9490d0580ea166e456328effc37f9215.jpg','','地    址：141 THRIFT STREET,SAN FRANCISCO ,CA 94112<br>\r\n办公电话：415-806-1959 (SAN FRANCISCO )\r\n          408-799-5035 (SAN JOSE )\r\n          510-612-5538 （OAKLAND ）\r\n邮    件：FASTRAKMOVER@gmail.com','0');");
E_D("replace into `xcaity_ecms_news` values('9','1','0','1','0','0','2015-05-21','9','1','afanda','0','0','0','0','0','0','0','1432169603','1433121720','1','0','0','','/wzgk/2015-05-21/9.html','1','1','1','','Purpose','1432169593','','','1. 信誉第一 服务周到\r\n2. 热情主动 快速高效\r\n3. 不吃不喝 不拿不要\r\n4. 客户财产 安全可靠\r\n5. 轻拿轻放 不急不躁\r\n6. 收费合理 文明礼貌FASTRAK搬家有限公司&ldquo;六不准&amp;rd','0');");
E_D("replace into `xcaity_ecms_news` values('10','1','0','0','0','0','2015-05-22','10','1','afanda','0','0','0','0','0','0','0','1432272425','1433121649','1','0','0','','/wzgk/2015-05-22/10.html','1','1','1','','SeversQ&A','1432272414','','','欢迎来到FASTRAK MOVER,INC. .FASTRAK MOVER (CAL P.U.C. T&amp;ndash; 191084 ) 曾对数百个家庭和公司为他们的行动在许多不同的地方&mdash;&mdash; San Francisco, Palo Alto.','0');");
E_D("replace into `xcaity_ecms_news` values('11','3','0','0','0','0','2015-05-22','11','1','afanda','0','0','1','0','0','0','0','1432272792','1433122634','1','0','0','','/clmm/2015-05-22/11.html','1','1','1','','Vehicle Sale','1432272773','/d/file/clmm/2015-05-22/d2409e660ae067fc58d56a789c24b6b3.jpg','','','0');");
E_D("replace into `xcaity_ecms_news` values('12','3','0','0','0','0','2015-05-22','12','1','afanda','0','0','1','0','0','0','0','1432272939','1433122627','1','0','0','','/clmm/2015-05-22/12.html','1','1','1','','Vehicle Sale','1432272796','/d/file/clmm/2015-05-22/e73bc237bbddc696b5b27468c63cbbea.jpg','','','0');");
E_D("replace into `xcaity_ecms_news` values('13','3','0','1','0','0','2015-05-22','13','1','afanda','0','0','1','0','0','0','0','1432273507','1433122619','1','0','0','','/clmm/2015-05-22/13.html','1','1','1','','Vehicle Sale','1432272943','/d/file/clmm/2015-05-22/8e0dc7f70917fb15339cd4a9122494cc.jpg','','','0');");
E_D("replace into `xcaity_ecms_news` values('14','3','0','1','0','0','2015-05-22','14','1','afanda','0','0','1','0','0','0','0','1432273525','1433122612','1','0','0','','/clmm/2015-05-22/14.html','1','1','1','','Vehicle Sale','1432273508','/d/file/clmm/2015-05-22/dbff2ba31d0380fc3fa5655ba0098a69.jpg','','','0');");
E_D("replace into `xcaity_ecms_news` values('15','3','0','0','0','0','2015-05-22','15','1','afanda','0','0','1','0','0','0','0','1432273750','1433122605','1','0','0','','/clmm/2015-05-22/15.html','1','1','1','','Vehicle Sale','1432273725','/d/file/clmm/2015-05-22/f46b00537971e8176cbb5b7023cf96f3.jpg','','','0');");

require("../../inc/footer.php");
?>