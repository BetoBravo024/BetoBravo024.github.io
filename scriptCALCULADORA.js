// Variables para almacenar los totales
let totalCalorias = localStorage.getItem('totalCalorias') ? parseInt(localStorage.getItem('totalCalorias')) : 0;
let totalProteinas = localStorage.getItem('totalProteinas') ? parseInt(localStorage.getItem('totalProteinas')) : 0;
let totalCarbohidratos = localStorage.getItem('totalCarbohidratos') ? parseInt(localStorage.getItem('totalCarbohidratos')) : 0;

// Mostrar los totales al cargar la página
document.getElementById("totalCalorias").textContent = totalCalorias;
document.getElementById("totalProteinas").textContent = totalProteinas;
document.getElementById("totalCarbohidratos").textContent = totalCarbohidratos;

function agregarComida() {
    // Obtener los valores de los campos
    const correo = document.getElementById("correo").value;
    const nombre_comida = document.getElementById("nombre_comida").value;
    const calorias = parseInt(document.getElementById("calorias").value) || 0;
    const proteinas = parseInt(document.getElementById("proteinas").value) || 0;
    const carbohidratos = parseInt(document.getElementById("carbohidratos").value) || 0;

    // Sumar los valores a los totales
    totalCalorias += calorias;
    totalProteinas += proteinas;
    totalCarbohidratos += carbohidratos;

    // Mostrar los totales actualizados
    document.getElementById("totalCalorias").textContent = totalCalorias;
    document.getElementById("totalProteinas").textContent = totalProteinas;
    document.getElementById("totalCarbohidratos").textContent = totalCarbohidratos;

    // Guardar los totales en localStorage
    localStorage.setItem('totalCalorias', totalCalorias);
    localStorage.setItem('totalProteinas', totalProteinas);
    localStorage.setItem('totalCarbohidratos', totalCarbohidratos);

    // Enviar el formulario
    document.getElementById("formulario").submit();
}

function borrarTotales() {
    // Resetear totales a cero
    totalCalorias = 0;
    totalProteinas = 0;
    totalCarbohidratos = 0;

    // Actualizar la visualización
    document.getElementById("totalCalorias").textContent = totalCalorias;
    document.getElementById("totalProteinas").textContent = totalProteinas;
    document.getElementById("totalCarbohidratos").textContent = totalCarbohidratos;

    // Limpiar localStorage
    localStorage.removeItem('totalCalorias');
    localStorage.removeItem('totalProteinas');
    localStorage.removeItem('totalCarbohidratos');
}
