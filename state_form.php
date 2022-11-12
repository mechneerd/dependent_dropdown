<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>






	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"; method="POST" >
<lable>Country</label>
<select name="country">
<option>Select a country<option>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT * FROM country";

$result = $con->query($sql);


if($result->num_rows>0){
	
	
	while($rows=$result->fetch_assoc()){
		echo '<option value="'.$rows["country_id"].'">'.$rows["country_name"].'</option>';
		}

}	





?>



	<lable>state</label>
	<input type="Text"  name='state'></input><br>
		
	


	<input type="submit" id='submit' style="background-color:#00cc00;" ></input><br>
	<form>

<?php
$country ='';




if($_SERVER['REQUEST_METHOD']=='POST'){
	$state = $_POST['state'];
	$country = $_POST['country'];


$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql= "INSERT INTO state (state_name,country_id) VALUES ('$state','$country')";


if($con->query($sql)===TRUE){
	echo "Data inserted successfully";
}else{
	echo "Error inserting data".$con->error;	
}


}

?>
  </body>
</html>

