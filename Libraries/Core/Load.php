<?php 
/* Configurando 
    la carga de los archivos*/

    $controllerFile = 'Controllers/'.$controller.'Controller.php';
    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller();
        if(method_exists($controller,$method)){
            $controller->{$method}($params);
        }else{
            require_once("Controllers/Error.php");
        }
    }else{
        require_once("Controllers/Error.php");
    }



?>