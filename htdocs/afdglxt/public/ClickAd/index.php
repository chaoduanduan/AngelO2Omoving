<?php
require("../../class/connect.php");
$adid=(int)$_GET['adid'];
if(!$adid)
{
	echo"<script>alert('error');history.go(-1);</script>";
    exit();
}
require("../../class/db_sql.php");
$link=db_connect();
$Avatar=new mysqlquery();
$r=$Avatar->fetch1("select url,adid from {$dbtbpre}enewsad where adid='$adid'");
if(empty($r[adid]))
{
	echo"<script>alert('error');history.go(-1);</script>";
	exit();
}
$url=$r[url];
$Avatar->query("update {$dbtbpre}enewsad set onclick=onclick+1 where adid='$adid'");
db_close();
$Avatar=null;
Header("Location:$url");
?>
