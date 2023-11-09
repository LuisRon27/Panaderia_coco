function incrementarContador() {
    const numero = document.querySelector(".contador .numero");
    numero.value = parseInt(numero.value) + 1;
}

function decrementarContador() {
    const numero = document.querySelector(".contador .numero");
    if (parseInt(numero.value) <= 0) {
        return;
    }
    numero.value = parseInt(numero.value) - 1;
}
