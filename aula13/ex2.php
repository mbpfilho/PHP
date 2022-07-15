<!doctype html>
<html lang="pt-br">
  <head>
    <title>ex2 PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
        <form action="ex2tabuada.php" method="get">
            <select name="num" id="">
                <?php
                for($i=1;$i<=10;$i++){
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>      
      <!-- <a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>