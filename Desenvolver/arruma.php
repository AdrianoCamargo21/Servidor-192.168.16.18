<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.10.191/Desenvolver/arruma.html';</script>";
$errocon="<script>alert('Não foi possivel conectar ao Banco de Dados');</script>";
date_default_timezone_set('America/Sao_Paulo');
$hora=date('H:i:s');
$hora_parte=explode(":",$hora);
$hora_h=$hora_parte[0];
$minuto=$hora_parte[1];
$segundo=$hora_parte[2];
?>
<HTML>
<HEAD>
<center>
  <script tpye=text/javascript>
var segundo=<?php echo $segundo;?>;
var minuto=<?php echo $minuto;?>;
var hora=<?php echo $hora_h;?>;
 function tempo(){
	  if (segundo<59){
		   segundo=segundo+1
		    if (segundo==59){
			     minuto=minuto+1;
			      segundo=0;
			       if (hora==24){
				        hora=hora+1;
				         minuto=0;
				          segundo=0;
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
<div name="relogio" id="relogio"></div>
<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$base=$_POST["Base"];

if ($base == ''){
    echo "<script>alert('Selecione uma base..');</script>";
    echo "$voltalogin";    
}
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
if ($base=='C') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    if(!@($conexaol=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Caçador Conectado</font></b></p>";
    $sql="select ccodproduto,(cqtdproduto) as qtd,(cqtde1produto+cqtde2produto)as emp1,(cqtde3produto+cqtde4produto)as emp3,
    (cqtde5produto+cqtde6produto)as emp5,(cqtde7produto+cqtde8produto)as emp7,(cqtde9produto+cqtde10produto)as emp9,
    (cqtde11produto+cqtde12produto)as emp11 from aprodutos where clinproduto <> '75'  order by ccodproduto ";
    set_time_limit(300);
    pg_query($conexao,"select logar('COPIA',1,0)");
    $exsql=pg_query($conexao,$sql);
    while ($row = pg_fetch_assoc($exsql)){
        $prod=$row['ccodproduto'];
        $qtd=$row['qtd'];
        $qtd=number_format( $qtd);
        $emp1=$row['emp1'];
        $emp1=number_format( $emp1);
        $emp3=$row['emp3'];
        $emp3=number_format($emp3);
        $emp5=$row['emp5'];
        $emp5=number_format( $emp5);
        $emp7=$row['emp7'];
        $emp7=number_format( $emp7);
        $emp9=$row['emp9'];
        $emp9=number_format( $emp9);
        $emp11=$row['emp11'];
        $emp11=number_format( $emp11);
        set_time_limit(300);
        pg_query($conexaol,"update aprodutos set cqtdproduto=$qtd,cqtde1produto=$emp1,cqtde3produto=$emp3,
        cqtde5produto=$emp5,cqtde7produto=$emp7,cqtde9produto=$emp9,cqtde11produto=$emp11 where ccodproduto = $prod");
    }
}
if ($base=='V') {
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    if(!@($conexaol=pg_connect ("host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    echo "<p style=background:#D3D3D3; align=center <br/><b><font size=5 color=#FF0000>Servidor de Videira Conectado</font></b></p>";
    $sql="select ccodproduto,(cqtdproduto) as qtd,(cqtde13produto+cqtde14produto)as emp13,(cqtde15produto+cqtde16produto)as emp15,
    (cqtde17produto+cqtde18produto)as emp17 from aprodutos where clinproduto <> '75'  order by ccodproduto ";
    set_time_limit(300);
    pg_query($conexao,"select logar('COPIA',1,0)");
    $exsql=pg_query($conexao,$sql);
    while ($row = pg_fetch_assoc($exsql)){
        $prod=$row['ccodproduto'];
        $qtd=$row['qtd'];
        $qtd=number_format( $qtd);
        $emp13=$row['emp13'];
        $emp13=number_format( $emp13);
        $emp15=$row['emp15'];
        $emp15=number_format($emp15);
        $emp17=$row['emp17'];
        $emp17=number_format( $emp17);
        set_time_limit(300);
        pg_query($conexaol,"update aprodutos set cqtdproduto=$qtd,cqtde13produto=$emp13,cqtde15produto=$emp15,
        cqtde17produto=$emp17 where ccodproduto = $prod");
    }
}
















exit;

?>
<!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<center><form name = "form1" method= "post" action= "backup.html"></center>
<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
</form>
</head>
</html>
    




