<?php
require '../connect.php';
require '../session_script.php';

error_reporting(0);


$blog_id=$_GET['blog_id'];

$user_id=$_SESSION['user_id'];

$status='';

$sql= $conn->prepare("SELECT * FROM likes where blog_id='".$blog_id."' and user_id='".$user_id."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
	foreach (($sql->fetchAll()) as $key => $row) {
		

	$status=$row['status'];
	}
	
	

}


if(($_GET['status'])){
     header('Location:add_like.php');
     
}
$count=$conn->prepare("SELECT * FROM likes where blog_id='".$blog_id."' and user_id='".$user_id."'");

$count->execute();


$number_of_rows2=$count->rowCount();


        if($number_of_rows2 == ""){

        	


		$sql="INSERT INTO likes(blog_id, user_id) VALUES (:blog_id,:created_by)";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':blog_id'=>$blog_id,
			':created_by'=>$user_id
		));
	}
	else if($number_of_rows2 == "1" && $status == "1"){
		
		$sql="UPDATE likes SET status='2' WHERE blog_id=:blog_id and user_id=:user_id";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':blog_id'=>$blog_id,
			':user_id' =>$user_id
		));}
	else if($number_of_rows2 == "1" && $status == "2"){
			
			$sql="UPDATE likes SET status='1' WHERE blog_id=:blog_id and user_id=:user_id";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':blog_id'=>$blog_id,
			':user_id' =>$user_id
		));

	}
	


if($result)
{
	echo "1";
}
else
{
	echo "0";
}



?>