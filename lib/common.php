<?php
//拼接属性，字段拼接
	//链接数组属性
	function joinkeys($arr){
		$str='';
		foreach ($arr as $key=>$value){
			$str.=$key.',';
		}
		$str=substr($str, '0','-1');
		return $str;
	}
	
   //链接数组元素
	function joinvalues($arr){
		$str='';
		foreach ($arr as $key=>$value){
			$str.="'$value',";
		}
		$str=substr($str, '0','-1');
		return $str;
	}
	 function joinKeyValues($arr){
		$str='';
		foreach ($arr as $key=>$value){
//			$str.=$key."=".$value.",";
			$str.="$key='$value',";
		}
//		$str=$str.val(slice(0,-1));
		 $str=substr($str, '0','-1');
		 return $str;
	 }
	