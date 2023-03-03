<?php

include_once('conexao.php');

///// conecta com o bd

if ($_GET)
{
 $codigo = $_GET['codigo'];
    
 if ($codigo == 0)  // se for ZERO é um novo cliente
 {
  $nome = "";
  $email = "";
  $senha = "";
  $saborpizza= "";  
 }
 else
 {   // senao carrega os dados da tabela pra editar
  $sql = "select * from public.cliente where cod_cliente = $codigo";
  $dados = pg_query($conecta,$sql);   // faz o select
  $linha = pg_fetch_array($dados);    // carrega o registro num vetor $linha
  $nome = $linha['nome'];
  $email = $linha['email'];
  $senha = $linha['senha'];
  $saborpizza= $linha['saborpizza'];
 }
  
 echo "<form action='IncAltCliente.php' method='post'><input type='hidden' name='codigo' value='".$codigo."'> Nome<br><input type='text' name='nome' placeholder='<nome do cliente>' value='".$nome."'><br>e-mail<br><input type='email' name='email' placeholder='<email>' value='".$email."'><br>Senha<br><input type='password' name='senha' placeholder='<senha>' value='".$senha."'><br>
 Qual o sabor da Pizza?<br>
 <select name="$saborpizza" multiple>
 <option value="Frango com catupiry">Calabresa</option>
 <option value="Frango com catupiry">Portuguesa</option>
 <option value="Frango com catupiry">Frango com catupiry</option>
 <option value="Napolitana">Napolitana</option>
 <option value="Frango com catupiry">Marguerita</option>
 </select><br>  <input type='submit' value='Enviar'></form>";


 
}
?>
