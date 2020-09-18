var form_apertura_cuenta = document.querySelector('#form_apertura')
form_apertura_cuenta.onsubmit = function(e){
    e.preventDefault()
    const saldo = document.querySelector('#saldo').value
    const estado = 0
    const interes = document.querySelector('#interes').value
  //  const fecha = document.querySelector('#fecha').value
    const tipo_moneda = document.querySelector('#select_tipo_moneda').value
    console.log(tipo_moneda)
    $.ajax({
        url:"http://localhost/MVC_Banco/AperturaCuenta/insertApertura",
        type:"POST",
        data:{saldo,interes,estado,tipo_moneda},
        success:function(data){
            swal({
                title: "Creado!",
                text: "Creado Correctamente!",
                icon: "success",
                button: " Aceptar!",
              });
        },error:function(e){
            console.log(e)
        }
    })
    console.log('hfid')
}