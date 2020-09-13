<?php   headerAdmin();?>

    <?php  require_once("Views/Components/subnavbar.php");?>
    <h2 style="text-align:center; padding:10px;">Cuenta Propia</h2>
    <form action="" class="container p-5">

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de origen : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light">
         <option value="">Fernando Mercado</option>
      </select>
   </div>
</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Cuenta de destino : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light">
         <option value="">Alguien</option>
      </select>
   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Monto : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Moneda : </label>
   <div class="col-sm-10">
      <select class="form-control bg-primary text-light">
         <option value="">Seleccione Moneda</option>
         <option value="">Bolivianos</option>
         <option value="">Dolares</option>
      </select>
   </div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Monto : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control">
   </div>

</div>
<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Origen Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control">
   </div>

</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Destino Fondos : </label>
   <div class="col-sm-10">
      <input type="text" class="form-control">
   </div>

</div>

<button class="btn btn-success form-control mt-5">Continuar</button>
</form>
        <?php footerAdmin(); ?>
