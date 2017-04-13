<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/4/13
 * Time: 15:06
 */
error_reporting( E_ALL&~E_NOTICE );
include "conn.php";
if (!$conn){
    die("连接失败:".mysqli_error());
}
$databaseName = 'user';
$link = mysqli_select_db($conn,$databaseName);
require '../learn/smarty/libs/Smarty.class.php';
$smarty = new Smarty();//设置各个目录的路径，这里是安装的重点
$smarty->template_dir ="../learn/smarty/templates/templates";
$smarty->compile_dir ="../learn/smarty/templates/templates_c";
$smarty->config_dir = "../learn/smarty/templates/config";
$smarty->cache_dir ="../learn/smarty/templates/cache";
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题，当然也可以通过其他的办法解决
$smarty->caching = false;
$smarty->left_delimiter = "<{"; //重新定义边界，因为默认边界“{}“符，在html页面中嵌入js脚本文件编写代码段时使用的就是”{}“符，自定义边界符还可以是<{ }>, {/ /} 等
$smarty->right_delimiter = "}>";
$smarty->assign('jarr',$jarr);
$smarty->display('../learn/smarty/templates/templates/content.tpl');
?>