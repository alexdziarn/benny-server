<?php
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	<h1><center>Benny the Dog</center></h1>
    <div class="slidershow middle">
      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="pictures\XqXYFup.jpg" alt="">
        </div>
        <div class="slide">
          <img src="pictures\bennns.PNG" alt="">
        </div>
        <div class="slide">
          <img src="pictures\benny.png" alt="">
        </div>
        <div class="slide">
          <img src="pictures\benny2.PNG" alt="">
        </div>
        <div class="slide">
          <img src="pictures\benny4.PNG" alt="">
        </div>
      </div>
      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
	<p><center>Make a comment for this good boy</center></p>
	<?php
		echo "<form method='POST' action='".setComment($link)."'><center>
			<textarea name='message' placeholder='Write a comment here' id='message'></textarea><br><br>
			<button type='submit' name='commentSubmit'>Comment</button>
		</center></form>";
	?>	
	
	<div class="boxed">Comments: <br>
		<?php
			getComments($link);
		?>
	</div> 
	

	
  </body>
</html>
