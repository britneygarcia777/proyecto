const wrapper=document.querySelector('.wrapper');
const loginLink=document.querySelector('.login-link');
const registerLink=document.querySelector('.register-link');
const btnPopup=document.querySelector('.btnLogin-popup');
const iconClose=document.querySelector('.icon-close');

registerLink.addEventListener('click',()=>{
	wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
	wrapper.classList.remove('active');
});

btnPopup.addEventListener('click',()=>{
	wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click',()=>{
	wrapper.classList.remove('active-popup');
});

//validaciones que no esten vacias
const userName=document.querySelector("[name=nombre]");
const userap1=document.querySelector("[name=apellido1]");
const userap2=document.querySelector("[name=apellido2]");
const useremail=document.querySelector("[name=email]");

const validateEmptyField=(message,message2,e) => {
	const field = e.target;
    const fieldValue = e.target.value;
    if (fieldValue.trim().length === 0) {  // Corregido
    	field.classList.add("invalid");
    	field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText=message;
    }else{
    	field.classList.remove("invalid");
    	field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText=message2;
    }
}




const validateNumbers = (message, message2,e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const regex = new RegExp(/^[a-zA-Z\s]*$/);
    if (fieldValue.trim().length > 0 && !regex.test(fieldValue)) {
        field.classList.add("invalid");
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText = message;
    } else {
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText = message2; // Cambié message2 a "Válido"
    }
}

// Validación de email
const validateEmailFormat = (e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const regex = new RegExp(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)*(\.[a-z]{2,7})$/);
    if (fieldValue.trim().length > 5 && !regex.test(fieldValue)) {
        field.classList.add("invalid");
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText = "Introduce un correo válido";
    } else {
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText = "Email";
    }
}

userName.addEventListener("blur", (e) => validateEmptyField("El nombre es requerido", "Nombre", e));
userap1.addEventListener("blur", (e) => validateEmptyField("Introduce tu apellido", "Primer Apellido", e));
useremail.addEventListener("blur", (e) => validateEmptyField("El email es requerido", "Email", e));

userName.addEventListener("input", (e) => validateNumbers("Solo se aceptan letras",  "Nombre",e));
userap1.addEventListener("input", (e) => validateNumbers("Solo se aceptan letras",  "Primer Apellido", e));
userap2.addEventListener("input", (e) => validateNumbers("Solo se aceptan letras",  "Segundo Apellido", e));
useremail.addEventListener("input", validateEmailFormat);