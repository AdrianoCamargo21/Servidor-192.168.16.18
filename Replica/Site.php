<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Replica/Site.html'</script>";
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
if(!@($locc=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Caçador Data:$dia  Hora:$time </font></b></p>";
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
while (1==1) {
    $item1=$_POST['item1'];
    $venda1=$_POST['valor1'];
    $qtd1=$_POST['qtd1'];
    if ($item1 == null) {
        echo "<script>alert('Código do Item 1 e inválido');</script>";
        echo $voltalogin;
        exit;
    }
    if ($venda1 == null) {
        echo "<script>alert('Preço do Item 1 e inválido');</script>";
        echo $voltalogin;
        exit;
    }
    if ($qtd1 == null) {
        echo "<script>alert('Quantidade do Item 1 e inválido');</script>";
        echo $voltalogin;
        exit;
    }
    $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item1";
    $exsql= pg_query($locc,$sql);
    $rssql= pg_fetch_array($exsql);
    $item1=$rssql['ccodproduto'];
    if ($item1 == null) {
        echo "<script>alert('Produto Digitado no Item 1 e inválido');</script>";
        echo $voltalogin;
        exit;
    }
    $custo1=$rssql['cpcuproduto'];
    $ttcusto=$custo1;
    $compra1=$rssql['cpcoproduto'];
    $cvenda1=$rssql['cpveproduto'];
    $descr1=$rssql['cdesproduto'];
    $depart1=$rssql['cdepproduto'];
    $desc1=$cvenda1-$venda1;
    $perc1=($venda1/$cvenda1)*100-100;
    $perc1=number_format($perc1, 2, '.', '');
    $perc1=abs($perc1);
    $impot1=($venda1 * 4.00)/100.00;
    $ttitem=1.00;
    
    
    
    $item2=$_POST['item2'];
    $venda2=$_POST['valor2'];
    $qtd2=$_POST['qtd2'];
    if ($item2 == null) {        
        break;        
    } else{
        if ($venda2 == null) {
            echo "<script>alert('Preço do Item 2 e inválido');</script>";
            echo $voltalogin;
            exit;
        }
        if ($qtd2 == null) {
            echo "<script>alert('Quantidade do Item 2 e inválido');</script>";
            echo $voltalogin;
            exit;
        }
        $ttitem ++;
        $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item2";
        $exsql= pg_query($locc,$sql);
        $rssql= pg_fetch_array($exsql);
        $item2=$rssql['ccodproduto'];
        if ($item2 == null) {
            echo "<script>alert('Produto Digitado no Item 2 e inválido');</script>";
            echo $voltalogin;
            exit;
        }
        $custo2=$rssql['cpcuproduto'];
        $ttcusto=$ttcusto+$custo2;
        $compra2=$rssql['cpcoproduto'];
        $cvenda2=$rssql['cpveproduto'];
        $descr2=$rssql['cdesproduto'];
        $depart2=$rssql['cdepproduto'];
        $desc2=$cvenda2-$venda2;
        $perc2=($venda2/$cvenda2)*100-100;
        $perc2=number_format($perc2, 2, '.', '');
        $perc2=abs($perc2);
        $impot2=($venda2 * 4.00)/100.00;
        $item3=$_POST['item3'];
        $venda3=$_POST['valor3'];
        $qtd3=$_POST['qtd3'];
        if ($item3 == null) {          
            break;
        } else {
            if ($venda3 == null) {
                echo "<script>alert('Preço do Item 3 e inválido');</script>";
                echo $voltalogin;
                exit;
            }
            if ($qtd3 == null) {
                echo "<script>alert('Quantidade do Item 3 e inválido');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem ++;
            $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item3";
            $exsql= pg_query($locc,$sql);
            $rssql= pg_fetch_array($exsql);
            $item3=$rssql['ccodproduto'];
            if ($item3 == null) {
                echo "<script>alert('Produto Digitado no Item 3 e inválido');</script>";
                echo $voltalogin;
                exit;
            }
            $custo3=$rssql['cpcuproduto'];
            $ttcusto=$ttcusto+$custo3;
            $compra3=$rssql['cpcoproduto'];
            $cvenda3=$rssql['cpveproduto'];
            $descr3=$rssql['cdesproduto'];
            $depart3=$rssql['cdepproduto'];
            $desc3=$cvenda3-$venda3;
            $perc3=($venda3/$cvenda3)*100-100;
            $perc3=number_format($perc3, 2, '.', '');
            $perc3=abs($perc3);
            $impot3=($venda3 * 4.00)/100.00;
            $item4=$_POST['item4'];
            $venda4=$_POST['valor4'];
            $qtd4=$_POST['qtd4'];
            if ($item4 == null) {                
                break;
            } else {
                if ($venda4 == null) {
                    echo "<script>alert('Preço do Item 4 e inválido');</script>";
                    echo $voltalogin;
                    exit;
                }
                if ($qtd4 == null) {
                    echo "<script>alert('Quantidade do Item 4 e inválido');</script>";
                    echo $voltalogin;
                    exit;
                }
                $ttitem ++;
                $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item4";
                $exsql= pg_query($locc,$sql);
                $rssql= pg_fetch_array($exsql);
                $item4=$rssql['ccodproduto'];
                if ($item4 == null) {
                    echo "<script>alert('Produto Digitado no Item 4 e inválido');</script>";
                    echo $voltalogin;
                    exit;
                }
                $custo4=$rssql['cpcuproduto'];
                $ttcusto=$ttcusto+$custo4;
                $compra4=$rssql['cpcoproduto'];
                $cvenda4=$rssql['cpveproduto'];
                $descr4=$rssql['cdesproduto'];
                $depart4=$rssql['cdepproduto'];
                $desc4=$cvenda4-$venda4;
                $perc4=($venda4/$cvenda4)*100-100;
                $perc4=number_format($perc4, 2, '.', '');
                $perc4=abs($perc4);
                $impot4=($venda4 * 4.00)/100.00;
                
                $item5=$_POST['item5'];
                $venda5=$_POST['valor5'];
                $qtd5=$_POST['qtd5'];
                if ($item5 == null) {
                    break;
                } else {
                    $ttitem ++;
                    $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item5";
                    $exsql= pg_query($locc,$sql);
                    $rssql= pg_fetch_array($exsql);
                    $item5=$rssql['ccodproduto'];
                    if ($item5 == null) {
                        echo "<script>alert('Produto Digitado no Item 5 e inválido');</script>";
                        echo $voltalogin;
                        exit;
                    }
                    $custo5=$rssql['cpcuproduto'];
                    $ttcusto=$ttcusto+$custo5;
                    $compra5=$rssql['cpcoproduto'];
                    $cvenda5=$rssql['cpveproduto'];
                    $descr5=$rssql['cdesproduto'];
                    $depart5=$rssql['cdepproduto'];
                    $desc5=$cvenda5-$venda5;
                    $perc5=($venda5/$cvenda5)*100-100;
                    $perc5=number_format($perc5, 2, '.', '');
                    $perc5=abs($perc5);
                    $impot5=($venda5 * 4.00)/100.00;
                }
                $item6=$_POST['item6'];
                $venda6=$_POST['valor6'];
                $qtd6=$_POST['qtd6'];
                if ($item6 == null) {
                    break;
                } else {
                    $ttitem ++;
                    $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item6";
                    $exsql= pg_query($locc,$sql);
                    $rssql= pg_fetch_array($exsql);
                    $item6=$rssql['ccodproduto'];
                    if ($item6 == null) {
                        echo "<script>alert('Produto Digitado no Item 6 e inválido');</script>";
                        echo $voltalogin;
                        exit;
                    }
                    $custo6=$rssql['cpcuproduto'];
                    $ttcusto=$ttcusto+$custo6;
                    $compra6=$rssql['cpcoproduto'];
                    $cvenda6=$rssql['cpveproduto'];
                    $descr6=$rssql['cdesproduto'];
                    $depart6=$rssql['cdepproduto'];
                    $desc6=$cvenda6-$venda6;
                    $perc6=($venda6/$cvenda6)*100-100;
                    $perc6=number_format($perc6, 2, '.', '');
                    $perc6=abs($perc6);
                    $impot6=($venda6 * 4.00)/100.00;
                }
                $item7=$_POST['item7'];
                $venda7=$_POST['valor7'];
                $qtd7=$_POST['qtd7'];
                if ($item7 == null) {
                    break;
                } else {
                    $ttitem ++;
                    $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item7";
                    $exsql= pg_query($locc,$sql);
                    $rssql= pg_fetch_array($exsql);
                    $item7=$rssql['ccodproduto'];
                    if ($item7 == null) {
                        echo "<script>alert('Produto Digitado no Item 7 e inválido');</script>";
                        echo $voltalogin;
                        exit;
                    }
                    $custo7=$rssql['cpcuproduto'];
                    $ttcusto=$ttcusto+$custo7;
                    $compra7=$rssql['cpcoproduto'];
                    $cvenda7=$rssql['cpveproduto'];
                    $descr7=$rssql['cdesproduto'];
                    $depart7=$rssql['cdepproduto'];
                    $desc7=$cvenda7-$venda7;
                    $perc7=($venda7/$cvenda7)*100-100;
                    $perc7=number_format($perc7, 2, '.', '');
                    $perc7=abs($perc7);
                    $impot7=($venda7 * 4.00)/100.00;
                }
                $item8=$_POST['item8'];
                $venda8=$_POST['valor8'];
                $qtd8=$_POST['qtd8'];
                if ($item6 == null) {
                    break;
                } else {
                    $ttitem ++;
                    $sql="select ccodproduto,cpcuproduto,cpcoproduto,cpveproduto,cdesproduto,cdepproduto from aprodutos where ccodproduto = $item8";
                    $exsql= pg_query($locc,$sql);
                    $rssql= pg_fetch_array($exsql);
                    $item8=$rssql['ccodproduto'];
                    if ($item8 == null) {
                        echo "<script>alert('Produto Digitado no Item 8 e inválido');</script>";
                        echo $voltalogin;
                        exit;
                    }
                    $custo8=$rssql['cpcuproduto'];
                    $ttcusto=$ttcusto+$custo8;
                    $compra8=$rssql['cpcoproduto'];
                    $cvenda8=$rssql['cpveproduto'];
                    $descr8=$rssql['cdesproduto'];
                    $depart8=$rssql['cdepproduto'];
                    $desc8=$cvenda8-$venda8;
                    $perc8=($venda8/$cvenda8)*100-100;
                    $perc8=number_format($perc8, 2, '.', '');
                    $perc8=abs($perc8);
                    $impot8=($venda8 * 4.00)/100.00;
                }
                break;
            }
        }
    }    
}


//$codigo=$item->infNFe->det[1]->prod->cProd;
//exit($codigo);




$arquivo = "importa.xml";
if (file_exists($arquivo)) {
    unlink($arquivo);
}
$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];
if (!copy($nome_temporario,$nome_real)){
    echo "<script>alert('Erro Ao Carregar o Arquivo');</script>";
    echo $voltalogin;
    exit;
}
$antigo="$nome_real";
$arquivo_novo="importa.xml";
rename($antigo,$arquivo_novo);

if (file_exists('importa.xml')){
    $object = simplexml_load_file('importa.xml');
    {
    foreach($object->protNFe as $item)
        $chave=$item->infProt->chNFe;
        if ($chave == null) {
            echo "<script>alert('Erro Ao Carregar a Chave da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $protoc=$item->infProt->nProt;
        if ($chave == null) {
            echo "<script>alert('Erro Ao Carregar o Protocolugo da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
    }    
    {
        foreach($object->NFe as $item)           
        $cpf=$item->infNFe->dest->CPF;
        if ($cpf == null) {
            echo "<script>alert('Erro Ao Carregar o CPF do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $sql="select ccodigo from aclientes where ccpf = '$cpf'";
        $exsql= pg_query($locc,$sql);
        $rssql= pg_fetch_array($exsql);
        $codc=$rssql['ccodigo'];
        if ($codc == null) {
            $nomec=$item->infNFe->dest->xNome;
            $nomec=strtoupper($nomec);
            if ($nomec == null) {
                echo "<script>alert('Erro Ao Carregar o Nome do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $cep=$item->infNFe->dest->enderDest->CEP;
            if ($cep == null) {
                echo "<script>alert('Erro Ao Carregar o Cep do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $sql="select ccodcep from tcep where ccodcep = '$cep'";
            $exsql= pg_query($locc,$sql);
            $rssql= pg_fetch_array($exsql);
            $ccep=$rssql['ccodcep'];
            if ($ccep == null) {
                $cidade=$item->infNFe->dest->enderDest->xMun;
                if ($cidade == null) {
                    echo "<script>alert('Erro Ao Carregar a Cidade do Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $uf=$item->infNFe->dest->enderDest->UF;
                if ($uf == null) {
                    echo "<script>alert('Erro Ao Carregar o UF do Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $bairro=$item->infNFe->dest->enderDest->xBairro;
                if ($bairro == null) {
                    echo "<script>alert('Erro Ao Carregar o Bairro do Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $codcid=$item->infNFe->dest->enderDest->cMun;
                if ($codcid == null) {
                    echo "<script>alert('Erro Ao Carregar o Código da Cidade do  Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $coduf=substr($codcid, 0, -5);
                $codpais=$item->infNFe->dest->enderDest->cPais;
                if ($codpais == null) {
                    echo "<script>alert('Erro Ao Carregar o Código do Pais do  Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $nompais=$item->infNFe->dest->enderDest->xPais;
                if ($nompais == null) {
                    echo "<script>alert('Erro Ao Carregar o Código O nome do  Pais do  Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $nompais=strtoupper($nompais);
                $logradouro=$item->infNFe->dest->enderDest->xLgr;
                if ($logradouro == null) {
                    echo "<script>alert('Erro Ao Carregar o Código O nome da Rua do  Cliente');</script>";
                    echo $voltalogin;
                    exit;
                }
                $sql="select logar('IMPORTA',1,0);INSERT INTO tcep VALUES ('$cep','$cidade','$uf','$bairro',1,$codcid,$coduf,$codpais,'$nompais',0,'$logradouro')";
                $exsql= pg_query($locc,$sql);
                if (!$exsql){
                    echo "<script>alert('Erro ao Inserir o Cep');</script>";
                    echo $voltalogin;
                    exit;
                }                
            }
            $logradouro=$item->infNFe->dest->enderDest->xLgr;
            $logradouro=strtoupper($logradouro);
            if ($logradouro == null) {
                echo "<script>alert('Erro Ao Carregar o Código O nome da Rua do  Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $bairro=$item->infNFe->dest->enderDest->xBairro;
            $bairro=strtoupper($bairro);
            if ($bairro == null) {
                echo "<script>alert('Erro Ao Carregar o Bairro do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $cidade=$item->infNFe->dest->enderDest->xMun;
            $cidade=strtoupper($cidade);
            if ($cidade == null) {
                echo "<script>alert('Erro Ao Carregar a Cidade do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $uf=$item->infNFe->dest->enderDest->UF;
            if ($uf == null) {
                echo "<script>alert('Erro Ao Carregar o UF do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $celular=$item->infNFe->dest->enderDest->fone;
            if ($celular == null) {
                echo "<script>alert('Erro Ao Carregar o Celular');</script>";
                echo $voltalogin;
                exit;
            }
            $sql="select nextval('seque_aclientes') as codigo";
            $exsql= pg_query($locc,$sql);
            $rssql= pg_fetch_array($exsql);
            $codc=$rssql['codigo'];
            if ($codc == null) {
                echo "<script>alert('Erro Ao Cadastrar o Código do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            $numero=$item->infNFe->dest->enderDest->nro;
            if ($numero == null or $numero == 'SN') {
                $numero='NULL';                
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO aclientes VALUES ($codc,'$nomec','F',NULL,'O','','',NULL,'F','','$cpf','','','','','','$logradouro','$bairro',
            '','$cidade','$cep','$uf','','','$celular','','','',NULL,'','','','','','','','',0,0.00,NULL,'','','',0.00,0,NULL,0.00,'',0.00,0.00,'',0.00,'',NULL,
            19,0.00,0,'','','','','','','','','',NULL,'','','','','',1,NULL,NULL,'','','','',1,'IMPORTA','$time','$dia',NULL,NULL,0,'',1, '$cep',NULL,NULL,NULL,
            '','',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,'',NULL,NULL,0,'','','',NULL,
            NULL,0,0,1,'','','','','','','','','','',0.00,NULL,NULL,NULL,'',0.00,1,'',0.00,'',0,0,0,0.00,NULL,'','','','',NULL,NULL,0.00,NULL,NULL,NULL,NULL,
            NULL,0.00,0,0,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,0,NULL,0,0,NULL,$numero,0,0,NULL,NULL,NULL,NULL,NULL,'I',0.00,0.00,NULL,NULL,
            NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,0,nextval('seque_unica_acl_for'),NULL, nextval('sequencia_paf'),NULL,NULL,NULL,'RUA','BAIRRO',NULL,NULL,NULL,NULL)";
            $exsql= pg_query($locc,$sql);            
            if (!$exsql){
                echo "<script>alert('Erro ao Inserir o Cliente');</script>";
                echo $sql;
                //echo $voltalogin;
                exit;
            } 
            sleep(8);
            echo "<script>alert('Cliente Cadastrado ');</script>";
            
        } else {
            $uf=$item->infNFe->dest->enderDest->UF;
            if ($uf == null) {
                echo "<script>alert('Erro Ao Carregar o UF do Cliente');</script>";
                echo $voltalogin;
                exit;
            }
            echo "<script>alert('Cliente Já com Cadastrado');</script>";
            $sql="select logar('IMPORTA',1,0); update aclientes set ctipcliente = 19 where ccodigo= $codc";
            $exsql= pg_query($locc,$sql);
            if (!$exsql){
                echo "<script>alert('Erro ao Atualizar o Cliente');</script>";
                echo $voltalogin;
                exit;
            }    
        }
        $nf=$item->infNFe->ide->nNF;
        if ($nf == null) {
            echo "<script>alert('Erro Ao Carregar o Número da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $serie=$item->infNFe->ide->serie;
        if ($serie == null) {
            echo "<script>alert('Erro Ao Carregar a Serie da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $ttproduto=$item->infNFe->total->ICMSTot->vProd;
        if ($ttproduto == null) {
            echo "<script>alert('Erro Ao Carregar o Total Dos Produtos');</script>";
            echo $voltalogin;
            exit;
        }
        $ttnfe=$item->infNFe->total->ICMSTot->vNF;
        if ($ttnfe == null) {
            echo "<script>alert('Erro Ao Carregar o Total Da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $ttdsc=$item->infNFe->total->ICMSTot->vDesc;
        if ($ttdsc == null) {
            echo "<script>alert('Erro Ao Carregar o Total do desconto Da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $dtemi=$item->infNFe->ide->dhEmi;
        if ($dtemi == null) {
            echo "<script>alert('Erro Ao Carregar a data da emissão Da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $dtemi=substr($dtemi, 0, -15);
        $hremi=$item->infNFe->ide->dhEmi;
        if ($hremi == null) {
            echo "<script>alert('Erro Ao Carregar a Hora da emissão Da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $hremi=substr($hremi, 11, +8);
        $ttfret=$item->infNFe->total->ICMSTot->vFrete;
        if ($ttfret == null) {
            echo "<script>alert('Erro Ao Carregar o Total do Frete Da Nfe');</script>";
            echo $voltalogin;
            exit;
        }
        $nomec=$item->infNFe->dest->xNome;
        $nomec=strtoupper($nomec);
        if ($nomec == null) {
            echo "<script>alert('Erro Ao Carregar o Nome do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $logradouro=$item->infNFe->dest->enderDest->xLgr;
        $logradouro=strtoupper($logradouro);
        if ($logradouro == null) {
            echo "<script>alert('Erro Ao Carregar o Código O nome da Rua do  Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $cidade=$item->infNFe->dest->enderDest->xMun;
        $cidade=strtoupper($cidade);
        if ($cidade == null) {
            echo "<script>alert('Erro Ao Carregar a Cidade do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $uf=$item->infNFe->dest->enderDest->UF;
        if ($uf == null) {
            echo "<script>alert('Erro Ao Carregar o UF do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $bairro=$item->infNFe->dest->enderDest->xBairro;
        $bairro=strtoupper($bairro);
        if ($bairro == null) {
            echo "<script>alert('Erro Ao Carregar o Bairro do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $cep=$item->infNFe->dest->enderDest->CEP;
        if ($cep == null) {
            echo "<script>alert('Erro Ao Carregar o Cep do Cliente');</script>";
            echo $voltalogin;
            exit;
        }
        $celular=$item->infNFe->dest->enderDest->fone;
        if ($celular == null) {
            echo "<script>alert('Erro Ao Carregar o Celular');</script>";
            echo $voltalogin;
            exit;
        }
    }

        if(!@($locv=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Videira Data:$dia  Hora:$time </font></b></p>";
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
        
        $sql="select ccodigo from aclientes where ccodigo = $codc ";
        $exsql= pg_query($locv,$sql);
        $rssql= pg_fetch_array($exsql);
        $codc=$rssql['ccodigo'];
        if ($codc == null) {
            echo "<script>alert('Sistema Ainda Não Replicou o Codigo do Cliente para Videira; Aguarde 1 Minuto e tente Novammete se der a mesma Msn comunique o Suporte para 
            que sejá arrumado o Replicador');</script>";
            echo $voltalogin;
            exit;
        } else {
            echo "<script>alert('Cliente Cadastrado Em Videira ');</script>";
        }
        $sql="select nextval('seque_asaidas') as id";
        $exsql= pg_query($locv,$sql);
        $rssql= pg_fetch_array($exsql);
        $id=$rssql['id'];
        if ($id == null) {
            echo "<script>alert('Erro Ao Buscar Um Id Para a saida');</script>";
            echo $voltalogin;
            exit;
        }
        if ($uf == 'SC') {
            $cfop='5.102';            
        } else {
            $cfop='6.102';   
        }
        $icms= 4.00;
        $icms =(number_format((int) $ttproduto, 2) * $icms / 100);       
        $sql="select Max(i_asa_nsu) from asaidas"; 
        $exsql= pg_query($locv,$sql);
        $resulsql= pg_fetch_array($exsql);
        $nsu=$resulsql['max'];
        $nsu ++;
        $sql="select cnotsaidas from asaidas where cnotsaidas = $nf and csrisaidas = 5";
        $exsql= pg_query($locv,$sql);
        $resulsql= pg_fetch_array($exsql);
        $cnf=$resulsql['cnotsaidas'];
        if ($cnf <> null) {
            echo "<script>alert('XML já Importado');</script>";
            echo $voltalogin;
            exit;
        }
        $sql="begin";
        $exsql= pg_query($locv,$sql);
        $sql="select logar('IMPORTA',1,0); INSERT INTO asaidas VALUES ($id,'P','S','$dtemi','$dtemi',NULL,0,'$cfop',$nf,0,0,$serie,$codc,$ttproduto,0.00,$ttproduto,0.00,$ttnfe,$ttdsc,
        0.00,0,102,0,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,1,1,2,1,'IMPORTA','$time','$dia',0,'',NULL,NULL,$ttcusto,0.00,$ttfret,0.00,0.00,0.00,15,0.00,0.00,0.00,'','','',
        '',0,'',0,0,0,'','$nomec','$cpf','','','','$logradouro','$cidade','$uf','$cep','$bairro','','$celular',0,0,0,nextval('seque_seq_transacao_fin'),NULL,NULL,NULL,0,'','','','','',
        0.00,0.00,0.00,0,$nsu,0,0,'P',0.00,0.00,0.00,0,0.00,0,'',0.00,0.00,'$chave',1,$icms,0.00,0,0,0,0,'$protoc','E',0,0,'',NULL,NULL,'N',$ttproduto,0.00,0.00,0.00,'',$ttnfe,$ttproduto,
        0,0,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,00,0.00,0,'','',NULL,0.00,0.00,0.00,1,NULL,0,NULL,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,NULL,NULL,0,0,1,0.00,NULL
        ,NULL,NULL,0,0,NULL,0,0,NULL,NULL,0,0,0,'','',0.00,0)  ";
        $exsql= pg_query($locv,$sql);
        if (!$exsql){
            $sql="rollback";
            $exsql= pg_query($locv,$sql);
            echo "<script>alert('Erro ao Incluir a Sáida');</script>";
            echo $voltalogin;
            exit;
        }        
        $sql="select logar('IMPORTA',1,0); INSERT INTO asduplicatas VALUES ($id,nextval('seque_asduplicatas'),'S',$nf,5,$ttnfe,'2022-12-31',1,$codc,0.00,0.00,0.00,0.00,0.00,NULL,0.00,'','','','F',
        1,'IMPORTA','$time','$dia',0,'',NULL,NULL,15,0,NULL,NULL,0,0,NULL,1,'',NULL,'',NULL,0,0,0,0,NULL,0.00,NULL,'',0,0,NULL,NULL,0,0,'','',0) ";
        $exsql= pg_query($locv,$sql);
        if (!$exsql){
            $sql="rollback";
            $exsql= pg_query($locv,$sql);
            echo "<script>alert('Erro ao Incluir a Duplicata');</script>";   
            echo $voltalogin;
            exit;
        }
        $item=1;
        
        while (1==1) {           
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item1,'$dtemi',$compra1,$custo1,$cvenda1,$venda1,$desc1,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda1,'$descr1','$cfop',$qtd1,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc1,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda1,0,0,$depart1,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo1,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,1,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc1,0,0.00,$venda1,$ttnfe,$desc1,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot1,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 1º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item2,'$dtemi',$compra2,$custo2,$cvenda2,$venda2,$desc2,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda2,'$descr2','$cfop',$qtd2,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc2,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda2,0,0,$depart2,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo2,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,2,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc2,0,0.00,$venda2,$ttnfe,$desc2,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot2,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 2º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item3,'$dtemi',$compra3,$custo3,$cvenda3,$venda3,$desc3,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda3,'$descr3','$cfop',$qtd3,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc3,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda3,0,0,$depart3,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo3,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,3,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc3,0,0.00,$venda3,$ttnfe,$desc3,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot3,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 3º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item4,'$dtemi',$compra4,$custo4,$cvenda4,$venda4,$desc4,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda4,'$descr4','$cfop',$qtd4,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc4,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda4,0,0,$depart4,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo4,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,4,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc4,0,0.00,$venda4,$ttnfe,$desc4,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot4,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 4º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item5,'$dtemi',$compra5,$custo5,$cvenda5,$venda5,$desc5,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda5,'$descr5','$cfop',$qtd5,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc5,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda5,0,0,$depart5,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo5,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,5,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc5,0,0.00,$venda5,$ttnfe,$desc5,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot5,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 5º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item6,'$dtemi',$compra6,$custo6,$cvenda6,$venda6,$desc6,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda6,'$descr6','$cfop',$qtd6,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc6,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda6,0,0,$depart6,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo6,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,6,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc6,0,0.00,$venda6,$ttnfe,$desc6,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot6,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 6º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item7,'$dtemi',$compra7,$custo7,$cvenda7,$venda7,$desc7,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda7,'$descr7','$cfop',$qtd7,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc7,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda7,0,0,$depart7,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo7,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,7,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc7,0,0.00,$venda7,$ttnfe,$desc7,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot7,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 7º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            $ttitem --;
            if ($ttitem == 0) {
                break;
            }
            $sql="select logar('IMPORTA',1,0); INSERT INTO ahistorico VALUES (nextval('seque_ahistorico'),NULL,$id,0,'S','',$item8,'$dtemi',$compra8,$custo8,$cvenda8,$venda8,$desc8,0.00,0.00,0.00,
            0.00,0.00,0.00,$cvenda8,'$descr8','$cfop',$qtd8,0.00,NULL,$codc,0.00,0.00,0.00,0.00,$perc8,0.00,0.00,0.00,0.00,0.00,0,'$dia','$time','IMPORTA',1,NULL,NULL,0,'',15,$cvenda8,0,0,$depart8,
            0.00,0.00,0.00,0.00,0.00,0.00,NULL,NULL,102,$custo8,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0,NULL,0.00,0.00,0.00,8,'',0,'',0.00,0.00,NULL,NULL,NULL,NULL,NULL,0.00,NULL,NULL,
            NULL,'',0,0.00,$perc8,0,0.00,$venda8,$ttnfe,$desc8,0.00,0.00,NULL,'','',NULL,NULL,NULL,'53','07','07',0.00,0.00,0.00,0.00,0.00,0,0.00,'0','341',0.00,0.00,0.00,0.00,102,0,0,'',0.00,0.00,
            0.00,'',0.00,NULL,'',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','',0.00,0.00,0.00,0.00,'A',NULL,'',0.00,NULL,0,$impot8,0.00,0.00,0.00,0,'',0.00,0,0,0.00,'',0.00,'',0,'',0.00,0.00) ";
            $exsql= pg_query($locv,$sql);
            if (!$exsql){
                $sql="rollback";
                $exsql= pg_query($locv,$sql);
                echo "<script>alert('Erro ao Incluir ao Inserir o 8º Histórico');</script>";
                echo $voltalogin;
                exit;
            }
            
            
            break;            
        }
        $sql="commit";
        $exsql= pg_query($locv,$sql);
        echo "<script>alert('Importada Com Sucesso Nfe:$nf');</script>";
        echo $voltalogin;
        exit;
    

}
?>
