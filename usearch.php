<?php 

session_start();

error_reporting(0);

$Username=$_POST['username'];


require 'connect.php';
$stmt = $conn->prepare('SELECT * FROM users');
$stmt->execute(); $stmt->setFetchMode(PDO::FETCH_ASSOC);
if($stmt->rowCount()>0){
  foreach(($stmt->fetchAll()) as $k1=>$row) { 
   
    if( $row['username'] == $Username ){
      
     echo '1';
   }
   else
   {
     echo '0';
   }

 }

}





?>