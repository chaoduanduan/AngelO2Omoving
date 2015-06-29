<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../class/user.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$gid=(int)$_GET['gid'];
$r=$Avatar->fetch1("select gid,isprivate,uid,uname,ip,addtime,gbtext,retext from {$dbtbpre}enewsmembergbook where gid='$gid' and userid='$user[userid]'");
if(!$r['gid'])
{
	printerror('ErrorUrl','',1);
}
if($r['uid'])
{
	$r['uname']="<b><a href='../../space/?userid=$r[uid]' target='_blank'>$r[uname]</a></b>";
}
//导入模板
require(ECMS_PATH.'afdglxt/template/member/mspace/ReGbook.php');
db_close();
$Avatar=null;
?>