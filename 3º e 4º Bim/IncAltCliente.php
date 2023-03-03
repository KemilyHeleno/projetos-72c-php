<?php 

// conecta com o bd
include_once("conexao.php");

$codigo = $_POST['codigo'];  // esse campo está escondido no form de edição
$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];
$saborpizza  = $_POST['saborpizza'];

if ($codigo == '0') // se chegou codigo ZERO, é inclusão porque veio do link "Novo cliente"
{
 $sql="insert into public.cliente (nome,email,senha,excluido) values ('$nome','$email','$senha','n')";
}
else
{
 $sql="update public.cliente set nome='$nome',email='$email',senha='$senha',saborpizza='$saborpizza' where cod_cliente='$codigo'"; 
}
    
echo $sql; // comente essa linha quando estiver td funcionando pra vc

$resultado=pg_query($conecta, $sql);
$linhas=pg_affected_rows($resultado);

if ($linhas > 0)
{
   $msg = "<br>Cliente gravado !!!<br>";
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