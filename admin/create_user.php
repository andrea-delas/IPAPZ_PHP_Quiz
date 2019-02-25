<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header-create-user">
		<h2>Kreiranje novog korisnika</h2>
	</div>
	<div class="create-user">
	
	<form class="create-user" method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Korisničko ime</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email adresa</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Tip korisnika</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">Korisnik</option>
			</select>
		</div>
		<div class="input-group">
			<label>Lozinka</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Potvrdite lozinku</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Kreiraj korisnika</button>
		</div>
	</form>
</div>
</body>
</html>