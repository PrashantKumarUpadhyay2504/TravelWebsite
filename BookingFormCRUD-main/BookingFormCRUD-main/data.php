<?php

//Establishing a connection with PHP 
$connection_details = mysqli_connect("localhost","root","","travelproject");
if(!$connection_details)
{
	die("problem in connection establish");
}

// save button coding
if(isset($_POST['submit']))
{
$bookname = $_POST['bookname'];
$destname = $_POST['destname'];
$qty = $_POST['qty'];
$days = $_POST['Days'];

$insert_query = "INSERT INTO book(bookname,destname,qty,Days) VALUES('$bookname','$destname','$qty','$days')";
if(mysqli_query($connection_details,$insert_query))
{
	//echo "data inserted successfully";
	echo "<script>alert('data is inserted')</script>";
	header("refresh:0,url=form1.html");
}
else{
	echo "unable to store data";
}
}


?>