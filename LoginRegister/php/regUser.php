<?php

/* includes */
require('..\connections\connect.php');


	

/* check is form is submited */
	$succes = false;
	if (isset($_POST['regBTN'])			&& 
		(isset($_POST['username'])) 	&&  (!empty($_POST['username']))
		 && (isset($_POST['email']))	&&	(!empty($_POST['email']))
		 && (isset($_POST['password']))	&&  (!empty($_POST['password']))) 
	{



		session_start();
		$username	= $_POST['username'];
		$email 		= $_POST['email'];
		$pass		= $_POST['password'];


/* insert data into database  */
	$sql = $conn -> query("INSERT INTO users (username, email ,password)Values ('{$username}', '$email', '$pass')");


	header('Location: ..\index.html');
	}

	

	
	else echo "FuckYou";


	

	





?>