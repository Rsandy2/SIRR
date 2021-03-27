<?php
   // include("logic.php");
   session_start();
   if (isset($_SESSION['username'])) {
   //   echo "session active";
   } else {
       // New PHP Session / Should Only Be Run Once/Rarely/Login/Logout
       $_SESSION['username'] = $_POST['username'];
       $_SESSION['count'] = 0;
      //  login($_SESSION['username']);
      header("Location: login.php");
                //         exit();
      
   }

?>

