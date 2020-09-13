
<?php   headerAdmin();?>


    <?php  require_once("Views/Components/subnavbar.php");?>
    <h2 style="text-align:center; padding:10px;">Cuenta otros </h2>
    <form action="" class="container p-5">
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
                     <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">Banco Nacional de Bolivia</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Sucursal :</label>
                  <div class="col">
                     <input type="text" class="form-control" value="Sucursal Cochabamba" readonly>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Cuenta de Destino:</label>
                  <div class="col-8">
                     <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">3501684553</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Moneda :</label>
                  <div class="col">
                     <input type="text" class="form-control" value="Bolivanos" readonly>
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tipo de Cuenta : </label>
            <div class="col-sm-10">
               <select name="" id="" class="form-control ">
                  <option value="">Cuenta de Ahorro-Cuenta Corriente</option>
               </select>
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
               <input type="text" class="form-control" value="Fernando Mercado">
            </div>

         </div>
         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Tipo de Identificación:</label>
                  <div class="col-8">
                     <select name="" id="" class="form-control ">
                        <option value="">Carnet de Identidad</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Número de Identificación :</label>
                  <div class="col">
                     <input type="text" class="form-control" value="45646955">
                  </div>
               </div>
            </div>
         </div>

         <div class="form-group row">
            <div class="col">
               <div class="row">
                  <label for="" class="col col-form-label">Direccioón:</label>
                  <div class="col-8">
                     <input type="text" class="form-control" value="Cochabamba" readonly>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Observaciones :</label>
                  <div class="col">
                     <input type="text" class="form-control">
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
                     <select name="" id="" class="form-control bg-primary text-light">
                        <option value="">Selecciona la cuenta de Débito</option>
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
                  <label for="" class="col col-form-label">Origen de Fondos:</label>
                  <div class="col-8">
                     <input type="text" class="form-control" value="Cochabamba" readonly>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="row">

                  <label for="" class="col-form-label">Destino de Fondos :</label>
                  <div class="col">
                     <input type="text" class="form-control">
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

   <button class="btn btn-success form-control mt-2">Continuar</button>
</form>

        <?php footerAdmin(); ?>