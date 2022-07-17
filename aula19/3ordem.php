<!doctype html>
<html lang="pt-br">
  <head>
    <title>ordem PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <?php
      $v=array("A","J","M","X","K");
      print_r($v);
      sort($v);
      print_r($v);
      rsort($v);
      print_r($v);
      $v=array("A","J","M","X","K");
      asort($v);
      print_r($v);
      $v=array("A","J","M","X","K");
      arsort($v);
      print_r($v);
      ksort($v);
      print_r($v);
      krsort($v);
      print_r($v);
      ?>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>