// Ejemplo de función para validar el formulario antes de enviarlo
document.getElementById("formularioRutina").onsubmit = function(event) {
    const correo = document.getElementById("correo").value;
    const ejercicio = document.getElementById("ejercicio").value;
    const series = document.getElementById("series").value;
    const repeticiones = document.getElementById("repeticiones").value;
    const peso = document.getElementById("peso").value;

    // Validar que todos los campos tengan contenido
    if (!correo || !ejercicio || !series || !repeticiones || !peso) {
        alert("Por favor, complete todos los campos.");
        event.preventDefault(); // Evitar que el formulario se envíe
    }
};
