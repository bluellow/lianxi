<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/6
 * Time: 13:07
 */
header("Content-Type:text/html;charset=UTF-8");
$maxval = 1;
if(isset($_GET['start'])){
    $maxval = $_GET['start'];
}
$i = 1;
while($i<=50){
    echo "行数 #".$maxval."当滚动到页面的底部时,将会自动的从服务端加载其他的几率信息,在很多网站中都可以看到这个应用.<br>";
    $i++;
    $maxval++;
}

?>
