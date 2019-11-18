<?php
	$method=$_SERVER['REQUEST_METHOD'];
	if($method==='GET'){
		include "../view/admin/navinsert.html";
	}
	else{
		include "../lib/common.php";
		$arr=$_POST;
		$keys=joinkeys($arr);
		$values=joinvalues($arr);
		$mysql=new mysqli('localhost','root','','hunsha','3306');
		if ($mysql->connect_errno) {
			echo("连接失败: " .$mysql->connect_errno);
			exit();
		}
		$mysql->query('set names utf8');
	
		$sql="insert into nav ($keys) values ($values)";
		echo  $sql;
		$mysql->query($sql);
		if($mysql->affected_rows >0){
			echo json_encode([
				'code'=>200,
				'msg'=>'插入成功'
			]);
			exit();
		}else{
			echo json_encode([
				'code'=>404,
				'msg'=>'插入失败'
			]);
		}
		
	
	}
	