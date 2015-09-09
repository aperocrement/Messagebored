<?php 
	@mysql_connect("localhost","root","") or die("mysql连接失败");
	@mysql_select_db("first") or die("db连接失败");
	mysql_set_charset("utf-8");
	mysql_query("set names 'utf-8'");
