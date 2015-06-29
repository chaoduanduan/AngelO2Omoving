<?php
if(!defined('InAvatarCMS'))
{
	exit();
}

//统计访问
function UpdateSpaceViewStats($userid){
	global $Avatar,$dbtbpre;
	if(!getcvar('dospacevstats'.$userid))
	{
		$sql=$Avatar->query("update {$dbtbpre}enewsmemberadd set viewstats=viewstats+1 where userid='".$userid."' limit 1");
		esetcookie("dospacevstats".$userid,1,time()+3600);
	}
}

//关闭
if($public_r['openspace']==1)
{
	printerror('CloseMemberSpace','',1);
}

require_once ECMS_PATH.'afdglxt/space/spacefun.php';

//用户是否存在
$userid=intval($_GET['userid']);
if($userid)
{
	$add="userid=$userid";
	$username='';
	$utfusername='';
	$uadd=egetmf('userid')."='$userid'";
}
else
{
	$username=RepPostVar($_GET['username']);
	if(empty($username))
	{
		printerror("NotUsername","",1);
	}
	$add="username='$username'";
	$utfusername=$username;
	$uadd=egetmf('username')."='$username'";
}
$ur=$Avatar->fetch1("select ".eReturnSelectMemberF('*')." from ".eReturnMemberTable()." where ".$uadd." limit 1");
if(empty($ur['username']))
{
	printerror("NotUsername","",1);
}
$userid=$userid?$userid:$ur['userid'];
$utfusername=$utfusername?$utfusername:$ur['username'];
$username=$username?$username:$ur['username'];
$groupid=$ur['groupid'];
UpdateSpaceViewStats($userid);//统计访问
$addur=$Avatar->fetch1("select * from {$dbtbpre}enewsmemberadd where userid='".$userid."' limit 1");
//头像
$userpic=$addur['userpic']?$addur['userpic']:$public_r[newsurl].'afdglxt/data/images/nouserpic.gif';
//空间地址
$spaceurl=eReturnDomainSiteUrl()."afdglxt/space/?userid=".$userid;
//空间名称
$spacename=$addur['spacename']?$addur['spacename']:$username." 的空间";
//空间模板
$spacestyleid=$addur['spacestyleid'];
if(empty($spacestyleid))
{
	$spacestyleid=$public_r['defspacestyleid'];
}
$spacestyler=$Avatar->fetch1("select stylepath from {$dbtbpre}enewsspacestyle where styleid='$spacestyleid'");
$spacestyle=$spacestyler['stylepath']?$spacestyler['stylepath']:'default';
?>