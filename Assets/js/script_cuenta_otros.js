
$(document).ready(function(){
    listarCuentaOtros();
    listarDropDownBanco();
    listarDropDownTipoCuentas();   
    listarDropDownTipoMoneda(); 
    listarDropDownTipoIdentificacion();
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

function changeSucursal()
        {
            var banco =  document.querySelector('#select_banco').value;
            
            
            if (banco == null) {
                return alert("Debe Elijir un Banco");
             }
             
            $.ajax({
                url:"http://localhost/MVC_Banco/CuentaOtros/getSucursal",
                type:"GET",
                data:{banco},
                success:function(data){
                    const json = JSON.parse(data)
                   
                    for (values in json){
                        $('#select_sucursal').append('<option value='+ json[values].idSucursal +'>'+json[values].nombre+'</option>')
                    }
                },error:function(error){
                    console.log(error)
                }
            })
        }

var listarDropDownBanco  = function ()
{
    $('#select_sucursal').append('<option >Seleccione Una Sucursal </option>');
    $('#select_banco').append('<option >Seleccione Un Banco </option>');
    $.ajax({
        url:"http://localhost/MVC_Banco/CuentaOtros/getBanco",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_banco').append('<option value='+ json[values].idBanco +'>'+json[values].nombre+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}

var listarDropDownTipoCuentas  = function (){
    $('#select_tipo_cuenta').append('<option >Seleccione Un Tipo Cuenta </option>');
    $.ajax({
        url:"http://localhost/MVC_Banco/CuentaOtros/getTipoCuenta",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_tipo_cuenta').append('<option value='+ json[values].id+'>'+json[values].descripcion+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}


var listarDropDownTipoMoneda  = function (){
    $('#select_tipo_moneda').append('<option >Seleccione Un Tipo Moneda </option>');
    $.ajax({
        url:"http://localhost/MVC_Banco/CuentaOtros/getTipoMoneda",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_tipo_moneda').append('<option value='+ json[values].idTipoMoneda+'>'+json[values].descripcion+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}

var listarDropDownTipoIdentificacion  = function (){
    $('#select_tipo_identificacion').append('<option >Seleccione Un Tipo  </option>');
    $.ajax({
        url:"http://localhost/MVC_Banco/CuentaOtros/getTipoIdentificacion",
        type:"GET",
        success:function(data){
            const json = JSON.parse(data)
            for (values in json){
                $('#select_tipo_identificacion').append('<option value='+ json[values].idTipoI+'>'+json[values].nombre+'</option>')
            }
        },error:function(error){
            console.log(error)
        }
    })
}



var form_cuentaotros = document.querySelector("#form-cuentaotros")
    form_cuentaotros.onsubmit = function(e){
        e.preventDefault()
        
        const cuenta  = document.querySelector('#form_nrocuenta').value;
        const titular  = document.querySelector('#form_titular').value;
        const nroCi  = document.querySelector('#form_nroidentificacion').value;
        const direccion  = document.querySelector('#form_direccion').value;
        const correo  = document.querySelector('#form_correo').value;
        const banco =  document.querySelector('#select_banco').value;
        const sucursal =  document.querySelector('#select_sucursal').value;
        const tipocuenta =  document.querySelector('#select_tipo_cuenta').value;
        const tipomoneda =  document.querySelector('#select_tipo_moneda').value;
        const tipoidenti =  document.querySelector('#select_tipo_identificacion').value;
        let usuario = localStorage.getItem('usuario');
 
        console.log(tipoidenti);
        
      
        $.ajax({
            url:"http://localhost/MVC_Banco/CuentaOtros/insertCuentaOtros",
            type:"POST",
            data:{cuenta,titular,nroCi,direccion,correo,banco,sucursal,tipocuenta,tipomoneda,usuario,tipoidenti},
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