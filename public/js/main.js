let boton = document.getElementById("boton");
let menu = document.getElementById("nav");
boton.addEventListener("click", () => {
  boton.classList.toggle("active");
  menu.classList.toggle("display");
});

addEventListener("scroll", () => {
  let certificaciones = document.getElementById("footer__animacion");
  let altura = window.innerHeight / 1.1;
  let distancia = certificaciones.getBoundingClientRect().top;
  const rootStyles = document.documentElement.style;
  if (distancia <= altura) {
    rootStyles.setProperty("--stop5", "running");
  }
});
