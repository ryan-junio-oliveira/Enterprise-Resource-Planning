<h1>Bem vindo a home</h1>

<?php

session_start();

if ($_SESSION['nome'] != 'ryan'){
  header("Location: /");
  session_destroy();
  die();
}else{
  print_r($_SESSION);
}