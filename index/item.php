<?php
//	处理头部数据，逻辑，js，静态资源，图片
	require '../lib/db.php';
	$sql="select * from nav order by id asc ";
	$nav=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
	$gid=$_GET['gid'];
	
	$sql="select * from goods where gid=$gid";
	
	$res=$mysql->query($sql)->fetch_assoc();
	
	$prev="select * from goods where gid<$gid order by gid desc limit 0,1";
	$prevgoods=$mysql->query($prev)->fetch_assoc();
	$prevstr="";
	if($prevgoods){
		$prevstr="<a href='item.php?gid={$prevgoods['gid']}'>{$prevgoods['gname']}</a>";
	}else{
		$prevstr="<a>没有内容了~~~</a>";
	}
	
	$prev1="select * from goods where gid>$gid order by gid asc limit 0,1";
	$prevgoods1=$mysql->query($prev1)->fetch_assoc();
	$prevstr1="";
	if($prevgoods1){
		$prevstr1="<a href='item.php?gid={$prevgoods1['gid']}'>{$prevgoods1['gname']}</a>";
	}else{
		$prevstr1="<a>没有了。。。</a>";
	}
	require '../view/index/header.html';
	require "../view/index/item.html";
	
