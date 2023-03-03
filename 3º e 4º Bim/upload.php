<html>
<head>
   <title>Envio de uma foto</title>
</head>
<body>
   <form method="POST" enctype="multipart/form-data">
      <!-- esse ENCTYPE precisa ser adicionado... -->
      <input type="hidden" name="cod" value="001">
      <input type="file" name="foto"><br>
      <!-- não mande arquivos com mais de 3 mb -->
      <!-- repara no type file... -->
      <input type="submit" value="Enviar foto">
   </form>
</body>
</html>

<?php
   
   // as 3 proximas linhas passem a coloca-las pra que o 
   // php retorne todas as mensagens de erro que ficam ocultas
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
   // isso ajuda mt a resolver os problemas 

   if(isset($_FILES['foto'])) // se tem foto enviada...
   {
      // $_FILES é uma variavel GLOBAL do tipo ARRAY que representa 
      // os arquivos enviados   
       
      echo "<b>Conteudo do array</b><br>";
      var_dump($_FILES['foto']);
      // var_dump exibe todo o conteudo de uma variavel ARRAY   
      // note o valor de TMP_NAME...
     
      $novonome = "imagens/calabresa.jpg".$_POST['cod'].".jpg"; // esse é o novo ok ?
      echo "<br><b>Calabresa</b><br>";
      echo $novonome.'<br>';
      move_uploaded_file($_FILES['foto']['tmp_name'], $novonome);    
      // Fazer upload do arquivo temporario recebido para o caminho correto 
      // com novo nome
   }
?>