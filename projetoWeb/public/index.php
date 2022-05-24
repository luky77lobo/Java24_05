<?php
include './../app/configuracao.php';
include './../app/autoload.php';
include './../app/libraries/Controller.php';
include './../app/Libraries/Database.php';


/*     INSERIR

    $db->query("insert into tb_carro (placa) values (:placa)");
    $db->bind(":placa",$placa);
    
    $db->executa(); 
    
    $db = new Database();
$placa = 'PVL 3831';
    $db->query("insert into tb_carro (placa) values (:placa)");
    $db->bind(":placa",$placa);

    $db->executa(); 
    */
/* DELETAR    
    $id = 1;
    $db->query("delete from tb_carro where idtb_carro=:id");
    $db->bind(":id",$id);
    $db->executa();

    ALTERAR(UPDATE)
    $db->query("update tb_carro set placa=: where idtb_carro =: id")
    $db->bind(":id",$id);
    $db->bind(":placa",$placa);
    $db->executa();
    
    SELECIONAR UM
    
    $db->query("select * from tb_carro where idtb_carro = {$id}");
    $obj = $db->resultado();
    $obj2 = $db->resultado();
    echo $obj->placa. "<br>";
    echo $obj2->idtb_carro;
    
    
  $db->query("select * from tb_carro");
   
    
    foreach($db->resultados() as $resultado):
       
        echo $resultado->placa . "---------------->" . $resultado->idtb_carro. "<br>";
    endforeach;

   
    /* 
    $db = new Database();

     
  $db->query("select * from tb_carro");
   
    
  foreach($db->resultados() as $resultado):
     
      echo $resultado->placa . " -- -- -- -- -- -- --> " . $resultado->idtb_carro. "<br>";
  endforeach;
 
      
    $db = new Database();
    $db->query("select * from tb_carro");
   
    
    foreach($db->resultados() as $resultado):
       
        echo $resultado->placa . "---------------->" . $resultado->idtb_carro. "<br>";
    endforeach;

    $db = new Database();
$db->query("select c.placa, m.cidade, m.ano, i.descricao, i.pontos, i.valor from tb_carro as c inner join tb_multa as m on c.idtb_carro = m.tb_carro_idtb_carro inner join tb_Infracao as i on i.idtb_Infracao = m.tb_Infracao_idtb_Infracao;");
$db->executa();

foreach($db->resultados() as $objeto):

  echo $objeto->placa . "  Placa do carro <br> ";
  echo $objeto->ano . "  Ano da multa <br> ";
  echo $objeto->descricao . " Situação <br> ";
  echo $objeto->pontos . "  Perdidos <br> ";
  echo $objeto->valor . " Reais <br>";
endforeach;
*/



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>/public/css/estilo.css" rel="stylesheet">
    

</head>

<body>
    <div class= "img-fluid logo">
<h1 class="h1">ATIVIDADE ACADÊMICA</h1>
<?php 
             include '../app/Views/topo.php';
             

  
  
   
   
         
    




    

         
             
             $r = new Rota(); 
          

             
            include '../app/Views/rodape.php';
             ?>
         



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    </div>
</body>

</html>