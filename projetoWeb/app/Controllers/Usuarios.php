<?php
class Usuarios extends Controller
{

   public function cadastrar()
   {
      $formulario2 = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if (isset($formulario)) :
         $dados = [
            'nome' => trim($formulario['nome']),
            'email' => trim($formulario['email']),

            'senha' => trim($formulario['senha']),

         ];
         var_dump($formulario);

      else :
         $dados = [
            'nome' => '',
            'email' => '',

            'senha' => '',



         ];
      endif;
      if (empty($formulario['nome'])) {
         $dados['nome_erro'] = "Faz o campo nome <br>";

         if ($formulario['nome'] != $formulario2['nome']) :
            $dados['nome_erro'] = "Não está condizente com o seu cadastro <br>";
         endif;
      }
      if (empty($formulario['email'])) :
         $dados['email_erro'] = "Preencha o campo email <br>";
      endif;
      if (empty($formulario['senha'])) :
         if (empty($formulario['senha'])) :
            $dados['senha_erro'] = "Preencha o campo senha <br>";
         elseif (strlen($formulario['senha']) < 6) :
            $dados['senha_erro'] = 'Deve ter no mínimo 6 caracteres';
         endif;
      endif;

      $this->view('/usuarios/cadastrar', $dados);
   }
   public function entrar()
   {

      $formulario2 = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if (isset($formulario2)) :
         $dados = [
            'nome' => trim($formulario2['nome']),

            'email' => trim($formulario2['email']),
            'estado' => trim($formulario2['estado']),

            'senha' => trim($formulario2['senha']),

            'confirmar_senha' => trim($formulario2['confirmar_senha']),

         ];


         var_dump($formulario2);
      else :
         $dados = [
            'nome' => '',
            'email' => '',
            'estado' => '',
            'senha' => '',

            'confirmar_senha' => '',

         ];
      endif;

      if (empty($formulario2['nome'])) :
         $dados['nome_erro'] = "Preencha o campo nome <br>";
      endif;
      if (empty($formulario2['email'])) :
         $dados['email_erro'] = "Preencha o campo email <br>";
      endif;
      if (empty($formulario2['estado'])) :
         $dados['estado_erro'] = "Preencha o campo estado <br>";
      endif;
      if (empty($formulario2['senha'])) :
         $dados['senha_erro'] = "Preencha o campo senha <br>";
      elseif (strlen($formulario2['senha']) < 6) :
         $dados['senha_erro'] = 'Deve ter no mínimo 6 caracteres';
      endif;
      if (empty($formulario2['confirmar_senha'])) :
         $dados['confirmar_senha_erro'] = "Repita a senha ";
      else :
         if ($formulario2['senha'] != $formulario2['confirmar_senha']) :
            $dados['confirmar_senha_erro'] = "Senhas distintas";
         endif;
      endif;


      if (!in_array("", $formulario2)) :
         echo "Tudo certo, pode fazer o cadastro";
      endif;
      $this->view('/usuarios/entrar', $dados);
   }
}
