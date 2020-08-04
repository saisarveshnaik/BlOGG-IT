<?php
session_start();

require 'connect.php';

error_reporting(0);

$uname=$_POST['uname'];
$pass=($_POST['pass']);






$sql= $conn->prepare("SELECT * FROM users where username='".$uname."'and password='".$pass."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
	foreach (($sql->fetchAll()) as $key => $row) 
		

	$_SESSION["email"] = $row['user_email'];
    $_SESSION["user_name"] = $row['user_name'];
    $_SESSION["username"] = $row['username'];
	$_SESSION["password1"] = $row['password'];
	
	$_SESSION["type_id"] = $row['user_type'];
	$_SESSION["user_id"] = $row['user_id'];
	$_SESSION["profile_pic"] = $row['profile_pic'];





	if ($row['user_type']=="0") {

		echo "20";

	}
	else if ($row['user_type']=="1") {

		echo "23";


	}

	else
	{
		echo '0';
	}
}




?>

