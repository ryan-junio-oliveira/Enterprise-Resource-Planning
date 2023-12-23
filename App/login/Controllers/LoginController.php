<?php 

$usuario = 'ryan';
$senha = 'ryan';

$username = $_POST['username'];
$pass = $_POST['password'];


if($username == $usuario && $pass == $senha){
  session_start();
  $_SESSION['name'] = 'ryan';
  echo json_encode(400);
}else{
  echo json_encode(404);
}