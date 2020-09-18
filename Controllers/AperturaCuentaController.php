

<?php 

class AperturaCuenta extends Controllers{

    public function __construct(){
        //Ejecuta el constructor de su padre
        parent::__construct();
    }
    public function AperturaCuenta($params){
        $data['tag_page'] = "t";
        
       $this->views->getView($this,"AperturaCuenta",$data);
    }

    public function insertApertura(){
        //echo 'bien';
      //  return 'bien';
        $saldo = $_POST['saldo'];
        $interes= $_POST['interes'];
        $estado= $_POST['estado'];
        //$fecha= $_POST['fecha'];
        $tipo_moneda = $_POST['tipo_moneda'];
        $ClienteId = 1;
        $tipo_cuentaId = 1;
        $tipo_moneda = 1;
        $fecha = date("Y/m/d");
        $data = $this->model->insertApertura($interes,$saldo,$fecha,$estado,$ClienteId,$tipo_cuentaId,$tipo_moneda);

        echo $data;

    }

}



?>