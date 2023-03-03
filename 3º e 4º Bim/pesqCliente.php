<?php

include('conexao.php');

echo "<form method='post'>Procurar cliente<input type='text' value='' name='pesqNome' placeholder='<digite o nome ou parte>'><input type='submit' value='Pesquisar'></form>";    
    
if ($_POST) 
{   
 $nome = $_POST['pesqNome'];
 //$sql = "select * from public.cliente where 
 $sql = "select * from public.cliente where (nome like '%".$nome."%') and (excluido='n')";
 //echo $sql;
 $dados = pg_query($conecta,$sql);
 echo "<table border '1'>"; 
 echo "<tr><td>Código</td><td>Nome</td><td>e-mail</td><td>saborpizza</td><td></td></tr>";         
 while ($linha = pg_fetch_array($dados))
 {
  echo "<tr>";     
  $CodigoClienteLink = $linha['cod_cliente'];
  echo "<td>".$CodigoClienteLink."</td><td>".$linha['nome']."</td><td>".$linha['email']."</td><td>".$linha['saborpizza']."</td><td><a href='formCliente.php?codigo=".$CodigoClienteLink."'>Alterar</a></td><td><a href='excCliente.php?codigo=".$CodigoClienteLink."'>Excluir</a></td>";    
  echo "</tr>";     
 }
 echo "</table>"; 
 
}
echo "<a href='formCliente.php?codigo=0'>Novo cliente...</a>";

?>