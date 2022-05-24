<?php
class Controller{

//CARREGAR MODELOS
public function model($model){
require_once '../app/models/' .$model. ".php";
return new $model;
}



//CARREGAR VIEWS
public function view($view, $dados=[]){

    $arquivo = '../app/views/'.$view. ".php";
    if(file_exists($arquivo)):

        require_once $arquivo;
    else:
        die('O arquivo de view é inexistente!!');
    

    endif;

}


}

?>