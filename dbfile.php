<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="config";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn->connect_error){
		echo " Connection errored. ";
	}
	else{
	    //echo " Connected successfully. ";
	}
?>
