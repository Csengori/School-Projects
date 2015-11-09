<?php
session_start();

/* check for session if set */

if(isset($_SESSION["ID"]))
{


echo("<h1> GET FUCKED INV </h1>");

}else{
//redirect user to login if not logged in 
	header('Location: ..\index.html');

}





?>