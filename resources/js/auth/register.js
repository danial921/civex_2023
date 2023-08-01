const registerForm = document.getElementById('register_form');

registerForm.addEventListener('submit', function (event) {
  event.preventDefault();

  const formData = new FormData(registerForm);

  axios.post('/register-post', formData)
    .then(response => {
      // Handle success response
      console.log(response.data);
    })
    .catch(error => {
      // Handle error response
      console.log(error.response.data);
    });
});