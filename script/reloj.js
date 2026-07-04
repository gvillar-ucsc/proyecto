setInterval(()=>
    {
        const variable_hora_fecha_sistema = new Date();

        const formato_hora = variable_hora_fecha_sistema.toLocaleTimeString('es-CL',{hour12:false});
        const formato_fecha = variable_hora_fecha_sistema.toLocaleDateString('es-CL',{weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'});
        document.getElementById('reloj').innerText = formato_hora;
        document.getElementById('fecha').innerText = formato_fecha;
    },1000);