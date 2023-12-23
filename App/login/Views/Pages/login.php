<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./App/Login/Views/Css/login.css">
</head>

<body class="bg-secondary d-flex flex-column gap-5 align-items-center d-flex vh-100">

  <div class="bg-primary text-white d-flex justify-content-center align-items-center" style="width: 100%; height:100px; top: 0;">
    <h1 class="text-white mx-auto">Enterprise Resource Planning</h1>
  </div>

  <div class="d-flex justify-content-center flex-column div-form">
    <div class="bg-white p-4 rounded shadow-md justify-content-center">
      <h2 class="text-center text-primary fw-bold mb-4">Login</h2>
      <form id="formLogin">
        <div class="mb-3">
          <label for="username" class="form-label fw-bold text-secondary">User</label>
          <input type="text" id="username" onchange="validateUsername()" name="username" class="form-control" required>
          <span id="message-username"></span>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label fw-bold text-secondary">Password</label>
          <input type="password" id="password" onchange="validatePassword()" name="password" class="form-control" required>
          <span id="message-password"></span>
        </div>
        <div class="mb-4">
          <button type="button" id="inputForm" class="btn btn-primary w-100">Login</button>
        </div>
        <div id="message-login"></div>
      </form>
      <div class="text-center">
        <a href="#" class="text-primary text-decoration-none">Esqueceu sua senha?</a>
      </div>
    </div>
  </div>
</body>

<script src="./App/Login/Views/Api/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>