<?php 

    class TransferenciaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

   
         public function insertTransferencia(int $cuenta_origen,int $cuenta_destino,float $monto_deposito,int $tipoMonedaId,string $glosa,string $fondo_origen,string $fondo_destino){

             $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,'2020-09-23',0,1,?,?,?)";
             $arrData = array($cuenta_origen,$cuenta_destino,$monto_deposito,$tipoMonedaId,$glosa,$fondo_origen,$fondo_destino);
             $request = $this->insert($sql,$arrData);
             return $request;
         }


    }


?>