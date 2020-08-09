<?php
require 'connect.php';
require 'session_script.php';

$msg_firstname=$_POST['msg_firstname'];
$msg_lastname=$_POST['msg_lastname'];
$msg_email=$_POST['msg_email'];
$msg_text=$_POST['msg_text'];





$sql="INSERT INTO messages(msg_firstname, msg_lastname, msg_email, msg_text) VALUES (:msg_firstname,:msg_lastname,:msg_email,:msg_text)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':msg_firstname'=>$msg_firstname,
	':msg_lastname'=>$msg_lastname,
	':msg_email'=>$msg_email,
	':msg_text'=>$msg_text
	
));


if($result)
{
	echo "1";
}
else
{
	echo "0";
}



?>