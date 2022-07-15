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
        $i=0;
        for($c=2;$c<=$n-1;$c++){
            if($n%$c=0){
                $d[$i]=$c;
                $i++;
            }
        }
        echo "<p>Seus divisores säo: 1";
        if($i>0){
            for($c=1;$c<=$i;$c++){
                echo ", $d[$c], ";
            }
        }
        echo " e $n</p>";
        if($i=0){
            echo "<p>$n é primo</p>";
        }else{
            echo "<p>$n näo é primo</p>";            
        }
        ?>
            
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>