<?php
require 'connect.php';
require 'session_script.php';



$blog_id=$_POST['blog_id'];

$report_category=$_POST['report_category'];

$report_desc=$_POST['report_desc'];

$count=$conn->prepare("SELECT * FROM reports where blog_id='".$blog_id."' and user_id='".$_SESSION['user_id']."' and status='1'");

$count->execute();

$number_of_rows1=$count->rowCount(); 

if($number_of_rows1 == ""){


	if($report_category != ""){




		$sql="INSERT INTO reports(blog_id, user_id, report_category, report_desc) VALUES (:blog_id,:user_id,:report_category,:report_desc)";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':blog_id'=>$blog_id,
			':user_id'=>$_SESSION['user_id'],
			':report_category'=>$report_category,
			':report_desc' =>$report_desc
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
}
else
{ 
	echo "5";
}

?>