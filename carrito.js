const Producto = localStorage.getItem("Productos");
const valores = JSON.parse(Producto);
let totalPrecios = 0; // Variable para almacenar el total de los precios

for (const item in valores) {
  const imagen = valores[item].foto;
  const precio = parseFloat(valores[item].valor); // Convertir el precio a número flotante
  const nombre = valores[item].nombre.trim();
  const id = `product_${item}`;

  totalPrecios += precio; // Sumar el precio al total

  var d1 = document.getElementById("contenido");
  d1.insertAdjacentHTML(
    "beforeend",
    `
        <div class="card" id="${id}">
            <img src="${imagen}" alt="">
            <h3>${nombre}</h3>
            <p>&nbsp;Precio: ${precio}</p>
            <button onclick="eliminarTarjeta('${id}')">Eliminar</button>
        </div>
        `
  );
}

// Mostrar el total de los precios al final de todas las tarjetas
d1.insertAdjacentHTML(
  "beforeend",
  `
    <div class="total">
        <p>Total: ${totalPrecios.toFixed(2)}</p>
    </div>
    `
);

function eliminarTarjeta(id) {
  const tarjeta = document.getElementById(id);
  tarjeta.remove();

  // Obtener el índice del elemento a eliminar
  const index = parseInt(id.split("_")[1]);

  // Obtener y actualizar el array de productos del localStorage
  const productos = JSON.parse(localStorage.getItem("Productos"));
  productos.splice(index, 1); // Eliminar el elemento del array
  localStorage.setItem("Productos", JSON.stringify(productos)); // Guardar el array actualizado en el localStorage

  // Recargar la página
  location.reload();
}
function limitarLongitud(elemento, maxLength) {
  if (elemento.value.length > maxLength) {
    elemento.value = elemento.value.slice(0, maxLength);
  }
}

function formatExpiryDate(input) {
  var trimmed = input.value.replace(/\s+/g, ""); // Elimina cualquier espacio en blanco
  var formatted = "";

  // Limitar la entrada a solo números y mantener la longitud máxima en 5 caracteres
  trimmed = trimmed.replace(/[^\d]/g, "").slice(0, 4);

  for (var i = 0; i < trimmed.length; i++) {
    formatted += trimmed[i];
    if (i === 1 && trimmed.length > 2) {
      formatted += "/";
    }
  }

  input.value = formatted;
}

function redirectToPage() {
  // Mostrar el elemento de carga
  document.getElementById("loader").style.display = "block";

  // Simular un retraso de 2 segundos antes de redireccionar
  setTimeout(function () {
    // Cambiar 'otra_pagina.html' por la URL de la página a la que deseas redirigir
    window.location.href = "compra.html";
  }, 8000); // Retraso de 2 segundos (2000 milisegundos)
}
