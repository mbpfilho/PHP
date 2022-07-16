<!doctype html>
<html lang="pt-br">
  <head>
    <title>print_r PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <?php
    $v[0]=4;
    $v[1]=8;
    $v[2]=3;
    // print_r($v);
    $v2=array(3,7,6,2,1,9);
    print_r($v2);
    echo "<br><br>";
    var_dump($v2);
    echo "<br><br>";
    var_export($v2);
    ?>
    
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>