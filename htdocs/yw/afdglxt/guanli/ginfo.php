<?php
define('AvatarCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
$link=db_connect();
$Avatar=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
db_close();
$Avatar=null;
@header('Content-Type: text/html; charset=gb2312');
@include('../class/AvatarCMS_version.php');
$pd="?product=Avatarcms&usechar=".$ecms_config['sets']['pagechar']."&doupdate=".AvatarCMS_UPDATE."&ver=".AvatarCMS_VERSION."&lasttime=".AvatarCMS_LASTTIME."&domain=".$_SERVER['HTTP_HOST']."&ip=".$_SERVER['REMOTE_ADDR'];
?>
<link rel="stylesheet" href="../data/images/css.css" type="text/css">
<body leftmargin="0" topmargin="0">
<script>
function EchoUpdateInfo(showdiv,messagereturn){
	document.getElementById(showdiv).innerHTML=messagereturn;
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div id="Avatarcmsdt"></div></td>
  </tr>
</table>
<script type="text/javascript" src="http://www.caity.net/Avatarupdate/<?php echo $pd;?>"></script>