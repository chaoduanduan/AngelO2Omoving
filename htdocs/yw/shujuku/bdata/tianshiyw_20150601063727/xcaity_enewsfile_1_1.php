<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xcaity_enewsfile_1`;");
E_C("CREATE TABLE `xcaity_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `xcaity_enewsfile_1` values('1','1000010000000002','6c055408c06bb7fc0adff6a4fa5b13b1.jpg','42007','2015-05-21','afanda','1432168055','2','1.jpg','1','0','2','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('2','1000010000000008','9490d0580ea166e456328effc37f9215.jpg','40792','2015-05-21','afanda','1432168916','1','1.jpg','1','0','8','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('3','1000010000000001','7d8b3353218db5c69e35359fa2e0892e.jpg','51226','2015-05-21','afanda','1432169331','1','1.jpg','1','0','1','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('4','1000010000000011','d2409e660ae067fc58d56a789c24b6b3.jpg','68313','2015-05-22','afanda','1432272779','3','1.jpg','1','0','11','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('5','1000010000000012','e73bc237bbddc696b5b27468c63cbbea.jpg','65956','2015-05-22','afanda','1432272928','3','1.jpg','1','0','12','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('6','1000010000000013','8e0dc7f70917fb15339cd4a9122494cc.jpg','71419','2015-05-22','afanda','1432273017','3','1.jpg','1','0','13','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('7','1000010000000014','dbff2ba31d0380fc3fa5655ba0098a69.jpg','60776','2015-05-22','afanda','1432273514','3','1.jpg','1','0','14','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('8','1000010000000015','f46b00537971e8176cbb5b7023cf96f3.jpg','73325','2015-05-22','afanda','1432273731','3','1.jpg','1','0','15','0','0','0');");
E_D("replace into `xcaity_enewsfile_1` values('9','0','1faac55a220ecd093aaed22f5653be69.jpg','68689','2015-05-22','afanda','1432273875','3','1.jpg','1','0','1432273754','1432273754','0','0');");

require("../../inc/footer.php");
?>