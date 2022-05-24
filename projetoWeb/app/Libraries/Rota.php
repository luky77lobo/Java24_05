<?php
class Rota
{
    private $controlador = "Paginas";
    private $metodo = "index"; //default
    private $parametros = [];
    public function __construct()
    {
        //IDENTIFICAR UM CONTROLADOR
        $url = $this->url();
        if (!is_null($url)) :
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) :
                $this->controlador = ucwords($url[0]);

            endif;
        endif;


        require_once '../app/controllers/' . ucwords($url[0]) . '.php';

        unset($url[0]);
        $this->controlador = new $this->controlador;

        //IDENTIFICAR UM MÉTODO
        if (isset($url[1])) :
            if (method_exists($this->controlador, $url[1])) : //esse método existe?
                $this->metodo = $url[1];
                unset($url[1]);

            endif;
        endif;

        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros); //Tratar o controlador e método numa string o que vier depois do método que jogar no php


    }

    private function url()
    {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        $url = trim(rtrim($url, '/'));
        $url = explode('/', $url);
        if (isset($url)) :
            return $url;
        endif;
    }
}
