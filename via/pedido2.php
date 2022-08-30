<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Grupo Via Brasil</title>
<script>
window.history.forward(1);
</Script>
</head>
</html>
<?php
date_default_timezone_set('America/Sao_Paulo');
$hora = date('H:i:s');
$hora_parte=explode (":",$hora);
$hora_h = $hora_parte[0];
$minuto = $hora_parte[1];
$segundo = $hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo = <?php echo $segundo;?>;
var minuto = <?php echo $minuto;?>;
var hora = <?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo ==59){
			     minuto = minuto+1;
			      segundo = 0;
			       if (hora == 24){
				        hora = hora+1;
				         minuto = 0;
				          segundo = 0;
				           }
		             }
            }
   document.getElementById("relogio").innerHTML=(hora+":"+minuto+":"+segundo);
    }
</script>
</center>
</HEAD>
<meta name="GENERATOR" content="MAX's HTML Beauty++ ME">
<body onload="setInterval('tempo();',1000)">
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
error_reporting(0);
session_start();
set_time_limit(0);
include_once("conexao.php");
$time = date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
$origemlocal = $_SESSION['emploginn'];
if ($origemlocal == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Empresa de Origem');</script>";
    echo $voltalogin;
    exit;
}
$voltalogin = "<script>window.location='http://192.168.13.2:8080/via/';</script>";
$cliente = $_SESSION['cliente'];
if ($cliente == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Cliente');</script>";
    echo $voltalogin;
    exit;
}
$login = $_SESSION['login'];
if ($login == null) {
    session_destroy();
    echo "<script>alert('erro ao carregar login');</script>";
    echo $voltalogin;
    exit;
}
$codlogin = $_SESSION['codlogin'];
if ($codlogin == null) {
    session_destroy();
    echo "<script>alert('erro ao carregar login');</script>";
    echo $voltalogin;
    exit;
}
$fant = $_SESSION['fantasia'];
if ($fant == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Nome do Cliente');</script>";
    echo $voltalogin;
    exit;
}
$loja = $_SESSION['loja'];
if ($loja == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar empresa de origem');</script>";
    echo $voltalogin;
    exit;
}
$id = $_SESSION['id'];
if ($loja == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Id de origem');</script>";
    echo $voltalogin;
    exit;
}
$sistema = $_SESSION['sistema'];
if ($sistema == null) {
    session_destroy();
    echo "<script>alert('Erro ao Carregar Dados do Servidor');</script>";
    echo $voltalogin;
    exit;
}
if ($sistema == 'C') {
    $con = $conc;
} 
if ($sistema == 'V') {
    $con = $conv;
}
if ($sistema == 'J') {
    $con = $conj;
}
if ($sistema == 'L') {
    $con = $conl;
}
$tipo = $_POST["tipo"];
if ($tipo == 'A') {
    $arquivo = "nota.txt";
    if (file_exists($arquivo)) {
        unlink($arquivo);
    }
    $nome_temporario = $_FILES["Arquivo"]["tmp_name"];
    $nome_real = $_FILES["Arquivo"]["name"];
    if (!copy($nome_temporario,$nome_real)){
       header("Location: http://192.168.13.2:8080/via/pedido2.php");
    }
    $antigo = "$nome_real";
    $arquivo_novo="nota.txt";
    rename($antigo,$arquivo_novo);
    $arq = fopen($arquivo,'r');
    while(!feof($arq))
        for($i=0; $i<1; $i++){
            if ($conteudo = fgets($arq)){
                $linha = explode(';', $conteudo);
            }
            if ($linha[0] <> null ) {
                $linha[0] = str_replace("ï»¿","",$linha[0]);
                $sql = "select ccodproduto,cdesproduto,cicmhistorico,cpcuproduto,cpcoproduto,(cpcuproduto/3)::numeric (18,2) as minimo from ahistorico
	                   inner join aprodutos on cprohistorico=ccodproduto where ctiphistorico = 'E' and ccfohistorico in 
                       (2.102,2.101,1.102,1.101,2.403,1.403) and cprohistorico = $linha[0] order by cemihistorico desc limit 1";
                $exsql = pg_query($con ,$sql);
                $resulsql = pg_fetch_array($exsql);
                $cod = $resulsql['ccodproduto'];
                $icms = $resulsql['cicmhistorico'];
                $custonota = $resulsql['cpcuproduto'];
                $compranota = $resulsql['cpcoproduto'];
                $custodividido = $resulsql['minimo'];
                $desc = $resulsql['cdesproduto'];
                if ($desc == null) {
                    $sql = "select ccodproduto,cdesproduto,cpcuproduto,cpcoproduto,(cpcuproduto/3)::numeric (18,2) as minimo from aprodutos
                            where ccodproduto = $linha[0]";
                    $exsql = pg_query($con ,$sql);
                    $resulsql = pg_fetch_array($exsql);
                    $icms = 0.00;
                    $cod = $resulsql['ccodproduto'];
                    $custonota = $resulsql['cpcuproduto'];                    
                    $compranota = $resulsql['cpcoproduto'];
                    $custodividido = $resulsql['minimo'];
                    $desc = $resulsql['cdesproduto'];
                    
                } if ($desc == null) {
                    $cod = null;
                    header("Location: http://192.168.13.2:8080/via/pedido2.php");
                }
                if ($sistema == 'C') {
                    if ($icms == 17 ) {
                        $precominimo=$custonota;
                        if ($precominimo == '0.00' or $precominimo == null){
                            $precominimo  = '10.00';
                        }
                    } else {
                        if ($icms == 12) {
                            if ($compranota ==  null) {
                                if ($custonota == null) {
                                    $precominimo  ='10.00';
                                } else {
                                    $precominimo = $custonota;
                                }
                            } else {
                                $precominimo = $compranota;
                            }
                            $precominimo -= ($precominimo * 30 / 100 );
                        } else {
                            if ($compranota < $custodividido){
                                $precominimo=$compranota;
                            } else {
                                $precominimo=$custodividido;
                            }
                            if ($precominimo == '0.00' or $precominimo == null){
                                $precominimo  ='10.00';
                            }
                        }
                    }
                } else {
                    if ($compranota < $custodividido){
                        $precominimo=$compranota;
                    } else {
                        $precominimo=$custodividido;
                    }
                    if ($precominimo == '0.00' or $precominimo == null){
                        $precominimo  ='10.00';
                    }
                }
                $precominimo = number_format($precominimo, 2);
                $qtd = $linha[1];
                $sql = "select codigo,qtd from blx where codigo = $cod and id = $id ";echo $sql.'<br>';
                $exsql= pg_query($con ,$sql);
                $resulsql = pg_fetch_array($exsql);
                $cadastro = $resulsql['codigo'];
                if ($cadastro == null ) {
                    $sql = "insert into blx values ($cod,$qtd,$precominimo,$id)";
                    $exsql= pg_query($con ,$sql);
                } else {
                    $qtdc =  $resulsql['qtd'];
                    $qtd += $qtdc;
                    $sql = "update blx set qtd = $qtd where codigo = $cod and id = $id ";echo $sql.'<br>';
                    $exsql = pg_query($con ,$sql);
                }
                $linha = array();// linpa o array de $linha e volta para o for
            }
            header("Location: http://192.168.13.2:8080/via/pedido2.php");           
    }
    exit;
}
if ($tipo == "CADASTRAR" ) {
    $qtd = $_POST["qtd"];
    if ($qtd == null) {
        $qtd = 1;
    }
    $cod = $_POST["cod"];
    if ($cod == '') {
        
    }
}
if ($tipo == 'CANCELAR') {
    $ide=$_POST["ide"];
    if ($ide <> null) {
        $sql="delete from blx where codigo = $ide and id = $id";
        $exsql= pg_query($con,$sql);
    }
}
if ($tipo == "CANCELAR NFE") {    
    $sql="delete from blx where id =$id";
    $exsql= pg_query($con,$sql);
    echo "<script>alert('Pedido Cancelado com sucesso');</script>";
    session_destroy();
    echo $voltalogin;
    exit;
}
$sql = "select sum(qtd*valor) from blx where id =$id";
$exsql = pg_query($con,$sql);
$resulsql = pg_fetch_array($exsql);
$total = $resulsql["sum"];
if ($total == null) {
    $total = 0.00;
}
$sql = "select sum(qtd) from blx where id = $id";
$exsql = pg_query($con ,$sql);
$resulsql = pg_fetch_array($exsql);
$totalpcs = $resulsql['sum'];
if ($totalpcs == null) {
    $totalpcs = '0.00';
}
$sql = "select count(codigo) from blx where id = $id ";
$exsql = pg_query($con ,$sql);
$resulsql = pg_fetch_array($exsql);
$totalitens = $resulsql['count'];
if ($totalitens == null) {
    $totalitens='0.00';
}
$sql = "select sum(qtd*valor) from blx where id = $id";
$exsql= pg_query($con ,$sql);
$resulsql = pg_fetch_array($exsql);
$tt = $resulsql['sum'];
if ($tt == null) {
    $tt = '0.00';
}
if ($tipo == "FINALIZA NFE") {
    $sql = "select cserserie from tseriesnf where cempserie ='$origemlocal' and ctiposerie = 4 ";
    $exsql = pg_query($con,$sql);
    $rssql = pg_fetch_array($exsql);
    $seriepedido = $rssql['cserserie'];
    if ($seriepedido ==  null){
        echo "Nenhuma Série esta Cadastrada Para Pedido Favor Informar o Suporte para a Criação Da Mesma";
    } else {
        $sql = "BEGIN";
        $exsql = pg_query($con,$sql);
        $sql = "SELECT (MAX(i_pdi_numero_pedido)+1)as ultimo FROM pedidos where i_pdi_codigo_emp = $origemlocal ";
        $exsql = pg_query($con,$sql);
        $rssql = pg_fetch_array($exsql);
        $ult = $rssql['ultimo'];
        $sql = "select (nextval('seque_pedidos'))as id";
        $exsql = pg_query($con , $sql);
        $rssql = pg_fetch_array($exsql);
        $idep = $rssql['id'];
        $sql = "select logar('$login','$codlogin',0);INSERT INTO pedidos 
                VALUES ($idep,'$dia',NULL,$seriepedido,$ult,$cliente,1,1,11,$tt,0.00,0.00,0.00,0.00,1,$origemlocal,$codlogin,$tt,0.00,0,0,0.00,0,
                NULL,1,0,NULL,0.00,0.00,0.00,1,0,0.000,0.000,'','','',0,'Cadastrado Via Trânferencia',0.00,0,0,NULL,NULL,'$time',1,NULL,0,NULL,'$dia',NULL,0,0,'',0.000,0.000,0,0,0)";            
        $exsql = pg_query($con,$sql);
        if  (!$exsql) {
            $com = "ROLLBACK";
            $excom = pg_query($con,$com);
            echo "<script>alert('Erro ao Inserir o Pedido');</script>";
            echo $voltalogin;
            exit;
        }
    	$sql = "select codigo,cdesproduto,qtd,valor,(qtd*valor) as total from blx inner join aprodutos on codigo = ccodproduto where id =$id order by codigo";
    	$exsql=pg_query($con,$sql);
    	while($row = pg_fetch_assoc( $exsql)){
    	    $codigo = $row['codigo'];
    	    $qtd = $row['qtd'];
    	    $custo = $row['valor'];
    	    $desc =  $row['cdesproduto'];
    	    $totalpe = $row['total'];
    	    $com="select logar('$login','$codlogin',0);INSERT INTO itens_pedidos
            VALUES (nextval('seque_itens_pedidos'),$codigo,$idep,'$desc',$qtd,$custo,$totalpe,0.00,0.00,0.00,0.00,0.00,0.00,1,0.00,0.00,$custo,0.00,$qtd,0.00,0.00,0.00,0.00)";
    	    $excom=pg_query($con,$com);
    	    if  (!$excom) {
    	        $com = "ROLLBACK";
    	        $excom = pg_query($con,$com);
    	        echo "<script>alert('Erro ao Inserir Itens do Pedido');</script>";
    	        echo $voltalogin;
    	        exit;
    	    }
    	}
    	$sql="delete from blx where id =$id";
    	$exsql= pg_query($con,$sql);
    	$sql = "COMMIT";
    	$exsql = pg_query($con,$sql);
    	echo "<script>alert('Pedido Cadastrado com Sucesso nº: $id');</script>";
    	session_destroy();
    	echo $voltalogin;
    	exit;
    }
				
}
if ($cod == null) {
    echo "<table border='1'   cellspacing='10' width='100%' bgcolor=#A9F5E1 >";
    echo "<td><font color=\"black\"><strong>Empresa de origem:$loja</strong></font></td>"."<td><font color=\"black\"><strong>Usuário:$login</strong></font></td>"."<td><font color=\"black\"><strong><HTML><h4> <div name='relogio' id='relogio'></div></h4></HTML></strong></font></td>"."</tr>";
    echo "</tr>\n";
    echo "<table border='5' width='100%' bgcolor=#A9F5E1 >";
    echo "<tr><td><font color=\"black\"><strong>Cód. Cliente</strong></font></td>"."<td><font color=\"black\"><strong>Nome:</strong></font></td>"."</tr>";
    echo "<td>".$cliente."</td>\n";
    echo "<td>".$fant."</td>\n";
    echo "</tr>\n";
    echo "<table border='10' width='100%' bgcolor=#A9F5E1>";
    echo "<tr><td><font color=\"black\"><strong>Código</strong></font></td>"."<td><font color=\"black\"><strong>Descrição</strong></font></td>"."<td><font color=\"black\"><strong>Qtd</strong></font></td>"."<td><font color=\"black\"><strong>Custo</strong></font></td>"."<td><font color=\"black\"><strong>Total</strong></font></td>"."</tr>";
    $sql = "select codigo,cdesproduto,qtd,valor,(qtd*valor) as total from blx inner join aprodutos on codigo = ccodproduto where id =$id order by codigo ";
    $exsql= pg_query($con,$sql);
    $cor1 = "#F5DEB3";
    $cor2 = "#DCDCDC";
    $ini=1;
    while( $row = pg_fetch_array($exsql)){
        if ($ini%2 == 0){
            $cor = $cor1;
        } else {
            $cor = $cor2;
        }
        echo "<td bgcolor=$cor>".$row['codigo']."</td>\n";        
        echo "<td bgcolor=$cor>".$row['cdesproduto']."</td>\n";
        echo "<td bgcolor=$cor>".$row['qtd']."</td>\n";
        $custo = $row['valor'];
        echo "<td bgcolor=$cor>".$custo."</td>\n";
        $total = $row['total'];
        echo "<td bgcolor=$cor>".$total."</td>\n";
        echo "</tr>\n";
        $ini ++;
    }
} else {
    $sql = "select cdesproduto,cicmhistorico,cpcuproduto,cpcoproduto,(cpcuproduto/3)::numeric (18,2) as minimo from ahistorico
    		inner join aprodutos on cprohistorico=ccodproduto
    		where ctiphistorico = 'E' and ccfohistorico in (2.102,2.101,1.102,1.101,2.403,1.403) and cprohistorico = $cod
    		order by cemihistorico desc limit 1";
    $exsql = pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $icms = $resulsql['cicmhistorico'];
    $custonota = $resulsql['cpcuproduto'];
    $compranota = $resulsql['cpcoproduto'];
    $custodividido = $resulsql['minimo'];
    $desc = $resulsql['cdesproduto'];
    if ($desc == null) {
        $sql = "select cdesproduto,cpcuproduto,cpcoproduto,(cpcuproduto/3)::numeric (18,2) as minimo from aprodutos
               where ccodproduto = $cod";
        $exsql = pg_query($con ,$sql);
        $resulsql = pg_fetch_array($exsql);
        $icms = 0.00;
        $custonota = $resulsql['cpcuproduto'];
        $compranota = $resulsql['cpcoproduto'];
        $custodividido = $resulsql['minimo'];
        $desc = $resulsql['cdesproduto']; 

    } if ($desc == null) {  
        $cod = null;
        header("Location: http://192.168.13.2:8080/via/pedido2.php");
    }    
    if ($sistema == 'C') {    
        if ($icms == 17 ) {
            $precominimo=$custonota;
            if ($precominimo == '0.00' or $precominimo == null){
                $precominimo  = '10.00';
            }
        } else {
            if ($icms == 12) {
                if ($compranota ==  null) {
                    if ($custonota == null) {
                        $precominimo  ='10.00';
                    } else {
                        $precominimo = $custonota;
                    }
                } else {
                    $precominimo = $compranota;
                }
                $precominimo -= ($precominimo * 30 / 100 );        
            } else {
                if ($compranota < $custodividido){
                    $precominimo=$compranota;
                } else {
                    $precominimo=$custodividido;
                }
                if ($precominimo == '0.00' or $precominimo == null){
                    $precominimo  ='10.00';
                }
            }
        }
    } else {
        if ($compranota < $custodividido){
            $precominimo=$compranota;
        } else {
            $precominimo=$custodividido;
        }
        if ($precominimo == '0.00' or $precominimo == null){
            $precominimo  ='10.00';
        }
    }    
    $precominimo = number_format($precominimo, 2);
    $sql = "select codigo,qtd from blx where codigo = $cod and id = $id ";
    $exsql= pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $cadastro = $resulsql['codigo'];
    if ($cadastro == null ) {
        $sql = "insert into blx values ($cod,$qtd,$precominimo,$id)";
        $exsql= pg_query($con ,$sql);
    } else {
        $qtdc =  $resulsql['qtd'];
        $qtd += $qtdc;
        $sql = "update blx set qtd = $qtd where codigo = $cod and id = $id ";
        $exsql = pg_query($con ,$sql);
    }
    header("Location: http://192.168.13.2:8080/via/pedido2.php");   
}
?>
<!DOCTYPE html>
<html>
<center><form name = "form1" method= "post" action= "pedido2.php" enctype="multipart/form-data">
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "">
<br><br> 
<table width="100%" cellspacing="1" cellpadding="3" border="3" bgcolor="#A9F5E1">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">
<center>
Código:
<input name= "cod" type= "number" id="cod" min="1" autofocus>
Quantidade:
<input name= "qtd" type= "number" id="qtd" value="1" min="1" > </P> 
<?php
if ($total > 0) {
    $totalpcs = number_format($totalpcs,2,",",".");
    echo "<font color=\"black\" size=4><strong>"."Total De Itens:".number_format($totalitens,2,",",".")."    Total de Pçs/Pares:".$totalpcs."</strong></font>".'<br>';
    echo "<font color=\"black\" size=4><strong>"."Total Do Romaneio:".$tt."</strong></font>";
    
}
?>
</center>
</font></td>
</tr>
<tr>
<td bgcolor="#A9F5E1">
<font face="arial, verdana, helvetica">
</font>
<center>
<br>
<input name= "tipo" class="btn btn-green" type="submit" value="CADASTRAR"/>
<input name= "tipo"  class="btn btn-red" type="reset" value="Limpar" />
<br><br>
<script language="JavaScript1.2">
<!--
var ns6=document.getElementById&&!document.all?1:0
var head="display:''"
var folder=''
function expandit(curobj){
folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
if (folder.display=="none")
folder.display=""
else
folder.display="none"
}
//-->
</script>
<input type="radio" name="tipo" value="E" onClick="expandit(this)">Excluir Produto
<span style="display:none" style=&{head};>
Código:
<input name= "ide" type= "number" id="ide" min="1" value="1" >
<input name= "tipo" class="btn btn-red" type="submit" value="CANCELAR" />
</span>
<br>
</center>
<center>
<input type="radio" name="tipo" value="A" onClick="expandit(this)">Carregar Arquivo
<span style="display:none" style=&{head};> 
<br><br>
<center><input type="file" name="Arquivo" id="Arquivo" accept=".txt"><br></center><br>
<input  class="btn btn-green" type="submit" value="ENVIAR"/>
</span>
<br><br>	
</tr>
</table>
<br><br>
<table width="100%" cellspacing="1" cellpadding="3" border="3" bgcolor="#A9F5E1">
<tr>
<td><font color="Black" face="arial, verdana, helvetica">   
<?php if($tt > 0): ?>
<center>
<input name= "tipo" class="btn btn-green" Onsubmit="return this.nomedobotao.disabled=true" type="submit" value="FINALIZA NFE"  />	

<?php endif; ?>
<input name= "tipo" class="btn btn-red" type="submit" value="CANCELAR NFE" />
</center>
</form>
</tr>
</table>
</form>
</html>
<br><br>