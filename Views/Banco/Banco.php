<?php   headerAdmin(); ?>
 <?php   getModal('modalBanco','d');?>

    <button class="btn btn-success m-4" data-toggle="modal" data-target="#modalBanco">Nuevo</button>
</div>

</body>
<script>

    var enviar_banco = function(){
        let nombre = $('#form_banco_nombre').val()
        $.ajax({
            url:"http://localhost/MVC_Banco/Banco/insertar_banco",
            type:"POST",
            data:{nombre},
            success:function(data){
                swal({
                title: "Creado!",
                text: "Creado Correctamente!",
                icon: "success",
                button: " Aceptar!",
              });
              $('#form_banco_nombre').val('')
            },
            error:function(e){

            }
        })
    }
</script>
</html>