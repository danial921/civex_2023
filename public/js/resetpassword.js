
const btnSubmit = document.getElementById('btnSubmit');


function validatePassword() {
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('password_confirmation').value;

  if (password !== confirmPassword) {
    document.getElementById("password_confirmation").classList.add("is-invalid");
    document.getElementById("password_confirmation-false").innerHTML = "Konfirmasi password harus sama";
    btnSubmit.setAttribute("disabled", "disabled");
  } else {
    document.getElementById("password_confirmation").classList.remove("is-invalid");
    document.getElementById("password_confirmation-false").innerHTML = "";
    btnSubmit.removeAttribute("disabled");
  }
}
