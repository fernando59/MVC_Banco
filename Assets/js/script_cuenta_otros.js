
$(document).ready(function(){
    listarCuentaOtros();
})


var listarCuentaOtros  = function (){
$('#table-cuenta_otros').DataTable({
    "aProcessing":true,
    "aServerSide":true,
    "ajax":{
        "url":"http://localhost/MVC_Banco/CuentaOtros/getCuentaOtros",
        "dataSrc":""
    },"columns":[
        {data:'nroCuenta'},
        {data:'nombre_titular'},
        {data:'nro_identificacion'},
        {data:'direccion'}
    ],
    "responsieve":true,
    "iDisplayLength":10

    
})
}


var form_cuentaotros = document.querySelector("#form-cuentaotros")
    form_cuentaotros.onsubmit = function(e){
        e.preventDefault()
        console.log("aa");
        const cuenta  = document.querySelector('#form_nrocuenta').value;
        const titular  = document.querySelector('#form_titular').value;
        const nroCi  = document.querySelector('#form_nroidentificacion').value;
        const direccion  = document.querySelector('#form_direccion').value;
        const correo  = document.querySelector('#form_correo').value;
        $.ajax({
            url:"http://localhost/MVC_Banco/CuentaOtros/insertCuentaOtros",
            type:"POST",
            data:{cuenta,titular,nroCi,direccion,correo},
            success:function(data){
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    button: "Creado Correctamente!",
                  });
                 $('#modalCuentaOtros').modal()
            },error:function(e){
                console.log(e)
            }
        })
    }
function openModalCuentaOtros(){
    $('#modalCuentaOtros').modal('show')
}