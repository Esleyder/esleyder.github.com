// Obtener referencia al elemento que contiene el catálogo de proyectos
const proyectosContainer = document.querySelector(".proyectos");

// Obtener todos los enlaces del catálogo de proyectos
const enlacesProyectos = proyectosContainer.querySelectorAll("a");

// Agregar un evento clic a cada enlace para abrirlos en una nueva pestaña
enlacesProyectos.forEach(enlace => {
  enlace.addEventListener("click", function(event) {
    event.preventDefault(); // Evitar el comportamiento predeterminado de abrir el enlace

    // Obtener la URL del enlace y abrirlo en una nueva pestaña
    const url = enlace.getAttribute("href");
    window.open(url, "_blank");
  });
});

// Agregar interactividad al pie de página
const pieDePagina = document.querySelector(".pie-de-pagina");

// Cambiar el color del pie de página al pasar el mouse por encima
pieDePagina.addEventListener("mouseover", function() {
  pieDePagina.style.backgroundColor = "red";
});

// Restaurar el color original del pie de página cuando se quite el mouse
pieDePagina.addEventListener("mouseout", function() {
  pieDePagina.style.backgroundColor = "#333";
});
