<?php 

    class TipoMoneda extends Controllers{

        public function __construct(){

            parent::__construct();
        }

 public function TipoMoneda($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"TipoMoneda",$data);
        }

        
        public function getTipoMoneda(){
            $data  =$this->model->getMoneda();
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
        }
        public function insertTipoMoneda(){
          $nombre =  $_POST['nombre'];
         
            $data = $this->model->insertMoneda($nombre);
            echo $data;
        }
        
    }

?>