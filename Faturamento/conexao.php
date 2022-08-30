<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conc=pg_connect ("host = 192.168.16.2 dbname=viabrasil port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Sem Comunicacao Banco de Dados De Caçador </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    exit; 
}
?>