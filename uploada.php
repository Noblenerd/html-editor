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
		$id = check($_POST['id']);
		$response = '';
		
		if($r1) {
		    mysqli_query($con, "UPDATE signatures SET Head_t='$r1' WHERE ID='$id'");
		}
		if($r2) {
		    mysqli_query($con, "UPDATE signatures SET Social_t='$r2' WHERE ID='$id'");
		}
		if($r3) {
		    mysqli_query($con, "UPDATE signatures SET Contact_t='$r3' WHERE ID='$id'");
		}
		if($r4) {
		    mysqli_query($con, "UPDATE signatures SET Logo_t='$r4' WHERE ID='$id'");
		}
		
		if(mysqli_query($con, "UPDATE signatures SET Head='$h1',Social='$h2',Contact='$h3',Logo='$h4',Name='$name' WHERE ID='$id'")) {
		    $response = 'Updated';
		}
		
		else {
		    $response = mysqli_error($con);
		}
		echo json_encode($response);
	
?>