<?php
    require_once 'userService.php';
    //处理与登录相关的信息。
    $userid=$_POST['userid'];
    $userpwd=$_POST['userpwd'];
    
    if (!empty($_COOKIE['keepId'])){
    $keepId=$_POST['keepId'];
    if (!empty($keepId)){//如果同意保存用户id
        setcookie("userid",$userid,time()+7*24*3600);
    }else {     //如果不同意保存用户id(如果之前cookie为空就不用理会他)
        if (!empty($_COOKIE['userid'])){
            setcookie("userid",$userid,time()-100);}
    }}
    
    $userService=new UserService();
    $username=$userService->CheckUserByUserid($userid, $userpwd);
    if ($username){
        header("Refresh:2;url=showInformation.php?userid=$userid&username=$username");
        echo "欢迎".$username."开启Talkiss欢乐之旅!";
    }else{
        echo "登录失败!";
    }
    
    


?>
