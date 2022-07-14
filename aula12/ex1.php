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
      $c=10;
      do{
        echo "<p>$c</p>";
        $c--;
      } while($c>=1);
      ?>
      
      <!-- <a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>