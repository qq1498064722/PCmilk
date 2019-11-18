<?php
	$mysql=new mysqli('localhost','root','','hunsha','3306');
	if($mysql->connect_errno){
		echo("连接失败: " .$mysql->connect_errno);
		exit();
	}
	$mysql->query('set names utf8');