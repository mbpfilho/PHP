<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
      <?php
      function soma($a,$b){
        return $a+$b;
      }
      $x=3;
      $y=4;
      echo  "A soma de $x e $y é igual a ".soma($x,$y);
      ?>
      
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>