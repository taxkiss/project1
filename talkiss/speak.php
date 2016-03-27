<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在此处插入标题</title>
</head>
<body>
    
     <?php 
     if (isset($_POST['chattext'])){
     session_start();
     require_once 'userService.php';
     $userid=$_SESSION['userid'];
     $username=$_SESSION['username'];
     $chattext=$_POST['chattext'];
     $chattime=date("Y:m:d H:i:s");
     
     $userService=new UserService();
     $arr=$userService->InsertTextByUserid($username, $userid, $chattext, $chattime);
     }
     ?>

    <form action="speak.php" method="post" target="_self">
    <textarea rows="3" cols="20" name="chattext"></textarea>
    <input type="submit" value="发言">
    </form>

 
 
</body>
</html>