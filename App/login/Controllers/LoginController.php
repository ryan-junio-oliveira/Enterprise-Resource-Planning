<?php

try {
  $usuario = 'ryan';
  $senha = 'ryan';

  $username = $_POST['username'];
  $pass = $_POST['password'];


  if ($username == $usuario && $pass == $senha) {
    session_start();
    $_SESSION['name'] = 'ryan';
    echo json_encode(400);
  } else {
    echo json_encode(404);
  }
} catch (Exception $e) {
  echo json_encode("Erro ao fazer login, contate o administrador" . $e->getMessage());
}
