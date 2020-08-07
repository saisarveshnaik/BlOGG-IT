<?php
require '../connect.php';
require '../session_script.php';



$blog_id=$_POST['blog_id'];

$comment_text=$_POST['comment_text'];


if($comment_text != ""){




$sql="INSERT INTO comments(blog_id, comment_text, user_id) VALUES (:blog_id,:comment_text,:created_by)";
$stmt= $conn->prepare($sql);
$result= $stmt->execute(array(
	':blog_id'=>$blog_id,
	':comment_text'=>$comment_text,
	':created_by' =>$_SESSION['user_id']
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