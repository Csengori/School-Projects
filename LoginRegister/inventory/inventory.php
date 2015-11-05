<?php
session_start();

/* check for session if set */

if(isset($_SESSION["ID"]))

{

}else{

	header('Location: ..\index.html');

}

//redirect user to login if not logged in 


header('Location: ..\index.html')
?>