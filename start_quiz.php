
<?php include('functions.php') ?>

<?php
// broj pitanja

$number = (int) $_GET['n'];


$query = "SELECT * FROM `questions` order by rand()";
$result = mysqli_query($db, $query);
$question= mysqli_fetch_assoc($result);
$rand_question_number = $question['question_number'];


$query = "SELECT * FROM `answers` WHERE question_number = $rand_question_number";
$answers = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title>PHP-Quiz</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="header-quiz">
			<h1>PHP Quiz</h1>
		</div>
	
		<div class="content-quiz">
			<form class= "content-quiz" method="post" action="process.php">
			<!-- <div class="current">Pitanje <?php echo $question['question_number'];?></div> -->
			<p class="question">
			<?php echo $question['question_text'];?>
			</p>
			
				<ul class="answers">
					<?php while ($row = mysqli_fetch_assoc($answers)): ?>
						<li><input type="radio" class="answer" name="answer" value="<?php echo $row['answer_id']; ?>"><?php echo $row['answer_text']; ?></li>
					<?php endwhile; ?>
										
				</ul>
				<button type="submit" class="btn-next" name="register_btn"> Sljedeće pitanje</button>
				<input type="hidden" name="number" value="<?php echo $number; ?>">
			</form>

		</div>
	</main>
	
</body>
</html>