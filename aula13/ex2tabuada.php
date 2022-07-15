<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2t PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
        <?php
        $n=isset($_GET["num"])?htmlspecialchars($_GET["num"]):1;
        for($i=1;$i<=10;$i++){
            echo "<p>$n x $i = ".$n*$i."</p>";
        }
        ?>
            
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>