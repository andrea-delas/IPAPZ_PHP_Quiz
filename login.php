<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="welcome">
    <h2>Dobrodošli na PHP Quiz</h2>
    <p> Provjerite svoje znanje iz PHP programskog jezika </p>
  </div>
  <div class="content-wrap">

  <div class="header">
    <h2>Prijava</h2>
  </div>
  
  <form method="post" action="login.php">

    <?php echo display_error(); ?>

    <div class="input-group">
      <label>Korisničko ime</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Lozinka</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_btn">Prijavi se</button>
    </div>
    <p>
      Nemate korisničko ime? <a href="register.php">Registrirajte se</a>
    </p>
  </form>
  </div>
  <div class="image">
    
  </div>
</body>
</html>