<?php require "islogged.php"; ?>
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

<table>
    <tr>
        <td>Rank</td>
        <td>User</td>
        <td>Score</td>
    </tr>

    <?php
    $username = $_SESSION['username'];
    $score = $_SESSION['count'];

    $lb = file("leaderboard.txt");
    $place = 0;
    $spliceCheck = false;
    for ($i = 1; $i <= count($lb); $i++) {
      $array = explode(",",$lb[$i-1]);

      if((!$spliceCheck) && $score >= $array[1]){
        array_splice($lb, $i-1, 0, $username.",".$score."\n");
        $spliceCheck = true;
        $place = $i;
      }
    }
    for($i=1; $i <= 11 && $i<= count($lb); $i++){
      $array = explode(",",$lb[$i-1]);
      echo("
          <tr>
            <td>{$i}</td>
            <td>{$array[0]}</td>
            <td>{$array[1]}/10</td>
      ");
    }
    if($spliceCheck){
      implode("/n", $lb);
      file_put_contents("leaderboard.txt", $lb);
   }
   if($score == 10){
    echo "Congrats you got a perfect score! You are on the top of the leaderboard!";
   }
   else{
    echo "You are number {$place} on the leaderboard with {$score} out of 10 correct!";
  }
  ?>

    

</table>
</body>
</html>