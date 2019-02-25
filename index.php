<?php 
  include('functions.php');
  if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP-Quiz</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="welcome">
    <h2>Dobrodošli na PHP Quiz</h2>
    <p> Provjerite svoje znanje iz PHP programskog jezika </p>
  </div>
  <div class="content-wrap-home">
    <div class="header-home">
    <h2>Pozdrav, <?php echo $_SESSION['user']['username']; ?>!</h2>

  
  </div>
  <div class="content-home">
    <!-- notification message -->
   <!--  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
           // echo $_SESSION['success']; 
            //unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?> -->
    <!-- logged in user information -->
    <div class="profile_info">
      <img src="admin/user_profile.jpg"  >

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="index.php?logout='1'" style="color: red; font-size: 20px;">odjavi se</a><br>
        

          </small>

        <?php endif ?>
      </div>
    </div>
  <div class="input-group-home">
    <table>
      <tr><td><strong>Broj pitanja u kvizu</strong></td><td>Kviz ima 10 pitanja.</td></tr>
      <tr><td><strong>Područje provjere</strong></td><td>PHP programski jeik, operacijski sustav Linux i MySQL</td></tr>
        <tr><td><strong>Vrijeme trajanja kviza</strong></td><td>5 minuta</td></tr> 
        
    </table>

    
  <div class="start"><a href="start_quiz.php?n=1" style="color: white;">Započni kviz</a></div>
    
  </div>
  <div style="clear: both;"></div>
  
 
 
  </div>

</div>
</body>
</html>