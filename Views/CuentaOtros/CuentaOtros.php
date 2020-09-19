<?php   headerAdmin();?>
    <?php   getModal('modalCuentaOtros','d');?>

    <h2 style="text-align:center;">Cuenta Otros</h2>
    <button class="btn btn-success m-4" onclick="openModalCuentaOtros()" data-toggle="modal" data-target="#modalCuentaOtros">Nuevo</button>
                    <table id="table-cuenta_otros">
                        <thead>
                            <tr>
                            <th>nroCuenta</th>
                            <th>nombre_titular</th>
                            <th>nro_identificacion</th>
                            <th>direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        
                        </tbody>
                    </table>
       
        <?php footerAdmin(); ?>