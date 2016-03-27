<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Talkiss注册</title>
<link href="mycss.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="table_register">
<img src="./imgs/register.png"/>
<form action="registeredProcess.php" method="post">
<center>
<table>
<tr><td colspan="2" style="text-align: center;font-family: 宋体;font-size:30px;font-weight: 700;color:#833B0A;">Talkiss账号注册</td></tr>
<tr><td>账　　号：</td><td><input type="text" name="userid"/></td></tr>
<tr><td>姓　　名：</td><td><input type="text" name="username"/></td></tr>
<tr><td>年　　龄：</td><td><input type="text" name="userage"/></td></tr>
<tr><td>性　　别：</td><td><input type="text" name="usersex"></td></tr>
<tr><td>简　　介：</td><td><textarea rows=3 cols=50 name="userinstr"></textarea></td></tr>
<tr><td>密　　码：</td><td><input type="password" name="userpwd"/></td></tr>
<tr><td>电　　话：</td><td><input type="text" name="usertel"/></td></tr>
<tr><td><input type="submit" value="提交信息"></td><td><input type="reset" value="重新填写"/></td></tr>
<tr><td colspan="2"><a href="main.php">返回主页面</a></tr>
</table></center>
</form></div>
</body>
</html>