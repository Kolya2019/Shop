<?php
	include('db.php');
	$conn = mysqli_connect($servername, $username, $password, $database);
	$prodid = $_POST['prodid'];
	$pname=$_POST['pname'];
	$desc=$_POST['desc'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];
	mysqli_query($conn, "UPDATE products SET Product='$pname', Description='$desc', Price='$price', Category='$cat' WHERE ID='$prodid'");
	header("location: admin.php");
?>