addEventListener("scroll", () => {
  let productos__tituloCatalogo = document.getElementById(
    "productos__tituloCatalogo"
  );
  let altura = window.innerHeight / 1.2;
  let distancia = productos__tituloCatalogo.getBoundingClientRect().top;
  const rootStyles = document.documentElement.style;
  if (distancia <= altura) {
    rootStyles.setProperty("--stop", "running");
  }
});

let m_selladora = document.getElementById("maquina__selladora");
let selladora = document.getElementById("selladora");
let icono2 = document.getElementById("icono2");
m_selladora.addEventListener("click", () => {
  selladora.classList.add("display2");
});

icono2.addEventListener("click", () => {
  selladora.classList.remove("display2");
});

let m_embalaje = document.getElementById("maquina__embalaje");
let embalaje = document.getElementById("embalaje");
let icono3 = document.getElementById("icono3");
m_embalaje.addEventListener("click", () => {
  embalaje.classList.add("display2");
});

icono3.addEventListener("click", () => {
  embalaje.classList.remove("display2");
});

let sellador__vasos = document.getElementById("sellador__vasos");
let SelladorVasos = document.getElementById("SelladorVasos");
let icono4 = document.getElementById("icono4");

sellador__vasos.addEventListener("click", () => {
  SelladorVasos.classList.add("display2");
});

icono4.addEventListener("click", () => {
  SelladorVasos.classList.remove("display2");
});

let maquina__ozono = document.getElementById("maquina__ozono");
let ozono = document.getElementById("ozono");
let icono5 = document.getElementById("icono5");

maquina__ozono.addEventListener("click", () => {
  ozono.classList.add("display2");
});

icono5.addEventListener("click", () => {
  ozono.classList.remove("display2");
});

let esterilizador__uv = document.getElementById("esterilizador__uv");
let uv = document.getElementById("uv");
let icono6 = document.getElementById("icono6");

esterilizador__uv.addEventListener("click", () => {
  uv.classList.add("display2");
});

icono6.addEventListener("click", () => {
  uv.classList.remove("display2");
});

let esterilizador__uvozono = document.getElementById("esterilizador__uvozono");
let uvOzono = document.getElementById("uvOzono");
let icono7 = document.getElementById("icono7");

esterilizador__uvozono.addEventListener("click", () => {
  uvOzono.classList.add("display2");
});

icono7.addEventListener("click", () => {
  uvOzono.classList.remove("display2");
});
