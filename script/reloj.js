//setInterval es una funcion que indica que cada tanto tiempo se active algo, en este caso la hora
setInterval(() => {
    // obtenemos la hora del sistema en brupo
    const variable_hora_fecha_sistema = new Date();

    // le damos formato a esta hora y fecha en brupo
    const formato_hora = variable_hora_fecha_sistema.toLocaleTimeString('es-CL', {hour12: false});
    const formato_fecha = variable_hora_fecha_sistema.toLocaleDateString('es-CL', {year: 'numeric', month: '2-digit', day: '2-digit'});

    // hacemos que el elemento de html obtenga un valor, en este caso de la hora y la fecha
    const elementoReloj = document.getElementById('reloj');
    if (elementoReloj) {
        elementoReloj.innerText = formato_hora;
    }
    const elementoFecha = document.getElementById('fecha');
    if (elementoFecha) {
        elementoFecha.innerText = formato_fecha;
    }

    // le tenemos que dar el mismo valor al input oculto ya que los formularios no guardan el valor de una etiqueta y si dejamos el input libre el usuairo lo puede modificar
    const inputHoraSecreto = document.getElementById('input_hora_secreto');
    if (inputHoraSecreto) {
        inputHoraSecreto.value = formato_hora;
    }
    const inputFechaSecreto = document.getElementById('input_fecha_secreto');
    if (inputFechaSecreto) {
        inputFechaSecreto.value = formato_fecha;
    }

    // luego indicamos cada cuantos milisegundos se realiza esta accion, en este caso cada segundo
}, 1000);