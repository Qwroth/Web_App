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
function addUser()
{
alert("hello")
}
</script>

</head>
<body>

<form>
Username: <input type="text"> Password: <input type ="text"> <input type="button" name="adduserButton" value ="Add User" onclick ="addUser()"> <br>
<br>

</form>

</body>
</html>

<?php

include "database.php"; 

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