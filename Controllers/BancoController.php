
<?php 

    class Banco extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function banco($params){
            $data['tag_page'] = "Banco";
            
           $this->views->getView($this,"Banco",$data);
        }
        public function insertar_banco(){
            $nombre = $_POST['nombre'];

            $data = $this->model->insertBanco($nombre);
            echo $data;
        }
       
   

    }



?>