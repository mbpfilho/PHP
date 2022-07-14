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
        while($c>=0){
            echo "$c<br>";
            $c-=2;
        }
        ?>
        
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
      </div>
  </body>
</html>