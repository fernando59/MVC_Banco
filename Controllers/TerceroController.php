
<?php 

    class Tercero extends Controllers{

        public function __construct(){
            //Ejecuta el constructor de su padre
            parent::__construct();
        }
        public function Tercero($params){
            $data['tag_page'] = "Home";
            
           $this->views->getView($this,"Tercero",$data);
        }

        

    }



?>