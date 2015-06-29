<?php
require("../../../class/connect.php");
require("../../../class/q_functions.php");
require("../../../class/db_sql.php");
require("../../class/user.php");
require('../../class/friendfun.php');
$link=db_connect();
$Avatar=new mysqlquery();
$editor=2;
$ecmsreurl=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$a="";
$cid=(int)$_GET['cid'];
if($cid)
{
	$a=" and cid=$cid";
}
$query="select fname from {$dbtbpre}enewshy where userid='$user[userid]'".$a." order by fid";
$sql=$Avatar->query($query);
$hyselect='';
while($r=$Avatar->fetch($sql))
{
	$hyselect.="<option value='".$r['fname']."'>".$r['fname']."</option>";
}
//分类
$select=ReturnFriendclass($user[userid],$cid);
$fm=RepPostVar($_GET['fm']);
$f=RepPostVar($_GET['f']);
$addvar="fm=".$fm."&f=".$f;
//导入模板
require(ECMS_PATH.'afdglxt/template/member/ChangeFriend.php');
db_close();
$Avatar=null;
?>