<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex1 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
      <?php
      function soma($a,$b){
        $s=$a+$b;
        echo "<p>A soma vale $s</p>";
      }
      soma(3,4);
      soma(8,2);
      $x=9;
      $y=15;
      soma($x,$y);
      ?>
      
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>