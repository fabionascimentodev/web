const showPasswordInput = document.getElementById("showPassword");
const password = document.getElementById("password");

showPasswordInput.addEventListener("change", () => {
  password.attributes.type.value == "text"
    ? password.setAttribute("type", "password")
    : password.setAttribute("type", "text");
});

$(document).ready(function () {
    $("#signIn").click(function () {
  // e.preventDefault()
  var usuario = $("#usuario").val();
  var senha = $("#password").val();

  $.ajax({
    url: "././Model/login/login.php",
    method: "POST",
    dataType: "json",
    data: {
      usuario: usuario,
      senha: senha,
    },
    success: (res) => {
       
      if (res.status === "success") {
        alert(res.message);
        window.location.href = "../View/dashboard.php";
      } else if (res.status === "error") {
        alert(res.message);
        console.log(res)
      }
    },
    error: (xhr, status, err) => {
      //
      console.log(xhr)
      alert(err);
    },
         });
    });
});
