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
         public function getCuentaOrigen(int $cliente_id)
         {
           
                $sql = "SELECT * FROM cuentapersonal WHERE clienteId =".$cliente_id;
                $request = $this->select_all($sql);
                return $request;             
         }
         public function getCuentaDestino(int $cliente_id)
         {
           
                $sql = "SELECT * FROM cuentadeposito WHERE clienteId =".$cliente_id;
                $request = $this->select_all($sql);
                return $request;             
         }
         


    }


?>