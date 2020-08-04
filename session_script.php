<?php 

session_start();
require 'connect.php';
if (isset($_SESSION["username"])){

// echo $_SESSION["first_name"];
	$sql= $conn->prepare("SELECT * FROM users where username= '".$_SESSION['username']."' and password='".$_SESSION['password1']."'");
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	if($sql->rowCount()>0){

		$user_name =$_SESSION["user_name"];
        $user_id =$_SESSION["user_id"];
        
		// $user_type =$_SESSION["user_type"] ;
		// $type_id= $_SESSION["type_id"] ;


	}else{
		
	}


}else{
	
}

?>