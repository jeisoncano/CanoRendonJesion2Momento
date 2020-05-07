
function validate (){



let name = document.getElementById('name').value;
let lastname = document.getElementById('lastname').value;
let documento = document.getElementById('documento').value;
let birthdate = document.getElementById('birthdate').value;
let city = document.getElementById('city').value;
let zone = document.getElementById('zone').value;
let mobile = document.getElementById('mobile').value;




    
  
  if (name === '' || name == null) {
    document.getElementById('name').style.borderColor="red";
    alert ("debe llenar el campo nombre");
    return false;
  }
  if (/[a-z A-Z]/.test(name)==false ) {
    document.getElementById('name').style.borderColor="red";
    alert ("el nombre debe estar escrito con letras");
    return false;
  }
  if (lastname === '' || lastname == null) {
    document.getElementById('lastname').style.borderColor="red";
    alert ("debe llenar el campo apellido");
    return false;
  }
  if (/[a-z A-Z]/.test(lastname)==false ) {
    document.getElementById('lastname').style.borderColor="red";
    alert ("el apellido debe estar escrito con letras");
    return false;
  }
  if (documento === '' || documento == null) {
    document.getElementById('documento').style.borderColor="red";
    alert ("debe llenar el campo documento");
    return false;
  }
  if (isNaN(documento)==true) {
    document.getElementById('documento').style.borderColor="red";
    alert ("debe llenar el campo documento con numeros");
    return false;
  }
  if (birthdate === '' || birthdate == null) {
    document.getElementById('birthdate').style.borderColor="red";
    alert ("debe llenar el campo fecha de nacimiento");
    return false;
  }
  if (city === '' || city == null) {
    document.getElementById('city').style.borderColor="red";
    alert ("debe llenar el campo ciudad");
    return false;
  }
  if (/[a-z A-Z]/.test(city)==false ) {
    document.getElementById('city').style.borderColor="red";
    alert ("la ciudad debe estar escrito con letras");
    return false;
  }
  if (zone === '' || zone == null) {
    document.getElementById('zone').style.borderColor="red";
    alert ("debe llenar el campo Barrio");
    return false;
  }
  if (/[a-z A-Z]/.test(zone)==false ) {
    document.getElementById('zone').style.borderColor="red";
    alert ("el barrio debe estar escrito con letras");
    return false;
  }
  if (mobile === '' || mobile == null) {
    document.getElementById('mobile').style.borderColor="red";
    alert ("debe llenar el campo numero de celular");
    return false;
  }
  if (isNaN(mobile)==true ) {
    document.getElementById('mobile').style.borderColor="red";
    alert ("debe llenar el campo numero de celular con numeros");
    return false;
  }
  if ( !(/^\d{10}$/.test(mobile)) ) {
    document.getElementById('mobile').style.borderColor="red";
    alert ("el numero de celular debe ser de 10 digitos");
    return false;
  }
 
 
  
 

}