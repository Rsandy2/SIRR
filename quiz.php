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

    <?php 
            session_start(); 
            include("logic.php");
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['count'] = 0;
            echo $_SESSION['username'];
            if($_POST["answer"]){
              echo $_POST["answer"];
              echo $content[$_SESSION['count']][5];
              // echo getty/pe($_POST["answer"]);
              // echo gettype($content[$_SESSION['count']][5]);
            }
            // if(isset($_POST["answer"])){
            // if(strcmp($_POST["answer"] , $content[$_SESSION['count']][5])){
            //   echo "test";
            // }else{
            //   echo "fail";
            // }}
            // include("login.php");
            //incrementation
            
                // if(isset($_POST["answer"])){
                //     if($_POST['answer'] != $content[$_SESSION['count']][5]){
                //         header("Location: Leaderboard.php");
                //         exit();
                //     }
                   
                //     $_SESSION['count']++;
                // }
                login($_SESSION['username']);
                // $file = file_get_contents("acct.txt");
                // $users = explode("\n", $file);
                
                // $result = array_search($_SESSION['username'], $users, true);
                // //if name is not found
                // if($result === false){
                //     addUser($_SESSION['username']);
                //     echo '<div class="welcome-message">Good luck <p>'. $_SESSION['username'] . '</p></div>';
                // }
                // //if found
                // else{
                //     // echo "<div class='welcome-message'>" . $name . "</div>";
                //     echo '<div class="welcome-message">Welcome back <p>'. $_SESSION['username'] . '</p></div>';
                // }

                
            
            //setting username if on first iteration
            // if($_SESSION['count'] == 0){
            //     $_SESSION['username'] = login($_SESSION['username']);;
            // }
            // //adding username and printing name
            // login($_SESSION['username']);
            // echo $_SESSION['count'];
            // echo " answer:" . $content[$_SESSION['count']][5];
            ?>
             
  <!--------------- Quiz Section --------------->
  <section class="quiz-section">   

        
        <form action="verify.php" method = "post">
            
            <div class="quiz-header">
              <h2><?=$_SESSION['count']?> / <?=sizeof($content)?></h2>
                <?= 
                    $content[$_SESSION['count']][0]
                ?>
            </div>
            <div class="quiz-grid">
            
                <button type ="submit" class="res" id = "1" name = "answer" value = "1">
                <h2><?=$content[$_SESSION['count']][1]?></h2>
                </button>
            
                <button type = "submit" class="res" id = "2" name = "answer" value = "2">
                <h2><?=$content[$_SESSION['count']][2]?></h2>
                </button>
        
           
                <button type = "submit" id = "3" class="res" name = "answer" value = "3">
                <h2><?=$content[$_SESSION['count']][3]?></h2>
                </button>
       

                <button type = "submit" id = "4" class="res" name = "answer" value = "4">
                <h2><?=$content[$_SESSION['count']][4]?></h2>
                </button>
                <!-- `<input type = "submit" value = "Final Answer" name = "submit"> -->
            <!-- </fieldset> -->
            </div>
        </form>
  </section>


    </body>
</html>