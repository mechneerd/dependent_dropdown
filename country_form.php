<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>






	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"; method="POST" >
		<lable>country</label>
		<input type="Text"  name='country'></input><br>
		
	


	<input type="submit" id='submit' style="background-color:#00cc00;" ></input><br>
	<form>

<?php




if($_SERVER['REQUEST_METHOD']=='POST'){
	$country = $_POST['country'];
	


$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql= "INSERT INTO country (country_name) VALUES ('$country')";


if($con->query($sql)===TRUE){
	echo "Data inserted successfully";
}else{
	echo "Error inserting data".$con->error;	
}


}

?>
  </body>
</html>

