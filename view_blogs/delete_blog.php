<?php
require '../session_script.php';


date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );







$id= $_POST["id"];
$status= '2';



$sql1 = "UPDATE blogs SET status=:status WHERE blog_id=:id";
$stmt = $conn->prepare($sql1);
$result=  $stmt->execute(array(
	':status' => $status,
	



	':id' => $id		
));

if ($result) {
	echo 1;

}
else{
	echo 0;
}


?>