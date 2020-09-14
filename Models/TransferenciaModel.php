<?php 

    class TransferenciaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

   
         public function insertTransferencia(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
             $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
             $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);
             $request = $this->insert($sql,$arrData);
             return $request;
         }


    }


?>