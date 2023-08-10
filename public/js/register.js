
function openModal() {
  btnModal = document.getElementById("btnModal");
  btnModal.click();
}

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

const registerForm = document.getElementById('register_form');
const btnSubmit = document.getElementById('btnSubmit');

registerForm.addEventListener('submit', function (event) {
  event.preventDefault();
  
  btnSubmit.setAttribute("disabled", "disabled");
  
  const formData = new FormData(registerForm);
  
  for (const [key, value] of formData.entries()) {
    console.log(key, value);
  }

  axios.post('/register', formData)
    .then(response => {
      // Handle success response
      console.log(response.data);
      console.log('berhasil')
      openModal()
    })
    .catch(error => {
      // Handle error response
      console.log(error.response.data);
      // console.log(error.response.data['errors']);
      for(const [key_resp, value_resp] of Object.entries(error.response.data['errors']) ){
        console.log(key_resp, value_resp[0])
        if(value_resp[0] != ""){
          document.getElementById(key_resp).classList.add("is-invalid");
          document.getElementById(key_resp+"-false").innerHTML = value_resp[0]
        }
      }
      btnSubmit.removeAttribute("disabled");
      console.log('gagal')
    });
});

document.getElementById('simpan').addEventListener('click', function(event) {
  if (event.target === this) {
    // Kode untuk redirect ke halaman tujuan
    window.location.href = '/login';
  }
});