<?php
	$link = mysqli_connect(secrets.DATABASE, secrets.DB_USERNAME, secrets.DB_PASSWORD);
	if(mysqli_connect_error()){
			die("Connection failed: ".mysqli_connect_error());
	}
?>
