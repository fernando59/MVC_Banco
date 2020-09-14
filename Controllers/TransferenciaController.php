
<?php 

    class Transferencia extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Transferencia($params){
            $data['tag_page'] = "t";
            
           $this->views->getView($this,"Transferencia",$data);
        }

        public function getCuentaOrigen(){

        }

        public function getCuentaDestino(){

        }

        public function insertTransferencia(){
            $cuenta_origen = $_POST['cuenta_origen'];
            $cuenta_destino = $_POST['cuenta_destino'];
            $monto_deposito = $_POST['monto'];
            $moneda = $_POST['tipo_moneda'];
            $glosa = $_POST['glosa'];
            $fondo_origen = $_POST['fondo_origen'];
            $fondo_destino = $_POST['fondo_destino'];
            $fecha = date("Y/m/d");
            $ClienteId = 1;
            $estado = '0';
            $data = $this->model->insertTransferencia($monto_deposito,$glosa,$fondo_origen,$fondo_destino,$fecha,$estado,$ClienteId,$cuenta_origen,$cuenta_destino,$moneda);

            echo $data;

        }

    }



?>