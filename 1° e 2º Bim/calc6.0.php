<?php

include ('minhasfuncoes.php');  
// use include para incluir o arquivo php com parte comum - de uso rotineiro
// eh melhor sempre no inicio do codigo php

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
//versao 6.0: colocar a funcao num arquivo separado .php

*/


?>
calc6.0.php
Exibindo calc6.0.php.