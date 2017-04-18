<?php
// 允许上传的图片后缀
echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";

header("content-type:text/html,charset=utf-8");
// header("Content-type: text/html; charset=gb2312");



echo "哈喽";


if(file_exists("./upload1/")){
	echo "目录已经存在";
} else{
	mkdir("upload1");
	echo "创建目录";
}



?>