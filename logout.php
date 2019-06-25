<?php

  session_start();
  session_destroy();
  header('Location: Home.php'); //Dont forget to redirect
  exit;

?>