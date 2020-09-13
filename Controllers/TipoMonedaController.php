<?php 

    class TipoMoneda extends Controllers{

        public function __construct(){

            parent::__construct();
        }

 public function TipoMoneda($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"TipoMoneda",$data);
        }

    }



?>