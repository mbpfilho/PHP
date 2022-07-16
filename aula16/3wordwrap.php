<!doctype html>
<html lang="pt-br">
  <head>
    <title>wordwrap PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <?php
    $t="Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto illum molestiae architecto delectus excepturi debitis ad, odit, quibusdam veritatis optio accusamus temporibus ratione quidem quas id fugiat sequi quo in!";
    echo wordwrap($t,5,"<br>\n",true);
    ?>
    
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>