<?php
    include "conn.php";
    if (!$conn){
        die("连接失败:".mysqli_error());
    }
    $databaseName = 'user';
    $link = mysqli_select_db($conn,$databaseName);
    mysqli_query("set names utf8;");
//    if(!$link) echo "没有连接成功";
//    $q = "select * from regist";
//    $re = mysqli_query($conn,$q);
//    if (!$re){
//        die("valid result");
//    }
    header("Content-type:text/html;charset=utf-8");
    if($_POST){
        $d = $_POST['data'];
        $username = $d['username'];
        $password = $d['password'];
        $address = $d['address'];
//        $sql = "INSERT INTO regist (username,password,address) VALUES ('$username','$password','$address')";
//        mysqli_query($conn,$sql);
        $sql = "select * from regist where username = '$username'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row > 0){
            $jarr = array("message"=>"用户名存在","status"=>"0");
            $jarr_obj = json_encode($jarr);
            echo $jarr_obj;
            exit();
        }else{
            $jarr = array("message"=>"用户名不存在","status"=>"4");
            $jarr_obj = json_encode($jarr);
            echo $jarr_obj;
            $sql1 = "INSERT INTO regist (username,password,address,type) VALUES ('$username','$password','$address','0')";
            mysqli_query($conn,$sql1);
        }
    }

//    $sql = "CREATE TABLE REGIST (
//          id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//          username VARCHAR (30) NOT NULL,
//          password VARCHAR (20) NOT NULL,
//          address INT (4) NOT NULL
//        )";
//    if(mysqli_query($conn,$sql)){
//        echo "Table regist created successfully";
//    } else {
//        echo "创建数据表错误:" . mysqli_error();
//    }
//CREATE TABLE product (
//    productId INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//productName VARCHAR (30) NOT NULL,
//productIntro VARCHAR (200) NOT NULL,
//productPrice FLOAT (20) NOT NULL,
//file VARCHAR (20) NOT NULL
//)ENGINE=InnoDB DEFAULT CHARSET=utf8;
?>
