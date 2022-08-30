<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');
if(!@($conn=pg_connect ("host = 192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Sem Comunicacao Banco de Dados De Caçador </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    exit;
}
if(!@($conv=pg_connect ("host = 192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Sem Comunicacao Banco de Dados De Videira </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    exit;
}
if(!@($conl=pg_connect ("host = 192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Sem Comunicacao Banco de Dados De Lages </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    exit;
}
if(!@($conj=pg_connect ("host = 192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#FF0000>ERRO!!! Sem Comunicacao Banco de Dados De Joinville </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=5 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    exit;
}
?>