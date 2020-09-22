
    <?php   headerAdmin();?>

<?php getModal('modalApertura','d');?>
     <h1>Home</h1>

         </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('#modalApertura').modal({backdrop: 'static', keyboard: false})
    listarClientes()
})

var listarClientes  = function (){
    $.ajax({
        url:"http://localhost/MVC_Banco/AperturaCuenta/getCliente",
        type:"get",
        success:function(data){
            const json = JSON.parse(data)
            var raw = ""
            for(let i =  0; i<json.length; i++){
                
                 raw += "<tr><td>"+json[i].idCliente+"</td><td>"+json[i].nombre+"</td><td>"+json[i].ap_paterno+"</td></tr>"
            }
           $('#table_apertura_body').append(raw)
      
        },errror(e){
            console.log(e)
        }

    })
}


$('#table_apertura').on('click','tr',function(e){
    var values = e.currentTarget.querySelectorAll('td')
    var nombre  =values[1].innerHTML
id_cliente = values[0].innerHTML
localStorage.setItem('usuario',id_cliente)
localStorage.setItem('nombre',nombre)
  $('#modalApertura').modal('hide')
})

</script>
</html>