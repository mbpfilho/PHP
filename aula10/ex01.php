<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex01 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
      <div>
        <?php
        $n=isset($_GET["num"])?$_GET["num"]:0;
        $o=isset($_GET["oper"])?$_GET["oper"]:1;
        switch($o){
            case 1:$r=$n*2;break;
            case 2:$r=$n**3;break;
            case 3:$r=sqrt($n); //$n^(1/2)
        }
        echo "<p>O resultado da opera&ccedil;&atilde;o foi <strong>$r</strong></p><br>"
        ?>
        <a href="ex01.html" class="botao">Voltar</a>
      </div>
  </body>
</html>