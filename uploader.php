<?php
    $loc = "images/";
	$path = $loc . basename($_FILES['file']['name']);
	$allowed = array('jpg','png','jpeg','JPG','PNG','JPEG','gif');
	//$noy = strtolower(strrpos($_FILES['image']['name'], '.', +1));
	//echo $noy;
	
if(in_array(strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION)), $allowed)) {
		
	
		if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
			echo 'https://www.domain.com/' .$path;
		}
		else {
		    echo '0';
		}
}
else {
    echo '1';
}
?>