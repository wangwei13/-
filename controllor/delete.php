<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/11
 * Time: 15:57
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
    $sql = "DELETE FROM product WHERE productId='$id'";
    $result = mysqli_query($conn,$sql);
    $jarr = array("message"=>"删除成功","status"=>"4");
    $jarr_obj = json_encode($jarr);
    echo $jarr_obj;
}
?>