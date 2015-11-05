<?php
require('..\connections\connect.php');



// check if the user has entered correct informations // 


if(isset($_POST['loginBTN'])){

 $username = $_POST['username'];
 $password = $_POST['username'];


 // sql query to get username and password // 

 $sql = $conn ->	query ("select * from users where username='$username' AND password='$password'");
 $row = $sql  ->	fetch_array (MYSQLI_BOTH);


//user ID from sql and use if for later authentication //

session_start();
	$_SESSION['ID'] = $row['ID'];

	header('Location: ..\inventory\inventory.php');

}


?>