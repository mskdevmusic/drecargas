$(document).ready(function () {
    $(document).on("click", '#btnRegistrarRecarga', function () {
        let parametros = new FormData($("#formRecarga")[0]);
        parametros.append('registrarrecarga', 'registrarrecarga');

        registrarRecarga(parametros)
    })

    $(document).on("click", '#btnRegistrarUsuario', function () {
        let parametros = new FormData($("#formUsuario")[0]);
        parametros.append('registrarusuario', 'registrarusuario');

        registrarUsuario(parametros)
    })

    $(document).on("click", '#clickbuscarusuario', function () {
        let parametros = $("#buscarusuario").val();

        obtenerRecargasUsuario(parametros)
        obtenerDatosUsuario(parametros)
    })

    obtenerRecargas();
    obtenerTipoTransacciones()
    obtenerBanco()
    obtenerComunicacion()
    obtenerRecargasDia()
})

function obtenerRecargas() {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listarultimasrecargas": 'listarultimasrecargas' },
        success: function (respuesta) {
            let template = ''
            let data = JSON.parse(respuesta)

            data.forEach(element => {
                template += `<tr>
                                                <td>${element.COD_PAGO_RECARGA_TRANSACCION}</td>
                                                <td>${element.NOMBRE_USUARIO}</td>
                                                <td>${element.SALDO_RECARGA_TRANSACCION}</td>
                                                <td>${element.NOMBRE_BANCO}</td>
                                                <td>${element.NOMBRE_TIPO_TRANSACCION}</td>
                                                <td>
                                                    ${element.NOMBRE_CANAL_COMUNICACION}
                                                </td>
                                                <td>${element.FECHA_OPERACION_RECARGA_TRANSACCION}</td>
                                            </tr>`

                        
            });

            $("#contenido_tabla_recargas_recientes").html(template);
        }
    })
}

function obtenerTipoTransacciones() {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listartipotransacciones": 'listartipotransacciones' },
        success: function (respuesta) {
            let template = '<option selected>Seleccione un tipo de transaccion</option> '
            let data = JSON.parse(respuesta)

            data.forEach(element => {
                template += `<option value="${element.ID_TIPO_TRANSACCION}">${element.NOMBRE_TIPO_TRANSACCION}</option>`
            });

            $("#contenido_select_tipo_transaccion").html(template);
        }
    })
}

function obtenerBanco() {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listarbancos": 'listarbancos' },
        success: function (respuesta) {
            let template = '<option selected>Seleccione un banco</option> '
            let data = JSON.parse(respuesta)

            data.forEach(element => {
                template += `<option value="${element.ID_BANCO}">${element.NOMBRE_BANCO}</option>`
            });

            $("#contenido_select_banco").html(template);
        }
    })
}

function obtenerComunicacion() {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listarcanalcomunicacion": 'listarcanalcomunicacion' },
        success: function (respuesta) {
            let template = '<option selected>Seleccione una via de comunicacion</option> '
            let data = JSON.parse(respuesta)

            data.forEach(element => {
                template += `<option value="${element.ID_CANAL_COMUNICACION}">${element.NOMBRE_CANAL_COMUNICACION}</option>`
            });

            $("#contenido_select_canal_comunicacion").html(template);
        }
    })
}

function obtenerRecargasDia() {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listarrecargasdeldia": 'listarrecargasdeldia' },
        success: function (respuesta) {
            let template = '<span class="info-box-text">Monto recargado hoy</span>'
            let templatedos = '<span class="info-box-text">Cantidad de recargas hoy</span>'
            let data = JSON.parse(respuesta)

            data.forEach(element => {
                template += `<span class="info-box-number">${element.SALDO_TOTAL_RECARGADO}</span>`
            });

            data.forEach(element => {
                templatedos += `<span class="info-box-number">${element.TOTAL_RECARGAS}</span>`
            });
            
                            

            $("#contenido_info_monto").html(template);
            $("#contenido_info_cantidad").html(templatedos);
        }
    })
}

function registrarRecarga(parametros) {

    Swal.fire({
        title: 'Deseas registrar la recarga?',
        text: "No se podrán revertir los cambios",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: 'app/js/ajax.php',
                type: 'POST',
                cache: false,
                data: parametros,
                processData: false,
                contentType: false,
                success: function (respuesta) {

                    let data = JSON.parse(respuesta)

                    if (data[0].MENSAJE === 'RECARGA EXITOSA') {
                        Swal.fire({
                            title: 'Detalle',
                            text: data[0].MENSAJE,
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Detalle',
                            text: data[0].MENSAJE,
                            icon: 'error'
                        })
                    }

                    obtenerRecargas()
                    obtenerRecargasDia()
                }
            })
        }
    })
}

function registrarUsuario(parametros) {

    Swal.fire({
        title: 'Deseas registrar al usuario?',
        text: "No se podrán revertir los cambios",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: 'app/js/ajax.php',
                type: 'POST',
                cache: false,
                data: parametros,
                processData: false,
                contentType: false,
                success: function (respuesta) {

                    let data = JSON.parse(respuesta)

                    if (data[0].MENSAJE === 'REGISTRO EXITOSO') {
                        Swal.fire({
                            title: 'Detalle',
                            text: data[0].MENSAJE,
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Detalle',
                            text: data[0].MENSAJE,
                            icon: 'error'
                        })
                    }
                }
            })
        }
    })
}

function obtenerRecargasUsuario(dni) {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listarrecargausuario": 'listarrecargausuario', dni},
        success: function (respuesta) {
            let template = ''
            let data = JSON.parse(respuesta)

            

            data.forEach(element => {
                template += ` <tr>
                                        <td>${element.COD_PAGO_RECARGA_TRANSACCION}</td>
                                        <td>${element.SALDO_RECARGA_TRANSACCION}</td>
                                        <td>${element.NOMBRE_BANCO}</td>
                                        <td>${element.NOMBRE_TIPO_TRANSACCION}</td>
                                        <td>${element.NOMBRE_CANAL_COMUNICACION}</td>
                                        <td>${element.FECHA_OPERACION_RECARGA_TRANSACCION}</td>
                                    </tr>`
            });



            $("#contenido_tabla_usuario_historial_recargas").html(template);
        }
    })
}

function obtenerDatosUsuario(dni) {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        cache: false,
        data: { "listardatosusuario": 'listardatosusuario', dni },
        success: function (respuesta) {
            let data = JSON.parse(respuesta)
            console.log(data)



            data.forEach(element => {
                $("#labelusuariousuario").val(element.NOMBRE_USUARIO);
                $("#labelnombreusuario").val(element.NOMBRE_PERSONA);
                $("#labelapellidousuario").val(element.APELLIDO_PATERNO_PERSONA);
                $("#labelsaldoactualusuario").val(element.SALDO_BILLETERA_VIRTUAL);
                $("#labeldniusuario").val(element.DNI_PERSONA);
                $("#labelcelularusuario").val(element.TELEFONO_PERSONA);
            });

            /* template += ` <tr>
                                        <td>${element.COD_PAGO_RECARGA_TRANSACCION}</td>
                                        <td>${element.SALDO_RECARGA_TRANSACCION}</td>
                                        <td>${element.NOMBRE_BANCO}</td>
                                        <td>${element.NOMBRE_TIPO_TRANSACCION}</td>
                                        <td>${element.NOMBRE_CANAL_COMUNICACION}</td>
                                        <td>${element.FECHA_OPERACION_RECARGA_TRANSACCION}</td>
                                    </tr>` */
        }
    })
}


