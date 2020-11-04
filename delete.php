<?php  
	$con = mysqli_connect("127.0.0.1", "root", "", "inst");
	$del = mysqli_query($con, "DELETE FROM posts WHERE id = '{$_GET['id']}'");
	mysqli_query($con, $del);
	header('Location: index.php');
?>