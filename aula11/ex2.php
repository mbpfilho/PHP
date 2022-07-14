<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
      <form action="ex2-2.php" method="get">
        <?php
        $c=1;
        while($c<=5){
          echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
          $c++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao">
      </form>
      
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>