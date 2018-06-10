<?php

include "database.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$username = $_POST["username"];
$password = $_POST["password"];
$ID =1;

	$sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		header('Location: login.php');
        die;
	}
	
}
?>


<!DOCTYPE html>
<html>
<head>

<style> 
body {
	background-color: lightblue;
}

h1 {
	color: white;
}

</style>

<img id ="banner" src="banner.gif" alt="Banner Image"/> 

<div align = center>
<h1>  -----   Products Company   ----- </h1>
<script>
 
 function isFilled() 
 {
 	
 	var name = document.forms["myForm"]["username"].value;
 	var password = document.forms["myForm"]["password"].value;

 	if(name != "" && password != "")
 	{
 		
 		document.getElementById("submit").disabled = false; 
 	}
 	else{
 		document.getElementById("submit").disabled = true; 
 	}

 	
 	               
 }


</script>
</head>
<body>

<form name="myForm" action="form.php" method ="post">
<p><font size = "2"> Please login </font> </p>
<br>
Username: <input id="username" type="text" name="username" onchange="isFilled()"> <br>
<br>
Password:     <input id="password" type= "password" name ="password" onchange="isFilled()">  <br> 
<br>
<input id = "submit" type="submit" value="Submit" disabled ="diabled">
</form>
</div>
</body>
</html>
