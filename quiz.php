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
            if(isset($_POST['username'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['count'] = 0;
            }

            login($_SESSION['username']);

            // if(isset($_POST['answer'])){
            //   $_SESSION['count']++;
            // }
            if(isset($_POST["answer"])){
              if(intval($_POST['answer']) != intval($content[$_SESSION['count']][5])){
                 header("Location: Leaderboard.php");
                  exit();
              }

             $_SESSION['count']++;
          }
         
            ?>
             
  <!--------------- Quiz Section --------------->
  <section class="quiz-section">   

        
        <form action="quiz.php" method = "post">
            
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