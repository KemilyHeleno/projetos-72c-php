<?php 
////// conecta no banco de dados
$conecta = pg_connect("host=localhost dbname=c10kemilyheleno user=c10kemilyheleno password=cti");
///// erro se nao conectar...
if (!$conecta) { die("Erro de conexao"); } 
?>
