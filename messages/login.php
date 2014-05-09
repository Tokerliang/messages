<?php

	include("conn.php");

	$session_start();
	if($_POST[submit]){
	$user = $_POST[id];
	$password = $_POST[pw];
	$sql = "select pw from message where user = $user";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	}
	$password = md5($password);
	if($row[pw] == $password){
		header("Location: head.php");
	}
	
?>

<SCRIPT language=javascript>
function Checklogin()
{
	if (myform.id.value=="")
	{
		alert("请填写登录名");
		myform.id.focus();
		return false;
	}
		if (myform.pw.value=="")
	{
		alert("密码不能为空");
		myform.pw.focus();
		return false;
	}
}
</SCRIPT>

<form action="" method="post" name="myform" onsubmit="return Checklogin();">
  ID：<input type="text" name="id" /><br>
  PW：<input type="password" name="pw" /> 
  <input type="submit" name="submit" value="登陆"/>
  
  </form>
  <form action="exit.php" name="exit">//新建一个文件，unset()
	<input type="submit" name="submit" value="退出" />
  </formm>

	
