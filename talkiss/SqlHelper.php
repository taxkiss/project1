<?php
class SqlHelper{
    public $host="localhost";
    public $username="root";
    public $password="root";
    public $db="talkiss";
    //public $table="user";

    //连接数据库
    public function __construct(){
        $this->mysqli=new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->mysqli->error){
            die("数据库连接失败！".$this->mysqli->error);
        }
        $this->mysqli->query("set names utf8");
    }

    //执行添加数据的操作
    function mysqli_dml($sql){
        $res=$this->mysqli->query($sql);
        if ($res){
            if ($this->mysqli->affected_rows>0){
                return 0;         //0表示操作成功
            }else {
                return 2;
            }
        }else{
            return 1;
        }
    }

    //执行查询数据的操作
    public function mysqli_dql($sql){
        $arr=array();
        //$i=0;
        $res=$this->mysqli->query($sql) or die($this->mysqli->connect_errno);
        while($row=$res->fetch_assoc()){
            $arr[]=$row;
        }
/*         echo "<pre>";
        print_r($arr);
        echo "</pre>"; */
        
        return $arr;
        $this->free($res);
        mysql_free_result($res);
    }
    public function mysqli_dql2($sql){
        $res=$this->mysqli->query($sql) or die($this->mysqli->connect_errno);
        return $res;
        $this->free($res);
        mysql_free_result($res);
    }
    

}
?>