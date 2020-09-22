<?php 

    class TransferenciaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

   
         public function insertTransferencia(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
             $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
             $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);

             //resta
            $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito." WHERE nroCuenta = ".$cuentaDebitoId;
            $arrData2 =array($monto_deposito,$cuentaDebitoId);
            
            $sql4 = "SELECT nroCuenta FROM cuentadeposito where idCuentaDeposito = ".$cuentaDepositoId;

            $val = $this->select($sql4);
            
            $id = $val['nroCuenta'];
            $sql3 = "UPDATE cuentapersonal set saldo = saldo +".$monto_deposito." WHERE nroCuenta = ".$id;
            $arrData3 = array($monto_deposito,$id);
            $request = $this->insert($sql,$arrData);
            $resta = $this->update($sql2,$arrData2);
            $suma  = $this->update($sql3,$arrData3);
            //return $suma;
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