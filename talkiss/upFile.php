<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>上传分享的资料</title>
<link rel="stylesheet" href="mycss.css" type="text/css" />
</head>
<body> 
<form enctype="multipart/form-data" action="upProcess.php" method="post">
<table class="upFile_table">
<tr><td colspan="2" style="font-family: 楷书;font-size: 30px;font-weight: 900;color:#996600">共享文件上传</td></tr>
<tr><td>用户账号：</td><td><input type="text" name="userid"></td></tr>
<tr><td>用户注意：</td><td>文件上传之后所有人均可以下载，请注意保护个人隐私！</td></tr>
<tr><td>文件简介：</td><td><textarea rows=10 cols=50 name="fileinstr"></textarea></td></tr>
<tr><td>选择文件：</td><td><input type="file" name="myfile"></td></tr>
<tr><td colspan="2"><input type="submit" value="上传文件"></td></tr>
<tr><td><span><a href="javascript:history.go(-1);">&#9666;返回上一步</a></span></td></tr>
</table>
</form>
 
</body>
</html>