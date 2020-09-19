<?php   headerAdmin();  ?>
<?php getModal('modalApertura','d');?>
<button class="btn btn-success m-4" onclick="openModalMoneda()" data-toggle="modal" data-target="#modalApertura">Seleccionar Cliente</button>
    <h2 class="text-center p-2">Registrar Apertura de Cuenta</h2>
    <form id="form_apertura">
    <input type="text" id="id_apertura">
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Titular :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" readonly value="fernado" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Saldo :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="saldo" required>
            </div>
        </div>
       <!-- <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Estado :</label>
            <div class="col-sm-10">
            <select id="estado"  class="form-control">
                <option value="0">Activo</option>
                <option value="1">Inactivo</option>
            </select>
               
            </div>
        </div>-->
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Tasa de Intéres Anual(%) :</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="interes">
            </div>
        </div>
     
      
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Tipo Moneda :</label>
            <div class="col-sm-10">
            <select class="form-control" id="select_tipo_moneda">
               
            </select>
               
            </div>
        </div>

            <button class="btn btn-success form-control" type="submit">Crear</button>
    </form>
    </div>
    </div>
    </body>
<script>
$(document).ready(function(){
    listarDropDownTipoMoneda()
})
var cliente  = 0;

var listarClientes  = function (){
    $('#table_apertura').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        "ajax":{
            "url":"http://localhost/MVC_Banco/AperturaCuenta/getCliente",
            "dataSrc":""
        },"columns":[
            {data:'idCliente'},
            {data:'nombre'},
            {data:'ap_paterno'}
        ],
        "responsieve":true,
        "iDisplayLength":10
        
        
    })
}
listarClientes()



var form_apertura_cuenta = $('#form_apertura')
form_apertura_cuenta.onsubmit = function(e){
    e.preventDefault()
    const saldo = document.querySelector('#saldo').value
    const estado = 0
    const interes = document.querySelector('#interes').value
    const id_cliente = document.querySelector('#id_apertura').value
    const tipo_moneda = document.querySelector('#select_tipo_moneda').value

    $.ajax({
        url:"http://localhost/MVC_Banco/AperturaCuenta/insertApertura",
        type:"POST",
        data:{saldo,interes,estado,tipo_moneda,id_cliente},
        success:function(data){
            swal({
                title: "Creado!",
                text: "Creado Correctamente!",
                icon: "success",
                button: " Aceptar!",
              });
        },error:function(e){
            console.log(e)
        }
    })
}
var listarDropDownTipoMoneda  = function (){
    $.ajax({
        url:"http://localhost/MVC_Banco/TipoMoneda/getTipoMoneda",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_tipo_moneda').append('<option value='+"json[values].idTipoMoneda"+'>'+json[values].descripcion+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}

$('#table_apertura').on('click','tr',function(){
      var tables = $('#table_apertura tbody').DataTable().row(this).data();
      console.log(tables[0])
    cliente = tables[0]
   id_cliente = tables[0]
   console.log(id_cliente)
    $('#id_apertura').val(tables[1])
  
})
</script>

</html>