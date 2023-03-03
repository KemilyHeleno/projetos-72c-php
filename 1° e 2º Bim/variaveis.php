<html>
    <title>Exercicio 2</title>
    <body>
        Exemplo de utilizacao de variaveis: <br><br>
        <script language="php">
            $inteiro=10;
            $real=20.0;
            $caracter= ‘V’;
            $cor1= “#FF0000”;
            $cor2= “#0000FF”;
        </script>
        <font color= <? echo "$cor1"; ?>> A variavel $inteiro tem
            o valor <? echo "$inteiro"; ?>.
        </font> <br>
        <font color= <? echo "$cor2"; ?>> A variavel $real tem
            o valor <? echo "$real"; ?>.
        </font> <br>
        <font color= <? echo "$cor1"; ?>> O caracter escolhido
            e o <? echo "$caracter"; ?>.
        </font> <br>
    </body>
</html>