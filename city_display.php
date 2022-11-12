<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
	
	
  </head>

  <body>
	
	<a href="city_form.php" style="margin-left:30px ;text-decoration: none;"><button style="background-color: #4CAF50;">Create</button></a><br>
	<p id="show"></p>
	<div id="table">
	<table  style="border:1px solid;width:100%;text-align:center;"  >
	
	<tr style="border:1px solid">
	<th style="border:1px solid" >S.No</th>
	<th style="border:1px solid">City</th>
	<th style="border:1px solid">Action</th>
	
	
	
	</tr>
    

<?php 



$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";
GLOBAL $counter;
$con = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT * FROM city";

$result = $con->query($sql);


if($result->num_rows>0){
	
	$counter;
	while($rows=$result->fetch_assoc()){
		echo '<tr><td>'.$counter.'</td>'.'<td>'.$rows['city_name'].'</td>'
.'<td>'.'<a text-decoration: "none"; href="update_city.php?id='.$rows["city_id"].' ">'.'<button style="background-color: #4CAF50;">'.'Update'.'</button>'.'</a>'
.'<a text-decoration: "none"; href="delete_city.php?id='.$rows["city_id"].' ">'.'<button style="background-color: #ff0000;margin-left:15px;">'.'delete'.'</button>'.'</a>'.'</td>'.'</tr>';		
		$counter++;		
		
		}	
}









?>
	</table></div>






  </body>
</html>
