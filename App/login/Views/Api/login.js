var inputSubmit = document.getElementById("inputSubmit");
var messageUsername = document.getElementById("message-username");
var messagePassword = document.getElementById("message-password");
var regexSpecialCharacters = /[^a-zA-Z0-9]/;
var form = document.getElementById("formLogin");
var messageLogin = document.getElementById("message-login");

function removeMessagesAlert(message) {
  setTimeout(() => {
    message.innerHTML = "";
  }, 5000);
}

function validateUsername() {
  var username = document.getElementById("username").value;

  if (regexSpecialCharacters.test(username)) {
    messageUsername.innerHTML =
      "The user field cannot contain special characters";
    messageUsername.style.color = "red";
    removeMessagesAlert(messageUsername);
    return;
  }

  if (username == "") {
    messageUsername.innerHTML = "The username field cannot be empty";
    messageUsername.style.color = "red";
    removeMessagesAlert(messageUsername);
    return;
  }

  return false;
}

function validatePassword() {
  var password = document.getElementById("password").value;

  if (regexSpecialCharacters.test(password)) {
    messagePassword.innerHTML =
      "The password field cannot contain special characters";
    messagePassword.style.color = "red";
    removeMessagesAlert(messagePassword);
    return;
  }

  if (password == "") {
    messagePassword.innerHTML = "The password field cannot be empty";
    messagePassword.style.color = "red";
    removeMessagesAlert(messagePassword);
    return;
  }

  return false;
}

async function submitForm(form) {
  formData = new FormData(form);
  var url = "./App/login/Controllers/LoginController.php";

  await fetch(url, {
    method: "POST",
    body: formData,
  }).then(function (res) {
    res.json().then(function (data) {
      switch (data) {
        case 400:
          window.location.href = "/panel";
          break;
        case 404:
          messageLogin.innerHTML = "Usuário ou senha incorretos";
          messageLogin.style.color = "red";
          messageLogin.style.textAlign = "center";
          break;
      }
    });
  });
}

inputForm.addEventListener("click", () => {

  validateUsername();
  validatePassword();

  let userReturn = validateUsername();
  let passReturn = validateUsername();

  if (userReturn === false && passReturn === false) {
    submitForm(form);
  }
});
