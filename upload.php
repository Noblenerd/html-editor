<?php
	session_start();
		include('connect.php');
		function check($data) {
			$data = trim($data);
			$data = htmlspecialchars($data);
			//$data = mysqli_real_escape_string($con, $data);
		return $data;
		}
		$user = 'exclaimer';
		$h1 = check($_POST['head']);
		$h1 = str_replace("'", "''", $h1);
		$h2 = check($_POST['social']);
		$h2 = str_replace("'", "''", $h2);
		$h3 = check($_POST['contact']);
		$h3 = str_replace("'", "''", $h3);
		$h4 = check($_POST['logo']);
		$h4 = str_replace("'", "''", $h4);
		$name = check($_POST['name']);
		$table = check($_POST['table']);
		$r1 = check($_POST['head_t']);
		$r2 = check($_POST['social_t']);
		$r3 = check($_POST['contact_t']);
		$r4 = check($_POST['logo_t']);
		$response = '';
		
		if(mysqli_query($con, "INSERT INTO signatures
		VALUES('','$h1','$h2','$h3','$h4','$r1','$r2','$r3','$r4','$name','$table','$user',NOW())")) {
		    $response = 'Success';
		}
		
		else {
		    $response = mysqli_error($con);
		}
		echo json_encode($response);
	
?>