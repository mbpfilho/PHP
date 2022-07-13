<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex01</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
      <?php
      $a=isset($_GET["ano"])?$_GET["ano"]:1900;
      $i=date("Y")-$a;
      echo "Você nasceu em $a e tem $i anos.<br>";
      if($i>=18){
        $v="já pode votar";
        $d="já pode dirigir";
      }else{
        $v="näo pode votar";
        $d="näo pode dirigir";
      }
      echo "Com essa idade, você $v e também $d.";
      ?>
    </div>
  </body>
</html>