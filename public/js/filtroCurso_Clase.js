function getAsignaturaFiltro() {
    return localStorage.getItem('asignatura');
}

function setAsignaturaFiltro(asignatura) {
    localStorage.setItem('asignatura', asignatura);
}

function filtrar() {
    var identificador = document.getElementById("filtrarAsignatura").value;
    console.log(identificador);

    if (identificador.trim() !== '') {
        setAsignaturaFiltro(identificador); // Store room name
        location.reload()
    } else {
        alert("Please enter a room name.");
    }
}
