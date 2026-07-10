setInterval(() => {
    const variable_hora_fecha_sistema = new Date();

    const formato_hora = variable_hora_fecha_sistema.toLocaleTimeString('es-CL', {hour12: false});
    const formato_fecha = variable_hora_fecha_sistema.toLocaleDateString('es-CL', {year: 'numeric', month: '2-digit', day: '2-digit'});

    const elementoReloj = document.getElementById('reloj');
    if (elementoReloj) {
        elementoReloj.innerText = formato_hora;
    }
    const elementoFecha = document.getElementById('fecha');
    if (elementoFecha) {
        elementoFecha.innerText = formato_fecha;
    }

    const inputHoraSecreto = document.getElementById('input_hora_secreto');
    if (inputHoraSecreto) {
        inputHoraSecreto.value = formato_hora;
    }
    const inputFechaSecreto = document.getElementById('input_fecha_secreto');
    if (inputFechaSecreto) {
        inputFechaSecreto.value = formato_fecha;
    }

}, 1000);