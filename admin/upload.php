<?php
	$file = $_FILES['file'];//上传文件的
	
	/*
	 * name=>'logo.png' 上传文件名字
	 * type=>'image/png', 类型
	 * tmp_name=>'' 临时路径
	 * error=>转态码 0
	 * size=>12334 B
	 * */

//var_dump($file);
//tmp_name -> uploads/20190927/xxx.png 把图片移到这个位置  php操作目录 动态的创建文件夹  图片名字随机 时间戳+随机数+...

// is_dir 是否有这个文件  mkdir 创建文件
	if(!is_dir('../uploads')){
		mkdir('../uploads');//创建目录
	}
	$date = date('Ymd'); // 图片文件夹名字 年月日
	if(!is_dir('../uploads/'.$date)){
		mkdir('../uploads/'.$date);
	}
	$imgname = time() . mt_rand(0,9999);
	$ext = explode('/',$file['type']);
	$ext = array_pop($ext);
//$ext = substr($file['type'],6);
	$imgname .='.'.$ext;
	$movepath = '../uploads/'.$date.'/'.$imgname;
	$webpath = '/pc/uploads/'.$date.'/'.$imgname;//绝对位置
	$result=move_uploaded_file($file['tmp_name'],$movepath);// 移动上传图片
	
	if($result){
		echo json_encode([
			'code'=>200,
			'msg'=>'图片上传成功',
			'src'=>$webpath,
			//得传回绝对位置   后台操作是相对，前台访问是绝对地址
		]);
	}else{
		echo json_encode([
			'code'=>404,
			'msg'=>'图片上传失败',
		]);
	}
