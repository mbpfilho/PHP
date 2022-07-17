<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex5array PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <?php
      $v=array("nome"=>"Ana","idade"=>23,"peso"=>65.5);
      $v["fuma"]=true;
      print_r($v);
      foreach($v as $k=>$c){
        echo "O campo $k possui o conteúdo $c<br>";
      }
      ?>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>