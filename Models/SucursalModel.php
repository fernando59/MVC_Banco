
<?php 

    class SucursalModel extends Mysql{

        public function __construct(){
            parent::__construct();
        }

        public function insertSucursal(string $nombre,int $idBanco){
            $sql = "INSERT INTO sucursal (nombre,idBanco) values (?,?)";
            $arrData = array($nombre,$idBanco);
            $request = $this->insert($sql,$arrData);
            return $request;
           }
           public function getBanco(){
               $sql  = "SELECT * FROM banco";
               $request=$this->select_all($sql);
               return $request;
           }

    }


?>