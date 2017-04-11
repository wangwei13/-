<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/1
 * Time: 16:45
 */
    include "conn.php";
    if (!$conn){
        die("连接失败:".mysqli_error());
    }
    $databaseName = 'user';
    $link = mysqli_select_db($conn,$databaseName);
    if($_POST){
        $d = $_POST['data'];
        $username = $d['username'];
        $password = $d['password'];
        $sql = "select type from regist where username = '$username' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
            $jarr = array("message"=>"登录成功","status"=>"4","type"=>$row["type"]);
            $jarr_obj = json_encode($jarr);
            echo $jarr_obj;
        }else{
            $jarr = array("message"=>"用户名密码错误","status"=>"0");
            $jarr_obj = json_encode($jarr);
            echo $jarr_obj;
            exit();
        }

    }
?>