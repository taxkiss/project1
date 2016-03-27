<?php
    require_once 'userService.php';
    //处理与注册相关的信息,提取表单提交的信息，
    $userid=$_POST['userid'];
    $username=$_POST['username'];
    $userage=$_POST['userage'];
    $usersex=$_POST['usersex'];
    $userinstr=$_POST['userinstr'];
    $userpwd=$_POST['userpwd'];
    $usertel=$_POST['usertel'];
    $usertime=date('Y-m-d h:i:s',time());
    
    $userService=new UserService();
    $arr=$userService->loginIntoInformation($userid, $username, $userage, $usersex, $userinstr, $userpwd, $usertel, $usertime);
    if ($arr==0){
        echo "注册成功,请登录！";
        header("Refresh:2;url=login.php");
    }else{
        echo "注册失败，请重新注册！";
        header("Refresh:2;url=registered.php");
    }
?>