<?php 

// conecta com o bd
include_once("conexao.php");

$sql="update public.cliente set excluido='s' where cod_cliente='".$_GET['codigo']."'"; 
    
echo $sql; // comente essa linha quando estiver td funcionando pra vc

$resultado=pg_query($conecta, $sql);
$linhas=pg_affected_rows($resultado);

if ($linhas > 0)
{
   $msg = "<br>Cliente desabilitado !!!<br>";
}
else 
{
   $msg = "<br><b>Erro SQL:</b>".pg_last_error()."<br>";
}

echo "<br>".$msg."</br>";

// Fecha a conexão com o PostgreSQL//
pg_close($conecta);

echo "<br><a href='pesqCliente.php'>Voltar</a>";
//header('location: pesqCliente.php'); // volta pra essa janela    

?>