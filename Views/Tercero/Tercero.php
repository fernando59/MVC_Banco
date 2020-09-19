
<?php   headerAdmin();?>

    <?php  require_once("Views/Components/subnavbar.php");?>
    <h2 style="text-align:center; paddign:10px;">Cuenta Terceros</h2>
    <form action="" class="container p-5">
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
                     <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">Seleccione la Moneda</option>
                        <option value="">Bolivianos</option>
                        <option value="">Dolares</option>
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
                     <input type="text" class="form-control">
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
   <button class="btn btn-success form-control mt-2">Continuar</button>
</form>
        <?php footerAdmin(); ?>