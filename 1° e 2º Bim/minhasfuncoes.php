<?php

function calctab ( $numero )
    // precisa apareceer para o php saber quem ela é !!!!!!!!
    // a variavel $numero só existe dentro da função
    // pra usar a função calctab, vc precisa se referir a ela exatamente por esse nome
{
 if ($numero>0)
 {
    $c = 0; // variavel que conta de 1 a 10
    
    echo "<b><h2>Tabuada do $numero</h2></b><br>";

    echo "<table border=1>"; // table com espessura de linha = a 1
    while ($c < 10)  // enquanto $ for menor que 10
    {
        $c++; // ou $c = $c + 1; // aumente o valor de $C em 1
        $resultado =  $numero * $c;  // faca o calculo
        echo "<tr><td>$numero x $c</td><td><b>$resultado</b></td></tr>";   // mostre na linha 
    }
    echo "</table>";
 } 
 else
 {
  echo "<br>Numero $numero invalido";
 }
}

?>
minhasfuncoes.php
Exibindo calc6.0.php.