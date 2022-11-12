<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>






<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"; method="POST" >
<lable>Country</label>
<select name="country" id="country">
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
</select>



<lable>state</label>
<select name="state" id="state">
<option>Select a state<option>

<script>
$(document).ready(function(){
	$('#country').change(function(){
		var country= $(this).val();
		console.log(country);
		$.ajax({
			url:"sendstate.php",		
			type:"post",
			data:{country},
			success:function(data){
				$('#state').html(data);
				},
		})
		


})
	


});


</script>




</select>
	<lable>city</label>
	<input type="Text"  name='city'></input><br>
		
	


	<input type="submit" id='submit' style="background-color:#00cc00;" ></input><br>
	<form>

<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
	$city = $_POST['city'];
	$state = $_POST['state'];




$sql3= "INSERT INTO city (city_name,state_id) VALUES ('$city','$state')";


if($con->query($sql3)===TRUE){
	echo "Data inserted successfully";
}else{
	echo "Error inserting data".$con->error;	
}


}




?>
  </body>
</html>

