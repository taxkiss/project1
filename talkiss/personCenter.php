<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在此处插入标题</title>
</head>
<body>
<?php 
session_cache_limiter('private, must-revalidate');

require_once 'userService.php';
$userid=$_GET['userid'];
$userService=new UserService();
$arr=$userService->inquireInformationByUserid($userid);
$arr1=$userService->checkFileCountByUserid($userid);
/* echo "<pre>";
print_r($arr);
print_r($arr1);
echo "</pre>"; */
?>
<table border=1px width=400px height=500px style="text-align:center;">
<tr><td colspan="2">个人中心</td></tr>
<tr><td width=30%>姓　　名：</td><td><?php echo $arr[0]['username']?></td></tr>
<tr><td>账　　号：</td><td><?php echo $userid; ?></td></tr>
<tr><td>年　　龄：</td><td><?php echo $arr[0]['userage'];?></td></tr>
<tr><td>性　　别：</td><td><?php echo $arr[0]['usersex'];?></td></tr>
<tr><td>电　　话：</td><td><?php echo $arr[0]['usertel'];?></td></tr>
<tr><td>简　　介：</td><td><?php echo $arr[0]['userinstr']?></td></tr>
<tr><td>注册时间：</td><td><?php echo $arr[0]['usertime'];?></td></tr>
<tr><td>上传文件数目：</td><td><?php echo $arr1[0]['count(*)'];?></td></tr>
<tr><td><span><a href="javascript:history.go(-1);">&#9666;返回上一步</a></span></td><td></td></tr>

</table>
 
</body>
</html>