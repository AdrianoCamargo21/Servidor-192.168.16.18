

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php



$empresa=$_POST["empresa"];

$base=$_POST["Sistema"];

$saldo=$_POST["saldo"];

if ($saldo== 'S'){    

if ($empresa=='1'){
    $comandoLinhas=("select clinproduto,cdeslinha  from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde1produto+cqtde2produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='2'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde3produto+cqtde4produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='3'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde5produto+cqtde6produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='4'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde7produto+cqtde8produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='5'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde9produto+cqtde10produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='6'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde11produto+cqtde12produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='7'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde13produto+cqtde14produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
}

if ($empresa=='8'){
    $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde15produto+cqtde16produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa == 9){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde17produto+cqtde18produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    
}



if ($saldo== 'N'){
    
    if ($empresa=='1'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde1produto+cqtde2produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='2'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde3produto+cqtde4produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='3'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde5produto+cqtde6produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='4'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde7produto+cqtde8produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='5'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde9produto+cqtde10produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='6'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde11produto+cqtde12produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='7'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde13produto+cqtde14produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='8'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde15produto+cqtde16produto) < 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    if ($empresa == 9){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde17produto+cqtde18produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
}

if ($saldo== 'T'){
    
    if ($empresa=='1'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde1produto+cqtde2produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='2'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde3produto+cqtde4produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='3'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde5produto+cqtde6produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='4'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde7produto+cqtde8produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='5'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde9produto+cqtde10produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='6'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde11produto+cqtde12produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='7'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde13produto+cqtde14produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa=='8'){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde15produto+cqtde16produto) <> 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
    if ($empresa == 9){
        $comandoLinhas=("select clinproduto,cdeslinha from aprodutos inner join tlinha on ccodlinha = clinproduto where (cqtde17produto+cqtde18produto) > 0 group by clinproduto,cdeslinha order by clinproduto");
    }
    
}

    


if ($base=="1"){
    $LocalCacador=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@");
    $comandolinha=pg_query($comandoLinhas);
    pg_close($LocalCacador);
    while ($grupo = pg_fetch_assoc($comandolinha)){
                echo  $grupo['clinproduto'].'-'.$grupo['cdeslinha'].'<br>';
      
    }
}

if ($base=="2"){
    $LocalVideira=pg_connect ("host=192.168.16.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@");
    $comandolinha=pg_query($comandoLinhas);    
    pg_close($LocalVideira);
    while($grupo = pg_fetch_assoc($comandolinha)){ 
        echo  $grupo['clinproduto'].'-'.$grupo['cdeslinha'].'<br>';
    }
}

if ($base=="3"){
    $LocalLages=pg_connect ("host=192.168.16.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@");
    $comandolinha=pg_query($comandoLinhas);
    pg_close($LocalLages);
    while($grupo = pg_fetch_assoc($comandolinha)){
        echo  $grupo['clinproduto'].'-'.$grupo['cdeslinha'].'<br>';
    }
}

if ($base=="4"){
    $Localjoinville=pg_connect ("host=192.168.16.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@");
    $comandolinha=pg_query($comandoLinhas);
    pg_close($Localjoinville);
    while($grupo = pg_fetch_assoc($comandolinha)){
        echo $grupo['clinproduto'].'-'.$grupo['cdeslinha'].'<br>';
    }
}  
?>
    




