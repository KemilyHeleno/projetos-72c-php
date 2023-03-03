

<?php
echo "<head><link rel='stylesheet' type='text/css'  href='estilos.css' /></head>";

include('conexao.php');

echo "<form method='post'>Procurar cliente<input type='text' value='' name='pesqNome' placeholder='<digite o nome ou parte>'><input type='submit' value='Pesquisar'></form>";    
    
if ($_POST) 
{   
 $nome = $_POST['pesqNome'];
 //$sql = "select * from public.cliente where 
 $sql = "select * from public.cliente where (nome like '%".$nome."%') and (excluido='n')";
 //echo $sql;
 $dados = pg_query($conecta,$sql);
  echo "<table  border='1px' bgcolor='#FFF8DC'>";
 echo "<CAPTION>Resultado...</CAPTION>";  
 echo "<tr><td>Código</td><td>Nome</td><td>e-mail</td><td>Sabor da pizza</td><td></td></tr>";         
 while ($linha = pg_fetch_array($dados))
 {
  echo "<tr>";     
  $CodigoClienteLink = $linha['cod_cliente'];
  echo "<td>".$CodigoClienteLink."</td><td>".$linha['nome']."</td><td>".$linha['email']."</td><td>".$linha['saborpizza']."</td><td><a href='formCliente.php?codigo=".$CodigoClienteLink."'><img src='imagens/alterar.png' width='30' height='30' </a></td><td><a href='excCliente.php?codigo=".$CodigoClienteLink."'><img src='imagens/excluido.png'  width='25' height='25'></a></td>";    
  echo "</tr>";     
 }
 echo "</table>"; 
 
}
echo "<a href='formCliente.php?codigo=0'>Novo cliente...</a>";

?>
