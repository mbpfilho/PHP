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
      if($i<16){
        $tv="näo vota";
      }elseif(($i>=16&&$i<18)||$i>=65){
        $tv="voto facultativo";
      }else{
        $tv="voto obrigatório";
      }
      echo "Com esta idade, $tv.";
      ?>
    </div>
  </body>
</html>