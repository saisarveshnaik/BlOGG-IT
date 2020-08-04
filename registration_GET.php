<?php
require 'connect.php';

$user_name=$_POST['user_name'];
$user_address=$_POST['user_address'];
$user_cont=$_POST['user_cont'];
$user_email=$_POST['user_email'];
$username=$_POST['username'];
$password=$_POST['password'];
$profile_pic=$_POST['profile_pic'];
$gender=$_POST['gender'];



if ($user_name=='') {
	echo "0";
}
else if ($user_address=='') {
	echo "0";
}
else if ($user_cont=='') {
	echo "0";
}
else if ($user_email==''){
	echo "0";
}
else if ($username==''){
	echo "0";
}
else if ($password==''){
	echo "0";
}
else if ($gender=='') {
	echo "0";
}


else{

	$sql="INSERT INTO users(user_name, user_address, user_cont, user_email, username, password, profile_pic, gender) VALUES (:user_name,:user_address,:user_cont,:user_email,:username,:password,:profile_pic,:gender)";
	$stmt= $conn->prepare($sql);
	$result= $stmt->execute(array(
		':user_name'=>$user_name,
		':user_address'=>$user_address,
		':user_cont'=>$user_cont,
		':user_email'=>$user_email,
		':username'=>$username,
		':password'=>$password,
		':password'=>$password,
		':profile_pic'=>$profile_pic,
		':gender'=>$gender,

	));


	if($result)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}

}

?>