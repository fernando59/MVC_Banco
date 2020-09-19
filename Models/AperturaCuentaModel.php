<?php 

    class AperturaCuentaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

      public function insertApertura(int $tasaInteresId,int $saldo,string $fecha_apertura,string $estado,int $clienteId,int $tipoCuentaId,int $tipoMonedaId){
        $sql = "INSERT INTO cuentapersonal (tasaInteresId,saldo,fecha_apertura,estado,clienteId,tipoCuentaId,tipoMonedaId) values (?,?,?,?,?,?,?)";

        $arrData = array($tasaInteresId,$saldo,$fecha_apertura,$estado,$clienteId,$tipoCuentaId,$tipoMonedaId);
        $request = $this->insert($sql,$arrData);
        return $request;

      } 
      public function getClientes(){
        $sql = "SELECT * FROM cliente";
        $request = $this->select_all($sql);
        return $request;
       }


    }


?>