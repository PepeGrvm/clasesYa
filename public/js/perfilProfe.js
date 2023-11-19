
function copiarTexto() {
    /* Obtén el elemento de texto que quieres copiar */
    var textoACopiar = document.getElementById("textoACopiar");

    /* Selecciona el texto del elemento */
    var seleccion = document.createRange();
    seleccion.selectNodeContents(textoACopiar);

    /* Elimina cualquier selección previa */
    window.getSelection().removeAllRanges();

    /* Agrega la nueva selección al rango */
    window.getSelection().addRange(seleccion);

    /* Copia el texto al portapapeles */
    document.execCommand("copy");

    /* Elimina la selección después de copiar */
    window.getSelection().removeAllRanges();

    /* Puedes mostrar un mensaje de éxito o realizar otras acciones después de copiar */
    alert("Texto copiado: " + textoACopiar.innerText);
}


