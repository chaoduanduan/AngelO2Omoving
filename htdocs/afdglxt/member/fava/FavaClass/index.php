<?php
require("../../../class/connect.php");
require("../../../class/q_functions.php");
require("../../../class/db_sql.php");
require("../../class/user.php");
require('../../class/favfun.php');
$link=db_connect();
$Avatar=new mysqlquery();
$editor=2;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$query="select cid,cname from {$dbtbpre}enewsfavaclass where userid='$user[userid]' order by cid desc";
$sql=$Avatar->query($query);
//导入模板
require(ECMS_PATH.'afdglxt/template/member/FavaClass.php');
db_close();
$Avatar=null;
?>