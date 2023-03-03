<?php 
////// conecta no banco de dados
$conecta = pg_connect("host=localhost c10kemilyheleno=72c user=kemilyheleno password=cti");
///// erro se nao conectar...
if (!$conecta) { die("Erro de conexao"); }
?>