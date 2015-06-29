<?php

//验证登录方式
function MemberConnect_CheckApptype($apptype){
	global $Avatar,$dbtbpre;
	$appr=$Avatar->fetch1("select * from {$dbtbpre}enewsmember_connect_app where apptype='$apptype' and isclose=0 limit 1");
	if(!$appr['id'])
	{
		printerror2('请选择登录方式','../../../');
	}
	return $appr;
}

//验证openid
function MemberConnect_CheckOpenid($apptype,$openid){
	global $Avatar,$dbtbpre;
	$mcr['id']=0;
	$mcr['userid']=0;
	if(!$apptype||!trim($openid))
	{
		return $mcr;
	}
	$mcr=$Avatar->fetch1("select id,userid from {$dbtbpre}enewsmember_connect where apptype='$apptype' and bindkey='$openid' limit 1");
	return $mcr;
}

//处理登录
function MemberConnect_DoLogin($apptype,$openid){
	global $Avatar,$dbtbpre;
	$apptype=RepPostVar($apptype);
	$openid=RepPostVar($openid);
	$mcr=MemberConnect_CheckOpenid($apptype,$openid);
	if($mcr['id'])
	{
		$lifetime=0;
		$r=$Avatar->fetch1("select ".eReturnSelectMemberF('*')." from ".eReturnMemberTable()." where ".egetmf('userid')."='".$mcr['userid']."' limit 1");
		DoEcmsMemberLogin($r,$lifetime);
		MemberConnect_UpdateBindLogin($mcr['id']);
		MemberConnect_ResetVar();
		printerrortourl('../../../');
	}
	else
	{
		printerrortourl('../tobind.php');
	}
}

//更新登录绑定
function MemberConnect_UpdateBindLogin($id){
	global $Avatar,$dbtbpre;
	$id=(int)$id;
	$lasttime=time();
	$Avatar->query("update {$dbtbpre}enewsmember_connect set loginnum=loginnum+1,lasttime='$lasttime' where id='$id' limit 1");
}

//写入登陆绑定
function MemberConnect_InsertBind($apptype,$openid,$userid){
	global $Avatar,$dbtbpre;
	$apptype=RepPostVar($apptype);
	$openid=RepPostVar($openid);
	$userid=(int)$userid;
	$time=time();
	//验证是否重复
	MemberConnect_CheckReBind($apptype,$userid);
	$Avatar->query("insert into {$dbtbpre}enewsmember_connect(userid,apptype,bindkey,bindtime,loginnum,lasttime) values('$userid','$apptype','$openid','$time',1,'$time');");
}

//验证是否绑定过
function MemberConnect_CheckReBind($apptype,$userid){
	global $Avatar,$dbtbpre;
	$num=$Avatar->gettotal("select count(*) as total from {$dbtbpre}enewsmember_connect where userid='$userid' and apptype='$apptype' limit 1");
	if($num)
	{
		printerror2("此帐号已绑定过，不能重复绑定","history.go(-1)");
	}
}

//删除登陆绑定
function MemberConnect_DelBind($id){
	global $Avatar,$dbtbpre,$public_r;
	$user_r=islogin();//是否登陆
	$id=(int)$id;
	$sql=$Avatar->query("delete from {$dbtbpre}enewsmember_connect where id='$id' and userid='$user_r[userid]';");
	if($sql)
	{
		printerror2("已解除绑定","../memberconnect/ListBind.php");
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}

//原帐号绑定登录
function MemberConnect_BindUser($userid){
	global $Avatar,$dbtbpre,$public_r;
	$apptype=RepPostVar($_SESSION['apptype']);
	$openid=RepPostVar($_SESSION['openid']);
	if(!trim($apptype)||!trim($openid))
	{
		printerror2('来自的链接不存在','../../../');
	}
	$appr=MemberConnect_CheckApptype($apptype);//验证登录方式
	MemberConnect_CheckBindKey($apptype,$openid);
	MemberConnect_InsertBind($apptype,$openid,$userid);
	MemberConnect_ResetVar();
}

//绑定验证符
function MemberConnect_GetBindKey($apptype,$openid){
	global $ecms_config;
	$checkpass=md5(md5('check-'.$apptype.'-Avatarcms-'.$openid).'-#Avatar.cms!-'.$openid.'-|-Avatarcms-|-'.$ecms_config['cks']['ckrndtwo']);
	return $checkpass;
}

//验证绑定验证符
function MemberConnect_CheckBindKey($apptype,$openid){
	global $ecms_config;
	$pass=md5(md5('check-'.$apptype.'-Avatarcms-'.$openid).'-#Avatar.cms!-'.$openid.'-|-Avatarcms-|-'.$ecms_config['cks']['ckrndtwo']);
	$checkpass=$_SESSION['openidkey'];
	if($pass!=$checkpass)
	{
		printerror2('来自的链接不存在','../../../');
	}
}

//重置变量
function MemberConnect_ResetVar(){
	$_SESSION['state']='';
	$_SESSION['openid']='';
	$_SESSION['apptype']='';
	$_SESSION['openidkey']='';
}
?>