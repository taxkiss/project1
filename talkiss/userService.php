<?php
    //处理与user表相关的函数
    require_once 'SqlHelper.php';
    class UserService{
        function loginIntoInformation($userid,$username,$userage,$usersex,$userinstr,$userpwd,$usertel,$usertime){
            $sql="INSERT INTO user VALUES($userid,'$username',$userage,'$usersex','$userinstr','$userpwd',$usertel,'$usertime');";
            $sqlHelper=new SqlHelper();
            $arr=$sqlHelper->mysqli_dml($sql);
            return $arr;
        }
        
        //用户登录验证
        function CheckUserByUserid($userid,$userpwd){
            $sql="select userpwd,username from user where $userid=userid;";
            $sqlHelper=new SqlHelper();
            $arr=$sqlHelper->mysqli_dql($sql);
            if ($userpwd==$arr[0]['userpwd']){
                return $arr[0]['username'];
            }else{
                echo "登录失败2";
            }
        }
        
        //用户上传文件
        function addFile($userid,$fileroute,$filename,$filesize,$fileinstr,$filetime){
            $sql="insert into file values($userid,'$fileroute','$filename',$filesize,'$fileinstr','$filetime');";
            $sqlHelper=new SqlHelper();
            $res=$sqlHelper->mysqli_dml($sql);
            return $res;
        } 
        
        //查询用户信息
        function inquireInformationByUserid($userid){
            $sql="select * from user where userid=$userid;";
            $sqlHelper=new SqlHelper();
            $arr=$sqlHelper->mysqli_dql($sql);
            return $arr;
        }
        
        //查询用户上传文件数目
        function checkFileCountByUserid($userid){
            $sql="select count(*) from file where userid=$userid;";
            $sqlHelper=new SqlHelper();
            $arr1=$sqlHelper->mysqli_dql($sql);
            return $arr1;
        }
        
        //向chat表插入聊天信息
        function InsertTextByUserid($username,$userid,$chattext,$chattime){
             $sql="INSERT INTO chat(username,userid,chattext,chattime) VALUES('$username',$userid,'$chattext','$chattime');";
             $sqlHelper=new SqlHelper();
             $arr=$sqlHelper->mysqli_dml($sql);
             return $arr;
        }
        
        function DisplayTextByUserid($userid){
            $sql="SELECT * FROM chat WHERE userid=$userid;";
            $sqlHelper=new SqlHelper();
            $arr=$sqlHelper->mysqli_dql($sql);
/*             echo "<pre>";
            print_r($arr);
            echo "</pre>"; */
            return $arr;
        }
    }