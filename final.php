<?php session_start() ;?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Quiz</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="header-final">
			<h1>PHP Quiz</h1>
		</div>
	
		<div class="content-final">
			<h2>Stigli ste do kraja!</h2>
			<p>Čestitamo!</p>
			<p>Ukupan broj bodova:<strong> <?php echo $_SESSION['score']; ?>/10</strong></p>
			<!-- session_destroy je korišten da bi brojač točnih odgovora postavili u nulu kad se klikne na ponovno igraj kviz -->
			<div class="final-start"><a href="start_quiz.php?n=1" <?php session_destroy();?> style="color: white;">Igraj ponovno</a></div> 

		</div>
</body>
</html>



