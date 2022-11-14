<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
	
	
  </head>

  <body>
	
	<a href="country_form.php" style="margin-left:30px ;text-decoration: none;"><button style="background-color: #4CAF50;">Create</button></a><br>
	<p id="show"></p>
	<div id="table">
	<table  style="border:1px solid;width:100%;text-align:center;"  >
	
	<tr style="border:1px solid">

	<th style="border:1px solid">Country</th>
	<th style="border:1px solid">Action</th>
	
	
	
	</tr>
    

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

		


		echo '<tr>'.'<td>'.$rows['country_name'].'</td>'
.'<td>'.'<a text-decoration: "none"; href="update_country.php?id='.$rows["country_id"].' ">'.'<button style="background-color: #4CAF50;">'.'Update'.'</button>'.'</a>'
.'<a text-decoration: "none"; href="delete_country.php?id='.$rows["country_id"].' ">'.'<button style="background-color: #ff0000;margin-left:15px;">'.'delete'.'</button>'.'</a>'.'</td>'.'</tr>';		
				
		
		}	
}









?>
	</table></div>






  </body>
</html>
