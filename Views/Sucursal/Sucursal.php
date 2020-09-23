<?php   headerAdmin(); ?>

<?php   getModal('modalSucursal','d');?>

<button class="btn btn-success m-4" data-toggle="modal" data-target="#modalSucursal">Nueva Sucursal</button>
</div>
</div>

</body>
<script>
    $(document).ready(function () {
        getBanco()
    })
    var getBanco = function () {

        $.ajax({
            url: "http://localhost/MVC_Banco/Sucursal/getBanco",
            type: "GET",
            success: function (data) {
                const json = JSON.parse(data)
                console.log(json)
                for (values in json) {
                    $('#select_sucursal_banco').append('<option value=' + "" + json[values].idBanco +
                        "" + '>' + json[values].nombre + '</option>')
                }

            },
            error: function (e) {
                console.log(e)
            }
        })
    }
    var enviar_sucursal = function () {
        let nombre = $('#form_sucursal_nombre').val()
        let banco_id = $('#select_sucursal_banco').val()
        $.ajax({
            url: "http://localhost/MVC_Banco/Sucursal/insertar_sucursal",
            type: "POST",
            data: {
                nombre,
                banco_id
            },
            success: function (data) {
                swal({
                    title: "Creado!",
                    text: "Creado Correctamente!",
                    icon: "success",
                    button: " Aceptar!",
                });
                $('#form_banco_nombre').val('')
            },
            error: function (e) {

            }
        })
    }
</script>

</html>