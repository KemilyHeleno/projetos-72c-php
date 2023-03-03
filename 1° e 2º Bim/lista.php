<?php

include "conexao.php";

$sql = "select * from quinzena3_72c.alunos";
// a tabela alunos possui 'id', 'nome' e 'nasc' (data nasc)


// a funcao pq_query manda a frase sql que esta em $sql 
// pra conexão definida em $conex

// (a variavel $conex esta dentro de conexao.php)
$query = pg_query($conex, $sql); 

// essa consulta a tabela em $query sera carregada registro por registro
// no while

while ($row = pg_fetch_array($query))  
{

 // pg_fetch_array carrega um vetor de valores em $row
 // ou retorna FALSE

 $id   = $row['id'];
 $nome = $row['nome'];
 $data = $row['nasc'];
 // a referencia aos campos é entre [' e ']

 echo $id.'<br>';
 echo $nome.'<br>';
 echo $nasc.'<br>';

}

?>