<?php   headerAdmin();?>

    <?php  require_once("Views/Components/subnavbar.php");?>
    <h2 style="text-align:center; padding:10px;">Cuenta Propia</h2>
    <form class="container p-5" id="form_transferencia">

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de origen : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light" >
         <option value="1" id="transferencia_cuenta_origen">Fernando Mercado</option>
      </select>
   </div>
</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de destino : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light" >
         <option value="0" id="transferencia_cuenta_destino">Alguien</option>
      </select>
   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Monto : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_monto">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Moneda : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light" id="select_tipo_moneda">
         <option value="0" id="transferencia_tipo_moneda">Seleccione Moneda</option>
        
      </select>
   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Glosa : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_glosa">
   </div>

</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Origen Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_fondo_origen">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Destino Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control" id="transferencia_fondo_destino">
   </div>

</div>

<button class="btn btn-success form-control mt-5" type="submit">Guardar</button>
</form>
        <?php footerAdmin(); ?>
