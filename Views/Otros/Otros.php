<?php   headerAdmin();?>


<?php  require_once("Views/Components/subnavbar.php");?>
<h2 style="text-align:center; padding:10px;">Cuenta otros </h2>

   <div class="card">

      <div class="card-header">
         Datos de del Banco Beneficiario
      </div>
      <div class="card-body">

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Banco:</label>
                  <div class="col-8">
                     <select name="" id="select_banco" class="form-control bg-primary text-light" onchange="changeSucursal()">
                       
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Sucursal :</label>
                  <div class="col">
                  <select name="" id="select_sucursal" class="form-control bg-primary text-light" onchange="changeCuenta()">
                       
                 </select>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta de Destino:</label>
                  <div class="col-8">
                     <select name="" id="select_cuenta_destino" class="form-control bg-primary text-light" onchange="changeDatosCuenta()">
                      
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Moneda :</label>
                  <div class="col">
                     <input id="form_monedas" type="text" class="form-control" value="" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tipo de Cuenta : </label>
            <div class="col-sm-10">
               <input id="form_cuenta" type="text" class="form-control" value="" disabled>
            </div>

         </div>

      </div>
   </div>

   <div class="card">

      <div class="card-header">
         Datos del Beneficiario Final
      </div>
      <div class="card-body">
         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Titular : </label>
            <div class="col-sm-10">
               <input id="form_titular" type="text" class="form-control" value="" disabled>
            </div>

         </div>
         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Tipo de Identificación:</label>
                  <div class="col-8">
                  <input id="form_identificacion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Número de Identificación :</label>
                  <div class="col">
                     <input  id="form_nro_identificacion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Direccioón:</label>
                  <div class="col-8">
                     <input id="form_direccion" type="text" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Observaciones :</label>
                  <div class="col">
                     <input id="form_observacion" type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         g
      </div>
   </div>
   <div class="card">

      <div class="card-header">
         Cuenta para el Débito
      </div>
      <div class="card-body">

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta de Origen:</label>
                  <div class="col-8">
                     <select name="" id="select_cuenta_origen" class="form-control bg-primary text-light">
                       
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">

            </div>
         </div>
         <div class="form-group row">

            <div class="col">
               <div class="row">

                  <label for="" class="col-4 col-form-label">Monto a Transferir :</label>
                  <div class="col">
                     <input id="form_monto" type="number" class="form-control">
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Moneda:</label>
                  <div class="col-9">
                     <select name="Seleccione la Moneda" id="select_tipo_moneda" class="form-control bg-primary text-light">
                        
                     </select>
                  </div>
               </div>
            </div>

         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Origen de Fondos:</label>
                  <div class="col-8">
                     <input id="form_origen" type="text" class="form-control" value="" >
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Destino de Fondos :</label>
                  <div class="col">
                     <input id="form_destino" type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Correo Electrónico</label>
                  <div class="col-8">
                     <input type="text" class="form-control" placeholder="example@hotmail.com">
                  </div>
               </div>
            </div>
            <div class="col">

            </div>
         </div>

      </div>
   </div>

   <button class="btn btn-success form-control mt-2" onclick="insertarTransferencia()">Continuar</button>

</div>
</div>
</body>

<script src="<?=media();?>/js/script_cuenta_otros_t.js"></script>





<script>

var insertarTransferencia = function () {

   

const cuenta_origen = document.querySelector('#select_cuenta_origen').value
const cuenta_destino = document.querySelector('#select_cuenta_destino').value
const monto = document.querySelector('#form_monto').value
const tipo_moneda = document.querySelector('#select_tipo_moneda').value
const glosa = document.querySelector('#form_observacion').value
const fondo_origen = document.querySelector('#form_origen').value
const fondo_destino = document.querySelector('#form_destino').value
var cliente_id = localStorage.getItem('usuario')
console.log(cuenta_origen)
console.log(cuenta_destino)
$.ajax({
   url: "http://localhost/MVC_Banco/Transferencia/insertTransferenciaOtros",
   type: "POST",
   data: {
      cuenta_origen,
      cuenta_destino,
      monto,
      tipo_moneda,
      glosa,
      fondo_origen,
      fondo_destino,
      cliente_id
   },
   success: function (data) {
       try{
        const json = JSON.parse(data)
        console.log(json)
        if(json == "error"){
           alert("ERROR!")
           swal({
           title: "Error!",
           text: "No se puede debitar esta cuenta!",
           icon: "error",
           button: " Aceptar!",
        });
        }else{
         
           swal({
           title: "Creado!",
           text: "Creado Correctamente!",
           icon: "success",
           button: " Aceptar!",
        });
       
        }
       }catch(error){
        swal({
            title: "Creado!",
            text: "Creado Correctamente!",
            icon: "success",
            button: " Aceptar!",
         });
       }
     
      
   },
   error: function (e) {
      console.log(e)
   }
})

}
</script>
</html>