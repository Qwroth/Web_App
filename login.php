

<?php
/*
include "database.php"; 

$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id:" . $row["ID"] . " name:" . $row["username"] . "<br>";
		}
	}
*/
?>


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
<style> 

.b{

	background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}



</style>

<h1 align = center> Welcome Home </h1>
</head>
<body>

<button class="b" name="userButton" onclick="location.href='users.php' " >Users </button> 



</body>
</html>