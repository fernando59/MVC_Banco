<?php 

    function base_url()
    {
        return BASE_URL;
    }

    /*Formatea los parametros que se envian a la vista
    Mas que todo sirve para depurar
    */
    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</prev>');
        return $format;
    }
?>