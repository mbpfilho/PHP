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
      include "funcoes.php"; //continua execucao do script principal mesmo com erro na inclusao
      
      //require "funcoes.php";//para execucao do script principal em caso de erro na inclusao

      //include_onde e require_once evitam recarrar arquivo já carregado

      echo "<h1>Testando novas funções</h1>";
      ola();
      mostravalor(4);
      echo "<h2>Finalizando programa</h2>";
      ?>
      
      <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>