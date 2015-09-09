<?php 
	include("conn.php");//引入连接数据库

	if (!empty($_POST['sub'])) {
		$title=$_POST['title'];
		$con=$_POST['con'];
		$sql="INSERT INTO `news`(`id`, `title`, `dates`, `contents`) VALUES (null,'$title',now(),'$con')";
		mysql_query($sql);
		echo "插入成功";
	}
?>

 <form action="add.php" method="post">
 	标题<input type="text" name="title"><br>
 	内容<textarea name="con" cols="50" rows="5"></textarea>
<input type="submit" value="发表" name="sub">
 </form>