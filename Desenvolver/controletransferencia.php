<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>ViaBrasil.bay</title>
<center>
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
<table width="1200" cellspacing="1" cellpadding="3" border="0" bgcolor="#ACFA58">
<tr>
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
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(0);
error_reporting(0);
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/controletransferencia.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(0);
session_start();
$login = $_SESSION['login'];
if ($login =='') {
    $login=$_POST["login"];
    $login=strtoupper($login);
    if ($login == '') {
        session_destroy();
        echo "<script>alert('Login Inválido');</script>";
        echo $voltalogin;
    }
}
$senha = $_SESSION['senha'];
if ($senha =='') {
    $senha=$_POST["senha"];
    $senha=strtoupper($senha);
    if ($senha=='') {
        session_destroy();
        echo "<script>alert('Senha Inválida');</script>";
        echo $voltalogin;
    }
}

if(!@($con=pg_connect ("host=192.168.16.2 dbname=openfire port=5430 user=postgres password=ky$14gr@"))){
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
$sql="select empresa from parametros where login='$login' and senha='$senha'";
$exsql= pg_query($con,$sql);
$resulsql= pg_fetch_array($exsql);
$emp=$resulsql['empresa'];
if ($emp =='') {
    session_destroy();
    echo "<script>alert('Login ou Senha Inválido');</script>";
    echo $voltalogin;
}
$tipo=$_POST["tipo"];
if ($tipo == 'C') {
    $nf=$_POST["ide"];
    if ($nf <> '') {
        $sql="select numerofe from controletransferencia where empresa=$emp and status ='P' and numerofe =$nf ";
        $exsql= pg_query($con,$sql);
        $resulsql= pg_fetch_array($exsql);
        $nfe=$resulsql['numerofe'];
        if ($nfe =='') {
            $sql="select numerofe from controletransferencia where empresa=$emp and status ='C' and numerofe =$nf ";
            $exsql= pg_query($con,$sql);
            $resulsql= pg_fetch_array($exsql);
            $nfe=$resulsql['numerofe'];
            if ($nfe == '') {
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Essa Nfe:$nf Não Esta Emitida para Sua
                empresa Avisar o Adriano </font></b></p>";
            } else {
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Essa Nfe:$nf Já Havia sido Marcada Como Conferida </font></b></p>";
            }
        } else {
            $sql="update controletransferencia set status ='C' where empresa=$emp and status ='P' and numerofe =$nf";
            $exsql= pg_query($con,$sql);
        }
    }
}
if ($tipo =='FECHAR') {
    session_destroy();
    header("Location: http://192.168.13.2/desenvolver/controletransferencia.html");
}

$sql="select *from controletransferencia where  empresa=$emp and status ='P' order by data,numerofe ";
$exsql= pg_query($con,$sql);
echo "<table border='5' width='100%' bgcolor=#E3F6CE >";
echo "<tr><td>Nfe</td>"."<td>Emitida em :</td>"."<td>Fornecedor</td>"."<td>Usuário</td>"."</tr>";
while($row=pg_fetch_array($exsql)){
    $fornecedor=$row['fornecedor'];
    if ($emp<= '6') {
        switch ($fornecedor) {
            case 7:
            $fornecedor='Lucélia';
            break;
                case 691:
                $fornecedor='Vila';
            break;
            case 741:
                $fornecedor='Adrielli';
                break;
            case 749:
                $fornecedor='Rosane';
                break;
            case 1602:
                $fornecedor='Lages';
                break;
            case 1916:
                $fornecedor='Feira (18)';
                break;
            case 2260:
                $fornecedor='Nadia';
                break;
            case 2326:
                $fornecedor='Atacadão';
                break;
            case 2349:
                $fornecedor='Martello';
                break;
            case 2549:
                $fornecedor='Shop Masp Videira';
                break;
            case 2616:
                $fornecedor='Josiane';
                break;
            case 2838:
                $fornecedor='Feira (20)';
                break;  
            default:                
            break;
        }      
    }elseif ($emp >=7 and $emp <= 9) {
        switch ($fornecedor) {
            case 7:
                $fornecedor='Lucélia';
                break;
            case 691:
                $fornecedor='Vila';
                break;
            case 741:
                $fornecedor='Adrielli';
                break;
            case 749:
                $fornecedor='Rosane';
                break;
            case 1602:
                $fornecedor='Lages';
                break;
            case 1916:
                $fornecedor='Feira (18)';
                break;
            case 2204:
                $fornecedor='Nadia';
                break;
            case 2217:
                $fornecedor='Atacadão';
                break;
            case 2213:
                $fornecedor='Martello';
                break;
            case 2294:
                $fornecedor='Shop Masp Videira';
                break;
            case 2330:
                $fornecedor='Josiane';
                break;
            case 2237:
                $fornecedor='Feira (20)';
                break;
            default:
                break;
        }
        
    }elseif ($emp == '10' or $emp == ' 13' ) {
        switch ($fornecedor) {
            case 14:
                $fornecedor='Lucélia';
                break;
            case 15:
                $fornecedor='Vila';
                break;
            case 16:
                $fornecedor='Adrielli';
                break;
            case 76:
                $fornecedor='Rosane';
                break;
            case 111:
                $fornecedor='Lages';
                break;
            case 284:
                $fornecedor='Feira (18)';
                break;
            case 17:
                $fornecedor='Nadia';
                break;
            case 143:
                $fornecedor='Atacadão';
                break;
            case 97:
                $fornecedor='Martello';
                break;
            case 260:
                $fornecedor='Shop Masp Videira';
                break;
            case 142:
                $fornecedor='Josiane';
                break;
            case 285:
                $fornecedor='Feira (20)';
                break;
            default:
                break;
        }

    }
    $data = $row['data'];
    $data = implode("/",array_reverse(explode("-",$data)));
    echo "<td>".$row['numerofe']."</td>\n";
    echo "<td>".$data."</td>\n";
    echo "<td>".$fornecedor."</td>\n";
    echo "<td>".$row['usuario']."</td>\n";
    echo "</tr>\n";
}

echo "</table>";

$_SESSION['login']= $login;
$_SESSION['senha']= $senha;



?>
<center><form name = "form1" method= "post" action= "">
<input type="radio" name="tipo" value="C" onClick="expandit(this)">Conferir Nota
<span style="display:none" style=&{head};>
<br>
Nº Nfe:
<input name= "ide" type= "number" id="ide" min="1" value="1" >
<input class="btn btn-green" type="submit" value="CONFERIR" />
</form>
<br><br/>
</span>
<br><br/>

<center><form name = "form1" method= "post" action= "">
<input name= "tipo" class="btn btn-red" type="submit" value="FECHAR" />
</tr>
</table>
</center>
</head>
</html>
