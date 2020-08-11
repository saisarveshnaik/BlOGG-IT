<?php
require 'connect.php';
require 'session_script.php';

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$address=$_POST['address'];
$password=$_POST['password'];
$created_by=$_SESSION['user_id'];
$profile_pic=$_POST['profile_pic'];




$sql="UPDATE users SET user_name = '".$name."', username = '".$username."', user_email = '".$email."', user_address = '".$address."', password = '".$password."', profile_pic = '".$profile_pic."' where user_id= '".$_SESSION["user_id"]."' ";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':name'=>$name,
	':email'=>$email,
	':username'=>$username,
	':address'=>$address,
	':password'=>$password,
	':profile_pic'=>$profile_pic,
	':created_by' =>$created_by
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
