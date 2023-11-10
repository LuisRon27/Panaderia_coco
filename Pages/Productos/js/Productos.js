function incrementarContador(productoID) {
    const numero = document.querySelector(`[data-producto-id="${productoID}"]`);
    numero.value = parseInt(numero.value) + 1;
}

function decrementarContador(productoID) {
    const numero = document.querySelector(`[data-producto-id="${productoID}"]`);
    if (parseInt(numero.value) <= 0) {
        return;
    }
    numero.value = parseInt(numero.value) - 1;
}


function filtrarProductos() {
    const busqueda = document.getElementById("busqueda").value.toLowerCase(); // Obtener el texto de búsqueda en minúsculas
    const productos = document.querySelectorAll(".card"); // Seleccionar todas las tarjetas de producto

    productos.forEach((producto) => {
        const nombreProducto = producto.querySelector(".card-title").textContent.toLowerCase();
        const descripcionProducto = producto.querySelector(".card-text").textContent.toLowerCase();

        // Mostrar u ocultar la tarjeta según si coincide con el texto de búsqueda
        if (nombreProducto.includes(busqueda) || descripcionProducto.includes(busqueda)) {
            producto.style.display = "block"; // Mostrar la tarjeta
        } else {
            producto.style.display = "none"; // Ocultar la tarjeta
        }
    });
}

// Habilitar la búsqueda dinámica mientras se escribe
document.getElementById("busqueda").addEventListener("input", function(event) {
    filtrarProductos();
});