<?php
require("../../class/connect.php");
if(!defined('InAvatarCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$Avatar=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$Avatar->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=10;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$Avatar->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$Avatar->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
<link rel="stylesheet" href="/js/css_con_cn_main1.css" type="text/css" media="screen, project, print" />
<script type="text/javascript" src="/js/script_dev_en_jquery_min.js"></script>
<script type="text/javascript" src="/js/script_dev_en_banner.js"></script>

 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	
    <script>
// If you're adding a number of markers, you may want to drop them on the map
// consecutively rather than all at once. This example shows how to use
// window.setTimeout() to space your markers' animation.

var berlin = new google.maps.LatLng(37.7577,-122.4376);

var neighborhoods = [
  new google.maps.LatLng(37.7577,-122.4376),
  new google.maps.LatLng(37.6639962,-122.4231804),
  new google.maps.LatLng(37.5037471,-122.3521126),
  new google.maps.LatLng(37.3860098,-121.9301667)
];

var markers = [];
var map;

function initialize() {
  var mapOptions = {
    zoom: 9,
    center: berlin
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
}

function drop() {
  clearMarkers();
  for (var i = 0; i < neighborhoods.length; i++) {
    addMarkerWithTimeout(neighborhoods[i], i * 200);
  }
}

function addMarkerWithTimeout(position, timeout) {
  window.setTimeout(function() {
    markers.push(new google.maps.Marker({
      position: position,
      map: map,
      animation: google.maps.Animation.DROP
    }));
  }, timeout);
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}

google.maps.event.addDomListener(window, 'load', initialize);
drop();

    </script>
</head>
<body class="listpage">
<!-- 页头 -->

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="top">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>

<td align="right">
</td>
</tr>
</table></td>
</tr>
</table>

<!-- 导航tab选项卡 -->

  <div style="background-image:url(/syimg/top.jpg); background-repeat:repeat-x; background-position:top;">
<div class="bar">
<div style="float:right; width:100px;"><a href="/" class="lv">English</a> | <a href="/yw" class="lv">中文版</a></div>
</div>
<div class="daohang">
<ul>
<li><a href="/" class="dh">Home</a></li>
<li><a href="/yw/wzgk/2015-05-21/1.html" class="dh">About Us</a></li>
<li><a href="/yw/wzgk/2015-05-21/9.html" class="dh">Purpose</a></li>
<li><a href="http://www.angleo2omoving.com/wzgk/2015-07-01/24.html" class="dh">Payment</a></li>
<li><a href="/yw/clmm/" class="dh">Moving&S</a></li>
<li><a href="/yw/wzgk/2015-05-22/10.html" class="dh">SeversQ&A</a></li>
<li><a href="http://www.angleo2omoving.com/afdglxt/tool/gbook/?bid=1" class="dh">Contact</a></li>
</ul>
</div>
</div>
<div>
<div class="banner" id="hwbanner">
  <a href="/index.html" class="btn_prev" title=""></a> 
  <a href="/index.html" class="btn_next" title=""></a> 
  <div class="changeBox_a1">
   	<div id="galleryMedia" style="float:left; left:50%; position:relative;">
	  <div class="img" style="float:left; position:relative; right:50%;">
		<div class="banner_pic">
		  <ul>
<li onClick="javascript:setBannerPageview('1')"><a href="#" target="_blank"><img src="/syimg/1.jpg" border="0"/></a></li>
<li onClick="javascript:setBannerPageview('2')"><a href="#" target="_blank"><img src="/syimg/2.jpg" border="0"/></a></li>
<li onClick="javascript:setBannerPageview('3')"><a href="#" target="_blank"><img src="/syimg/3.jpg" border="0"/></a></li>
		  </ul>
		</div>
      			<div class="banner_info"> 
					<ul><li></li>
						<li></li>
						<li></li></ul>
				</div>
	  </div>
   	</div>	
  </div>
</div>
<div></div></div>


<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">

</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
	<tr>
		<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
			
			<tr>
				<td align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td height="100%" valign="top" bgcolor="#FFFFFF"> 
							
							




<?
while($r=$Avatar->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#F4F9FD" class="tableborder">
										<tr class="header">
											<td width="55%" height="23">发布者: <?=$r[name]?> </td>
											<td width="45%">发布时间: <?=$r[lytime]?> </td>
										</tr>
										<tr bgcolor="#FFFFFF">
											<td height="23" colspan="2"><table border="0" width="100%" cellspacing="1" cellpadding="8" bgcolor='#cccccc'>
													<tr>
														<td width='100%' bgcolor='#FFFFFF' style='word-break:break-all'> <?=$r[lytext]?> </td>
													</tr>
												</table>
												
<?
if($r[retext])
{
?>

												<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
													<tr>
														<td><img src="../../data/images/regb.gif" width="18" height="18" /><strong><font color="#FF0000">回复:</font></strong> <?=$r[retext]?> </td>
													</tr>
												</table>
												
<?
}
?> </td>
										</tr>
									</table>
								<br />
								
<?
}
?>

								<table width="92%" border="0" align="center" cellpadding="4" cellspacing="1">
									<tr>
										<td> <?=$listpage?></td>
									</tr>
								</table>
								<form action="../../enews/index.php" method="post" name="form1" id="form1">
								  <table width="200" border="0" cellspacing="10" cellpadding="1">
								    <tr>
									    <th scope="col"><table width="92%" border="0" align="center" cellpadding="4" cellspacing="1"class="tableborder">
									      <tr class="header">
									        <td colspan="2" bgcolor="#F4F9FD"><strong>
									          <div class="nynr" style=" ">please leaves your message:</div>
									          </strong></td>
								          </tr>
									      <tr bgcolor="#FFFFFF">
									        <td width="20%"><div class="nynr" style=" ">Name:</div></td>
									        <td width="722" height="23"><input name="name" type="text" id="name" />
									          *</td>
								          </tr>
									      <tr bgcolor="#FFFFFF">
									        <td><div class="nynr" style=" ">Email:</div></td>
									        <td height="23"><input name="email" type="text" id="email" />
									          *</td>
								          </tr>
									      <tr bgcolor="#FFFFFF">
									        <td><div class="nynr" style=" ">Call Number:</div></td>
									        <td height="23"><input name="mycall" type="text" id="mycall" /></td>
								          </tr>
									      <tr bgcolor="#FFFFFF">
									        <td><div class="nynr" style=" "> Message(*):</div></td>
									        <td height="23"><textarea name="lytext" cols="60" rows="12" id="lytext"></textarea></td>
								          </tr>
									      <tr bgcolor="#FFFFFF">
									        <td height="23">&nbsp;</td>
									        <td height="23"><input type="submit" name="Submit3" value="Submit" />
									          <input type="reset" name="Submit22" value="Reset" />
									          <input name="enews" type="hidden" id="enews" value="AddGbook" /></td>
								          </tr>
								        </table></th>
									    <th scope="col"><div id="map-canvas" style="width: 500px; height: 500px; left: 10px; top: 50px; div&gt;
	&lt;div id="show_x="show_x""></div></th>
							        </tr>
									  <tr>
									    <td><div id="nynrbj">
									      <div class="nynr" style=" ">
									        <p>地&nbsp;&nbsp;&nbsp; 址(Address)：217 Puffin Ct Foster City CA 94404<br />
									          办公电话(Call)：(770)568-0586<br />
									          办公传真(Fax)：(650)389-7672<br />
									          微信账号(WeChat)：5107031051<br />
									          邮&nbsp;&nbsp;&nbsp; 件(Email)：<a href="mailto:AngelTechAutoService@gmail.com">AngelTechAutoService@gmail.com</a></p>
								          </div>
								        </div></td>
									    <td>&nbsp;</td>
								      </tr>
								  </table>
								</form></td>
						</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
</table></td>
</tr>
</table><!--显示X坐标-->
<div id="show_y"></div><!--显示Y坐标-->
     <div id="zoom"></div><!--显示缩放级别-->

<div style="background-image:url(/syimg/sy_r7_c2.jpg); background-repeat:repeat-x; background-position:top;">
  <div class="bottom">
<div style="padding-top:60px;">
<a href="/yw/" class="bai">Home</a> 
<a href="/yw/wzgk/2015-05-21/1.html" class="bai">About Us</a> 
<a href="/yw/wzgk/2015-05-21/9.html" class="bai">Purpose</a> 
<a href="http://www.angleo2omoving.com/wzgk/2015-07-01/24.html" class="bai">Payment</a>
<a href="/yw/clmm/" class="bai">Moving&S</a></a>
<a href="/yw/wzgk/2015-05-22/10.html" class="bai">SeversQ&A</a> 
<a href="http://www.angleo2omoving.com/afdglxt/tool/gbook/?bid=1" class="bai">Contact</a><br>

  Address：217 Puffin Ct Foster City CA 94404<br>
 Tel：(770)568-0586 E-mail：AngelTechAutoService@gmail.com</div>
</div></div>


</body>
</html>
<?php
db_close();
$Avatar=null;
?>
<script type="text/javascript">

function setBannerPageview(index){
	trackPageview("/banner"+index);
}

$('#change_banner .a_bigImg').soChange({
thumbObj:'#change_banner .ul_change_a2 span',
thumbNowClass:'on',
changeType:'fade',
changeTime:5000
});

function focusBox(o){
	if(!o) return;
	var w=2048, $o=$('#'+o),i=0,l=0;arr= [],t= null,
		$infoLi = $o.find('.banner_info li'), len= $infoLi.length*2,
		$ul=$o.find('.banner_pic>ul');
	$ul.append($ul.html()).css({'width':len*w, 'left': -len*w/2});
	$infoLi.eq(0).addClass('current');
	//add banner_pages element
	arr.push('<div class="banner_pages"><ul>');
	$infoLi.each(function(i){
		if(i==0){
			arr.push('<li class="current"><span>'+ (i+1) +'<'+'/'+'sp'+'an></li>');
		}else{
			arr.push('<li><span>'+ (i+1) +'<'+'/'+'sp'+'an></li>');
		}
	});
	arr.push('</ul></div>');
	$o.append(arr.join(''));
	var $pagesLi = $o.find('.banner_pages li');
	//mouse
	$pagesLi.children('span').click(function(){
		var p = $pagesLi.index($o.find('.banner_pages li.current'));
		i = $pagesLi.children('span').index($(this));
		if(i==p) return;
		l = parseInt($ul.css('left')) + w*(p-i);
		addCurrent(i,l);
		return false;
	})
	$o.children('a.btn_prev').click(function(){
		i = $pagesLi.index($o.find('.banner_pages li.current'));
		(i==0)? i=(len/2-1):i--;
		l = parseInt($ul.css('left')) + w;
		addCurrent(i,l);
		return false;
	})
	$o.children('a.btn_next').click(function(){
		i = ($pagesLi.index($o.find('.banner_pages li.current'))+1)%(len/2);
		l = parseInt($ul.css('left')) - w;
		addCurrent(i,l);
		return false;
	})
	//auto focus
	t = setInterval(init,8000);
	$o.hover(function(){
		clearInterval(t);
	}, function(){
		t = setInterval(init,8000);
	});
	function init(){
		$o.children('a.btn_next').trigger('click');
	}
	//add focus
	function addCurrent(i,l){
		if($ul.is(':animated')) return;
		$ul.animate({'left':l},500,function(){
			$o.children('.banner_count').text(i+1);
			$infoLi.not($infoLi.eq(i).addClass('current')).removeClass('current');
			$pagesLi.not($pagesLi.eq(i).addClass('current')).removeClass('current');
			if(l== (1-len)*w){
				$ul.css({'left': (1-len/2)*w});
			}else if(l== 0){
				$ul.css({'left': -len*w/2});
			}
		});
	}
}
 
$(function(){
	focusBox('hwbanner');
})