<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_enewsztinfo`;");
E_C("CREATE TABLE `caity_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>