
<?php include('../functions.php');
		if(isset($_POST['submit'])) {
			//get post variable
			$question_text = $_POST['question_text'];
			$correct_choice = $_POST['correct_choice'];

			//choices array
			$choices = array();
			$choices[1] = $_POST['choice1'];
			$choices[2] = $_POST['choice2'];
			$choices[3] = $_POST['choice3'];
			
			//question query

			$query = "INSERT INTO questions (question_text)
							values('$question_text')";

			//run query

			mysqli_query($db, $query);
			//validate insert

			//if($insert_row) {
				foreach ($choices as $choice => $value) {
					if($value != ''){
						if($correct_choice == $choice) {
							$is_correct = 1;
						}else {
							$is_correct = 0;
						}

						//choice query
						$query = "INSERT INTO answers (is_correct, answer_text)
						VALUES ('$is_correct', '$value')";


						//run query
						mysqli_query($db, $query);

						//validate insert
						
					}
				}
				$msg = 'Question has been added';
			}
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Dodaj nova pitanja</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
	<header>
		<div class="container">
		<h1>Unos novih pitanja</h1> 	
	</div>
	</header>
	<main>
		<div class="container">
			<h2>Dodaj pitanje</h2>
			<?php 
				if (isset($msg)) {
					echo '<p>'.$msg.'</p>';
				}

			?>
			<form accept-charset="utf-8" method="post" action="add_questions.php">
				<p>
					<label>Pitanje</label>
					<input type="text" name="question_text">
				</p>
				<p>
					<label>Odgovor br.1</label>
					<input type="text" name="choice1">
				</p>
				<p>
					<label>Odgovor br.2</label>
					<input type="text" name="choice2">
				</p>
				<p>
					<label>Odgovor br.3</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Točan odgovor</label>
					<input type="number" name="correct_choice">
				</p>
				<p>
					<input type="submit" name="submit" value="submit">
				</p>
			</form>
			
		</div>
	</main>
	


</body>
</html>