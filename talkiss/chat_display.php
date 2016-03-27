<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在此处插入标题</title>
<meta http-equiv="refresh" content="5;url=chat_display.php">
</head>
<body>
<?php 
    require_once 'userService.php';
    $sqlHelper=new SqlHelper();
    session_start();
    $userid=$_SESSION['userid'];
    $chattime=date("Y-m-d H:i:s"-30);
    $userService=new UserService();
    $arr=$userService->DisplayTextByUserid($userid);
     echo "<pre>";
     print_r($arr);
     echo "</pre>"; 
    $rows=count($arr);
    echo $rows;//当前信息条数
    
    mysql_data_seek($arr,$rows-15); //移动记录指针到前15笔记录
    if ($rows<15) $l=$rows; else $l=15; //记录总数小于15，则最多为该记录数
    for ($i=1;$i<=$l;$i++)
    {
        list($chatid,$username,$userid,$chattext,$chattime)=mysql_fetch_row($arr);
        echo $chattime; echo " ";
        echo "【".$username."】"; echo"说到：" ; 
        echo $chattext; 
        echo "<BR>";
    }
?>
</body>
</html>