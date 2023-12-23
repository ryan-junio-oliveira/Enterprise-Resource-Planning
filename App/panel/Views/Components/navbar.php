<?php

use App\Core\LoadFiles;

LoadFiles::component('panel', 'userlogin');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="caminho/para/sua/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
    </a>
    <div class="navbar-text ms-auto">
      <span><?php echo $_SESSION['name']; ?></span>
    </div>
  </div>
</nav>