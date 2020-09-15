<?php 

    class AperturaCuentaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

      public function insertApertura(int $interes,int $saldo,date $fecha,string $estado,int $clienteId,int $tipoCuentaId,int $tipoMonedaId){
        $sql = "INSERT INTO cuentapersonal (interes,saldo,fecha,estado,clienteId,tipoCuentaId,tipoMonedaId values(?,?,?,?,?,?,?)";

        $arrData = array($interes,$saldo,$fecha,$estado,$clienteId,$tipoCuentaId,$tipoMonedaId);
        $request = $this->insert($sql,$arrData);
        return $request;

      } 


    }


?>