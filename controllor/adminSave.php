<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/7
 * Time: 18:28
 */
include "conn.php";
if (!$conn){
    die("连接失败:".mysqli_error());
}
$databaseName = 'user';
$link = mysqli_select_db($conn,$databaseName);
if($_POST){
    $d = $_POST['data'];
    $productId = $d['productId'];
    $productName = $d['productName'];
    $productIntro = $d['productIntro'];
    $productPrice = $d['productPrice'];
    $file = $d['file'];
    if ($productId != ''){
        $sql = "UPDATE product SET productName='$productName',productIntro='$productIntro',productPrice='$productPrice',file='$file' WHERE productId='$productId'";
    }else{
        $sql = "INSERT INTO product (productName,productIntro,productPrice,file) VALUES ('$productName','$productIntro','$productPrice','$file')";
    }
    $result = mysqli_query($conn,$sql);
    if($result){
        $jarr = array("message"=>"保存成功","status"=>"4");
        $jarr_obj = json_encode($jarr);
        echo $jarr_obj;
    }else{
        $jarr = array("message"=>"保存失败","status"=>"0");
        $jarr_obj = json_encode($jarr);
        echo $jarr_obj;
        exit();
    }

}
?>