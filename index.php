<a href="add.php">添加内容</a>
<hr>
<hr>
<?php 
	include("conn.php");


	$sql="select * from `news`";
	$query=mysql_query($sql);//mysql_query只能执行一次


	while ($rs=mysql_fetch_array($query)) {
 ?>
<h2>标题:<?php echo $rs['title'] ?></h2>
<li><?php echo $rs['dates'] ?></li>
<p><?php echo $rs['contents'] ?></p>
<hr>
<?php 
	}
 ?>