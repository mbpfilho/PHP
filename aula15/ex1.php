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
        function teste1($x){
            $x+=2;
            echo "1<p>O valor de x é $x</p>";
        }
        $a=3;
        teste1($a);
        echo "<p>O valor de a é $a</p>";

        function teste2(&$x){
            $x+=2;
            echo "2<p>O valor de x é $x</p>";
        }
        $a=3;
        teste2($a);
        echo "<p>O valor de a é $a</p>";
        ?>
        
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>