<?php

function setComment($link) {
	if(isset($_POST['commentSubmit'])) {
		$message = $_POST['message'];
		$sql = "INSERT INTO benny.comments (comment) VALUES('$message')";
		$result = $link->query($sql);
	}
}
function getComments($link){
	$sql = "SELECT * FROM benny.comments ORDER BY date desc";
	$result = $link->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo $row['date'].">".$row['comment']."<br>";
	}
}

?>
