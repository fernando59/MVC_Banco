<?php 

    class TipoMonedaModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function getMoneda(){
          $sql = "SELECT * FROM tipo_moneda";
          $request = $this->select_all($sql);
          return $request;
         }
         public function insertMoneda(string $nombre){
             $sql = "INSERT INTO tipo_moneda (nombre) values (?)";
             $arrData = array($nombre);
             $request = $this->insert($sql,$arrData);
             return $request;
         }


    }


?>