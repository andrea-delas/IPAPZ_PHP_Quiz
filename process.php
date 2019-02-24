

<?php include('functions.php') ?>
<?php
//check score
if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}

if ($_POST) {
	$number = $_POST['number'];
	$selected_choice = $_POST['answer'];
	$next = $number+1;

	//get total question

	$query ="SELECT * FROM `questions` ";
	$results = mysqli_query($db, $query);
	$total= mysqli_num_rows($results);




	//get correct choice

	$query = "SELECT * from `answers` where question_number = $number and is_correct = 1";

	//get result
	$result = mysqli_query($db, $query);

	//get row
	$row= mysqli_fetch_assoc($result);

	//set correct choice
	$correct_choice = $row['answer_id'];

	//compare
	if ($correct_choice == $selected_choice) {
		//correct answer
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