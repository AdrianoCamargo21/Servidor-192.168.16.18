<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
//error_reporting(0);
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
if(!@($serv=pg_connect ("host=127.0.0.1 dbname=via_brasil port=5435 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados do Servidor Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
if(!@($conc=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de  Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista Favor avisar o Adriano</font></b></p>";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/error.jpg"alt="500" heigth ="500px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit; 
}
$sql="select s_aen_chave_nfe,ccnpjempresa from aentradas inner join afornecedor on cforentradas = ccodfornecedor join tempresa on ccodempresa=cempentrada where cdenentradas >= '2021-01-01' 
    and ctipofornecedor = 1 order by cdenentradas  ";
$exsql= pg_query($conc,$sql);
while($row = pg_fetch_assoc($exsql)){
    $chave=$row['s_aen_chave_nfe'];
    $filial=$row['ccnpjempresa'];   
    $com="select chave from cofrenfe where chave = $chave and filial='$filial'  and tipo='E'";    
    $excom= pg_query($serv,$com);
    $rscom= pg_fetch_array($excom);      
    if ($rscom == null ) {        
        if ($filial == '02534216000162') {
            $pasta='Matriz ViaBrasil';
        }
        if ($filial == '02534216000243') {
            $pasta='Filial02 ViaBrasil';
        }
        if ($filial == '02534216000324') {
            $pasta='Filial03 ViaBrasil';
        }
        if ($filial == '02534216000405') {
            $pasta='Filial04 ViaBrasil';
        }
        if ($filial == '02534216000596') {
            $pasta='Filial05 ViaBrasil';
        }
        if ($filial == '025342160000677') {
            $pasta='Filial06 ViaBrasil';
        }
        if ($filial == '02534216000758') {
            $pasta='Filial07 ViaBrasil';
        }
        if ($filial == '02534216000839') {
            $pasta='Filial08 ViaBrasil';
        }
        $tt=1;
        $arquivo="B:/".$chave.".xml";
        $temp="C:/xampp/htdocs/desenvolver/".$chave.".xml";
        if (!copy($arquivo, $temp))
        {
            $tt ++;
           echo $chave.'<br>';
           if ($tt = 100) {
               exit;
           }
        }
        exit;
        if (file_exists($chave.'.xml')){
            $object = simplexml_load_file($chave.'.xml');
            {
                foreach($object->NFe  as $item)
                $fili=$item->infNFe->emit->CNPJ;
                if ($fili=='') {
                    echo 'Nota:'.$chave.' Não pegou o Cnpj' ;
                    continue;
                }
                $data1=$item->infNFe->ide->dhEmi;
                $data = substr($data1, 0, -15);
                $data = str_replace('-', '/', $data);
                if ($data == ''){
                    $data=$item->infNFe->ide->dEmi;
                    if ($data == ''){
                        echo 'Nota:'.$chave.' Não pegou a Data';
                        continue;
                    }
                }
                $nfe=$item->infNFe->ide->nNF;
                if ($nfe == ''){
                    echo 'Nota:'.$chave.' Não pegou o Numero Nfe';
                    continue;
                }
            }
            {
                foreach($object->protNFe as  $item)
                $chavee=$item->infProt->chNFe;
                if(strlen($chavee)> 44 or strlen($chavee)< 44 ){
                    echo 'Nota:'.$chave.' Não pegou A Chave';
                    continue;
                }
            }
            $query="insert into cofrenfe(chave, nfe, filial, data,id,tipo,modelo) values ($chavee,$nfe,'$fili','$data',nextval('seque_cofrenfe'),'E','NFE')";
            $exquery=pg_query($serv,$query);
            $arquivo_destino = "C:/Xml/".$pasta."/".$chave.".xml";
            if (!copy($chave.'.xml', $arquivo_destino)){
                echo 'A chave:'.$chave.' Não foi copiada para a Pasta do servidor';
            } else {
                unlink($chave.".xml");                
            }
        } else {
            echo $chave.'<br>';
        }
    }    
}
              
