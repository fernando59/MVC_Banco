<?php   headerAdmin(); getModal('modalApertura','d'); ?>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
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

$('#table_apertura').on('click','tr',function(){
      var data = $('#table_apertura').DataTable().row(this).data();
    cliente = data[0]
    $('#id_apertura').val(cliente)
  
})
</script>
<?php footerAdmin(); ?>