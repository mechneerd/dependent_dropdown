

<?php 
$country_id = $_GET['id'];

$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

$sql = "DELETE FROM country WHERE country_id=".$country_id;

 


if($con->query($sql)){
		header("Location:country_display.php ");		
			
}else{echo 'error deleting data';}


?>





