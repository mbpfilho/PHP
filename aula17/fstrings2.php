<!doctype html>
<html lang="pt-br">
  <head>
    <title>strlen etc PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../php.css">
  </head>

  <body>
    <div>
    <?php
    $txt="        Lorem ipsum dolor sit, amet consectetur adipisicing elit.      ";
    echo "<p>txt: $txt</p>";

    echo '<p>strlen($txt): '.strlen($txt)."</p>";

    echo '<p>strlen(trim($txt)): '.strlen(trim($txt))."</p>";

    echo '<p>strlen(ltrim($txt)): '.strlen(ltrim($txt))."</p>";

    echo '"<p>strlen(rtrim($txt)): "'.strlen(rtrim($txt))."</p>";

    echo '"<p>str_word_count($txt,0): "'.str_word_count($txt,0)."</p>";

    echo '"<p>var_export(str_word_count($txt,1)): "';
    var_export(str_word_count($txt,1));
    echo "</p>";

    echo '"<p>var_export(str_word_count($txt,2)): "';
    var_export(str_word_count($txt,2));
    echo "</p>";

    echo '<p>var_export(explode(" ",$txt)): ';
    var_export(explode(" ",$txt));
    echo "</p>";

    echo '<p>var_export(str_split($txt)): ';
    var_export(str_split($txt));
    echo "</p>";

    echo '<p>print(implode(str_split("#",$txt))): ';
    print(implode("#",str_split($txt)));
    echo "</p>";

    echo '<p>print(join(str_split("#",$txt))): ';
    print(join("#",str_split($txt)));
    echo "</p>";

    echo '<p>chr(67): '.chr(67)."</p>";

    echo '<p>chr(99): '.chr(99)."</p>";

    echo '<p>ord("ç"): '.ord("ç")."</p>";

    echo '<p>strtoupper($txt): '.strtoupper($txt)."</p>";

    echo '<p>strtolower($txt): '.strtolower($txt)."</p>";

    echo '<p>ucfirst($txt): '.ucfirst($txt)."</p>"; //poe primeira letra maiúscula

    echo '<p>ucwords($txt): '.ucwords($txt)."</p>";

    echo '<p>strrev($txt): '.strrev($txt)."</p>";

    echo '<p>strpos($txt,"sit") "sit" foi encontrado na posicäo: '.strpos($txt,"sit")."</p>";

    echo '<p>stripos($txt,"SiT") "SiT" foi encontrado na posicäo: '.stripos($txt,"SiT")."</p>"; //ignora caixa

    echo '<p>substr_count($txt,"sit") "sit" foi encontrado na posicäo: '.substr_count($txt,"sit")."</p>";

    echo '<p>substr($txt,26,3) foi encontrado: '.substr($txt,26,3)."</p>";

    echo '<p>str_pad($txt,100,"_",STR_PAD_BOTH): '.str_pad($txt,100,"_",STR_PAD_BOTH)."</p>";

    echo '<p>str_repeat("sit",3): '.str_repeat("sit",3)."</p>";

    echo '<p>str_repeat("-",20): '.str_repeat("-",20)."</p>";

    echo '<p>str_replace("sit","sentir",$txt): '.str_replace("sit","sentir",$txt)."</p>";

    echo '<p>str_ireplace("SiT","sentir",$txt): '.str_ireplace("SiT","sentir",$txt)."</p>";
    ?>
    
        <!-- <br><a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
    </div>
  </body>
</html>