<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include_once 'db_connect.php';
include_once 'login.php';
include_once 'connection.php';
echo "Welcome".$username; ?><br /><br />
<a href="logout.php"><input type="button" value="Log out" /></a>
</body>
</html>