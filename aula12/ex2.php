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
      $c=isset($_GET["n"])?htmlspecialchars($_GET["n"]):1;
      $r=1;
      do{
        $r*=$c;
        $c--;
      } while($c>=2);
      echo "<p>O fatorial de ".htmlspecialchars($_GET["n"])." é $r</p>";
      ?>
      
      <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>