<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2array PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <pre>
      <table border="1">
          <tr>
              <?php
              $n=range(5,20,2);
              foreach($n as $v){
                echo "<td>$v ";
              }
              ?>
          </tr>
      </table>
    </pre>
    
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>