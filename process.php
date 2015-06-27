<?php
include_once 'db_connect.php';
include_once 'login.php';
include_once 'connection.php';
 
if (isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $password = $_POST['pass']; 
 
    if (login_pro($email, $password, $db) == true) {
		//session_start();
       header('Location: hello.php');
    } 
	else 
	{
        header('Location: error.php');
} 
}
else
 {
    
    echo 'Invalid Request';
}