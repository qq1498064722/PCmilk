<?php
//展示登录界面  验证
//	请求方式 GET POST
	$method=$_SERVER['REQUEST_METHOD'];
	if($method==='GET'){
	//1
//		引入文件的方法——require(没有文件会终止程序)和include
		include '../view/admin/login.html';
	}
	else{
		//2
		$arr=$_POST;
		$username=$arr['username'];
		$password=$arr['password'];
		$passwords=md5(crypt($password,'dhskaf'));
//		echo($passwords);
		$mysql=new mysqli('localhost','root','','hunsha','3306');
		if($mysql->connect_errno){
			echo("连接失败: " .$mysql->connect_errno);
			exit();
		}
		$mysql->query('set names utf8');
		$sql="select * from login where username='$username'";
		$res = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
		$count=count($res);
		if($count){
			for ($i=0;$i<$count;$i++){
				if($res[$i]['password']==$passwords){
					echo json_encode([
						'code'=>200,
						'msg'=>'登录成功'
					]);
				}
				else{
					echo json_encode([
						'code'=>500,
						'msg'=>'用户名和密码不匹配'
					]);
				}
				exit();
			}
			
		}else{
			echo json_encode([
				'code'=>404,
				'msg'=>'用户名不存在'
			]);
		}
	}
?>

