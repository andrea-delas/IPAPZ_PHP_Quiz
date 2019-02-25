<?php include('../functions.php');
		if(isset($_POST['submit'])) {
//određivanje varijabli
			$question_number = $_POST['question_number'];
			$question_text = $_POST['question_text'];
			$correct_choice = $_POST['correct_choice'];

//spremanje odgovora u array
			$choices = array();
			$choices[1] = $_POST['choice1'];
			$choices[2] = $_POST['choice2'];
			$choices[3] = $_POST['choice3'];
			
//dodavanje pitanja u bazu

			$query = "INSERT INTO questions (question_number, question_text)
							values('$question_number', '$question_text')";
			mysqli_query($db, $query);

				foreach ($choices as $choice => $value) {
					if($value != ''){
						if($correct_choice == $choice) {
							$is_correct = 1;
						}else {
							$is_correct = 0;
						}

//dodavanje odgovora u bazu
			$query = "INSERT INTO answers (question_number, is_correct, answer_text)
						VALUES ('$question_number', '$is_correct', '$value')"; 
			mysqli_query($db, $query);
						
					}
				}
				$msg = 'Pitanje je dodano u bazu';
			}
//pozivanje broja pitanja u formi
			$query = "SELECT count(question_number) AS total FROM questions";
			$result = mysqli_query($db, $query);
			$values= mysqli_fetch_assoc($result);
			$num_rows=$values['total'];
			$next = $num_rows+1;
			
?>	
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<div class="header-add-questions">
		<h2>Unos novih pitanja</h2>
	</div>
		<div class="form-add_questions">
			<?php 
				if (isset($msg)) {
					echo '<p>'.$msg.'</p>';
				}
			?>

			<!-- forma za dodavanje pitanja i odgovora u bazu -->
			<form class="form-add_questions" accept-charset="utf-8" method="post" action="add_questions.php">
				<div class="input-group">
					<label>Broj pitanja:</label>
					<input type="number" value="<?php echo $next; ?>" name="question_number">
				</div>
				<div class="input-group">
					<label>Pitanje:</label>
					<input type="text" name="question_text">
					</div>
				<div class="input-group">
					<label>Odgovor broj 1:</label>
					<input type="text" name="choice1">
					</div>
				<div class="input-group">
					<label>Odgovor broj 2:</label>
					<input type="text" name="choice2">
					</div>
				<div class="input-group">
				
					<label>Odgovor broj 3:</label>
					<input type="text" name="choice3">
					</div>
				<div class="input-group">
					<label>Točan odgovor:</label>
					<input type="number" name="correct_choice">
					</div>
				<div class="input-group">
					<button type="submit" class="btn" name="register_btn"> + Dodaj pitanje</button>
					</div>
			</form>
		</div>
</body>
</html>