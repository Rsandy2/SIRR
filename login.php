<?php

#Start sessions with the login page
session_start();
$_SESSION['count'] = 0;
$_SESSION['username'] = "";
?>





<!--  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>

    <!--------------- CSS --------------->
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <!--------------- Navigation --------------->
    <nav class="navigation-main">
      <div class="navigation-container">
        <div>
          <a href="index.php"> Project <b>SIRR</b> </a>
        </div>
        <div class="navigation-items">
          <a href="Leaderboard.php">Leaderboards</a>
          <a href="#">Meet The Team</a>
          <a href="#">Contact Us</a>
        </div>
      </div>
    </nav>

 
    <section class="login-section">
      <div class="login-container">
      <div class="content-image">
                  <img src="assets/1138202.jpg" alt="" />
                </div>
        <form class="form-container"id="Login" action="hstuff.php" method="POST">
          <div class="form-item">
            <input
              type="text"
              name="username"
              class="form-input"
              autocomplete="off"
              placeholder="Username"
            />
            <!-- <a class="quizButton" type="submit" name="doLogin">Login</a> -->
            <input className="form-submit" type="submit" />
          </div>
        </form>
        
      </div>
    </section>

  </body>
</html>













