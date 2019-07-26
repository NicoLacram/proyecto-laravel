window.addEventListener('load',cargar)
function cargar(){
    let formulario = document.querySelector('.form');
    formulario.elements.name.focus();
    formulario.onsubmit = function(e){
        if(! validaciones()){
            e.preventDefault();
        }else{
            formulario.submit();
        }
    }
    function validaciones(){
        let {name,email,password,password_confirmation} = formulario.elements;
        if(!validarName(name)) return false;
        if(!validarEmail(email)) return false;
        if(!validarPassword(password)) return false;
        if(!validarRepeat(password,password_confirmation)) return false;
        return true;
    }

    function validarName(name){
        if (name.value.length < 4){
          errorUserName.innerHTML = "Nombre de usuario no puede tener menos de 6 digitos";
          errorUserName.classList.add('alert-danger');
          name.classList.add('is-invalid');
          return false;
        } else{
          errorUserName.innerHTML = "";
          errorUserName.classList.remove('alert-danger');
          name.classList.remove('is-invalid');
          name.classList.add('is-valid');
          formulario.elements.email.focus();
          return true;
        }
    }

    function validarEmail(email) {
            let errorEmail = document.getElementById('errorEmail');
            let re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
            if(!re.test(email.value)){
                email.classList.add('is-invalid');
                errorEmail.classList.add('alert-danger');
                errorEmail.innerHTML = "Email invalido...";
                return false;
            }else{
                errorEmail.innerHTML = "";
                email.classList.remove('is-invalid');
                email.classList.add('is-valid');
                errorEmail.classList.remove('alert-danger');
                formulario.password.focus();
                return true;
            }
    }

    function validarPassword(password) {
        let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        let errorPassword = document.getElementById('errorPassword');
        if (!re.test(password.value)) {
          errorPassword.innerHTML = "Debe especificar una contraseña válida";
          errorPassword.classList.add('alert-danger');
          password.classList.add('is-invalid');
          return false;
        }else{
          errorPassword.innerHTML = "";
          errorPassword.classList.remove('alert-danger');
          password.classList.remove('is-invalid');
          password.classList.add('is-valid');
          formulario.elements.passwordRepeat.focus();
          return true;
        }
    }

    function validarRepeat(password,password_confirmation){
        if (password.value != password_confirmation.value) {
          errorPasswordRepeat.innerHTML = "Las conraseñas no coinciden";
          errorPasswordRepeat .classList.add('alert-danger');
          password_confirmation.classList.add('is-invalid');
          return false;
        }else{
          errorPasswordRepeat .innerHTML = "";
          errorPasswordRepeat.classList.remove('alert-danger');
          password_confirmation.classList.remove('is-invalid');
          password_confirmation.classList.add('is-valid');
          return true;
        }
    }

}


