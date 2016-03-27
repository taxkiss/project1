<?php
require_once 'userService.php';

$userid=$_POST['userid'];  //获取用户ID
$fileinstr=$_POST['fileinstr'];        //获取文件简介

$filename=$_FILES['myfile']['name'];  //获取用户文件名
$filesize=$_FILES['myfile']['size'];   //获取文件大小
$filetime=date('Y-m-d h:i:s',time());   //获取文件上传时间

//提前截住用户上传过大文件造成系统压力过大
if ($_FILES['myfile']['size']>2*1024*1024){
    echo "上传文件不能超过2M,请重新选择文件！";
}

//首先判断文件是否是通过HTTP协议上传的
if (is_uploaded_file($_FILES['myfile']['tmp_name'])){
    //判断系统是否给用户建立了专属文件夹
    $user_path="D:/phpStudy/WWW/date/talkiss2/up/".$userid;
    $user_path=iconv("utf-8", "gb2312", $user_path);
    if (!is_dir($user_path)){
        mkdir($user_path);
    } 
    //将文件上传到用户各自的文件库里
    $move_to_path=$user_path."/".time().rand(1, 1000).$_FILES['myfile']['name'];//文件上传后的保存路径
    //$move_to_path=iconv("utf-8", "gb2312", $move_to_path);
    if(move_uploaded_file($_FILES['myfile']['tmp_name'], $move_to_path)){
        echo "文件上传成功！";
        $fileroute=$move_to_path;
        $userService=new UserService();
        $res=$userService->addFile($userid, $fileroute, $filename, $filesize, $fileinstr, $filetime);
        echo "<a href='upFile.php'>继续上传文件</a>";
    }else {
        echo "文件上传失败！";
    }
}else{
    echo "文件上传失败！";
}

?>