<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by #
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `caity_enewsclasstemp`;");
E_C("CREATE TABLE `caity_enewsclasstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `caity_enewsclasstemp` values('1','通用一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>推荐资讯</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"8\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[caitynewspic]\\\\''selfinfo\\\\'',2,4,128,90,1,20,2[/caitynewspic]\r\n</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>最后更新</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ul>\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,44,0,0,2,0[/ecmsinfo] \r\n</ul></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");
E_D("replace into `caity_enewsclasstemp` values('2','分类信息一级栏目模板','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=utf-8\\\\\" />\r\n<title>[!--pagetitle--]</title>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--]\\\\\" />\r\n<link href=\\\\\"[!--news.url--]skin/default/css/style.css\\\\\" rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" />\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/default/js/tabs.js\\\\\"></script>\r\n</head>\r\n<body class=\\\\\"channle\\\\\">\r\n[!--temp.header--]\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr valign=\\\\\"top\\\\\">\r\n<td class=\\\\\"news_list\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"position\\\\\">\r\n<tr>\r\n<td>您当前的位置：[!--newsnav--]</td>\r\n</tr>\r\n</table>\r\n[listsonclass]\\\\''selfinfo\\\\'',5,38,0,0,7,0,0[/listsonclass]</td>\r\n<td class=\\\\\"sider\\\\\"><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>分类信息搜索</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><form action=\\\\\"[!--news.url--]afdglxt/search/index.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" id=\\\\\"searchform\\\\\">\r\n<table width=\\\\\"98%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"6\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tbname\\\\\" value=\\\\\"info\\\\\">\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"tempid\\\\\" value=\\\\\"1\\\\\">\r\n<tr>\r\n<td><input name=\\\\\"keyboard\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"keyboard\\\\\" size=\\\\\"18\\\\\" />\r\n<select name=\\\\\"show\\\\\">\r\n<option value=\\\\\"title,smalltext,myarea\\\\\" selected=\\\\\"selected\\\\\">不限</option>\r\n<option value=\\\\\"title\\\\\">信息标题</option>\r\n<option value=\\\\\"smalltext\\\\\">信息内容</option>\r\n<option value=\\\\\"myarea\\\\\">所在地</option>\r\n</select></td>\r\n</tr>\r\n<tr>\r\n<td><select name=\\\\\"classid\\\\\">\r\n<option value=\\\\''9\\\\''>所有分类</option>\r\n<option value=\\\\''10\\\\''>|-房屋信息</option>\r\n<option value=\\\\''11\\\\'' >&nbsp;&nbsp;|-房屋求租</option>\r\n<option value=\\\\''12\\\\'' >&nbsp;&nbsp;|-房屋出租</option>\r\n<option value=\\\\''13\\\\'' >&nbsp;&nbsp;|-房屋求购</option>\r\n<option value=\\\\''14\\\\'' >&nbsp;&nbsp;|-房屋出售</option>\r\n<option value=\\\\''15\\\\'' >&nbsp;&nbsp;|-办公用房</option>\r\n<option value=\\\\''16\\\\'' >&nbsp;&nbsp;|-旺铺门面</option>\r\n<option value=\\\\''17\\\\''>|-跳蚤市场</option>\r\n<option value=\\\\''18\\\\'' >&nbsp;&nbsp;|-电脑配件</option>\r\n<option value=\\\\''19\\\\'' >&nbsp;&nbsp;|-电器数码</option>\r\n<option value=\\\\''20\\\\'' >&nbsp;&nbsp;|-通讯产品</option>\r\n<option value=\\\\''21\\\\'' >&nbsp;&nbsp;|-居家用品</option>\r\n<option value=\\\\''22\\\\''>|-同城生活</option>\r\n<option value=\\\\''23\\\\'' >&nbsp;&nbsp;|-本地新闻</option>\r\n<option value=\\\\''24\\\\'' >&nbsp;&nbsp;|-购物打折</option>\r\n<option value=\\\\''25\\\\'' >&nbsp;&nbsp;|-旅游活动</option>\r\n<option value=\\\\''26\\\\'' >&nbsp;&nbsp;|-便民告示</option>\r\n<option value=\\\\''27\\\\''>|-求职招聘</option>\r\n<option value=\\\\''28\\\\'' >&nbsp;&nbsp;|-工程技术</option>\r\n<option value=\\\\''29\\\\'' >&nbsp;&nbsp;|-财务会计</option>\r\n<option value=\\\\''30\\\\'' >&nbsp;&nbsp;|-餐饮行业</option>\r\n<option value=\\\\''31\\\\'' >&nbsp;&nbsp;|-经营管理</option>\r\n</select>\r\n<input name=\\\\\"Submit2\\\\\" type=\\\\\"image\\\\\" value=\\\\\"搜索\\\\\" src=\\\\\"[!--news.url--]skin/default/images/search.gif\\\\\" />　\r\n[<a href=\\\\\"[!--news.url--]afdglxt/DoInfo/ChangeClass.php?mid=8\\\\\" target=\\\\\"_blank\\\\\">发布信息</a>]</td>\r\n</tr>\r\n</table>\r\n</form></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>地区导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoarea--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>分类导航</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td>[!--temp.infoclassnav--]</td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"title margin_top\\\\\">\r\n<tr>\r\n<td><strong>热门点击</strong></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"box\\\\\">\r\n<tr>\r\n<td><ol class=\\\\\"rank\\\\\">\r\n[ecmsinfo]\\\\''selfinfo\\\\'',10,40,0,1,10,0[/ecmsinfo] \r\n</ol></td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','0');");

require("../../inc/footer.php");
?>