<html>

    <head><meta charset="UTF-8"></head>

    <body>

        <form action='' method='post'>
            <label for="nome">Nome do cidadão</label>
            <input type="text" id="nome" name="nome">
            <label for="nasc">Data nasc</label>
            <input type="date" id="nasc" name="nasc">
            <input type='submit' value='Enviar'>
        </form>    
    
        <?php
    
        error_reporting(E_ALL); ////// mostra todos os erros !
        ini_set("display_errors", 1);

        include "funcoes.php";  /// inclue a funcoes uteis como a proxima

        if ($_POST) 
        {
            $bdVacina = Conecta('localhost','mcperes','mcperes','mcperes');    
            
            $bdVacina = CalcIdade('nasc');
/*  
      - calcule a idade (use a funcao pronta em funcoes.php)
      - faca uma consulta na tabela calendvacina usando PDO 
      - obtenha o periodo cuja idade calculada seja maior ou igual a 'idadede' e menor ou igual a 'idadeate'
     */ 
            
      $varsql = "SELECT * FROM :CalcIdade WHERE id= :nasc";
          
     /* 
      - imprima a idade e o periodo
      
        IMPORTANTE
      - para passar parametros siga o modelo que esta em leiame.txt
      - se vc nao conseguir, use o modelo de concatenar ja conhecido 
      - nao precisa se preocupar com formatacao
    */     
 }
    
?>

</body>
</html>