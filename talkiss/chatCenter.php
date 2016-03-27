<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在此处插入标题</title>
</head>

<?php 
    //处理聊天内容
/*     echo $_GET['userid'];
    echo $_GET['username'];
     */
    session_start();
    $username=$_GET['username'];
    $_SESSION['username']=$username;
    
    $userid=$_GET['userid'];
    $_SESSION['userid']=$userid;
?> 
<frameset rows="80%,20%">
<frame src="chat_display.php" name="chat_display">
<frame src="speak.php" name="speak">
</frameset>
<span><a href="javascript:history.go(-1);">&#9666;返回上一步</a></span>
</html>