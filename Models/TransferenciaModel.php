<?php 

    class TransferenciaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

   
         public function insertTransferencia(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
             $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
             $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);


            $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
            $monto = $this->select($selectSQL);
            
            // Tipo Cambio
            $selectCambio ="SELECT monto_tc FROM tipo_cambio,tipomoneda WHERE id_operacionTC =2 AND id_destino_tipomoneda =  idTipoMoneda";
            $tipoCambio = $this->select($selectCambio);


           if($monto['saldo'] -($monto_deposito*$tipoCambio['monto_tc']) > 0){
                
                
                //resta
                $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito*$tipoCambio['monto_tc']." WHERE nroCuenta = ".$cuentaDebitoId;
                $arrData2 =array($monto_deposito,$cuentaDebitoId);
                
                $sql4 = "SELECT nroCuenta FROM cuentadeposito where idCuentaDeposito = ".$cuentaDepositoId;
                
                $val = $this->select($sql4);
                
                $id = $val['nroCuenta'];
                $sql3 = "UPDATE cuentapersonal set saldo = saldo +".$monto_deposito*$tipoCambio['monto_tc']." WHERE nroCuenta = ".$id;
                $arrData3 = array($monto_deposito,$id);
                $request = $this->insert($sql,$arrData);
                $resta = $this->update($sql2,$arrData2);
                $suma  = $this->update($sql3,$arrData3);
                return $request;
                }
                return 'error';
            }
            public function getCuentaOrigen(int $cliente_id)
            {
                
                $sql = "SELECT * FROM cuentapersonal WHERE clienteId =".$cliente_id;
                $request = $this->select_all($sql);
                return $request;             
         }
         public function getCuentaPersonal( $cliente_id)
         {
           
                $sql = "SELECT * FROM cuentapersonal WHERE clienteId = '$cliente_id' AND tipoCuentaDepositoId = 1 " ;
                $request = $this->select_all($sql);
                return $request;             
         }
       
            public function getCuentaDestino(int $cliente_id)
            {
                

                $sql = "SELECT * FROM cuentadeposito WHERE clienteId =".$cliente_id;
                $request = $this->select_all($sql);
                return $request;             
         }
         
         public function getCuentaOtrosXBancoSucrusal($bancoId,$sucursalId,$usuarioId){
            $sql = "SELECT * FROM cuentaotros c , cuentadeposito d WHERE c.cuentaDepositoId= d.idCuentaDeposito and c.bancoId = '$bancoId' and c.sucursalId = '$sucursalId' and d.clienteId = '$usuarioId' ";
            $request = $this->select_all($sql);
            return $request;        
         }

         public function getDatosCuenta($CuentaId){
            $sql = "SELECT *,m.descripcion as descr FROM cuentaotros c, tipoidentificacion t , tipomoneda m , tipocuenta tc WHERE c.cuentaDepositoId= '$CuentaId' and c.tipoIdentificacionId= t.idTipoI  and  c.tipoMonedaId=m.idTipoMoneda and c.tipoCuentaId= tc.id";
            $request = $this->select_all($sql);
            return $request; 
         }


         public function insertTransferenciaOtros(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,string $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){
       
            try{
                $sql = "INSERT INTO  transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";
                $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);
    
    
               $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
               $monto = $this->select($selectSQL);
               //return $monto;
              if($monto['saldo'] -$monto_deposito > 0){
                   
                   
                   //resta
                   $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito." WHERE nroCuenta = ".$cuentaDebitoId;
                   $arrData2 =array($monto_deposito,$cuentaDebitoId);
                   
                   $request = $this->insert($sql,$arrData);
                   $resta = $this->update($sql2,$arrData2);
                  
                   return $request;
                   }
                   return 'error';
            }catch(Exception $e){
               // return 'error';
            }
           
           }


    }


?>