<?php

session_start();

if ($_SESSION['nome'] != 'ryan'){
  header("Location: /");
  session_destroy();
  die();
}