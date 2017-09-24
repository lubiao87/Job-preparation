<?php
    	header('content-type:text/html;charset=utf-8');
	// var_dump($_POST);
	//$_POST 只能获取post方式传递的数据
	//获取上传的文件需要用$_FILES;
 // array
 //  'upfile' =>
 //    array
 //      'name' => string 'test.gif' (length=8)
 //      'type' => string 'image/gif' (length=9)
 //      'tmp_name' => string 'C:\wamp\tmp\php4B39.tmp' (length=23)
 //      'error' => int 0
 //      'size' => int 1236842
 //
	var_dump($_FILES);


	//in_array(a,b) ; 判断数据a是否在数组b中包含
	move_uploaded_file($_FILES['upfile']['tmp_name'], '07test.gif');
	echo '<img src="07test.gif"/>';

	//count($navs) 数组的长度
    $navs=array('首页','服装城','美妆','京东超市','全球购','双1212','电器');
    			for($i=0;$i<count($navs);$i++){
    				echo '<li>'.$navs[$i].'</li>';
    			}
?>
