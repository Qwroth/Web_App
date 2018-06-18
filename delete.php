<?php
	include"database.php";
 
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM users WHERE ID='$id'";
		$result = $conn->query($sql);
		echo "<meta http-equiv='refresh' content='0;url=users.php'>";
	}
?>