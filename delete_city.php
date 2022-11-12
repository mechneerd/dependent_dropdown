

<?php 
$id = $_GET['id'];

$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

$sql = "DELETE FROM city WHERE city_id=".$id;

 


if($con->query($sql)){
		header("Location:city_display.php ");		
			
}else{echo 'error deleting data';}


?>





