<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_enewsmembergroup`;");
E_C("CREATE TABLE `caity_enewsmembergroup` (
  `groupid` smallint(6) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(60) NOT NULL DEFAULT '',
  `level` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `favanum` smallint(6) NOT NULL DEFAULT '0',
  `daydown` int(11) NOT NULL DEFAULT '0',
  `msglen` int(11) NOT NULL DEFAULT '0',
  `msgnum` int(11) NOT NULL DEFAULT '0',
  `canreg` tinyint(1) NOT NULL DEFAULT '0',
  `formid` smallint(6) NOT NULL DEFAULT '0',
  `regchecked` tinyint(1) NOT NULL DEFAULT '0',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `dayaddinfo` smallint(6) NOT NULL DEFAULT '0',
  `infochecked` tinyint(1) NOT NULL DEFAULT '0',
  `plchecked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `caity_enewsmembergroup` values('1','普通会员','1','0','120','0','255','50','1','1','0','1','0','0','0');");
E_D("replace into `caity_enewsmembergroup` values('2','VIP会员','2','0','200','0','255','120','0','1','0','1','0','0','0');");
E_D("replace into `caity_enewsmembergroup` values('3','企业会员','1','0','120','0','255','50','1','2','0','2','0','0','0');");
E_D("replace into `caity_enewsmembergroup` values('4','企业VIP会员','2','0','200','0','255','120','0','2','0','2','0','0','0');");

require("../../inc/footer.php");
?>