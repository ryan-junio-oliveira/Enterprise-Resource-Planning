<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apresentação</title>
</head>
<body>
  <h1>Essa é a landing page</h1>
  <button id="accessingSystem">Acessar sistema</button>
</body>
<script>
  const buttonAccessSystem = document.getElementById('accessingSystem');

  buttonAccessSystem.addEventListener('click', () => {
    window.location.href = './App/App.php';
  })
</script>
</html>