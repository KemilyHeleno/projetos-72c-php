
<?php

    if ($_POST)
    {
        $saldo = $_POST['total'] - $_POST['entrada'];  
           
    <tr>
    <td>carro</td>
    <td>$_post['carro']</td>
    </tr>
        
    <tr>
        <td>total</td>
        <td>$_post['carro']</td>
    </tr>
        
    <tr>
        <td>estrada</td>,
        <td>$_post['entrada']</td>
    </tr>
        
    <tr>
        <td>parcelas</td>
        <td>$_post['parcelas']</td>
    </tr>
        
    <tr>
        <td>saldo</td>
        <td>$_POST['total'] - $_POST['entrada']</td>
    </tr>
      
    }

?>
<html>
    <body>
        <form name='Carros' action='' method='post'>
            <label for="carros">Qual carro deseja comprar?</label>
            <br>
            <br>
            <select name="carros">
                <option value="bmw">BMW M3 Sedã</option>
                <option value="chevrolet">Chevrolet Volt</option>
                <option value="dodge">Chrysler/Dodge Journey</option>
                <option value="citroen">Citroen C4 Lounge</option>
                <option value="ford">Ford Ka</option>
            </select>
 
            <label for="entrada">$ Entrada</label>
            <input type="dinheiro" value="0" name="entrada"><br>
 
            <label for="parcelas">Quantas parcelas?</label>
            <select name="parcelas">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
            </select><br><br>
            <label for="total">$ Total</label>
            <input type="dinheiro" value="0" name="total"><br>   
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
