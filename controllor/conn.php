<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/3/29
 * Time: 14:21
 */
// 创建连接
$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
?>