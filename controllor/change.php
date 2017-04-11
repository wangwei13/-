<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/11
 * Time: 14:48
 */
include "conn.php";
if (!$conn){
    die("连接失败:".mysqli_error());
}
$databaseName = 'user';
$link = mysqli_select_db($conn,$databaseName);
if(isset($_POST)){
    $data = $_POST['data'];
    $id = $data['id'];
    $sql = "select * from product where productId='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $jarr = json_encode($row);
    echo $jarr;
}
?>