<?php
// 允许上传的图片后缀
header("content-type:text/html,charset=utf-8");
echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "正确";
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// // 判断当期目录下的 upload 目录是否存在该文件
		// // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777

		if(file_exists("upload/")){
			echo "目录已经存在";
		}else{
			mkdir("upload");
			echo "创建目录./upload";
		}

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else
		{

			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			if (is_uploaded_file($_FILES['file']['tmp_name'])) {
				$file = $_FILES['file']['tmp_name'];//要上传的文件
				$stored_path = "upload/" . $_FILES["file"]["name"];
                if(move_uploaded_file($file,$stored_path)){  
                    echo "Stored in: " . $stored_path;  
                }else{  
                    echo 'Stored failed:file save error';  
                }  
			}else{
				echo 'Stored failed:no past';
			}
		}
	}
}
else
{
	echo "非法的文件格式";
}
?>