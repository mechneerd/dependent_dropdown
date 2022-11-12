<!DOCTYPE html>
<html>
  <head>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>


<body>
<div style="margin-left:300px; margin-top:200px; border-radius:10px;padding:20px;width:230px; height:120px; background-color:#925F55">
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

	</select></br>

	<lable>State</label>
	<select style="margin-left:20px; margin-top:20px;" name="state" id="state">
	<option>Select a state<option>

	</select></br>


	<lable>City</label>
	<select style="margin-left:25px; margin-top:20px;" name="city" id="city">
	<option>Select a city<option>

	</select>
</div>



<script>
$(document).ready(function(){

$("select[name='country']").change(function(){
	var country = $(this).val();
	console.log(country);



//if select a valid country


	if(country){


	$.ajax({
		url:"sendstate.php",
		type:"post",
		data:{country},
		success:function(data){
		    $('#state').html(data);
                    

                	}
			});
	
}




});

$("select[name='state']").change(function(){
	var state = $(this).val();
	console.log(state);



//if select a state country


	if(state){


	$.ajax({
		url:"sendcity.php",
		type:"post",
		data:{state},
		success:function(data1){
		    $('#city').html(data1);
                    

                	}
			});
	
}




});








});
















</script>

</body>

</html>
