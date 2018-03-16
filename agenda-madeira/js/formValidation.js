var submit=false;
  
$(document).ready(function() {
  $('#enviar').click(function() {

      /**
      * valida campo Nome
      */
      var name = $('#name').val();
      if ($.trim(name).length == 0) {
          alert('Preencha o campo Nome.');
          e.preventDefault();
      }
      if ( !(validateName(name)) ) {
          alert("Nome deve conter apenas letras e pelo menos 2 caracteres.");
          e.preventDefault();
      }

      /**
      * valida campo de Email
      */
      var email = $('#email').val();
      if ($.trim(email).length == 0) {
          alert('Preencha o campo Email.');
          e.preventDefault();
      }
      if ( !(validateEmail(email)) ) {
          alert('Email inválido.');
          e.preventDefault();
      }

      /**
      * valida campo Telefone
      */
      var phone = (normalizePhone($('#phone').val()));
      if (($.trim(phone).length != 10) && ($.trim(phone).length != 11)) {
          alert('Telefone deve conter 10 ou 11 números.');
          e.preventDefault();
      } else {
          document.getElementById("phone").value = phone;
      }
      /**
      if ( !(validatePhone(phone)) ) {
          alert("Telefone inválido.");
          e.preventDefault();
      }
      */

      submit=true;
  });
});

function validateEmail(str) {
    var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return ($.trim(str).match(pattern));
}
function normalizePhone(str) {
    return str.replace(/\(|\)|\ |\-/gi, function (x) { return ""; });
}
function validatePhone(str) {
    return ($.isNumeric(str));
}
function validateName(str) {
    return ($.trim(str).match('^[a-zA-Z ]+$'));
}
function validateForm() {
  return submit;
}