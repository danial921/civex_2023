
function submitForm() {
    gecForm.submit();
} 
  
const gecForm = document.getElementById('gec_form');
const btnSubmit = document.getElementById('btnSubmit');

// gecForm.addEventListener('submit', function (event) {
//     event.preventDefault();

//     btnSubmit.setAttribute("disabled", "disabled");

//     const formData = new FormData(gecForm);

//     for (const [key, value] of formData.entries()) {
//         console.log(key, value);
//     }

//     axios.post('/submit-form-gec', formData)
//     .then(response => {
//       // Handle success response
//       console.log(response.data);
//       console.log('berhasil')
//       window.location.href = 'http://127.0.0.1:8000/gec';
//     })
//     .catch(error => {
//       // Handle error response
//       console.log(error.response.data);
//       // console.log(error.response.data['errors']);
//       for(const [key_resp, value_resp] of Object.entries(error.response.data['errors']) ){
//           console.log(key_resp, value_resp[0])
//           if(value_resp[0] != ""){
//           document.getElementById(key_resp).classList.add("is-invalid");
//           document.getElementById(key_resp+"-false").innerHTML = value_resp[0]
//           }
//     }
//     btnSubmit.removeAttribute("disabled");
//     console.log('gagal')
//     });
// });

    