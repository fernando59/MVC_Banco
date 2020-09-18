<?php   headerAdmin();?>
    <h2 class="text-center p-2">Registrar Apertura de Cuenta</h2>
    <form id="form_apertura">
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

<?php footerAdmin(); ?>