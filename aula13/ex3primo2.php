<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex3primo PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
        <?php
        $n=isset($_GET["n"])?htmlspecialchars($_GET["n"]):1;
        echo "<p>O número escolhido foi $n</p>";
        $primo=TRUE;
        echo "<p>Seus divisores são: 1";
        for($d=2;$d<$n;$d++){
            if($n%$d==0){
                $primo=FALSE;
                echo ", $d";
            }
        }
        echo " e $n</p>";
        if($primo){
            echo "<p>$n é um número primo</p>";
        }else{
            echo "<p>$n não é um número primo</p>";            
        }
        ?>
            
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>