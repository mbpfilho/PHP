<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex02 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
      <div>
        <?php
        $d=isset($_GET["ds"])?$_GET["ds"]:0;
        switch($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<p>Levante e vai estudar!</p>";
                break;
            case 7:
            case 8:
                echo "<p>Descanse!</p>";
                break;
            default:
                echo "<p>Dia da semana inválido.</p>";
        }
        ?>

        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
      </div>
  </body>
</html>