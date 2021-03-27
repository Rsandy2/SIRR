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
    //$username = $_GET["username"];
    //$score = $_GET["score"];

 
    $username = $_SESSION['username'];
    echo $_SESSION['username'];
    $score = 22;
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
      if($i<11){
      echo "<tr>
          <td>{$i}</td>
          <td>{$array[0]}</td>
              <td>{$array[1]}</td>
            </tr>";
      }
    }
    if($spliceCheck){
      implode("/n", $lb);
      file_put_contents("leaderboard.txt", $lb);
   }
   echo "You are {$place} on the leaderboard!";
    
  ?>

    

</table>
</body>
</html>