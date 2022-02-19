<?php

if (isset($_GET['id'])) {
		include "db_conn.php";
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$id = validate($_GET['id']);
		$sql_query = "DELETE FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql_query);

			if($result){
			echo "<script type='text/javascript'>alert('Successfully deleted!');
			window.location='read.php';
			</script>";
		}else{
			header("Location: read.php?error=Unknown error occured!");
			}
}else{
	header("Location: read.php");
}