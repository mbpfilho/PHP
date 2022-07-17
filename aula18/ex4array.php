<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2array PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <?php
      $n=array( 3=>5,
                1=>9,
                0=>8,
                4=>7);
                $n[]="E";
                unset($n[4]);
      print_r($n);
      ?>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>