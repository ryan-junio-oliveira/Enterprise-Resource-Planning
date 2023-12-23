<?php
use App\Core\LoadFiles;
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Painel - ERP</title>
</head>

<body>
  <?php LoadFiles::component('panel', 'userlogin'); ?>
  <main>
    <aside>
      <?php LoadFiles::component('panel', 'sidebar'); ?>
    </aside>
    <section>
      <?php LoadFiles::component('panel', 'navbar'); ?>
      <?php LoadFiles::component('panel', 'modules'); ?>
    </section>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<style>
  main {
    display: grid;
    grid-template-columns: 1fr 6fr;
  }
</style>