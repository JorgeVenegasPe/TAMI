const evento = document.getElementById("enviar");
const enviarFormulario = () => {
  let nombre = document.getElementById("nombre").value;
  let email = document.getElementById("email").value;
  let mensaje = document.getElementById("mensaje").value;
  let numero = 51933228012;
  var win = window.open(
    `https://wa.me/${numero}?text=Hola%20mi%20nombre%20es%20${nombre}, Correo Electronico:%20${email}, Asunto:%20${mensaje}`,
    "_blank"
  );
};
evento.addEventListener("click", enviarFormulario);
