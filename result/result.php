<!DOCTYPE html>
<html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" >
<link rel="stylesheet" href="css/style.css"></link>
<br><br>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include_once("conexao.php");
set_time_limit(0);
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
set_time_limit(0);
$voltalogin = "<script>window.location='http://192.168.13.2/result/'</script>";
$tipo = $_POST['tipo'];
if ($tipo == 'C') {
    $data = $_POST['data'];
    if ($data == null) {
        $data = $dia;
    }
    $dataa = implode("/",array_reverse(explode("-",$data)));
    $loja = $_POST['origem'];
    if ($loja == 1) {
        $usuario = 'ADRIELI';
    }
    if ($loja == 2) {
        $usuario = 'ROSANE';
    }
    if ($loja == 3) {
        $usuario = 'VILA';
    }
    if ($loja == 4) {
        $usuario = 'LUCELIA';
    }
    if ($loja == 5) {
        $usuario = 'JOSI';
    }
    if ($loja == 11) {
        $usuario = 'MAYARA';
    }
    $sql = "select idhistorico,cnomefavorecido,cvalordebitohistorico,cdescricaohistorico from ahcontas inner join afavorecidos 
           on ccodigofavorecidohistorico = ccodigofavorecido where cuscahis = '$usuario' and ccodigocontahistorico = 11 
           and cdatahistorico = '$data' order by cnomefavorecido ";
    $exsql = pg_query($conrc ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $id = $resulsql['idhistorico'];
    if ($id == null) {        
        echo "<script>alert('Nenhum Lancamento Retornou');</script>";
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><font size=3><strong>Id</strong></font></td>"."<td><font color=\"black\" size=3><strong>Descricao
             </strong></font></td>"."<td><font color=\"black\" size=3><strong>Descricao</strong></font></td>"."<td><font
             color=\"black\" size=3><strong>Valor</strong></font></td>"."</tr>";
        echo "<td>".'1'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'STONE'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'2'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'SENFF'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'3'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'TIDAS'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'4'."</td>\n";
        echo "<td>".'RECEBIMENTO'."</td>\n";
        echo "<td>".'TIDAS'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'5'."</td>\n";
        echo "<td>".'RECEBIMENTO'."</td>\n";
        echo "<td>".'STONE'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";        
        echo "</table>";
        echo "<br><br>";
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        <center>
        <title>ViaBrasil.bay</title>
        <link rel="stylesheet" href="css/style.css"></link>
        <a title="Imprimir" href="javascript:window.print()"><img src="img/impressora.jpg" alt="30" heigth ="50px" width="50px" border="0" /></a>
        <br><br>
        <center><form name = "form1" method= "post" action= "index.php">
        <input class="btn btn-red" type="submit" value="Voltar"/>
        <br><br>
        </center>
        </head>
        </html>';
            
        exit;
    } else {
        echo "<html><center><h1><font face='Arial' color='black'>Lancamento Efetuados em :$dataa Loja:$usuario </font></h1>
             </center></html>";
        echo "<table border='2' width='100%' bgcolor=#F5F6CE >";
        echo "<tr><td><font size=3><strong>Id</strong></font></td>"."<td><font color=\"black\" size=3><strong>Descricao
             </strong></font></td>"."<td><font color=\"black\" size=3><strong>Descricao</strong></font></td>"."<td><font 
             color=\"black\" size=3><strong>Valor</strong></font></td>"."</tr>";
        $tt = 0.00;
        $exsql = pg_query($conrc ,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $valor = $row['cvalordebitohistorico'];
            if ($valor > 0) {
                $tt += $valor;
                echo "<td>".$row['idhistorico']."</td>\n";
                echo "<td>".$row['cnomefavorecido']."</td>\n";
                echo "<td>".$row['cdescricaohistorico']."</td>\n";                
                echo "<td>".number_format($valor,2,",",".")."</td>\n";
                echo "</tr>\n";
            }            
        }
        echo "<td>".'1'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'STONE'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'2'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'SENFF'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'3'."</td>\n";
        echo "<td>".'CARTAO'."</td>\n";
        echo "<td>".'TIDAS'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'4'."</td>\n";
        echo "<td>".'RECEBIMENTO'."</td>\n";
        echo "<td>".'TIDAS'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td>".'5'."</td>\n";
        echo "<td>".'RECEBIMENTO'."</td>\n";
        echo "<td>".'STONE'."</td>\n";
        echo "<td>".'R$'."</td>\n";
        echo "</tr>\n";
        echo "<td><font size=4><strong>".'TT'."</strong></font></td>\n";
        echo "<td><font size=4><strong>".""."</strong></font></td>\n";
        echo "<td><font size=4><strong>".""."</strong></font></td>\n";
        echo "<td><font size=4><strong>".number_format($tt,2,",",".")."</strong></font></td>\n";
        echo "</table>";
        echo "<br><br>";
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        <center>
        <title>ViaBrasil.bay</title>
        <link rel="stylesheet" href="css/style.css"></link>
        <a title="Imprimir" href="javascript:window.print()"><img src="img/impressora.jpg" alt="30" heigth ="50px" width="50px" border="0" /></a>
        <br><br>
        <center><form name = "form1" method= "post" action= "index.php">
        <input class="btn btn-red" type="submit" value="Voltar"/>        
        <br><br>
        </center>
        </head>
        </html>';      
    }    
}
if ($tipo == 'N') {
    $usuario = $_POST['login'];
    if ($usuario == null) {
        session_destroy();
        echo "<script>alert('Usuario invalido');</script>";
        echo $voltalogin;
        exit;
    }
    $usuario = strtoupper($usuario);
    $senha = $_POST['senha'];
    if ($senha == null) {
        session_destroy();
        echo "<script>alert('Senha invalida');</script>";
        echo $voltalogin;
        exit;
    }
    $sql = "select *from result where login = '$usuario' and senha = '$senha'";
    $exsql = pg_query($conrc ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $usuario  = $resulsql['login'];
    if ($usuario == null) {
        session_destroy();
        echo "<script>alert('Usuario ou Senha Invalidos');</script>";
        echo $voltalogin;
        exit;
    } else {
        $_SESSION['usuario'] = $usuario;
        header("Location: http://192.168.13.2:8080/result/result2.php");        
    }    
}
if ($tipo == 'L') {
    $login = $_POST['logina'];
    $login = strtoupper($login);
    if ($login == null) {
        session_destroy();
        echo "<script>alert('Login Invalido');</script>";
        echo $voltalogin;
    }
    $senha = $_POST['senhaa'];
    if ($senha == null) {
        session_destroy();
        echo "<script>alert('Senha Invalida');</script>";
        echo $voltalogin;
    }
    $base = $_POST['base'];
    if ($base == 'C') {
        $con = $conrc;
    } elseif ($base == 'V') {
        $con = $conrv;
    } elseif ($base == 'L') {
        $con = $conrl;
    }    
    $data = $_POST['dataa'];
    if ($data == null) {
        $data = $dia;        
    }
    $_SESSION['data'] = $data;
    $sql = "select *from parametros where cnomope ilike '%$login%' and csenhausuario ilike '%$senha%'"; 
    $exsql = pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $codusu  = $resulsql['cusuariocod'];
    if ($codusu == null) {
        session_destroy();
        echo "<script>alert('Usuario ou Senha Invalidos');</script>";
        echo $voltalogin;
        exit;
    } else {
        $_SESSION['login'] = $login;
        $_SESSION['codlogin'] = $codusu;
        echo "<script>alert('Bem Vindo $login !' );</script>";
    }
    $dataa = implode("/",array_reverse(explode("-",$data)));
    if ($base == 'C') {
        $servidor = 'C';
        echo "<html><center><h1><font face='Arial' color='black'>Via Brasil/Civegui: $dataa </font></h1></center></html>";
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (1,2) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j1 = $resulsql['juro'];
        $p1 = $resulsql['prestacoes'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atj1 = $resulsql['juro'];
        $atp1 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (3,4) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j3 = $resulsql['juro'];
        $p3 = $resulsql['prestacoes'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atj3 = $resulsql['juro'];
        $atp3 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (5,6) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j5 = $resulsql['juro'];
        $p5 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (7,8) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j7 = $resulsql['juro'];
        $p7 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (9,10) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j9 = $resulsql['juro'];
        $p9 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (11,12) and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j11 = $resulsql['juro'];
        $p11 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 12 and  cdpadupli = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $jo = $resulsql['juro'];
        $po = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli  > 4 and  cdpadupli = '$data'";
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atjo = $resulsql['juro'];
        $atpo = $resulsql['prestacoes'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (1,2) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e1 = $resulsql['entradas'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ate1 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (3,4) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e3 = $resulsql['entradas'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ate3 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (5,6) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e5 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (7,8) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e7 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (9,10) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e9 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (11,12) and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e11 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas > 12 and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $eo = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas > 4 and cemisaidas = '$data'";
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ateo = $resulsql['entradas'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (1,2) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a1 = $resulsql['avista'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ata1 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (3,4) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a3 = $resulsql['avista'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ata3 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (5,6) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a5 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (7,8) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a7 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (9,10) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a9 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas in (11,12) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a11 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas > 12 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ao = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
               where caviaprsaidas = 'V' and cempresasaidas > 4 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atao = $resulsql['avista'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0' 
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (1,2 ) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d1 = $resulsql['trocas'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atd1 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (3,4) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d3 = $resulsql['trocas'];
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atd3 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (5,6) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d5 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (7,8) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d7 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (9,10) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d9 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (11,12) ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d11 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 12 ";
        $exsql = pg_query($congc,$sql);
        $resulsql = pg_fetch_array($exsql);
        $do = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
               and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 4 ";
        $exsql = pg_query($congj,$sql);
        $resulsql = pg_fetch_array($exsql);
        $atdo = $resulsql['trocas'];
        echo "<br><br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Devolucoes</td>"."</tr>";
        echo "<td>".'Rosane'."</td>\n";
        if ($j1 < 0) {
            $j1 = 0;
        }
        $loja1 = $e1+$a1+$p1-$j1;
        if ($loja1 < 0 ) {
            $j1 += $loja1;
            $loja1 = 0.00;
        }
        $_SESSION['loja1'] = $loja1;
        $_SESSION['juro1'] = $j1;
        $_SESSION['dev1'] = $d1;
        echo "<td>".number_format($loja1,2,",",".")."</td>\n";
        echo "<td>".number_format($j1,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d1,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Lucelia'."</td>\n";
        if ($j3 < 0) {
            $j3 = 0;
        }
        $loja3 = $e3+$a3+$p3-$j3;
        if ($loja3 < 0 ) {
            $j3 += $loja3;
            $loja3 = 0.00;
        }
        $_SESSION['loja3'] = $loja3;
        $_SESSION['juro3'] = $j3;
        $_SESSION['dev3'] = $d3;
        echo "<td>".number_format($loja3,2,",",".")."</td>\n";
        echo "<td>".number_format($j3,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d3,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Vila'."</td>\n";
        if ($j5 < 0) {
            $j5 = 0;
        }
        $loja5 = $e5+$a5+$p5-$j5;
        if ($loja5 < 0 ) {
            $j5 += $loja5;
            $loja5 = 0.00;
        }
        $_SESSION['loja5'] = $loja5;
        $_SESSION['juro5'] = $j5;
        $_SESSION['dev5'] = $d5;
        echo "<td>".number_format($loja5,2,",",".")."</td>\n";
        echo "<td>".number_format($j5,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d5,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Adrieli'."</td>\n";
        if ($j7 < 0) {
            $j7 = 0;
        }
        $loja7 = $e7+$a7+$p7-$j7;
        if ($loja7 < 0 ) {
            $j7 += $loja7;
            $loja7 = 0.00;
        }
        $_SESSION['loja7'] = $loja7;
        $_SESSION['juro7'] = $j7;
        $_SESSION['dev7'] = $d7;
        echo "<td>".number_format($loja7,2,",",".")."</td>\n";
        echo "<td>".number_format($j7,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d7,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Antigo Apolo'."</td>\n";
        if ($j9 < 0) {
            $j9 = 0;
        }
        $loja9 = $e9+$a9+$p9-$j9;
        if ($loja9 < 0 ) {
            $j9 += $loja9;
            $loja9 = 0.00;
        }
        $_SESSION['loja9'] = $loja9;
        $_SESSION['juro9'] = $j9;
        $_SESSION['dev9'] = $d9;
        echo "<td>".number_format($loja9,2,",",".")."</td>\n";
        echo "<td>".number_format($j9,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d9,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Shop Masp Cdr'."</td>\n";
        if ($j11 < 0) {
            $j11 = 0;
        }
        $loja11 = $e11+$a11+$p11-$j11;
        if ($loja11 < 0 ) {
            $j11 += $loja11;
            $loja11 = 0.00;
        }
        $_SESSION['loja11'] = $loja11;
        $_SESSION['juro11'] = $j11;
        $_SESSION['dev11'] = $d11;
        echo "<td>".number_format($loja11,2,",",".")."</td>\n";
        echo "<td>".number_format($j11,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d11,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Outras Empresa ViaBrasil'."</td>\n";
        if ($jo < 0) {
            $jo = 0;
        }        
        $lojao=$eo+$ao+$po-$jo;
        if ($lojao < 0 ) {
            $jo += $lojao;
            $lojao = 0.00;
        }
        echo "<td>".number_format($lojao,2,",",".")."</td>\n";
        echo "<td>".number_format($jo,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($do,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Mayara'."</td>\n";
        if ($atj1 < 0) {
            $atj1 = 0;
        }
        $atloja1=$ate1+$ata1+$atp1-$atj1;
        if ($atloja1 < 0 ) {
            $atj1 += $atloja1;
            $atloja1 = 0.00;
        }
        $_SESSION['atloja1'] = $atloja1;
        $_SESSION['atjuro1'] = $atj1;
        $_SESSION['atdev1'] = $atd1;
        echo "<td>".number_format($atloja1,2,",",".")."</td>\n";
        echo "<td>".number_format($atj1,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($atd1,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Josi'."</td>\n";
        if ($atj3 < 0) {
            $atj3 = 0;
        }
        $atloja3=$ate3+$ata3+$atp3-$atj3;        
        if ($atloja3 < 0 ) {
            $atj3 += $atloja3;
            $atloja3 = 0.00;
        }
        $_SESSION['atloja3'] = $atloja3;
        $_SESSION['atjuro3'] = $atj3;
        $_SESSION['atdev3'] = $atd3;
        echo "<td>".number_format($atloja3,2,",",".")."</td>\n";
        echo "<td>".number_format($atj3,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($atd3,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Outras empresas Civegui'."</td>\n";
        if ($atjo < 0) {
            $atjo = 0;
        }
        $atlojao=$ateo+$atao+$atpo-$atjo;
        $atloja1=$ate1+$ata1+$atp1-$atj1;
        if ($atlojao < 0 ) {
            $atjo += $atlojao;
            $atlojao = 0.00;
        }
        echo "<td>".number_format($atlojao,2,",",".")."</td>\n";
        echo "<td>".number_format($atjo,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($atdo,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'TT'."</td>\n";
        $tt = $loja1+$loja3+$loja5+$loja7+$loja9+$loja11+$lojao+$atloja1+$atloja3+$atlojao;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $j1+$j3+$j5+$j7+$j9+$j11+$jo+$atj1+$atj3+$atjo;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $d1+$d5+$d3+$d7+$do+$d9+$d11+$atd1+$atd3+$atdo;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "</table>";
        echo "<br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";
        $sql = "select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas where i_asa_codigo_tna <> 86 and cclisaidas in 
               (39498,41238,43575,30702) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') 
                and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";     
        $exsql = pg_query($congc,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $emp = $row['cempresasaidas'];
            $valor = $row['sum'];
            $cliente = $row['cclisaidas'];
            if ($cliente == '30702') {
                $destido = 'Cesar';
            } elseif ($cliente == '39498') {
                $destido = 'Nadia';
            } elseif ($cliente == '41238') {
                $destido ='Cleusa';
            } elseif ($cliente == '43575') {
                $destido = 'Shop Masp Videira';
            }           
            if ($emp == 1 or $emp == 2) {
                $loja = 'Rosane';
            } elseif ($emp == 3 or $emp == 4) {
                $loja = 'Lucelia';
            } elseif ($emp == 5 or $emp == 6) {
                $loja = 'Vila';
            } elseif ($emp == 7 or $emp == 8) {
                $loja = 'Adrieli';
            } elseif ($emp == 9 or $emp == 10) {
                $loja = 'Apolo (Antigo)';
            } elseif ($emp == 11 or $emp == 12) {
                $loja = 'Shop Masp (Antigo)';
            } elseif ($emp > 12) {
                $loja = 'Outras Empresas';
            }
            if ($loja == 'Rosane') {
                if ($cliente == '30702') {
                    $aa1 = $valor;
                    $_SESSION['aa1'] = $aa1;
                } elseif ($cliente == '39498') {
                    $bb1 = $valor;
                    $_SESSION['bb1'] = $bb1;
                } elseif ($cliente == '41238') {
                    $cc1 = $valor;
                    $_SESSION['cc1'] = $cc1;
                } elseif ($cliente == '43575') {
                    $dd1 = $valor;
                    $_SESSION['tdd1'] = $dd1;
                }
            } elseif ($loja == 'Lucelia' ) {
                if ($cliente == '30702') {
                    $aa3 = $valor;
                    $_SESSION['aa3'] = $aa3;
                } elseif ($cliente == '39498') {
                    $bb3 = $valor;
                    $_SESSION['bb3'] = $bb3;
                } elseif ($cliente == '41238') {
                    $cc3 = $valor;
                    $_SESSION['cc3'] = $cc3;
                } elseif ($cliente == '43575') {
                    $dd3 = $valor;
                    $_SESSION['dd3'] = $dd3;
                }
            } elseif ($loja == 'Vila' ) {
                if ($cliente == '30702') {
                    $aa5 = $valor;
                    $_SESSION['aa5'] = $aa5;
                } elseif ($cliente == '39498') {
                    $bb5 = $valor;
                    $_SESSION['bb5'] = $bb5;
                } elseif ($cliente == '41238') {
                    $cc5 = $valor;
                    $_SESSION['cc5'] = $cc5;
                } elseif ($cliente == '43575') {
                    $dd5 = $valor;
                    $_SESSION['dd5'] = $dd5;
                }
            }  elseif ($loja == 'Adrieli' ) {
                if ($cliente == '30702') {
                    $aa7 = $valor;
                    $_SESSION['aa7'] = $aa7;
                } elseif ($cliente == '39498') {
                    $bb7 = $valor;
                    $_SESSION['bb7'] = $bb7;
                } elseif ($cliente == '41238') {
                    $cc7 = $valor;
                    $_SESSION['cc7'] = $cc7;
                } elseif ($cliente == '43575') {
                    $dd7 = $valor;
                    $_SESSION['dd7'] = $dd7;
                }
            } 
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".number_format($valor,2,",",".")."</td>\n";
            echo "</tr>";
        }        
        $sql = "select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas where i_asa_codigo_tna <> 20 and cclisaidas in 
               (39498,41238,43575,30702) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405') 
                and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas";        
        $exsql = pg_query($congj,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $emp = $row['cempresasaidas'];
            $valor = $row['sum'];
            $cliente = $row['cclisaidas'];
            if ($cliente == '30702') {
                $destido = 'Cesar';
            } elseif ($cliente == '39498') {
                $destido = 'Nadia';
            } elseif ($cliente == '41238') {
                $destido ='Cleusa';
            } elseif ($cliente == '43575') {
                $destido = 'Shop Masp Videira';
            }            
            if ($emp == 1 or $emp == 2) {
                $loja = 'Mayara';
            } elseif ($emp == 3 or $emp == 4) {
                $loja='Josi';
            } elseif ($emp > 4 ) {
                $loja='Outras empresas';
            } 
            if ($loja == 'Mayara') {
                if ($cliente == '30702') {
                    $ataa1 = $valor;
                    $_SESSION['ataa1'] = $ataa1;
                } elseif ($cliente == '39498') {
                    $atbb1 = $valor;
                    $_SESSION['atbb1'] = $atbb1;
                } elseif ($cliente == '41238') {
                    $atcc1 = $valor;
                    $_SESSION['atcc1'] = $atcc1;
                } elseif ($cliente == '43575') {
                    $atdd1 = $valor;
                    $_SESSION['atdd1'] = $atdd1;
                }
            } elseif ($loja == 'Josi' ) {
                if ($cliente == '30702') {
                    $ataa3 = $valor;
                    $_SESSION['ataa3'] = $ataa3;
                } elseif ($cliente == '39498') {
                    $atbb3 = $valor;
                    $_SESSION['atbb3'] = $atbb3;
                } elseif ($cliente == '41238') {
                    $atcc3 = $valor;
                    $_SESSION['atcc3'] = $atcc3;
                } elseif ($cliente == '43575') {
                    $atdd3 = $valor;
                    $_SESSION['atdd3'] = $atdd3;
                }
            } 
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".number_format($valor,2,",",".")."</td>\n";
            echo "</tr>";
        }        
        echo "</table>";
        echo "<br>";                   
        $sql = "select cusuariocod,cnomope from parametros order by cnomope";
        $exsql = pg_query($congc,$sql);
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Cod.Usuario</td>"."<td>Usuario</td>"."<td>Faturamento</td>"."</tr>";
        while($row = pg_fetch_assoc($exsql)){
            $codu = $row['cusuariocod'];
            $usu = $row['cnomope'];
            $com = "select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
            $excom = pg_query($congc,$com);
            $rescom = pg_fetch_array($excom);
            $prestu = $rescom['prestacao'];
            $com = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
                    where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
            $excom = pg_query($congc,$com);
            $rscom = pg_fetch_array($excom);
            $avstu = $rscom['avista'];
            $com = "select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
            $excom = pg_query($congc,$com);
            $rscom = pg_fetch_array($excom);
            $entrus = $rscom['entradas'];
            $fat = $prestu+$avstu+$entrus;
            if ($codu == 1) {
               $usu = 'IMPORTADOR';
            }
            if ($fat <> 0) {
                $fat = number_format($fat,2,",",".");
                echo "<td>".$codu."</td>\n";
                echo "<td>".$usu."</td>\n";
                echo "<td>".$fat."</td>\n";
                echo "</tr>";
            }                
        }
        echo "<td>"."BASE JOINVILE"."</td>\n";
        echo "<td>".''."</td>\n";
        echo "<td>".''."</td>\n";
        echo "</tr>";
        $exsql = pg_query($congj,$sql);
        while($row = pg_fetch_assoc($exsql)){
            $codu = $row['cusuariocod'];
            $usu = $row['cnomope'];
            $com = "select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
            $excom = pg_query($congj,$com);
            $rescom = pg_fetch_array($excom);
            $prestu = $rescom['prestacao'];
            $com = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
                    where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
            $excom = pg_query($congj,$com);
            $rscom = pg_fetch_array($excom);
            $avstu = $rscom['avista'];
            $com = "select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
            $excom = pg_query($congj,$com);
            $rscom = pg_fetch_array($excom);
            $entrus = $rscom['entradas'];
            $fat = $prestu+$avstu+$entrus;
            if ($fat <> 0) {
                $fat = number_format($fat,2,",",".");
                echo "<td>".$codu."</td>\n";
                echo "<td>".$usu."</td>\n";
                echo "<td>".$fat."</td>\n";
                echo "</tr>";
            }            
        }
        echo "</table>";
        echo "<br>";
        $_SESSION['servidor'] = $servidor;                        
    } elseif ($base == 'V'){        
        $servidor = 'V';
        echo "<html><center><h1><font face='Arial' color='black'>Videira:$dataa </font></h1></center></html>";
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (13,14) and  cdpadupli = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j13 = $resulsql['juro'];
        $p13 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (15,16) and  cdpadupli = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j15 = $resulsql['juro'];
        $p15 = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (17,18) and  cdpadupli = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j17 = $resulsql['juro'];
        $p17 = $resulsql['prestacoes'];        
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 18 and  cdpadupli = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $jov = $resulsql['juro'];
        $pov = $resulsql['prestacoes'];
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli < 13 and  cdpadupli = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $jov += $resulsql['juro'];
        $pov += $resulsql['prestacoes'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (13,14) and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e13 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (15,16) and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e15 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (17,18) and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e17 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas > 18 and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $eov = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas < 13 and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $eov += $resulsql['entradas'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas in (13,14) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a13 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas in (15,16) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a15 = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas in (17,18) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a17 = $resulsql['avista'];        
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas > 18 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $aov = $resulsql['avista'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas < 13 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $aov += $resulsql['avista'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (13,14) ";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d13 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (15,16) ";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d15 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (17,18) ";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d17 = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 18 ";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $dov = $resulsql['trocas'];
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas < 13 ";
        $exsql = pg_query($congv,$sql);
        $resulsql = pg_fetch_array($exsql);
        $dov  += $resulsql['trocas'];
        echo "<br><br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Devolucoes</td>"."</tr>";
        echo "<td>".'Nadia'."</td>\n";
        if ($j13 < 0) {
            $j13 = 0;
        }
        $loja13 = $e13+$a13+$p13-$j13;
        if ($loja13 < 0 ) {
            $j13 += $loja13;
            $loja13 = 0.00;
        }
        $_SESSION['loja13'] = $loja13;
        $_SESSION['juro13'] = $j13;
        $_SESSION['dev13'] = $d13;
        echo "<td>".number_format($loja13,2,",",".")."</td>\n";
        echo "<td>".number_format($j13,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d13,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Cleusa'."</td>\n";
        if ($j15 < 0) {
            $j15 = 0;
        }
        $loja15 = $e15+$a15+$p15-$j15;
        if ($loja15 < 0 ) {
            $j15 += $loja15;
            $loja15 = 0.00;
        }
        $_SESSION['loja15'] = $loja15;
        $_SESSION['juro15'] = $j15;
        $_SESSION['dev15'] = $d15;
        echo "<td>".number_format($loja15,2,",",".")."</td>\n";
        echo "<td>".number_format($j15,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d15,2,",",".")."</td>\n";
        echo "</tr>\n";
        echo "<td>".'Shop Videira'."</td>\n";
        if ($j17 < 0) {
            $j17 = 0;
        }
        $loja17 = $e17+$a17+$p17-$j17;
        if ($loja17 < 0 ) {
            $j17 += $loja17;
            $loja17 = 0.00;
        }
        $_SESSION['loja17'] = $loja17;
        $_SESSION['juro17'] = $j17;
        $_SESSION['dev17'] = $d17;
        echo "<td>".number_format($loja17,2,",",".")."</td>\n";
        echo "<td>".number_format($j17,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d17,2,",",".")."</td>\n";
        echo "</tr>\n";        
        echo "<td>".'Outras Empresa Videira'."</td>\n";
        if ($jov < 0) {
            $jov = 0;
        }
        $lojaov = $eov+$aov+$pov-$jov;
        echo "<td>".number_format($lojaov,2,",",".")."</td>\n";
        echo "<td>".number_format($jov,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($dov,2,",",".")."</td>\n";
        echo "</tr>\n";        
        echo "<td>".'TT'."</td>\n";
        $tt = $loja13+$loja15+$loja17+$lojaov;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $j13+$j15+$j17+$jov;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $d13+$d15+$d17+$dov;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        echo "</table>";
        echo "<br><br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";
        $sql = "select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas where i_asa_codigo_tna <> 75 and cclisaidas in
               (17675,4732,17262,20517,41239,46028,30702) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405')
               and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas"; 
        $exsql = pg_query($congv,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $emp = $row['cempresasaidas'];
            $valor = $row['sum'];
            $cliente = $row['cclisaidas'];
            if ($cliente == '17675') {
                $destido = 'Lucelia';
            } elseif ($cliente == '4732') {
                $destido ='Rosane';
            } elseif ($cliente == '17262') {
                $destido = 'Vila';
            } elseif ($cliente == '20517') {
                $destido = 'Adrieli';
            } elseif ($cliente == '41239') {
                $destido = 'Mayara';
            } elseif ($cliente == '46028') {
                $destido = 'Josi';
            } elseif ($cliente == '30702') {
                $destido = 'Cesar';
            }            
            if ($emp == 13 or $emp == 14) {
                $loja = 'Nadia';
            } elseif ($emp == 15 or $emp == 16) {
                $loja='Cleusa';
            } elseif ($emp == 17 or $emp == 18) {
                $loja='Shop Videira';
            } elseif ($emp > 18 or $emp < 12) {
                $loja = 'Outras Empresas';
            }
            if ($loja == 'Nadia') {
                if ($cliente == '17675') {
                    $aa13 = $valor;
                    $_SESSION['aa13'] = $aa13;
                } elseif ($cliente == '4732') {
                    $bb13 = $valor;
                    $_SESSION['bb13'] = $bb13;
                } elseif ($cliente == '17262') {
                    $cc13 = $valor;
                    $_SESSION['cc13'] = $cc13;
                } elseif ($cliente == '20517') {
                    $dd13 = $valor;
                    $_SESSION['dd13'] = $dd13;
                } elseif ($cliente == '41239') {
                    $ee13 = $valor;
                    $_SESSION['ee13'] = $ee13;
                } elseif ($cliente == '46028') {
                    $ff13 = $valor;
                    $_SESSION['ff13'] = $ff13;
                } elseif ($destido == '30702') {
                    $gg13 = $valor;
                    $_SESSION['gg13'] = $gg13;
                } 
            } elseif ($loja == 'Cleusa'){
                if ($cliente == '17675') {
                    $aa15 = $valor;
                    $_SESSION['aa15'] = $aa15;
                } elseif ($cliente == '4732') {
                    $bb15 = $valor;
                    $_SESSION['bb15'] = $bb15;
                } elseif ($cliente == '17262') {
                    $cc15 = $valor;
                    $_SESSION['cc15'] = $cc15;
                } elseif ($cliente == '20517') {
                    $dd15 = $valor;
                    $_SESSION['dd15'] = $dd15;
                } elseif ($cliente == '41239') {
                    $ee15 = $valor;
                    $_SESSION['ee15'] = $ee15;
                } elseif ($cliente == '46028') {
                    $ff15 = $valor;
                    $_SESSION['ff15'] = $ff15;
                } elseif ($destido == '30702') {
                    $gg15 = $valor;
                    $_SESSION['gg15'] = $gg15;
                } 
            } elseif ($loja == 'Shop Videira'){
                if ($cliente == '17675') {
                    $aa17 = $valor;
                    $_SESSION['aa17'] = $aa17;
                } elseif ($cliente == '4732') {
                    $bb17 = $valor;
                    $_SESSION['bb17'] = $bb17;
                } elseif ($cliente == '17262') {
                    $cc17 = $valor;
                    $_SESSION['cc17'] = $cc17;
                } elseif ($cliente == '20517') {
                    $dd17 = $valor;
                    $_SESSION['dd17'] = $dd17;
                } elseif ($cliente == '41239') {
                    $ee17 = $valor;
                    $_SESSION['ee17'] = $ee17;
                } elseif ($cliente == '46028') {
                    $ff18 = $valor;
                    $_SESSION['ff18'] = $ff18;
                } elseif ($destido == '30702') {
                    $gg18 = $valor;
                    $_SESSION['gg18'] = $gg18;
                }
            }
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".number_format($valor,2,",",".")."</td>\n";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        $sql = "select cusuariocod,cnomope from parametros order by cnomope";
        $exsql = pg_query($congv,$sql);
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Cod.Usuario</td>"."<td>Usuario</td>"."<td>Faturamento</td>"."</tr>";
        while($row = pg_fetch_assoc($exsql)){
            $codu = $row['cusuariocod'];
            $usu = $row['cnomope'];
            $com = "select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
            $excom = pg_query($congv,$com);
            $rescom = pg_fetch_array($excom);
            $prestu = $rescom['prestacao'];
            $com = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
                where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
            $excom = pg_query($congv,$com);
            $rscom = pg_fetch_array($excom);
            $avstu = $rscom['avista'];
            $com = "select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
            $excom = pg_query($congv,$com);
            $rscom = pg_fetch_array($excom);
            $entrus = $rscom['entradas'];
            $fat = $prestu+$avstu+$entrus;
            if ($fat <> 0) {
                $fat = number_format($fat,2,",",".");
                echo "<td>".$codu."</td>\n";
                echo "<td>".$usu."</td>\n";
                echo "<td>".$fat."</td>\n";
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br>";
        $_SESSION['servidor'] = $servidor;
    } elseif ( $base == 'L' ) {
        $servidor = 'L';
        echo "<html><center><h1><font face='Arial' color='black'>Lages: $dataa </font></h1></center></html>";
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli in (1,2) and  cdpadupli = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $j1 = $resulsql['juro'];
        $p1 = $resulsql['prestacoes'];                
        $sql = "select ((sum( cjurdupli)) -(sum(cdesdupli))) as juro, (sum(cvpadupli)) as prestacoes from asduplicatas where cempdupli > 2 and  cdpadupli = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $jo = $resulsql['juro'];
        $po = $resulsql['prestacoes'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas in (1,2) and cemisaidas = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $e1 = $resulsql['entradas'];
        $sql = "select (sum(centsaidas)) entradas from asaidas where cempresasaidas > 2 and cemisaidas = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $eo = $resulsql['entradas'];
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas in (1,2) and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $a1 = $resulsql['avista'];                
        $sql = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
           where caviaprsaidas = 'V' and cempresasaidas > 2 and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data'";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $ao = $resulsql['avista'];        
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas in (1,2) ";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $d1 = $resulsql['trocas'];        
        $sql = "select sum(ctotsaidas) as trocas from asaidas inner join tnaturezaoperacao on i_tna_codigo_operacao = i_asa_codigo_tna where i_tna_valida_comissao = '0'
           and ctessaidas='E' and cemisaidas='$data' and cempresasaidas > 2 ";
        $exsql = pg_query($congl,$sql);
        $resulsql = pg_fetch_array($exsql);
        $do = $resulsql['trocas'];        
        echo "<br><br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>TT Dinheiro</td>"."<td>Juros</td>"."<td>Devolucoes</td>"."</tr>";
        echo "<td>".'Cesar'."</td>\n";
        if ($j1 < 0) {
            $j1 = 0;
        }
        $loja1 = $e1+$a1+$p1-$j1;
        if ($loja1 < 0 ) {
            $j1 += $loja1;
            $loja1 = 0.00;
        }
        $_SESSION['loja1'] = $loja1;
        $_SESSION['juro1'] = $j1;
        $_SESSION['dev1'] = $d1;
        echo "<td>".number_format($loja1,2,",",".")."</td>\n";
        echo "<td>".number_format($j1,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($d1,2,",",".")."</td>\n";
        echo "</tr>\n";                
        echo "<td>".'Outras Empresa Lages'."</td>\n";
        if ($jo < 0) {
            $jo = 0;
        }
        $lojao = $eo+$ao+$po-$jo;
        echo "<td>".number_format($lojao,2,",",".")."</td>\n";
        echo "<td>".number_format($jo,2,",",".")."</td>\n";
        echo "<td><font color=\"red\">".number_format($do,2,",",".")."</td>\n";
        echo "</tr>\n";        
        echo "<td>".'TT'."</td>\n";
        $tt = $loja1+$lojao;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $j1+$jo;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        $tt = $d1+$do;
        echo "<td>".number_format($tt,2,",",".")."</td>\n";
        echo "</table>";
        echo "<br><br>";
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Loja</td>"."<td>Destino</td>"."<td>Valor</td>"."</tr>";
        $sql = "select sum(ctotsaidas),cempresasaidas,cclisaidas from asaidas where i_asa_codigo_tna <> 34 and cclisaidas in
               (17675,4732,17262,20517,39498,41238,43575,41239,46028,64197) and  cnatsaidas in ('5.102','6.102','1.202','2.202','5.114','6.114','5.405','6.405')
               and cemisaidas = '$data' GROUP BY cempresasaidas,cclisaidas order by cempresasaidas,cclisaidas"; 
        $exsql = pg_query($congl,$sql);
        while ($row = pg_fetch_assoc($exsql)){
            $emp = $row['cempresasaidas'];
            $valor = $row['sum'];
            $cliente = $row['cclisaidas'];
            if ($cliente == '17675') {
                $destido = 'Lucelia';
            } elseif ($cliente == '4732') {
                $destido ='Rosane';
            } elseif ($cliente == '17262') {
                $destido = 'Vila';
            } elseif ($cliente == '20517') {
                $destido = 'Adrieli';
            }  elseif ($cliente == '41239') {
                $destido = 'Mayara';
            }  elseif ($cliente == '46028') {
                $destido = 'Josi';
            }  elseif ($cliente == '39498') {
                $destido = 'Nadia';
            } elseif ($cliente == '41238') {
                $destido = 'Cleusa';
            } elseif ($cliente == '43575') {
                $destido = 'Shop Videira';
            } elseif ($cliente == '64197') {
                $destido = 'Feirao Emp22';
            } 
            if ($emp == 1 or $emp == 2) {
                $loja = 'Cesar';
            } elseif ($emp > 2 ) {
                $loja = 'Outras Empresas';
            }
            if ($loja == 'Cesar') { 
                if ($cliente == '17675') {
                    $aa1 = $valor;
                    $_SESSION['aa1'] = $aa1;
                } elseif ($cliente == '4732') {
                    $bb1 = $valor;
                    $_SESSION['bb1'] = $bb1;
                } elseif ($cliente == '17262') {
                    $cc1 = $valor;
                    $_SESSION['ccl1'] = $cc1;
                } elseif ($cliente == '20517') {
                    $dd1 = $valor;
                    $_SESSION['dd1'] = $dd1;
                } elseif ($cliente == '41239') {
                    $ee1 = $valor;
                    $_SESSION['ee1'] = $ee1; 
                } elseif ($cliente == '46028') {
                    $ff1 = $valor;
                    $_SESSION['ff1'] = $ff1;
                } elseif ($cliente == '39498') {
                    $gg1 = $valor;
                    $_SESSION['gg1'] = $gg1;
                } elseif ($cliente == '41238') {
                    $hh1 = $valor;
                    $_SESSION['hh1'] = $hh1;
                } elseif ($cliente == '43575') {
                    $ii1 = $valor;
                    $_SESSION['ii1'] = $ii1;
                } 
            } 
            echo "<td>".$loja."</td>\n";
            echo "<td>".$destido."</td>\n";
            echo "<td>"."R$".number_format($valor,2,",",".")."</td>\n";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        $sql = "select cusuariocod,cnomope from parametros order by cnomope";
        $exsql = pg_query($congl,$sql);
        echo "<table border='2' width='100%' bgcolor=#E3F6CE >";
        echo "<tr><td>Cod.Usuario</td>"."<td>Usuario</td>"."<td>Faturamento</td>"."</tr>";
        while($row = pg_fetch_assoc($exsql)){
            $codu = $row['cusuariocod'];
            $usu = $row['cnomope'];
            $com = "select (sum(cvpadupli)) prestacao from asduplicatas where cdpadupli = '$data' and copadupli=$codu ";
            $excom = pg_query($congl,$com);
            $rescom = pg_fetch_array($excom);
            $prestu = $rescom['prestacao'];
            $com = "select (sum (ctotsaidas)) avista from asaidas inner join tnaturezaoperacao on i_asa_codigo_tna=i_tna_codigo_operacao
                where caviaprsaidas = 'V'  and ctranatureza='SIM' and ctessaidas='S' and cemisaidas = '$data' and copcsaidas = $codu ";
            $excom = pg_query($congl,$com);
            $rscom = pg_fetch_array($excom);
            $avstu = $rscom['avista'];
            $com = "select (sum(centsaidas)) entradas from asaidas where copcsaidas = $codu  and cemisaidas = '$data'";
            $excom = pg_query($congl,$com);
            $rscom = pg_fetch_array($excom);
            $entrus = $rscom['entradas'];
            $fat = $prestu+$avstu+$entrus;
            if ($fat <> 0) {
                $fat = number_format($fat,2,",",".");
                echo "<td>".$codu."</td>\n";
                echo "<td>".$usu."</td>\n";
                echo "<td>".$fat."</td>\n";
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br>";
        $_SESSION['servidor'] = $servidor;
    }
    ?>
    <center>
    <form method="POST" action="automatico.php">
    <input name= "bt"  class="btn btn-green" type="submit" value="AUTOMATICO"/>
    <input name= "bt"  class="btn btn-red"   type="submit" value="FECHAR" />
    <br><br>
    </center>
    <?php
    header('Content-Type: text/html; charset=utf-8');        

}
?>