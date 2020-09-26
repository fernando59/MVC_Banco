
<?php   headerAdmin();?>

    <?php  require_once("Views/Components/subnavbar.php");?>
    <h2 style="text-align:center; paddign:10px;">Cuenta Terceros</h2>
   <div class="card">

      <div class="card-header">
         Datos de Cuenta
      </div>
      <div class="card-body">

         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Destino Fondos : </label>
            <div class="col-sm-10">
               <input type="text" class="form-control">
            </div>

         </div>


      </div>

   </div>
   <div class="card">

      <div class="card-header">
         Datos de Destinatario
      </div>
      <div class="card-body">

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Titular Cuenta:</label>
                  <div class="col-8">
                     <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">Fernando Mercado Saby</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Cuenta Destino :</label>
                  <div class="col">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
   <div class="card">

      <div class="card-header">
         Datos Adicionales
      </div>
      <div class="card-body">

         <div class="form-group row">

            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Monto a Transferir :</label>
                  <div class="col">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Moneda:</label>
                  <div class="col-9">
                     <select  class="form-control bg-primary text-light" id="select_tipo_moneda">
                    
                     </select>
                  </div>
               </div>
            </div>

         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Glosa:</label>
                  <div class="col-9">
                     <input type="text" class="form-control" id="form_tercero_glosa">
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Origen de Fondos :</label>
                  <div class="col">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Destino de Fondos:</label>
                  <div class="col-9">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-3 col-form-label">Mensaje Adjunto al correo electronico :</label>
                  <div class="col">
                     <input type="text" class="form-control">
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
   <button class="btn btn-success form-control mt-2" onclick="insertar()">Continuar</button>
 </div>

 </div>

 </body>
   <script>
   
      $(document).ready(function (){
        listarDropDownTipoMoneda()
      })
   
      var listarDropDownTipoMoneda = function () {
      $.ajax({
         url: "http://localhost/MVC_Banco/TipoMoneda/getTipoMoneda",
         type: "GET",
         success: function (data) {
            const json = JSON.parse(data)
            for (values in json) {
               $('#select_tipo_moneda').append('<option value=' + "" + json[values].idTipoMoneda + "" +
                  '>' + json[values].descripcion + '</option>')
            }
         },
         error: function (error) {
            console.log(error)
         }
      })
   }
   var insertar = function (){
      let glosa = $('#form_tercero_glosa').val()
      let monto = $('#form_tercero_monto').val()
      let correo = $('#form_tercero_correo').val()
      let moneda = $('#select_tipo_moneda').val()

         $.ajax({
            url:"http://localhost/MVC_Banco/Tercero/insertarTercero",
            type:"POST",
            data:{glosa,monto,correo,moneda}
            success:function(data)
            {
               console.log(data)
            },
            error:function(e){

            }
         })
      console.log(glosa)
   }
   </script>
 </html>

