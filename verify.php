<?php require "islogged.php"; ?>
<?php
if(strcmp($_POST["answer"] , $content[$_SESSION['count']][5])){
              echo "test";
            }else{
              echo "fail";
            }

            ?>