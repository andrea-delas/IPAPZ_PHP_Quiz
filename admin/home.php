<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title>PHP-Quiz</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="welcome">
    <h2>Dobrodošli na PHP Quiz</h2>
    <p> Provjerite svoje znanje iz PHP programskog jezika </p>
  </div>
	<div class="header-admin-home">
		<h2>Pozdrav, <?php echo $_SESSION['user']['username']; ?>!</h2>
		<p>PHP Quiz - admin stranica</p>
		
		
	</div>
	<div class="content-admin-home">
		<div class="profile_info">
			<img src="../admin/admin_profile.png"  >
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">odjavi se</a>
					</small>
				<?php endif ?>
			</div>
		</div>
		<div class="admin-home-task">
				<h4>Što želite napraviti?</h4>
				<ul class="admin-task-ul">
					<li><a href="create_user.php">Dodati novog korisnika</a></li>
					<li><a href="add_questions.php">Dodati nova pitanja</a></li>  
			</div>
			<div class="admin-start"><a href="../start_quiz.php?n=1" style="color: white;">Započni kviz</a></div>
	</div>
</body>
</html>