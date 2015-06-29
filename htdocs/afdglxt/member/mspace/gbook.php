<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../class/user.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$line=12;
$page_line=10;
$start=0;
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$offset=$page*$line;
$totalquery="select count(*) as total from {$dbtbpre}enewsmembergbook where userid='$user[userid]'";
$num=$Avatar->gettotal($totalquery);
$query="select gid,isprivate,uid,uname,ip,addtime,gbtext,retext,eipport from {$dbtbpre}enewsmembergbook where userid='$user[userid]'";
$query.=" order by gid desc limit $offset,$line";
$sql=$Avatar->query($query);
$returnpage=page1($num,$line,$page_line,$start,$page,$search);
//导入模板
require(ECMS_PATH.'afdglxt/template/member/mspace/gbook.php');
db_close();
$Avatar=null;
?>