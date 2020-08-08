<?php
	$link = mysqli_connect(DATABASE, DB_USERNAME, DB_PASSWORD);
	if(mysqli_connect_error()){
			die("Connection failed: ".mysqli_connect_error());
	}
?>
