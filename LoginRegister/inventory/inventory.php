<?php
session_start();

/* check for session if set */

if(isset($_SESSION["ID"]))

{

}else{

	header('Location: ..\index.html');

}

echo "bazdmeg";
echo ($_SESSION['ID']);
?>