function buscar() {
    // Obtener el valor del campo de búsqueda
    var searchTerm = document.getElementById("valor").value;

    // Realizar alguna acción con el término de búsqueda (puedes redirigir a una página de resultados, mostrar resultados en el mismo lugar, etc.)
    alert("valor encontrado: " + searchTerm);
}
function enviarcorreo(){
    nombre=document.getElementById("nombre").value;
    email=document.getElementById("email").value;
    mensaje=document.getElementById("mensaje").value;

    alert("el nombre es "+nombre);
    alert("el email es "+email);
    alert("el mensaje es "+mensaje);
}