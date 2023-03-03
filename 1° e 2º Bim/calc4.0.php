<?php

echo "<form name='calc' action='' method='post'>";
echo "Numero tabuada:<br><input type='number' name='numero'>";
echo "<input type='submit' value='Calcular'>";


$numero = $_POST['numero'];
$numeroanterior = $_POST['numero'] - 1;
$numeroposterior = $_POST['numero'] + 1;
    
if ($_POST) // verifica se ja passou pelo form e submit testando se tem valor em variaveis 'post'
{

    if ($numero>0)
    {
        $c = 0; // variavel que conta de 1 a 10
    
        echo "<b><h2>Tabuada do $numero</h2></b><br>";

        echo "<table border=1>"; // table com espessura de linha = a 1
        while ($c < 10)  // enquanto $ for menor que 10
        {
            $c++; // ou $c = $c + 1; // aumente o valor de $C em 1
            $resultado =  $numero * $c;  // faça o calculo
            echo "<tr><td>$numero x $c</td><td><b>$resultado</b></td></tr>";   // mostre na linha 
        }
        echo "</table>";
    } 
    else
    {
        echo "<br>Numero $numero invalido";
    }

    if ($numeroanterior>0)
    {
        $c = 0; // variavel que conta de 1 a 10
    
        echo "<b><h2>Tabuada do $numeroanterior</h2></b><br>";

        echo "<table border=1>"; // table com espessura de linha = a 1
        while ($c < 10)  // enquanto $ for menor que 10
        {
            $c++; // ou $c = $c + 1; // aumente o valor de $C em 1
            $resultado =  $numeroanterior * $c;  // faca o calculo
            echo "<tr><td>$numeroanterior x $c</td><td><b>$resultado</b></td></tr>";   // mostre na linha 
        }
        echo "</table>";
    } 
    else
    {
        echo "<br>Numero $numeroanterior invalido";
    }


    if ($numeroposterior>0)
    { 
        $c = 0; // variavel que conta de 1 a 10
    
        echo "<b><h2>Tabuada do $numeroposterior</h2></b><br>";

        echo "<table border=1>"; // table com espessura de linha = a 1
        while ($c < 10)  // enquanto $ for menor que 10
        {
            $c++; // ou $c = $c + 1; // aumente o valor de $C em 1
            $resultado =  $numeroposterior * $c;  // faca o calculo
            echo "<tr><td>$numeroposterior x $c</td><td><b>$resultado</b></td></tr>";   // mostre na linha 
        }
        echo "</table>";
    } 
    else
    {
        echo "<br>Numero $numeroposterior invalido";
    }

}

/*

Exercicios

//versao 1.0: tabuada de um num qualquer
//versao 2.0: alterar pra mostrar "numero invalido" se igual a zero
//versao 3.0: para o codigo php nao rodar com numero zerado...
//versao 4.0: incluir a tabuada do numero posterior e anterior
versao 5.0: criar uma funcao para calcular por funcoes
versao 6.0: colocar a funcao num arquivo separado .php

*/

    
    
?>
calc4.0.php
Exibindo calc1.0.php.