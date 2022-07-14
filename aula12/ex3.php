<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex3 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
      <?php
      $t=isset($_GET["tabuada"])?htmlspecialchars($_GET["tabuada"]):1;
      $c=1;
      echo "<h3>Tabuada de $t:</h3>";
      do{
        echo "<p>$t X $c = ".$t*$c."</p>";
        $c++;
      } while($c<=10);
      ?>
      
      <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>