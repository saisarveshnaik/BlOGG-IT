<?php
require '../connect.php';
require '../session_script.php';

error_reporting(0);


$profile_id=$_GET['profile_id'];

$user_id=$_SESSION['user_id'];

$status='';

$sql= $conn->prepare("SELECT * FROM following where following_id='".$profile_id."' and user_id='".$user_id."'");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
if($sql->rowCount()>0){
	foreach (($sql->fetchAll()) as $key => $row) {
		

	$status=$row['status'];
	}
	
	

}


if(($_GET['status'])){
     header('Location:add_profile.php');
     
}
$count=$conn->prepare("SELECT * FROM following where following_id='".$profile_id."' and user_id='".$user_id."'");

$count->execute();


$number_of_rows2=$count->rowCount();


        if($number_of_rows2 == ""){

        	


		$sql="INSERT INTO following(following_id, user_id) VALUES (:profile_id,:created_by)";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':profile_id'=>$profile_id,
			':created_by'=>$user_id
		));
	}
	else if($number_of_rows2 == "1" && $status == "1"){
		
		$sql="UPDATE following SET status='2' WHERE following_id=:profile_id and user_id=:user_id";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':profile_id'=>$profile_id,
			':user_id' =>$user_id
		));}
	else if($number_of_rows2 == "1" && $status == "2"){
			
			$sql="UPDATE following SET status='1' WHERE following_id=:profile_id and user_id=:user_id";
		$stmt= $conn->prepare($sql);
		$result= $stmt->execute(array(
			':profile_id'=>$profile_id,
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