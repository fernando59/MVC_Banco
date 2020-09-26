

<?php 

    class TerceroModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertarTercero(string $nombre,int $idBanco){

            
            $sql = "INSERT INTO sucursal (nombre,idBanco) values (?,?)";
            $arrData = array($nombre,$idBanco);
            $request = $this->insert($sql,$arrData);
            return $request;
           }
          
           

    }


?>