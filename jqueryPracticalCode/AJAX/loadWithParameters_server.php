<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 10:12
 */
switch ($_POST['name']){
    case 1:
        echo '必须的URL参数规定您希望加载的URL';
        break;
    case 2:
        echo '可选的data参数规定与请求一同发送的查询字符串键/值对集合';
        break;
    case 3:
        echo '可选的callback参数是load()函数完成后所执行的函数名称。';
        break;
}
?>