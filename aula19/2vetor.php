<!doctype html>
<html lang="pt-br">
  <head>
    <title>vetor PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <?php
      $v=array("A","J","M","X","K");
      print_r($v);
      $v[]="O";
      print_r($v);
      array_push($v,"B");
      print_r($v);
      array_pop($v);
      print_r($v);
      array_unshift($v,"I");
      print_r($v);
      array_shift($v);
      print_r($v);
      ?>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>