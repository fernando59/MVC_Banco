<?php 

    class CuentaOtros extends Controllers{

        public function __construct(){

            parent::__construct();
        }

        public function CuentaOtros($params){
            $data['tag_page'] = "Home";
           $this->views->getView($this,"CuentaOtros",$data);
           
        }

        
        public function getCuentaOtros(){
           
            $data  =$this->model->getCuentaOtros();
 
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        public function insertCuentaOtros(){
          $cuenta =  $_POST['cuenta'];
          $titular = $_POST['titular'];
          $nroCi = $_POST['nroCi'];
          $direccion = $_POST['direccion'];
          $correo = $_POST['correo'];
            $data = $this->model->insertCuentaOtros($cuenta,$titular,$nroCi,$direccion,$correo);
           
        }
        
    }

?>