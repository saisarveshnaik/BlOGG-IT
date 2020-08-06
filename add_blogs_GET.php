<?php
require 'connect.php';
require 'session_script.php';

$blog_pic=$_POST['blog_pic'];
$blog_category=$_POST['blog_category'];
$blog_title=$_POST['blog_title'];
$blog_short_desc=$_POST['blog_short_desc'];
$blog_desc=$_POST['blog_desc'];
$created_by=$_SESSION['user_id'];




$sql="INSERT INTO blogs(blog_pic, blog_category, blog_title, blog_short_desc, blog_desc, user_id) VALUES (:blog_pic,:blog_category,:blog_title,:blog_short_desc,:blog_desc,:created_by)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':blog_pic'=>$blog_pic,
	':blog_category'=>$blog_category,
	':blog_title'=>$blog_title,
	':blog_short_desc'=>$blog_short_desc,
	':blog_desc'=>$blog_desc,
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