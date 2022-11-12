<!DOCTYPE html>
<html>

<head>

</head>

<body>




<?php 


$id = $_GET['id'];


$servername = "localhost";
$username="root";
$password="";
$dbname="prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
	die('connection failed'.$con->error);}

$sql = "SELECT * FROM country WHERE country_id = $id ";

$result = $con->query($sql);

if($result->num_rows > 0){
	while ($rows = $result->fetch_assoc()){
		  $country = $rows['country_name'];
		 
		  
		  
			
	}

}else{
	echo '0 result';	
	}






?>


<h1 style="color:#A9A9A9; margin-left:300px; margin-top:50px;'">update form </h1>
<div id="cont" style="background-color:#00cc99;display:flex;width:250px;height:100px;margin-left:300px;margin-top:20px;padding-left:10px;padding-top:10px;border-radius:10px;">
	<form method="POST">
		<lable>Country</label>
		<input type="Text"  name='country' value="<?php echo($country); ?>" ></input><br>

		
	<input type="submit" id='submit' style="background-color:#00cc00;" ></input><br>
	<button style="background-color: #f44336; text-decoration:'none';"><a href="country_display.php"  >Back</a></button>
</form>



<?php

$country ='';


if($_SERVER['REQUEST_METHOD']=='POST'){

	$country = $_POST['country'];

$sql = "UPDATE country SET country_name = '$country' WHERE country_id =$id";



if($con->query($sql)===TRUE){
	
	header("Location:country_display.php ");
	}else{
	echo 'error updating';}
}



$con->close();
?>



</body>

</html>