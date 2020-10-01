<?php 
	include_once 'dbh.php';

	
	$descriptors = mysqli_real_escape_string($conn, $_POST['post_descriptor']);

	if(empty($_POST['post_descriptor']))
	{
		header("Location: ../index.php"); 
		
		function myFunction() {
		  alert("Nothing was input");
		}
		
	} else {
		$sql = "INSERT INTO social_table (post_descriptor) VALUES (?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			echo "SQL error";
		} else {
			mysqli_stmt_bind_param($stmt, "s", $descriptors);
			mysqli_stmt_execute($stmt);
		}

		header("Location: ../index.php?upload=successful");
	}

?>