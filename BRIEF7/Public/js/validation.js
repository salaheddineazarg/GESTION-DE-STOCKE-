document.getElementById("formLogin").onsubmit = (e) => {
   let nameInput = document.getElementById("username").value;
   let passwordInput = document.getElementById("password").value;
   let namereg =/^[a-zA-Z\-]+$/;
   let passreg =/^[a-zA-Z0-9]+$/;
   let validation = namereg.test(nameInput);
   let validationPassword = passreg.test(passwordInput);


  if( nameInput == "" || passwordInput == "" || nameInput.length <= 5 || passwordInput.length <= 5 ){

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
      })

    e.preventDefault();

    return false
  }

  if( validation == false || validationPassword == false ){
    
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href="">Why do I have this issue?</a>'
      })
   

    e.preventDefault();
    return false

  }
  
}