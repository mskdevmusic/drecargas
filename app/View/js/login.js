$(document).ready(function(){
    $(document).on("click", '#btningresar', function () {
        let nombre = $("#txtUsuario").val();
        let password = $("#txtPassword").val();

        if (nombre == "") {
            $("#txtUsuario").focus();
            return false;
        } else if (password == "") {
            $("#txtPassword").focus();
            return false;
        } else {
            validarUsuario(nombre, password)
        }

        
    })
})


function validarUsuario(nombre, password) {
    $.ajax({
        url: 'app/js/ajax.php',
        type: 'POST',
        data: { "validarusuario": 'validarusuario', nombre, password },
        success: function (respuesta) {
            let data = JSON.parse(respuesta);
            console.log(data)

            if (data[0].MENSAJE === 'INGRESO EXITOSAMENTE') {
                window.location.href = "index.php"
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