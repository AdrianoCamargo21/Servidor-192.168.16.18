<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.10.191/Desenvolver/conftransferencia.html';</script>";
$time=date('H:i:s');
$dia= date('Y-m-d');
set_time_limit(90000);
$dti=$_POST['dtin'];
if ($dti == '' ){
    echo "<script>alert('Data Inicial não poder ser em branco');</script>";
    echo $voltalogin;
    exit;
}
$dtf=$_POST['dtif'];
if ($dtf == '' ){
    echo "<script>alert('Data Final não poder ser em branco');</script>";
    echo $voltalogin;
    exit;
}
$baseo=$_POST['sistema'];
if ($baseo=='1'){
    if(!@($cono=pg_connect ("host=192.168.16.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
}
if ($baseo=='2'){
    if(!@($cono=pg_connect ("host=192.168.16.190dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
}
if ($baseo=='3'){
    if(!@($cono=pg_connect ("host=192.168.16.190dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
}
if ($baseo=='4'){
    if(!@($cono=pg_connect ("host=192.168.16.190dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
}
$erro='0';
$sql="select i_aen_ide_saida_trans,cforentradas,cnfientradas,cemientradas from aentradas where cemientradas >= '$dti' and cemientradas <= '$dtf'  and i_aen_ide_saida_trans <> '0' order by i_aen_ide_saida_trans";
$exsql=pg_query($cono,$sql);
while($row = pg_fetch_assoc($exsql)){
    $forn=$row['cforentradas'];
    $id=$row['i_aen_ide_saida_trans'];
    $nfe=$row['cnfientradas'];
    $emis=$row['cemientradas'];    
    if ($baseo==4) {    
        if ($forn==14 or $forn==76 or $forn==15 or $forn==16 or $forn==110 ){
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
        } 
        if ($forn==17 or $forn==97 ) {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
        }
        if ($forn==111) {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
        }
    }
    if ($baseo=='1') {
        if ($forn== '7' or $forn== '749' or $forn== '691' or $forn== '741' or $forn== '801' or $forn== '1778'  ){
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
        }
        if ($forn== '2260' or $forn== '2349' or $forn== '2549'  ) {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
        }
        if ($forn== '2326') {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
        }
        if ($forn== '1602') {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
        }
    }
    if ($baseo==2) {
        if ($forn== '7' or $forn== '749' or $forn== '691' or $forn== '741' or $forn== '801' or $forn== '1778'  ){
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
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
        }
        if ($forn== '2204' or $forn== '2213' or $forn== '2294'  ) {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
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
        }
        if ($forn== '1602') {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Lages Data:$dia  Hora:$time </font></b></p>";
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
        }
        if ($forn== '2217') {
            if(!@($cond=pg_connect ("host=192.168.16.190dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
                echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Sem Comunicação Banco de Dados de Joinville Data:$dia  Hora:$time </font></b></p>";
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
        }
    }
    $com="select cidesaidas from asaidas where cidesaidas = $id ";    
    $excom= pg_query($cond,$com);
    $rscom= pg_fetch_array($excom);
    $idb=$rscom['cidesaidas'];    
    if ($idb == '') {
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!Nota Com Sáida Excluida Nfe:$nfe Emitida em:$emis Fornecedor:$forn </font></b></p>";
        $erro ++;
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css"></link>

<center><form name = "form1" method= "post" action= "conftransferencia.html"></center>
<center><input class="btn btn-green"  type="submit"  value="Voltar"></center>
</head>
</html>