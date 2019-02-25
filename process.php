
<?php include('functions.php') ?>
<?php
//provjera rezultata
if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}

if ($_POST) {
	$number = $_POST['number'];
	$selected_choice = $_POST['answer'];
	$next = $number+1;

//odabiranje samo 10 odgovora

	$query ="SELECT * FROM `questions` LIMIT 10";
	$results = mysqli_query($db, $query);
	$total= mysqli_num_rows($results);
	$rand_question_number = $next;

//dobivanje točnog odgovora

	$query = "SELECT * from `answers` where question_number = $rand_question_number and is_correct = 1";
	$result = mysqli_query($db, $query);
	$row= mysqli_fetch_assoc($result);
	$correct_choice = $row['answer_id'];

//uspoređivanje točnog sa odabranim
	if ($correct_choice == $selected_choice) {

//pribrajanje točnih odgovora
		$_SESSION['score']++;
	}
		if ($number == $total) {
			header("Location: final.php");
			exit();
		} else {
			header("Location: start_quiz.php?n=".$next);
		}	
}
?>