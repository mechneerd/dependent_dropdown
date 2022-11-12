<?php

$servername = "localhost";
$username="root";
$password="";
$dbname = "prasanthdb";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){ 
	die ("connection unsuccessful".$con->connect_error);
		}


$sql= "INSERT INTO city(city_name,state_id) VALUES ('karur','6')";


if($con->query($sql)===TRUE){
	echo "Data inserted successfully";
}else{
	echo "Error inserting data".$con->error;	
}


?>