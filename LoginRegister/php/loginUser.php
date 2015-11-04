<?php
require('..\connections\connect.php');


if(isset($_POST))

 $username = $_POST['username'];
 $password = $_POST['username'];

 $sql = $conn 	->query("select * from users where username='$username' AND password='$password'");
 $row = $sql 	->fetch(MYSQLI_BOTH);


session_start();



?>