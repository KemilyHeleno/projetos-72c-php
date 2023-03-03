<?php

    $pessoas = array(
            //id da pessoa => total de atendimentos
            1=>200,
            2=>100,
            3=>400);
    //total da soma de todos os atendimentos que forma a média  = 0;            
    $total = 0;
    //pega-se o valor de cada pessoa
    foreach($pessoas as $id=>$valor){
//atribui-se um loop que faz a soma de todas as médias ao total = soma de todos atendimentos
$total += $valor;
}
    ?>
    <table collspan="5" border="1">
    <tr>
    <th>Atendimentos</th>
    <th>% Media</th>
    </tr>
    <?php
    for($i=0;$i<count($pessoas);$i++){
    ?>
    <tr>
    <td><?php echo $pessoas[$i+1]; ?></td>
        <?
     //Saída arredondamento (atendimentos da pessoa / média total ) = 0.28... * 100 = 28,... = 29 por excesso/deficiência dependendo.
     //Coloquei $i+1 para que a posição inicial do array não seja 0 e sim 1
        ?>
    <td><?php echo round($pessoas[$i+1]/$total*100)."%"; ?></td>
    </tr>
    <?php
    }
    ?>
    <tr>
    <th>MEDIA GLOBAL</th>
    <th>% GERAL</th>
    </tr>
    <tr>
    <td><?php echo $total; ?></td>
    <td><?php echo round(($total/1000)*100)."%"; ?></td>
    </tr>
    </table>