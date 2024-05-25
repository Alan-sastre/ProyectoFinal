function addToCart(ProductoID) {
  const elemento = document.querySelector(`[data-id="${ProductoID}"]`);
  const nombre = elemento.getAttribute("data-nombre");
  const imagen = elemento.getAttribute("data-imagen");
  const precio = elemento.getAttribute("data-precio");
  const valoresActuales = {
    nombre: nombre,
    foto: imagen,
    valor: precio,
  };

  let nuevosValores;
  const datos = localStorage.getItem("Productos");
  if (datos) {
    const valoresDB = JSON.parse(datos);
    nuevosValores = [valoresActuales, ...valoresDB];
  } else {
    nuevosValores = [valoresActuales];
  }

  localStorage.setItem("Productos", JSON.stringify(nuevosValores));

  // Mostrar alerta
  alert(`${nombre} se ha añadido al carrito`);

  // Actualizar contador del carrito
  let carritoCount = parseInt(localStorage.getItem("carritoCount")) || 0;
  carritoCount++;
  localStorage.setItem("carritoCount", carritoCount);
  document.getElementById("carrito-count").textContent = carritoCount;
}

// Cargar contador del carrito al cargar la página
window.addEventListener("load", function () {
  let carritoCount = parseInt(localStorage.getItem("carritoCount")) || 0;
  document.getElementById("carrito-count").textContent = carritoCount;
});

function cerrarAlerta() {
  const alerta = document.querySelector(".custom-alert");
  if (alerta) {
    alerta.remove();
  }
}
