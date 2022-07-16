<!doctype html>
<html lang="pt-br">
  <head>
    <title>Modelo PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <?php
    $p="Leite";
    $pr=4.5;
    echo "<p>O $p custa R$ ".number_format($pr,2)."</p>";
    printf("O %s custa R$ %.2f",$p,$pr);
    ?>
    
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>