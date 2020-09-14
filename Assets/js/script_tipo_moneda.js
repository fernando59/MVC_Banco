
$(document).ready(function(){
    listarTipoMoneda();
   
})



var listarTipoMoneda  = function (){
    $('#table-tipo_moneda').DataTable({
        "aProcessing":true,
        "aServerSide":true,
        "ajax":{
            "url":"http://localhost/MVC_Banco/TipoMoneda/getTipoMoneda",
            "dataSrc":""
        },"columns":[
            {data:'idTipoMoneda'},
            {data:'descripcion'}
        ],
        "responsieve":true,
        "iDisplayLength":10
    
        
    })
    }


var form_moneda = document.querySelector("#form-moneda")
    form_moneda.onsubmit = function(e){
        e.preventDefault()
        const nombre  = document.querySelector('#form_nombre_moneda').value
    
        $.ajax({
            url:"http://localhost/MVC_Banco/TipoMoneda/insertTipoMoneda",
            type:"POST",
            data:{nombre},
            success:function(data){
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    button: "Creado Correctamente!",
                  });
                 $('#modalMoneda').modal()
            },error:function(e){
                console.log(e)
            }
        })
    }
function openModalMoneda(){
    $('#modalMoneda').modal('show')
}