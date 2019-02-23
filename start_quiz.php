<?php include('functions.php') ?>
<?php
// set question number

$number = (int) $_GET['n'];

$query = "SELECT * FROM `questions` WHERE question_number = $number";
$result = mysqli_query($db, $query);
$question= mysqli_fetch_assoc($result);

$query = "SELECT * FROM `answers` WHERE question_number = $number";
$answers = mysqli_query($db, $query);


?>

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
			<?php echo $question['question_text'];?>
			</p>
			<form method="post" action="process.php">
				<ul class="answers">
					<?php while ($row = mysqli_fetch_assoc($answers)): ?>
						<li><input type="radio" name="answer" value="<?php echo $row['answer_id']; ?>"><?php echo $row['answer_text']; ?></li>
					<?php endwhile; ?>
										
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