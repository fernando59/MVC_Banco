<?php 

    class TerceroModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertarTercero(int $monto_deposito,string $glosa,string $origenFondo,string $destinoFondo,string $fecha,int $estado,int $ClienteId,int $cuentaDebitoId,int $cuentaDepositoId,int $tipoMonedaId){

            
            $sql = "INSERT INTO transaccion (monto_deposito,glosa,origenFondo,destinoFondo,fecha,estado,ClienteId,cuentaDebitoId,cuentaDepositoId,tipoMonedaId) values (?,?,?,?,?,?,?,?,?,?)";


            $selectSQL = "SELECT saldo FROM cuentapersonal WHERE nroCuenta = ".$cuentaDebitoId;
            $monto = $this->select($selectSQL);
            //return $monto;
           if($monto['saldo'] -$monto_deposito > 0){

               //resta
               $sql2 = "UPDATE cuentapersonal set saldo = saldo -".$monto_deposito." WHERE nroCuenta = ".$cuentaDebitoId;
               $arrData2 =array($monto_deposito,$cuentaDebitoId);

               $sql4 = "SELECT nroCuenta FROM cuentadeposito where idCuentaDeposito = ".$cuentaDepositoId;
                
               $val = $this->select($sql4);
               
               $id = $val['nroCuenta'];
               $sql3 = "UPDATE cuentapersonal set saldo = saldo +".$monto_deposito." WHERE nroCuenta = ".$id;
               $arrData3 = array($monto_deposito,$id);




            $arrData = array($monto_deposito,$glosa,$origenFondo,$destinoFondo,$fecha,$estado,$ClienteId,$cuentaDebitoId,$cuentaDepositoId,$tipoMonedaId);
            $request = $this->insert($sql,$arrData);

            $resta = $this->update($sql2,$arrData2);
            $suma  = $this->update($sql3,$arrData3);

            
            return $request;
           }
            return 'error';
           }




        public function getCuentaDestino(){
            $sql= " SELECT cliente.nombre,cuentadeposito.nroCuenta,cuentadeposito.idCuentaDeposito FROM cuentadeposito,cliente  WHERE tipoCuentaDepositoId = 2 AND cuentadeposito.clienteId =cliente.idCliente";

            $request  = $this->select_all($sql);
            return $request;
        }   
          
           

    }


?>