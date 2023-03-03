<?php

function calctab ( $numero )    
    ///////// precisa aparecer antes pro php saber quem quem ela é !!!!!
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

///////////// comeca aqui !!!!!!!!!!!!!!

echo "<form name='calc' action='' method='post'>";
echo "Numero tabuada:<br><input type='number' name='numero'>";
echo "<input type='submit' value='Calcular'>";


if ($_POST) // verifica se ja passou pelo form e submit testando se tem valor em variaveis 'post'
{

    calctab ( $_POST['numero'] );
    calctab ( $_POST['numero'] - 1);
    calctab ( $_POST['numero'] + 1);
    
}

/*

Exercicios

//versao 1.0: tabuada de um num qualquer
//versao 2.0: alterar pra mostrar "numero invalido" se igual a zero
//versao 3.0: para o codigo php nao rodar com numero zerado...
//versao 4.0: incluir a tabuada do numero posterior e anterior
//versao 5.0: criar uma funcao para calcular por funcoes
versao 6.0: colocar a funcao num arquivo separado .php

*/


?>
calc5.0.php
Exibindo calc6.0.php.