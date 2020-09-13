
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

   

    }



?>