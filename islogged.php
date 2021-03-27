<?php
   include("logic.php");
   session_start();
   if (isset($_SESSION['username'])) {
     // This session already exists, should already contain data
      //  echo "User ID:", $_SESSION['username'], "<br />";
      // login($_SESSION['username']);
   } else {
       // New PHP Session / Should Only Be Run Once/Rarely/Login/Logout

       login($_SESSION['username']);
      
   }

?>

