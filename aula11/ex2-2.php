<!doctype html>
<html lang="pt-br">
    <head>
        <title>ex2-2 PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../php.css">
    </head>

    <body>
        <div>
            <form action="ex2-2.php" method="get">
                <?php
                $c=1;
                while($c<=5){
                    $v=isset($_GET["v$c"])?htmlspecialchars($_GET["v$c"]):0;
                    echo "<p>Valor $c: $v</p>";
                    $c++;
                }
                ?>
            </form>
            
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>