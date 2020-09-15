
    <?php   headerAdmin();?>
    <h2 class="text-center p-2">Apertura de Cuenta Bancaria</h2>
    <form action="../actions/apertura.php"class="container mt-5" method="POST">
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Titular :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="titular" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Cuenta :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="cuenta" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Estado :</label>
            <div class="col-sm-10">
            <select name="estdo"  class="form-control">
                <option value="a">Activo</option>
                <option value="b">Inactivo</option>
            </select>
               
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Tasa de Intéres Anual(%) :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="interes">
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Fecha :</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="fecha">
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Agencia :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="agencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="headline" class="col-sm-2 col-form-label">Ejecutivo :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ejecutivo">
            </div>
        </div>



    <table class="table p-2 container ">

        <thead class="thead-dark">
        <tr>
            <th>Saldo Reserva :</th>
            <th>Saldo Consultado :</th>
            <th>Saldo Congelado :</th>
            <th>Saldo Congelado :</th>
            <th>Saldo Sobregiro :</th>
            <th>Saldo Disponible :</th>
            <th>Saldo Actual :</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        

        </tr>        
        </tbody>

    </table>

    </form>

<?php footerAdmin(); ?>