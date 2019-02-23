<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quiz</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Pitanje 1 od 10</div>
			<p class="question">
				What does PHP stand for?
			</p>
			<form method="post" action="process.php">
				<ul class="answers">
					<li><input type="radio" name="answer" value="1">PHP: Hypertext Preprocessor</li>
					<li><input type="radio" name="answer" value="1">PHP: Private Home Page</li>		
					<li><input type="radio" name="answer" value="1">PHP: Personal Home Page</li>							
				</ul>
				<input type="submit" value="submit">
			</form>

		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2019.
			
		</div>
	</footer>
</body>
</html>