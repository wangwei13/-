<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/20
 * Time: 11:32
 */
error_reporting( E_ALL&~E_NOTICE );
include "conn.php";
if (!$conn){
    die("连接失败:".mysqli_error());
}
$databaseName = 'user';
$link = mysqli_select_db($conn,$databaseName);
if($_POST){
    $username = $_POST['username'];
    $arr = array();
    $arr['$xj'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=1"));
    $arr['$xz'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=2"));
    $arr['$qh'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=3"));
    $arr['$yn'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=4"));
    $arr['$sc'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=5"));
    $arr['$gs'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=6"));
    $arr['$cq'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=7"));
    $arr['$gz'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=8"));
    $arr['$nx'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=9"));
    $arr['$sx'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=10"));
    $arr['$gx'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=11"));
    $arr['$gd'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=12"));
    $arr['$hn'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=13"));
    $arr['$hb'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=14"));
    $arr['$jx'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=15"));
    $arr['$ah'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=16"));
    $arr['$hn1'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=17"));
    $arr['$bj'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=18"));
    $arr['$fj'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=19"));
    $arr['$tj'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=20"));
    $arr['$sd'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=21"));
    $arr['$js'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=22"));
    $arr['$sh'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=23"));
    $arr['$hlj'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=24"));
    $arr['$ln'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=25"));
    $arr['$jl'] = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) from regist where address=26"));
    $jarr_obj = json_encode($arr);
    echo $jarr_obj;
}

?>