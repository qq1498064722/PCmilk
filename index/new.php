<?php
//	处理头部数据，逻辑，js，静态资源，图片
	require '../lib/db.php';
	$sql="select * from nav order by id asc ";
	$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

	
	$id=$_GET['id'];
	
	$sql="select * from news where id=$id";
	
	$res=$mysql->query($sql)->fetch_assoc();
	
	$prev="select * from news where id<$id order by id desc limit 0,1";
	$prevgoods=$mysql->query($prev)->fetch_assoc();
	$prevstr="";
	if($prevgoods){
		$prevstr="<a href='new.php?id={$prevgoods['id']}'>{$prevgoods['detail']}</a>";
	}else{
		$prevstr="<a>没有内容了~~~</a>";
	}
	
	$prev1="select * from news where id>$id order by id asc limit 0,1";
	$prevgoods1=$mysql->query($prev1)->fetch_assoc();
	$prevstr1="";
	if($prevgoods1){
		$prevstr1="<a href='new.php?id={$prevgoods1['id']}'>{$prevgoods1['detail']}</a>";
	}else{
		$prevstr1="<a>没有了。。。</a>";
	}
	
	
	require '../view/index/header.html';
	require "../view/index/new.html";

