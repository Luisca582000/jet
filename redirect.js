const redirectUrl = "https://jetsmart.com/co/es/"; // Cambia esto por tu URL

function redirigir() {
    setTimeout(function() {
  window.location.href = redirectUrl;
  }, 2000);
}

// Llama a la función redirigir al cargar la página
window.onload = redirigir;

//<script src="/scripts/redirect.js"></script>//ingresar en paginas para finish