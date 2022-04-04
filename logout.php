<?php

session_start();
unset($_SESSION["userName"]);
unset($_SESSION["password"]);
unset($_SESSION["repassword"]);
unset($_SESSION["Country"]);
unset($_SESSION["Province"]);
unset($_SESSION["Age"]);
unset($_SESSION["email"]);
unset($_SESSION["FLname"]);
echo 'wait for 3 second';

header("refresh:3; url=LibraryMainPage.html");
?>