<? php
    /* 1 - Faça uma função que recebe 3 numeros e faça a média aritmética desses números e retorne o resultado.
       2 - Faça uma função que receba os valores da média e média mínima, retorne a mensagem "Aprovado" ou "Reprovado".
       3 - Faça uma função que calcule um equação de 2º grau e que informados A,B e C, retorne uma string dizendo: "não tem raízes" ou "x1:... e x2:..." onde "..." são os valores das raízes.
       4 - Faça uma função que passado a hora (apenas a hora), retorne "Bom dia", "Boa tarde" ou "Boa noite".
       5 - Salve tudo em um arquivo minhasfuncoes.php e entregue como atividade. */
if (isset ($_POST['enviar']));
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];

$media = ($valor1 + $valor2 + $valor3) / 3;
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "Utf-8">
        <title> Cálculo da média aritimética</title>
    </head>
    <body>
        <form method="post" action="">
            <br>
            <label>Primeiro valor: </label>
            <input name="valor1" type="text">
            <br>
            <label>Segundo valor: </label>
            <input name="valor2" type="text">
            <br>
            <label> Terceiro valor: </label>
            <input name="valor3" type="text">
            <br>
            <br>
            <button type="submit" name="enviar">
                Calcular Média
            </button>
            <button type="reset"> Limpar </button>
            <br>
            <br>
            Valor da Média
            <? php
                echo "A média equivale a:<br>" . $media . " - ";
            ?>
        </form>
    </body>
</html>