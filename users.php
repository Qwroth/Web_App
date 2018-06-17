<!DOCTYPE html>
<html>
<head>
<img id ="banner" src="banner.gif" alt="Banner Image"/> 

<style>

body {
	background-color: lightblue;
}

h1 {
	color: white;
}

</style>

<h1 align="center"> User Management </h1>

<script>

function isFilled() 
 {
 	
 	var name = document.forms["addUser"]["username"].value;
 	var password = document.forms["addUser"]["password"].value;

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

<form name ="addUser" method = "post"  action="users.php">
<p>Create a new user</p><br>
Username: <input type="text" name ="username" onchange="isFilled()"> 
Password: <input type ="text" name="password" onchange="isFilled()"> 
<input type="submit" name="adduserButton" value ="Add User" id="submit" disabled ="disabled"> <br>
<br>

</form>

</body>
</html>

<?php

//print all the users in the database
include "database.php"; 



if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO users (username, password)
VALUES ('".$username."', '".$password."')";

if ($conn->query($sql) === TRUE) {

   }

header('Location: users.php');
}

echo "
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<table>

<tr>
<th>User ID</th>
<th>User Name </th>
<th>Password</th>
</tr>";


$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row["ID"] . "</td>";
		echo "<td>" . $row["username"] . "</td>";
		echo "<td>" . $row["password"] . "</td>"; 
		}
	}


?>