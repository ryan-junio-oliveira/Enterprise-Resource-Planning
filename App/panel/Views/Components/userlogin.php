<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SESSION['name'] != 'ryan'){
  header("Location: /login");
  session_destroy();
  die();
}