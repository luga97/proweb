var pedido = {
  nevadas: 0,
  decoradas: 0,
  boston: 0
};
texto = "";
function añadirDonas(tipo) {
  var cantidad = prompt("cuantas donas " + tipo + " añadira al pedido?");
  pedido[tipo] += parseInt(cantidad);
  verPedido();
}

function verPedido() {
  $.each(pedido, function(i, item) {
    texto += i + ": " + item + "\n";
  });
  alert("asi va su pedido \n\n" + texto);
  texto = "";
}

function enviarPedido() {
  verPedido();
  alert("pedido añadido exitosamente");
  location.href = "index.php";
}
