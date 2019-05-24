$(document).ready(function() {
  $(".form-signin").submit(verificarUsuario); //al hacer click en ingresar se llama a la funcion  verificar
});

function verificarUsuario(event) {
  var username = $("#username").val();
  var password = $("#password").val();
  event.preventDefault();
  //AJAX consulta en la base de datos si el usuario esta registrado
  $.ajax({
    // aqui va la ubicación de la página PHP
    url: "app/main.php",
    //el metodo a utilizar para hacer el request
    type: "POST",
    //tipo de dato que se va a recibir
    dataType: "html",
    //php recibiria es $_POST["condicion"] el valor indicado, asi como este se puede enviar cualquier cantidad de datos via POST
    data: {
      //con esta condicion le indicaremos en un swich a php que funcion debe llamar
      condicion: "comprobarLogin",
      username: username,
      password: password
    },
    success: function(resultado) {
      //php nos devuelve la verificacion de usuario
      if (resultado == "false") {
        alert("usuario o contraseña incorrecta");
      } else {
        //deshacer el preventDefault
        $(".form-signin")
          .unbind("submit")
          .submit();
      }
    }
  });
}
