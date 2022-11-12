<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
	
	
  </head>

  <body>
	
	<a href="state_form.php" style="margin-left:30px ;text-decoration: none;"><button style="background-color: #4CAF50;">Create</button></a><br>
	<p id="show"></p>
	<div id="table">
	<table  style="border:1px solid;width:100%;text-align:center;"  >
	
	<tr style="border:1px solid">
	<th style="border:1px solid" >S.No</th>
	<th style="border:1px solid">State</th>
	<th style="border:1px solid">Action</th>
	
	
	
	</tr>
    

<?php 



$servername="localhost";
$username="root";
$password="";
$dbname="prasanthdb";
GLOBAL $counter;
$con = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT * FROM state";

$result = $con->query($sql);


if($result->num_rows>0){
	
	$counter;
	while($rows=$result->fetch_assoc()){
		echo '<tr><td>'.$counter.'</td>'.'<td>'.$rows['state_name'].'</td>'
.'<td>'.'<a text-decoration: "none"; href="update_state.php?id='.$rows["state_id"].' ">'.'<button style="background-color: #4CAF50;">'.'Update'.'</button>'.'</a>'
.'<a text-decoration: "none"; href="delete_state.php?id='.$rows["state_id"].' ">'.'<button style="background-color: #ff0000;margin-left:15px;">'.'delete'.'</button>'.'</a>'.'</td>'.'</tr>';		
		$counter++;		
		
		}	
}









?>
	</table></div>






  </body>
</html>
