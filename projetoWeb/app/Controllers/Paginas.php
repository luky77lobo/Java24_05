<?php

class Paginas extends Controller {

   
    public function index(){
      $dados = ['Título' => 'INTERNET', "Descrição" => 'A ferramenta que vai ser necessário'];
      $this->view('/paginas/home', $dados); //array associativo
    }
    public function carro(){
      
    }

}


?>