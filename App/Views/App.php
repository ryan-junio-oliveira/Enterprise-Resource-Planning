<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ERP</title>
  </head>
  <body>
  <div class="container-fluid">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12 banner bg-primary text-white text-center py-5">
        <h1>Enterprise Resource Planning</h1>
        <button id="accessingSystem" class="btn btn-light btn-lg mt-3">Acessar o Sistema</button>
      </div>
    </div>
  </div>
    <iframe src="https://gamma.app/embed/wydhz0udic1l43t" style="width:100%; max-width: 100%; height: 500px" allow="fullscreen" title="Promover um ERP"></iframe>
  </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  const buttonAccessSystem = document.getElementById('accessingSystem');

  buttonAccessSystem.addEventListener('click', () => {
    window.location.href = './login';
  })
</script>
</html>
