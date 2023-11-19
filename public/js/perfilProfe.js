function agendar(){
    let asignaturaSoli = document.getElementById("asignaturaSoli").value;
    let asignaturaFecha = document.getElementById("asignaturaFecha").value;
    let asignaturaTiempo = document.getElementById("asignaturaTiempo").value;
    let asignaturaComentarios = document.getElementById("asignaturaComentarios").value;

    localStorage.setItem('asignatura',asignaturaSoli)
    localStorage.setItem('fecha',asignaturaFecha)
    localStorage.setItem('tiempo',asignaturaTiempo)
    localStorage.setItem('comentarios',asignaturaComentarios)
}

function borrarAgenda(){
    localStorage.removeItem('asignatura')
    localStorage.removeItem('fecha')
    localStorage.removeItem('tiempo')
    localStorage.removeItem('comentarios')
    location.reload()
}

