<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded shadow-md w-1/3">
    <h2 class="text-2xl font-semibold mb-6">Login</h2>
    <form id="formLogin">
      <div class="mb-4">
        <label for="username" class="block text-gray-600 font-semibold mb-2">User</label>
        <input type="text" id="username" onchange="validateUsername()" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400" required>
        <span id="message-username"></span>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-600 font-semibold mb-2">Password</label>
        <input type="password" id="password" onchange="validatePassword()" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-400" required>
        <span id="message-password"></span>
      </div>
      <div class="mb-6">
        <button type="button" id="inputForm" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none">Login</button>
      </div>
      <div id="message-login"></div>
    </form>
    <div class="text-center">
      <a href="#" class="text-blue-500 hover:underline">Esqueceu sua senha?</a>
    </div>
  </div>
</body>
<script src="./Views/JS/App.js"></script>
</html>
