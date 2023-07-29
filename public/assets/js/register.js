
const registerForm = document.getElementById('register_form');

registerForm.addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = new FormData(registerForm);
  
  for (const [key, value] of formData.entries()) {
    console.log(key, value);
  }

  axios.post('/register', formData)
    .then(response => {
      // Handle success response
      console.log(response.data);
      console.log('berhasil')
    })
    .catch(error => {
      // Handle error response
      console.log(error.response.data);
      console.log('gagal')
    });
});