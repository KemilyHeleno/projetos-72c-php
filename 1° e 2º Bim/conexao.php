<?php 
////// conecta no banco de dados
$conex = pg_connect("host=localhost dbname=quinzena3_72c user=quinzena3_72c password=quinzena3_72c");
///// erro se nao conectar...
if (!$conex) { exit("Erro de conexao"); } else { echo "Conectado em quinzena3_72c<br><br>"; }
?>