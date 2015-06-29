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
$addr=$Avatar->fetch1("select spacename,spacegg from {$dbtbpre}enewsmemberadd where userid='$user[userid]' limit 1");
//导入模板
require(ECMS_PATH.'afdglxt/template/member/mspace/SetSpace.php');
db_close();
$Avatar=null;
?>