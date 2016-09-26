<?php


	$picname = $_FILES['mypic']['name'];
	$picsize = $_FILES['mypic']['size'];
	if ($picname != "") {

		$type = strstr($picname, '.');
		$rand = rand(100, 999);
		$pics = date("YmdHis") . $rand . $type;
		//上传路径
		$pic_path = "files/". $pics;
		//var_dump($_FILES['mypic']['tmp_name']);exit;
		move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
	}
	$size = round($picsize/1024,2);
	$arr = array(
		'name'=>$picname,
		'pic'=>$pics,
		'size'=>$size,
		'picpath'=>$pic_path,
	);
	echo json_encode($arr);

?>