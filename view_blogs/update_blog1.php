<?php
require '../connect.php';
require '../session_script.php';

date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

$blog_id=$_POST['blog_id'];

$blog_title=$_POST['blog_title'];

$blog_desc=$_POST['blog_desc'];





$sql="UPDATE blogs SET blog_title=:blog_title, blog_desc=:blog_desc, modified_date_time=:modified_date_time WHERE blog_id=:blog_id";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':blog_id'=>$blog_id,
	':blog_title'=>$blog_title,
	':blog_desc'=>$blog_desc,
	':modified_date_time' =>$today
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