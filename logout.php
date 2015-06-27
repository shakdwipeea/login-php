<?php
include_once 'db_connect.php';
include_once 'connection.php';

$public_key="";
$private_key="";
if(isset($_POST['pub_tok']))
{
	$token=$_POST['pub_toktok'];
	$stmt1=$db->prepare("Select email from login where public_key = ?");
	$stmt1->bind_param('s',$token);
	$stmt1->execute();
		$stmt1->store_result();
		
		$stmt1->bind_result($email);
		$stmt1->fetch();
	
	$stmt=$db->prepare("UPDATE login SET public_key = ?,private_key=? WHERE email = ?");
					$stmt->bind_param('sss',$public_key , $private_key , $email);
					$stmt->execute();
					
}
?>