<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_ecms_news_index`;");
E_C("CREATE TABLE `caity_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `caity_ecms_news_index` values('1','1','1','1432167585','1432167594','1432169365','1');");
E_D("replace into `caity_ecms_news_index` values('2','2','1','1432167624','1432167650','1432168058','1');");
E_D("replace into `caity_ecms_news_index` values('3','2','1','1432167652','1432167682','1432167682','1');");
E_D("replace into `caity_ecms_news_index` values('4','2','1','1432167685','1432167719','1432167719','1');");
E_D("replace into `caity_ecms_news_index` values('5','2','1','1432167722','1432167801','1432167801','1');");
E_D("replace into `caity_ecms_news_index` values('6','2','1','1432167803','1432167821','1432167821','1');");
E_D("replace into `caity_ecms_news_index` values('7','2','1','1432167823','1432167924','1432167924','1');");
E_D("replace into `caity_ecms_news_index` values('8','1','1','1432168906','1432168921','1432169068','1');");
E_D("replace into `caity_ecms_news_index` values('9','1','1','1432169593','1432169603','1432169603','1');");
E_D("replace into `caity_ecms_news_index` values('10','1','1','1432272414','1432272425','1432272425','1');");
E_D("replace into `caity_ecms_news_index` values('11','3','1','1432272773','1432272792','1432272792','1');");
E_D("replace into `caity_ecms_news_index` values('12','3','1','1432272796','1432272939','1432272939','1');");
E_D("replace into `caity_ecms_news_index` values('13','3','1','1432272943','1432273507','1432273507','1');");
E_D("replace into `caity_ecms_news_index` values('14','3','1','1432273508','1432273525','1432273525','1');");
E_D("replace into `caity_ecms_news_index` values('15','3','1','1432273725','1432273750','1432273750','1');");

require("../../inc/footer.php");
?>