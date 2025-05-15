
function mostrarsenha(){
  var inputPass = document.getElementById('Password');
  var btnShowPass = document.getElementById('btnsenha');

   if (inputPass.type === 'password') {
    inputPass.setAttribute('type', 'text');
      btnShowPass.classList.replace('fi-bs-eye', 'fi-bs-eye-crossed');
   } 
   else { 
    inputPass.setAttribute('type', 'password');
    btnShowPass.classList.replace('fi-bs-eye-crossed', 'fi-bs-eye');
}
} 