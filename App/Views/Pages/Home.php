<h1>Bem vindo a home</h1>

<?php

session_start();

if ($_SESSION['nome'] != 'ryan'){
  header("Location: /");
}else{
  print_r($_SESSION);
}