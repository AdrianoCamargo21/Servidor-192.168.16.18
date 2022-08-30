

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/via.html';</script>";
$errotrollLc="<script>alert('Não Foi Possovel Conectar No Troll De Caçador');</script>";



$login=$_POST["login"];
$login = strtoupper($login);

if ($login == ''){
    echo "<script>alert('Login Não Pode Ser Em Branco');</script>";
    echo "$voltalogin";
    exit; 
}
$senha=$_POST["senha"];
if ($senha == ''){
    echo "<script>alert('Senha Não Pode Ser em Branco');</script>";
    echo "$voltalogin";
    exit;
}
if(!@($conexaoLc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))) {
    $pg_close($conexaoLc);
    echo "$errotrollcdr";
    echo "$voltalogin";
    exit; 
}
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha== '' ){
        pg_close($conexaoLc);
        echo "<script>alert('Usuário Invalido');</script>";
        echo "$voltalogin";
        exit;
    }
    $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
    $selecao = pg_query($query);
    $resut= pg_fetch_array($selecao);
    if ($resut == '') {
        pg_close($conexaoLc);
        echo "<script>alert('Senha Inválida');</script>";
        echo "$voltalogin";
        exit;
    }
    if ($login=="CESAR" and $login =="ADRIANO" ){
        pg_close($conexaoLc);
        $Vendedor=$_POST["CodV"];
        $resumo=$_POST["loja"];
        if ($Vendedor== '' or $Vendedor < '0'){
            echo "<script>alert('Digite o Número de Vendedor ou Digite 0 Para listar Todos');</script>";
            echo $voltalogin;
        }
        $Dti=$_POST["Dtin"];
        $Dtf=$_POST["Dtfn"];
        
        if ($Dti== '' or $Dtf== '' ){
            echo "<script>alert('Data Inválida');</script>";
            echo $voltalogin;
        }
        if ($Dtf < $Dti ){
            echo "<script>alert('Data Final Não Pode ser Menor que data inicial');</script>";
            echo $voltalogin;
        }
       // $intervalo= strtotime($Dtf)-strtotime($Dti);
        //$dias = floor($intervalo / (60 * 60 * 24));        
        //if ($dias > 60){
           // echo "<script>alert('Itervalo de Datas Não Pode ser Maior que 60 dias');</script>";
            //echo $voltalogin;
            
       //}
     
     if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))) {
            pg_close($conexao);
            echo "<script>alert('Não Foi possivel Conectar a Base De Vendas');</script>";
            echo "$voltalogin";
            exit;
        }
        if ($resumo == 'V'){
            
            if ($Vendedor <> '0'){
                $CommandolistaVendedor="select ccodvendedor,cnomvendedor, (select sum(ctotsaidas) from  asaidas
    inner join tvendedores on ccodvendedor=cvensaidas where cemisaidas >= '$Dti' and cemisaidas <= '$Dtf' and ctessaidas = 'S'
    and i_asa_codigo_tna in (1,57) and ccodvendedor = '$Vendedor')as bruto,(select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S'and i_asa_codigo_tna in (1) and clinproduto = 108 and ccodvendedor = '$Vendedor' ) as uniformeb ,
     (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E'and i_asa_codigo_tna in (10) and clinproduto = 108 and ccodvendedor = '$Vendedor' ) as uniformel ,
    (select  sum(ctotsaidas ) from asaidas inner join tvendedores on ccodvendedor =  cvensaidas where cemisaidas >= '$Dti'
    and cemisaidas <= '$Dtf' and ctessaidas = 'E' and i_asa_codigo_tna in (10) and ccodvendedor = '$Vendedor') as troca  from  asaidas
    inner join tvendedores on ccodvendedor =  cvensaidas
    where ccodvendedor = '$Vendedor' and cemisaidas >= '$Dti' and cemisaidas <= '$Dtf'  group by ccodvendedor,cnomvendedor";
                $ExCommandolistaVendedor=pg_query($CommandolistaVendedor);
                $RslCommandolistaVendedor= pg_fetch_array($ExCommandolistaVendedor);
                $numerovendedor= $RslCommandolistaVendedor['ccodvendedor'];
                $nomevendedor= $RslCommandolistaVendedor['cnomvendedor'];
                $valorBruto= $RslCommandolistaVendedor['bruto'];
                $valorDevolu=$RslCommandolistaVendedor['troca'];
                $uniformeb=$RslCommandolistaVendedor['uniformeb'];
                $uniformel=$RslCommandolistaVendedor['uniformel'];
                $uniforme=$uniformeb-$uniformel;
                $liquido= $valorBruto-$valorDevolu-$uniforme;
                pg_close($conexao);
                if ($liquido <> '0'){
                    echo $numerovendedor.'-'.$nomevendedor.'-Valor Bruto R$ '.$valorBruto.'-Valor Uniforme R$' .$uniforme.'-Valor DeVoluções R$'.$valorDevolu.'-Valor Liquido R$ '.$liquido.'<br>' ;
                    echo '__________________________________________________________________________________________________________________________________________________________________'.'<br>';
                    exit;
                    
                }
                echo "<script>alert('Sem Vendas Nessa Data');</script>";
                echo "$voltalogin";
            }
            if ($Vendedor == '0'){
                $Vendedor='1';
                while ($Vendedor <= 105){
                    $selecionaVendedor="select *from tvendedores where ccodvendedor = '$Vendedor'";
                    $exselecionaVendedor=pg_query($selecionaVendedor);
                    $RsselecionaVendedor=pg_fetch_array($exselecionaVendedor);
                    if ($RsselecionaVendedor > '0'){
                        $selecionavenda="select *from asaidas where cvensaidas = '$Vendedor' and cemisaidas >= '$Dti' and cemisaidas <= '$Dtf' ";
                        set_time_limit(120);
                        $exselecionavenda=pg_query($selecionavenda);
                        $rseselecionavenda=pg_fetch_array($exselecionavenda);
                        if($rseselecionavenda > '0'){
                            
                            $CommandolistaVendedor="select  ccodvendedor,cnomvendedor, (select sum(ctotsaidas) from  asaidas
    inner join tvendedores on ccodvendedor=cvensaidas where cemisaidas >= '$Dti' and cemisaidas <= '$Dtf' and ctessaidas = 'S'
    and i_asa_codigo_tna in (1,57) and ccodvendedor = '$Vendedor')as bruto,(select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S'and i_asa_codigo_tna in (1) and clinproduto = 108 and ccodvendedor = '$Vendedor' ) as uniformeb ,
     (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E'and i_asa_codigo_tna in (10) and clinproduto = 108 and ccodvendedor = '$Vendedor' ) as uniformel ,
    (select  sum(ctotsaidas ) from asaidas inner join tvendedores on ccodvendedor =  cvensaidas where cemisaidas >= '$Dti'
    and cemisaidas <= '$Dtf' and ctessaidas = 'E' and i_asa_codigo_tna in (10) and ccodvendedor = '$Vendedor') as troca  from  asaidas
    inner join tvendedores on ccodvendedor =  cvensaidas
    where ccodvendedor = '$Vendedor' and cemisaidas >= '$Dti' and cemisaidas <= '$Dtf'   group by ccodvendedor,cnomvendedor";
                            set_time_limit(120);
                            $ExCommandolistaVendedor=pg_query($CommandolistaVendedor);
                            $RslCommandolistaVendedor= pg_fetch_array($ExCommandolistaVendedor);
                            $numerovendedor= $RslCommandolistaVendedor['ccodvendedor'];
                            $nomevendedor= $RslCommandolistaVendedor['cnomvendedor'];
                            $uniformeB= $RslCommandolistaVendedor['uniformeb'];
                            $uniformeL= $RslCommandolistaVendedor['uniformel'];
                            $uniforme=$uniformeB-$uniformeL;
                            $valorBruto= $RslCommandolistaVendedor['bruto'];
                            $valorDevolu1=$RslCommandolistaVendedor['troca'];
                            $valorDevolu=$valorDevolu1-$uniformeL;
                            $liquidoc= $valorBruto-$valorDevolu-$uniformeB;
                            $liquido=number_format($liquidoc,2,",",".");
                            
                            if ($liquido <> '0,00'){
                                echo "<h3>$numerovendedor-$nomevendedor</h3>".'Valor Bruto R$ '.$valorBruto.'|'."<font color=\"red\">Valor Devoluções R$ $valorDevolu</font>".'|'.'Venda Uniforme R$'.$uniforme."<h4><font color=\"black\">Valor Liquido R$=  $liquido</font></h4>" ;
                                echo '__________________________________________________________________________________________________________________________________________________________________';
                            }
                        }
                    }
                    $Vendedor++;
                }
                pg_close($conexao);
                exit;
            }
        }
        if ($resumo == 'L'){
            if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))) {
                pg_close($conexao);
                echo "<script>alert('Não Foi possivel Conectar a Base De Vendas');</script>";
                echo "$voltalogin";
                exit;
            }
            
            
            
            
            $comando="select 1, (select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (1,2) ) bt01,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (1,2) ) l01,
	(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (3,4) ) bt03,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (3,4) ) l03,
	(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (5,6) ) bt05,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (5,6) ) l05,
	(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (7,8) ) bt07,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (7,8) ) l07,
	(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (9,10) ) bt09,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (9,10) ) l09,
	(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and cemphistorico in (11,12) ) bt11,(select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and cemphistorico in (11,12) ) l11,
    (select sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'S' and i_asa_codigo_tna in (1) and clinproduto = 108 ) as uniformev ,
    (select  sum(cvlqhistorico) from ahistorico inner join tvendedores on i_ahi_codigo_ven = ccodvendedor
     inner join aprodutos on cprohistorico = ccodproduto inner join asaidas on cisahistorico = cidesaidas
    where cemihistorico >= '$Dti' and cemihistorico <= '$Dtf' and  ctessaidas = 'E' and i_asa_codigo_tna in (10) and clinproduto = 108 ) as uniformed ";
            $excomando=pg_query($comando);
            $rescomando=pg_fetch_array($excomando);
            $empresa1b=$rescomando['bt01'];
            $empresa1t=$rescomando['l01'];
            $empresa3b=$rescomando['bt03'];
            $empresa3t=$rescomando['l03'];
            $empresa5b=$rescomando['bt05'];
            $empresa5t=$rescomando['l05'];
            $empresa7b=$rescomando['bt07'];
            $empresa7t=$rescomando['l07'];
            $empresa9b=$rescomando['bt09'];
            $empresa9t=$rescomando['l09'];
            $empresa11b=$rescomando['bt11'];
            $empresa11t=$rescomando['l11'];
            $uniformev=$rescomando['uniformev'];
            $uniformed=$rescomando['uniformed'];
            $uniformelq=$uniformev-$uniformed;
            $empresa1c=$empresa1b-$empresa1t-$uniformelq;
            $empresa1=number_format($empresa1c,2,",",".");
            $empresa3c=$empresa3b-$empresa3t;
            $empresa3=number_format($empresa3c,2,",",".");
            $empresa5c=$empresa5b-$empresa5t;
            $empresa5=number_format($empresa5c,2,",",".");
            $empresa7c=$empresa7b-$empresa7t;
            $empresa7=number_format($empresa7c,2,",",".");
            $empresa9c=$empresa9b-$empresa9t;
            $empresa9=number_format($empresa9c,2,",",".");
            $empresa11c=$empresa11b-$empresa11t;
            $empresa11=number_format($empresa11c,2,",",".");
            pg_close($conexao);
            echo "<h2>Loja Tatiane R$ $empresa1</h2>" ;
            echo "<h2>Loja Maynara R$  $empresa5</h2> ";
            echo "<h2>Loja César R$  $empresa7</h2> ";
            echo "<h2>Loja Fernanda R$  $empresa9</h2> ";
            echo "<h2>Loja Hilda R$  $empresa11</h2> ";
            echo "<h2>Loja Lucélia R$  $empresa3</h2> ";
            exit;
        }              
    }
    if ($login <> "CESAR"){
        pg_close($conexaoLc);
        echo "<script>alert('Olá $login. Sua Senha Esta Correta. Porem seu Usuário Não tem Permisão para Listar as Vendas');</script>";
        echo "$voltalogin";
        exit;           
    }  
	pg_close($conexaoLc);
?>    