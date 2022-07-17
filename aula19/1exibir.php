<!doctype html>
<html lang="pt-br">
  <head>
    <title>exibir PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <?php
      $v=array("A","J","M","X","K");
      echo "<p>O vetor tem ".count($v)." elementos</p>";
      print_r($v);
      var_dump($v);
      ?>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>