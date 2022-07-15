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
        $d=array();
        $i=0;
        for($c=2;$c<$n;$c++){
            if($n%$c==0){
                $i++;
                $d[$i]=$c;
            }
        }
        echo "<p>Seus divisores säo: 1";
        if($i>0){
            for($c=1;$c<=$i;$c++){
                echo ", $d[$c]";
            }
        }
        echo " e $n</p>";
        if($i==0){
            echo "<p>$n é um número primo</p>";
        }else{
            echo "<p>$n näo é um número primo</p>";            
        }
        ?>
            
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>