<?php
require('..\connections\connect.php');


if(isset($_POST['loginBTN'])){

 $username = $_POST['username'];
 $password = $_POST['username'];

 $sql = $conn ->	query ("select * from users where username='$username' AND password='$password'");
 $row = $sql  ->	fetch_array (MYSQLI_BOTH);


session_start();
	$_SESSION['ID'] = $row['ID'];

	header('Location: ..\inventory\inventory.php');

}


?>