<?php
	$entrys = array();
	$dirs = dir("./comic/data");
	while(false !== ($entry = $dirs->read())){
		if(($entry != '.') && ($entry != '..')) {
			array_push($entrys,$entry);
		}
	}
	$dirs->close();
	$num = rand(0,49);
	//print_r($entrys);
	$filepath = "./comic/data/".$entrys[$num];
	$filesize = filesize($filepath);
	$path_parts = pathinfo($filepath);
	$filename = $path_parts['basename'];
	$extension = $path_parts['extension'];

	ob_clean();
	flush();
	readfile($filepath);
?>
