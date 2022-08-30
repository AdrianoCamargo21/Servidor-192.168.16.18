
<?php
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"]; 
copy($nome_temporario,$nome_real); 


$antigo = "$nome_real";
$arquivo_novo = "cte.xml";
rename($antigo, $arquivo_novo);
   

?>
