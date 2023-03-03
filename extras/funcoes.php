<?php 

    function Conecta ($pHost, $pDB, $pUsuario, $pSenha)
    {
        return new PDO ("pgsql:host=".$pHost.";port=5432;dbname=".$pDB.";user=".$pUsuario.";password=".$pSenha);   
    }

    function CalcIdade ($pData)
    { 
        $nasc = new DateTime($pData);
        $idade = $nasc->diff(new DateTime(date('Y-m-d')));
        return $idade->y;
    }
                       
?>