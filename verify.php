<?php require "islogged.php"; ?>
<?php

echo $_SESSION['username'];
echo $_POST["answer"];

$_SESSION["count"]++;

?>