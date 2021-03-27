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
  
  
  <?php

    $questions = file_get_contents("QNA.txt");
    $content = [];
    foreach(explode("\n", $questions) as $line){
        $content[] = explode("|", $line);
    }

    // print_r($content);

    function addUser($name){

        $username = $name;
    
        $file = "acct.txt";
        $tuples = file_get_contents($file);
        $tuples .= $username . "\n";
        file_put_contents($file, $tuples);
    
    }

    function login($name){
        $file = file_get_contents("acct.txt");
        $users = explode("\n", $file);
        
        $result = array_search($name, $users, true);
        //if name is not found
        if($result === false){
            addUser($name);
            echo '<div class="welcome-message">Good luck <p>'. $name . '</p></div>';
        }
        //if found
        else{
            // echo "<div class='welcome-message'>" . $name . "</div>";
            echo '<div class="welcome-message">Welcome back <p>'. $name . '</p></div>';
        }
    }
    ?>

