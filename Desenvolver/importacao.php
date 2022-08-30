<?php header('Content-Type: text/html; charset=ISO-8859-1',true);?>
<?php
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/login.php';</script>";
$mensagemNfeCliente="<script>alert('Nota fiscal ou código de cliente inválidos');</script>";
$errotrollcdr="<script>alert('Não foi possivel conectar ao BD troll_cdr');</script>";
$errotrolvideira="<script>alert('Não foi possivel conectar ao BD troll_videira');</script>";
$errotroljoinville="<script>alert('Não foi possivel conectar ao BD troll_joinville');</script>";
$errotrolllages="<script>alert('Não foi possivel conectar ao BD troll_lages');</script>";
$errologin="<script>alert('Usuário invalido');</script>";
$errosenha="<script>alert('Senha onválida');</script>";
$mensagemLogin="<script>alert('Bem vindo');</script>";
$Inativar=$_POST['inativar'];
if ($Inativar == 'SELECIONAR'){ 
    $linha=$_POST['linha'];    
    if ($linha <= '0'){
        echo '<script>window.alert(\'Código da linha não poder ser vazio ou negativo \');</script>';
        echo "$voltalogin";
        exit;
    }    
    $linhaS=$_POST['linhaS'];
    $saldo= $_POST['saldo'];
    if ($saldo== ''){
        echo '<script>window.alert(\'Selecione uma opção\');</script>';
        echo "$voltalogin";
        exit;        
    }
    if ($saldo== 'T'){
        $comandoSaldo=("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Todos';
    }
    if ($saldo== 'S'){
        $comandoSaldo =("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') and cqtdproduto >= '1' group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Com Saldo';
    }
    if ($saldo== 'N'){
        $comandoSaldo =("select cgruporduto,cdesgrupo from aprodutos inner join tgrupo on ccodgrupo = cgruporduto where clinproduto in ('$linha') and cqtdproduto < '0' group by cgruporduto,cdesgrupo order by cgruporduto");
        $echo= 'Negativos';
    }
    if ($linhaS=='1'){
        $conex=pg_connect('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
        $comandolinha=pg_query($comandoSaldo);
        pg_close($conex);
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
		</head>
		</html>
		<?php
        echo "<b><font color=\"#FF0000\"> Sistema de Caçador Linha : '$linha' Situação: '$echo' </font></b>";
        echo '<br>';        
        while($grupo = pg_fetch_assoc($comandolinha)){            
        echo $grupo['cgruporduto'].'-'.$grupo['cdesgrupo'].'<br>';            
        }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><form name = "form1" method= "post" action= "login.php"></center>
        <center><input class="btn btn-green"  type="submit" value="Voltar"></center>
        </form>
        </head>
        </html>
        <?php
    }
    if ($linhaS=='2'){        
        $conex=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
        $comandolinha=pg_query($comandoSaldo);
        pg_close($conex);
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
		</head>
		</html>
		<?php
        echo "<b><font color=\"#FF0000\"> Sistema de Videira Linha : '$linha' Situação: '$echo' </font></b>";
        echo '<br>';
        while($grupo = pg_fetch_assoc($comandolinha)){  
            echo $grupo['cgruporduto'].'-'.$grupo['cdesgrupo'].'<br>';     
        }
        ?>
        <!DOCTYPE html>
 	    <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><form name = "form1" method= "post" action= "login.php"></center>
        <center><input class="btn btn-green"  type="submit" value="Voltar"></center>
        </form>
        </head>
        </html>
        <?php
    }
    if ($linhaS=='3'){ 
        $conex=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
        $comandolinha=pg_query($comandoSaldo);
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<b><font color=\"#FF0000\"> Sistema de joinville linha : '$linha' Situação: '$echo' </font></b>";
        echo '<br>';
        while($grupo = pg_fetch_assoc($comandolinha)){
        echo $grupo['cgruporduto'].'-'.$grupo['cdesgrupo'].'<br>';
        }
        ?>
        <!DOCTYPE html>
 	    <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><form name = "form1" method= "post" action= "login.php"></center>
        <center><input class="btn btn-green"  type="submit" value="Voltar"></center>
        </form>
        </head>
        </html>
        <?php
    }
    if ($linhaS=='4'){  
        $conex=pg_connect ('host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@');
        $comandolinha=pg_query($comandoSaldo);
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<b><font color=\"#FF0000\"> Sistema de lages linha : '$linhaS' Situação: '$echo' </font></b>";
        echo '<br>';
        while($grupo = pg_fetch_assoc($comandolinha)){
        echo $grupo['cgruporduto'].'-'.$grupo['cdesgrupo'].'<br>';    
        }
        ?>
        <!DOCTYPE html>
 	    <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><form name = "form1" method= "post" action= "login.php"></center>
        <center><input class="btn btn-green"  type="submit" value="Voltar"></center>
        </form>
        </head>
        </html>
        <?php
    }
    exit;                
}
if ($Inativar == 'CONFIRMA'){
    $inativarL =$Inativar=$_POST['inativarL']; 
    if ($inativarL == '1'){
        $conex=pg_connect ('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@');        
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        pg_close($conex);       
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		exit;
    }
    if ($inativarL == '2'){
        $conex=pg_connect('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@');       
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
		exit;
    }
    if ($inativarL == '3'){
        $conex=pg_connect ('host=192.168.12.3 dbname=troll port=5434 user=postgres password=ky$14gr@');        
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 75");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }        
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
        exit;
    }
    if ($inativarL == '4'){
        $conex=pg_connect ('host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@');
        $com=pg_query("select logar('COPIA',1,0);update aprodutos set csitproduto= '1' where csitproduto = 0 and clinproduto = 25");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }     
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Produtos Inativados Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php
        exit;        
    } 
}
if ($Inativar == 'Inclui'){
    $Parcela = $_POST['Parcela'];
    $CogidoCliente= $_POST['Codigo'];
    if ($CogidoCliente== ''){
        echo '<script>window.alert(\'Código do cliente não pode ser em branco \');</script>';
        echo "$voltalogin";
        exit;
    }
    if ($CogidoCliente <= 0 ){
        echo "<script>alert('Código de cliente não poder ser negativo ou igual a zero');</script>";
        echo "$voltalogin";
        exit;
    }
    $Nfe= $_POST['ClientNfe'];        
    if ($Nfe== ''){
        echo "<script>alert('Por favor insira o Nº da Nfe');</script>";
        echo "$voltalogin";
        exit;
    }  
    if ($Nfe <= 0 ){
        echo "<script>alert('Numero de NFE não pode ser negativo ou igual a zero');</script>";
        echo "$voltalogin";
        exit;
    } 
    $vencimento=$_POST['Vencimento'];  
    if ($vencimento == ''){
        echo "<script>alert('A data de vencimento hé obrigatória');</script>";
        echo "$voltalogin";
        exit;
    }        
    if ($Parcela == '1'){
        $conex=pg_connect ('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$Nfe' and cclidupli= '$CogidoCliente'");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        } 
        $Resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$Resulcomandoparcela['cidedupli'];
        if ($Resulcomandoparcela == '' ){
            pg_close($conex);
            echo "$mensagemNfeCliente";
            echo "$voltalogin";
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");   
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php        
        exit;
    }
    if ($Parcela == '2'){
        $conex=pg_connect ('host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$Nfe' and cclidupli= '$CogidoCliente'");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }         
        $Resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$Resulcomandoparcela['cidedupli'];
        if ($Resulcomandoparcela == '' ){
            echo "$mensagemNfeCliente";
            pg_close($conex);
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }        
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php 
		exit;
    }
    if ($Parcela == '3'){
        $conex=pg_connect ('host=192.168.12.3 dbname=troll port=5434 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$Nfe' and cclidupli= '$CogidoCliente'");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        $Resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$Resulcomandoparcela['cidedupli'];
        if ($Resulcomandoparcela == '' ){
            pg_close($conex);
            echo "$mensagemNfeCliente";
            echo "$voltalogin";            
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        pg_close($conex);
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php  
		exit;
    }
    if ($Parcela == '4'){
        $conex=pg_connect ('host=192.168.11.2 dbname=Troll port=5433 user=postgres password=ky$14gr@');
        $com=pg_query ("delete from asduplicatas2;select cidedupli from asduplicatas where cnotdupli = '$Nfe' and cclidupli= '$CogidoCliente'");
        if (!$com){
            pg_close($conex);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        } 
        $Resulcomandoparcela= pg_fetch_array($com);
        $cidecupli=$Resulcomandoparcela['cidedupli'];
        if ($Resulcomandoparcela == '' ){
            pg_close($conex);
            echo "$mensagemNfeCliente";
            echo "$voltalogin";
            exit;
        }
        $com=pg_query("insert into asduplicatas2 select *from asduplicatas where cidedupli = '$cidecupli';
        update asduplicatas2 set cidedupli = nextval('seque_asduplicatas'), cvprdupli= 0.01, cvendupli= '$vencimento',cjurdupli= '0.00',ccjudupli='0.00',cmuldupli='0.00',ccordupli='0.00',cdesdupli='0.00',cdpadupli=NULL,cvpadupli='0.00',ctpgdupli='',i_asd_ide_trans_fin=0;
        select logar('COPIA',1,0);insert into asduplicatas select *from asduplicatas2;delete from asduplicatas2");
        pg_close($conex);        
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="css/style.css"></link>
        <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
        </head>
        </html>
        <?php
        echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Parcela Incluida Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>    
		<link rel="stylesheet" href="css/style.css"></link>
		<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
		<center><form name = "form1" method= "post" action= "login.php"></center>
		<center><input class="btn btn-red"  type="submit" name="inativar" value="Voltar"></center>
		</form>
		</head>
		</html>
		<?php 
        exit;
    }
    
}
if(!@($conexgll=pg_connect ('host=192.168.10.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conexgll);
    echo "$errotrollcdr";
    echo "$voltalogin";
    exit;
}
$com=pg_query($conexgll,"delete from ahistorico6;delete from aprodutosp");
if (!$com){
    pg_close($conexgll);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
    }
if(!@($conexgc=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))) {    
    pg_close($conexgc);
    echo "$errotrollcdr";
    echo "$voltalogin";
    exit;    
}
$com=pg_query($conexgc,"delete from ahistorico3;delete from ahistorico2;delete from ahistorico4;delete from ahistorico5;delete from aprodutosp;delete from aprodutosl;delete from ahistorico6;select logar('COPIA',1,0);
update pedidos set i_pdi_codigo_emp = '2' where i_pdi_codigo_emp = '1' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '4' where i_pdi_codigo_emp = '3' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '6' where i_pdi_codigo_emp = '5' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '8' where i_pdi_codigo_emp = '7' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '10' where i_pdi_codigo_emp = '9' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '12' where i_pdi_codigo_emp = '11' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '14' where i_pdi_codigo_emp = '13' AND i_pdi_status = 0;update pedidos set i_pdi_codigo_emp = '16' where i_pdi_codigo_emp = '15' AND i_pdi_status = 0");
if (!$com){
    pg_close($conexgc);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
    }
if(!@($conexgv=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conexgv);pg_close($conexgc);
    echo "$errotrolvideira";
    echo "$voltalogin";
    exit;    
}
$com=pg_query($conexgv,"delete from ahistorico3;delete from ahistorico2;delete from ahistorico4;select logar('COPIA',1,0);update pedidos set i_pdi_codigo_emp = '14' where i_pdi_codigo_emp = '13' AND i_pdi_status = 0;
update pedidos set i_pdi_codigo_emp = '16' where i_pdi_codigo_emp = '15' AND i_pdi_status = 0");
if (!$com){
    pg_close($conexgc);pg_close($conexgv);    
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
if(!@($conexgj=pg_connect('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))) {
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "$errotroljoinville";
    echo "$voltalogin";
    exit;    
}
$com=pg_query($conexgj,"delete from ahistorico3;delete from ahistorico2;delete from ahistorico4;select logar('REPLICADOR',1,0);
update pedidos set i_pdi_codigo_emp = '2' where i_pdi_codigo_emp = '1' AND i_pdi_status = 0");
if (!$com){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);   
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
    ?>
    <!DOCTYPE html>
	<html>
	<head>
	<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
	</head>
	</html>
	<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
	<?php
    exit;
}
$Transferencia=$_POST['transferencia'];
if ($Transferencia == '' or $Transferencia == '0' ){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Código da tranferencia não pode ser vazio ou igual a zero');</script>";
    echo "$voltalogin";
    exit;
} elseif ($Transferencia < '0'){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Código de tranferência não pode ser negativo');</script>";
    echo "$voltalogin";
}
$login=$_POST['login'];
$login=strtoupper($login);
$senha=$_POST['senha'];
$senha=strtoupper($senha);
$NumeroNfe=$_POST['numeronfe'];
$ClientNfe=$_POST['clientenfe'];
$DataNfe=$_POST['datanfe'];
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');
if ($login == ''){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Login não pode ser em Branco');</script>";
    echo "$voltalogin";
    exit;
} 
if ($senha == ''){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Senha não pode ser em Branco ');</script>";
    echo "$voltalogin";
    exit;
}
if ($NumeroNfe == ''){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Numero Da Nfe não pode ser vazio');</script>";
    echo "$voltalogin";
    exit;
} 
if($NumeroNfe == '0'){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<span style='color:red;'>Numero da Nfe não pode ser igual zero </span>";
    exit;
}
if($NumeroNfe < '0'){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Numero da Nfe não pode ser negativo');</script>";
    echo "$voltalogin";  
    exit;
} 
if ($ClientNfe == ''){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Código do cliente não pode ser vazio');</script>";
    echo "$voltalogin";
    exit;
} 
if ($ClientNfe == '0'){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Código do cliente não pode ser igual a zero');</script>";
    echo "$voltalogin";
    exit;
}
if ($ClientNfe < '0'){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Código do cliente não pode ser negativo');</script>";
    echo "$voltalogin";
    exit;
}
if ($DataNfe == '' ){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo "<script>alert('Data da Nfe não poder ser em branco');</script>";
    echo "$voltalogin";
    exit;
} 
if ( $DataNfe > $dia ){
    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
    echo"<script>alert('Não hé permitido lancar Nfe com data futura');</script>|";
    echo "$voltalogin";
    exit;
}
if ($Transferencia == '9'){
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($conexgc,$comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha== '' ){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "$errologin";
        echo "$voltalogin";
        exit;
    }
    $query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
    $selecao = pg_query($conexgc,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo "$mensagemLogin";
    $comandoSaidas = "select cidesaidas,cempresasaidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
    $selecaoSaidas=pg_query($conexgc,$comandoSaidas);
    $cisahistorico=pg_fetch_array($selecaoSaidas);   
    $idehistorico = $cisahistorico ['cidesaidas'];
    $ideempresa= $cisahistorico ['cempresasaidas'];
    $TotalSaidas= $cisahistorico ['ctotsaidas'];
    if($cisahistorico == ''){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "<script>alert('Numero nota, cliente ou data inválidos por favor tente novamente ');</script>";
        echo "$voltalogin";
        exit;
    }
    $com=pg_query($conexgc,"insert into ahistorico6 select * from ahistorico where cisahistorico = '$idehistorico'" );
    if (!$com){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>Erro ao inserir dados ahistorico6</font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
        } 
        $comandoContador ='SELECT COUNT(*) FROM ahistorico6';
		$Conta=pg_query($conexgc,$comandoContador);
        $tottal=pg_fetch_array($Conta);
        $total = $tottal ['count'];	
		$comandoCadastroproduto="select cprohistorico from ahistorico6 where i_ahi_codigo_ahi_indice is null " ;
		$excomandoCadastroproduto=pg_query($conexgc,$comandoCadastroproduto);
		$resulcomandoCadastroproduto=pg_fetch_array($excomandoCadastroproduto);				
		$produto=$resulcomandoCadastroproduto ['cprohistorico'];		
		while($produto <> ''){
		    $filtro="select *from aprodutosp where ccodproduto='$produto'";
		    $exfiltro=pg_query($conexgc,$filtro);
		    $rsfiltro=pg_fetch_array($exfiltro);
		    if($rsfiltro <> ''){
		        pg_query($conexgc,"update ahistorico6 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto' ");
		    }
			$com=pg_query($conexgc,"insert into aprodutosp select *from aprodutos where ccodproduto ='$produto';update ahistorico6 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto'");
            if (!$com){
                pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
            }
            $comandoCadastroproduto="select cprohistorico from ahistorico6 where i_ahi_codigo_ahi_indice is null " ;
			$excomandoCadastroproduto=pg_query($conexgc,$comandoCadastroproduto);
			$resulcomandoCadastroproduto=pg_fetch_array($excomandoCadastroproduto);
			$produto=$resulcomandoCadastroproduto ['cprohistorico'];			
		}
		$comandoContador2 = 'SELECT COUNT(*) FROM aprodutosp';
		$Conta2 = pg_query($conexgc,$comandoContador2);
		$tottal2=pg_fetch_array($Conta2);
		$total2 = $tottal2 ['count'];		
		if(!@($conexgll=pg_connect ("host=192.168.10.190 dbname=silvio_pessoal port=5430 user=postgres password=ky$14gr@"))){
		    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		    echo "$errotrolllages";
		    echo "$voltalogin";
		    exit;
		}
		$comandoContador3 = 'SELECT COUNT(*) FROM aprodutosp';
	    $Conta3=pg_query($conexgll,$comandoContador3);
		$tottal3=pg_fetch_array($Conta3);
		$total3=$tottal3['count'];
	    while ($total3 <> $total2 ){
	        set_time_limit(120);
	        usleep(9000000);
	        echo "<script>alert('Sincronizando.....');</script>";
	        $comandoContador3 =  'SELECT COUNT(*) FROM aprodutosp';
	        $Conta3 = pg_query($conexgll,$comandoContador3);
	        $tottal3=pg_fetch_array($Conta3);
		    $total3 = $tottal3 ['count'];  
	    }
	    $com=pg_query ($conexgll,"select ccodproduto,clinproduto,cgruporduto,cmarproduto,cdepproduto from aprodutosp order by ccodproduto ");
	    $rscom=pg_fetch_array($com);
	    $produto=$rscom['ccodproduto'];
	    $linha=$rscom['clinproduto'];
	    $grupo=$rscom['cgruporduto'];
	    $marca=$rscom['cmarproduto'];
	    $departamento=$rscom['cdepproduto'];
	    while ($produto <> '') {
	        $dcom=pg_query($conexgc,"select (select cdesmarca from tmarca inner join aprodutos on ccodmarca = cmarproduto where ccodproduto = $produto ) as marca,
            (select cdeslinha from tlinha inner join aprodutos on ccodlinha = clinproduto where ccodproduto = $produto ) as linha,
            (select cdesgrupo from tgrupo inner join aprodutos on ccodgrupo  = cgruporduto where ccodproduto = $produto ) as grupo,
            (select cdesdepartamento from tdepartamento inner join aprodutos on ccoddepartamento = cdepproduto where ccodproduto = $produto ) as departamento");
	        $rsdcom=pg_fetch_array($dcom);
	        $dlinha=$rsdcom['linha'];
	        $dgrupo=$rsdcom['grupo'];
	        $dmarca=$rsdcom['marca'];
	        $ddepartamento=$rsdcom['departamento'];	        
	        $dados= ($linha.'-'.$dlinha.'...'.$marca.'-'.$dmarca.'...'.$grupo.'-'.$dgrupo.'...'.$departamento.'-'.$ddepartamento.'------------');
	        pg_query($conexgll,"update aprodutosp set ccplproduto = '$dados'|| trim(ccplproduto) where ccodproduto = $produto");
	        $com=pg_query ($conexgll,"select ccodproduto,clinproduto,cgruporduto,cmarproduto,cdepproduto from aprodutosp where ccodproduto > $produto  order by ccodproduto ");
	        $rscom=pg_fetch_array($com);
	        $produto=$rscom['ccodproduto'];
	        $linha=$rscom['clinproduto'];
	        $grupo=$rscom['cgruporduto'];
	        $marca=$rscom['cmarproduto'];
	        $departamento=$rscom['cdepproduto'];	        
	    }	    
		$com=pg_query($conexgll,"update aprodutosp set clinproduto = '3' , cgruporduto = '0' ,cmarproduto = '0', cdepproduto = '0',i_apr_id_aen='0',cqtdproduto = '0',cqtde1produto= '0',cqtde2produto='0';update aprodutosp set cantpoduto = ccodproduto,i_apr_codif = ccodproduto where ccodproduto=ccodproduto;
        ;update aprodutosp set i_paf_ide=nextval('sequencia_paf')");
		if (!$com){
		    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		    ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        $procuracodigo="select cantpoduto,i_apr_codigo_cnm,cuniproduto from aprodutosp where ctipproduto = '0' order by cantpoduto  ";
        $exprocuracodigo=pg_query($conexgll,$procuracodigo);
		$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
		$producadastrado=$rsprocuracodigo['cantpoduto'];
		$ncm=$rsprocuracodigo['i_apr_codigo_cnm'];
		$und=$rsprocuracodigo['cuniproduto'];
		while($producadastrado <> ''){
		    $procuracodigo2="select ccodproduto from aprodutos where cantpoduto = '$producadastrado' ";
		    $exprocuracodigo2=pg_query($conexgll,$procuracodigo2);
		    $rsprocuracodigo2=pg_fetch_array($exprocuracodigo2);				
			if ($rsprocuracodigo2 == ''){
			    $procurandoncm=("select *from ncm where i_ncm_codigo = '$ncm'");
			    $exprocurandoncm=pg_query($conexgll,$procurandoncm);
			    $rsprocurandoncm=pg_fetch_array($exprocurandoncm);
			    if($rsprocurandoncm == ''){
			        $com=pg_query($conexgll,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
                    VALUES ('$ncm','','0.00','0.00','0.00')");
			        if (!$com){
			            pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadrastar NCM </font></b></p>";
			            ?>
                        <!DOCTYPE html>
    					<html>
    					<head>
						<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
						</head>
						</html>
						<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
						<?php
                        exit;
			        }
			    }
			    $procurandound=("select d_tun_descricao from tunidadeproduto where d_tun_descricao = '$und'");
			    $exprocurandound=pg_query($conexgll,$procurandound);
			    $rsprocurandound=pg_fetch_array($exprocurandound);
			    if($rsprocurandound == ''){
			        $com=pg_query($conexgll,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
			        if (!$com){
			            pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadastar Unidade </font></b></p>";
			            ?>
                        <!DOCTYPE html>
    					<html>
    					<head>
						<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
						</head>
						</html>
						<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
						<?php
                        exit;
			        }
			    }
			    $com=pg_query($conexgll,"select logar('COPIA',1,0);update aprodutosp set ccodproduto =nextval('seque_aprodutos') where cantpoduto = $producadastrado  ;insert into aprodutos select *from aprodutosp where cantpoduto = $producadastrado;
                delete from aprodutosp where cantpoduto = '$producadastrado'");
			    if (!$com){
			        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
			        ?>
                    <!DOCTYPE html>
    				<html>
    				<head>
					<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
					</head>
					</html>
					<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
					<?php
                    exit;
			    } 
			}
			pg_query ($conexgll,"delete from aprodutosp where cantpoduto = '$producadastrado' ");
			$procuracodigo="select cantpoduto,i_apr_codigo_cnm,cuniproduto from aprodutosp ";
			$exprocuracodigo=pg_query($procuracodigo);
			$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
			$producadastrado=$rsprocuracodigo['cantpoduto'];
			$ncm=$rsprocuracodigo['i_apr_codigo_cnm'];
			$und=$rsprocuracodigo['cuniproduto'];
		}		
		$comandoContadorL = "SELECT COUNT(*) FROM ahistorico6";
		$ContaL = pg_query($conexgll,$comandoContadorL);
		$tottalL=pg_fetch_array($ContaL);
		$totalL = $tottalL ['count'];
		while ($total <> $totalL ){ 
		    usleep(9000000);			    
		    $comandoContadorL = "SELECT COUNT(*) FROM ahistorico5";
		    $ContaL = pg_query($conexgll,$comandoContadorL);
		    $tottalL=pg_fetch_array($ContaL);
		    $totalL = $tottalL ['count'];
		    echo"<script>alert('Sincronzando ahistorico.....');</script>";
		    if ($total == $totalL){
		        break;
		    }
		}
		$comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '4' ";
	    $ExcomandocomandoVereficaNfe= pg_query($conexgll,$comandoVereficaNfe);
	    $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
	    if ( $ResultadocomandoVereficaNfe >= '1'){
		        pg_close($conexgll);pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
		        echo "<script>alert('Esse numero de nfe já existe para esse fornecedor');</script>";
		        ?>
                <!DOCTYPE html>
				<html>
				<head>    
				<link rel="stylesheet" href="css/style.css"></link>
				<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
				</head>
				</html>
				<?php
                echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Número de Nfe:'$NumeroNfe' Já existente  '$dia' , '$time'  </font></b></p>"; 
                ?>
                <!DOCTYPE html>
				<html>
				<head>    
				<link rel="stylesheet" href="css/style.css"></link>
				<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
				<center><form name = "form1" method= "post" action= "login.php"></center>
				<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
				</form>
				</head>
				</html>
				<?php		    
	            exit;		        
		    }
		    $com=pg_query($conexgll,"INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES (nextval('seque_aentradas'),'V','1','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','1','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    } 
		    $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '1' and cempentrada = '1'  ";
		    $selecaoEntrada=pg_query($conexgll,$comandoEntrada);
		    $cienhistorico=pg_fetch_array($selecaoEntrada);
		    $ideEntradahistorico = $cienhistorico ['csidentradas'];
		    if ($cienhistorico == ''){
		        pg_query($conexgll,"delete from ahistorico6");
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		        echo "<script>alert('Nota não foi incluida automaticamente');</script>";		        
		        echo "<br><br>";
		        echo "<span style='color:red;'> Confira os dados coletados </span> ";
		        echo "<br><br>";
		        echo " Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', ";
		        exit;
		    }
		    $com=pg_query($conexgll,"update ahistorico6 set centhistorico = csaihisotorico,i_ahi_codigo_ven= '1' where cprohistorico = cprohistorico;update ahistorico6 set csaihisotorico = '0';
            update ahistorico6 set cprohistorico = ccodproduto  from aprodutos where cprohistorico= i_apr_codif;update ahistorico6 set ctiphistorico = 'E';update ahistorico6 set cisahistorico = '0';update ahistorico6 set cidehistorico = nextval('seque_ahistorico');update ahistorico6 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE';
            update ahistorico6 set cclihistorico = '0';update ahistorico6 set cipehistorico = '0';update ahistorico6 set ccfohistorico = '1.102';update ahistorico6 set cemphistorico = '1';update ahistorico6 set cforhistorico= '2';update ahistorico6 set cienhistorico=  '$ideEntradahistorico';
            ");
		    if (!$com){
		        pg_query($conexgll,"delete from ahistorico6");
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    }
		    $com=pg_query($conexgll,"select logar('COPIA',1,0);insert into ahistorico select * from ahistorico6;delete from ahistorico6");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
           		<!DOCTYPE html>
				<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit; 
		    }
		    $com=pg_query($conexgll,"INSERT INTO aeduplicatas(
            cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata, 
            cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata, 
            cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata, 
            chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata, 
            choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata, 
            c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
            VALUES (nextval('seque_aeduplicatas'),'$ideEntradahistorico', '1', '1', 'DUPLICATA', 
            '1', '$TotalSaidas','$dia','0.00','0.00',NULL,'0.00','','NAO','$DataNfe','$time','$login','1',NULL, 
            NULL,'','0','1','','','0','0')");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Inserir a Duplicata </font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    }
		    pg_query($conexgll,"delete from ahistorico6");
		    pg_close($conexgll);pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
		    ?>
            <!DOCTYPE html>
			<html>
			<head>    
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
			</head>
			</html>
			<?php
            echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Lançado Com Sucesso  em: '$dia' , '$time'  </font></b></p>"; 
            ?>
            <!DOCTYPE html>
			<html>
			<head>    
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
			<center><form name = "form1" method= "post" action= "login.php"></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</form>
			</head>
			</html>
			<?php		    
		    exit;
}

if ($Transferencia == '8'){
	$comandoSenha= "select cnomope from parametros where cnomope= '$login'";
	$ExcomandoSenha= pg_query($conexgc,$comandoSenha);
	$ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
	if ($ResulcomandoSenha== '' ){
	    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "$errologin";
        echo "$voltalogin";
        exit;
    }
	$query="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
	$selecao = pg_query($conexgc,$query);
	$resut= pg_fetch_array($selecao);
	if ($resut == ''){
	    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "$errosenha";        
        echo "$voltalogin";
        exit;
    }
    echo "$mensagemLogin";
    $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
    $selecaoSaidas=pg_query($conexgc,$comandoSaidas);
    $cisahistorico=pg_fetch_array($selecaoSaidas);
    $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
    $idehistorico = $cisahistorico ['cidesaidas'];
    $ideempresa= $cisahistorico ['cempresasaidas'];
    $TotalSaidas= $cisahistorico ['ctotsaidas'];
    if($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "<script>alert('Numero nota, cliente ou data inválidos por favor tente novamente ');</script>";
        echo "$voltalogin";
        exit;
    }
    $com=pg_query($conexgc,"insert into ahistorico5 select * from ahistorico where cisahistorico = '$idehistorico'" );
    if (!$com){
        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
        ?>
        <!DOCTYPE html>
		<html>
		<head>
		<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
		</head>
		</html>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php
        exit;
        } 
        $comandoContador ='SELECT COUNT(*) FROM ahistorico5';
		$Conta=pg_query($conexgc,$comandoContador);
        $tottal=pg_fetch_array($Conta);
        $total = $tottal ['count'];
        $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
        $ExcomandoCNPJFornecedor= pg_query($conexgc,$comandoCNPJFornecedor);
        $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
        $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];	
		$comandoCadastroproduto="select  cprohistorico from ahistorico5 where i_ahi_codigo_ahi_indice is null " ;
		$excomandoCadastroproduto=pg_query($conexgc,$comandoCadastroproduto);
		$resulcomandoCadastroproduto=pg_fetch_array($excomandoCadastroproduto);				
		$produto=$resulcomandoCadastroproduto ['cprohistorico'];
		while($produto <> ''){
		    $filtro="select *from aprodutosl where ccodproduto='$produto'";
		    $exfiltro=pg_query($conexgc,$filtro);
		    $rsfiltro=pg_fetch_array($exfiltro);
		    if($rsfiltro <> ''){
		        pg_query($conexgc,"update ahistorico5 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto' ");
		    }
			$com=pg_query($conexgc,"insert into aprodutosl select *from aprodutos where ccodproduto ='$produto';update ahistorico5 set i_ahi_codigo_ahi_indice='1'  where cprohistorico='$produto'");
            if (!$com){
                pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
            ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
            }
            $comandoCadastroproduto="select  cprohistorico from ahistorico5 where i_ahi_codigo_ahi_indice is null " ;
			$excomandoCadastroproduto=pg_query($conexgc,$comandoCadastroproduto);
			$resulcomandoCadastroproduto=pg_fetch_array($excomandoCadastroproduto);
			$produto=$resulcomandoCadastroproduto ['cprohistorico'];			
		}
		$comandoContador2 = 'SELECT COUNT(*) FROM aprodutosl';
		$Conta2 = pg_query($conexgc,$comandoContador2);
		$tottal2=pg_fetch_array($Conta2);
		$total2 = $tottal2 ['count'];		
		if(!@($conexgll=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
		    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		    echo "$errotrolllages";
		    echo "$voltalogin";
		    exit;
		}
		$comandoContador3 = 'SELECT COUNT(*) FROM aprodutosl';
	    $Conta3=pg_query($conexgll,$comandoContador3);
		$tottal3=pg_fetch_array($Conta3);
		$total3=$tottal3['count'];
	    while ($total3 <> $total2 ){
	        set_time_limit(120);
	        usleep(9000000);
	        echo "<script>alert('Sincronizando.....');</script>";
	        $comandoContador3 =  'SELECT COUNT(*) FROM aprodutosl';
	        $Conta3 = pg_query($conexgll,$comandoContador3);
	        $tottal3=pg_fetch_array($Conta3);
		    $total3 = $tottal3 ['count'];  
	    }						
		$com=pg_query($conexgll,"update aprodutosl set clinproduto = '58' , cgruporduto = '0' ,cmarproduto = '0', cdepproduto = '0',i_apr_id_aen='0',cqtdproduto = '0',cqtde1produto= '0',cqtde2produto='0';update aprodutosl set i_paf_ide=nextval('sequencia_paf')");
		if (!$com){
		    pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
		    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		    ?>
            <!DOCTYPE html>
    		<html>
    		<head>
			<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
			</head>
			</html>
			<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
			<?php
            exit;
        }
        $procuracodigo="select ccodproduto,i_apr_codigo_cnm,cuniproduto from aprodutosl where ctipproduto = '0'";
        $exprocuracodigo=pg_query($conexgll,$procuracodigo);
		$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
		$producadastrado=$rsprocuracodigo['ccodproduto'];
		$ncm=$rsprocuracodigo['i_apr_codigo_cnm'];
		$und=$rsprocuracodigo['cuniproduto'];
		while($producadastrado <> ''){
		    $procuracodigo2="select ccodproduto from aprodutos where ccodproduto = '$producadastrado'";
		    $exprocuracodigo2=pg_query($conexgll,$procuracodigo2);
		    $rsprocuracodigo2=pg_fetch_array($exprocuracodigo2);				
			if ($rsprocuracodigo2 == ''){
			    $procurandoncm=("select *from ncm where i_ncm_codigo = '$ncm'");
			    $exprocurandoncm=pg_query($procurandoncm);
			    $rsprocurandoncm=pg_fetch_array($exprocurandoncm);
			    if($rsprocurandoncm == '0'){
			        $com=pg_query($conexgll,"select logar('COPIA',1,0);INSERT INTO ncm(i_ncm_codigo, i_ncm_nome, n_ncm_mva, n_ncm_mva_reajustavel, n_ncm_reducao_mva)
                    VALUES ('$ncm','','0.00','0.00','0.00')");
			        if (!$com){
			            pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadrastar NCM </font></b></p>";
			            ?>
                        <!DOCTYPE html>
    					<html>
    					<head>
						<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
						</head>
						</html>
						<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
						<?php
                        exit;
			        }
			    }
			    $procurandound=("select d_tun_descricao from tunidadeproduto where d_tun_descricao = '$und'");
			    $exprocurandound=pg_query($conexgll,$procurandound);
			    $rsprocurandound=pg_fetch_array($exprocurandound);
			    if($rsprocurandound == ''){
			        $com=pg_query($conexgll,"select logar('COPIA',1,0);INSERT INTO tunidadeproduto(d_tun_descricao, s_tun_complemento_desc) VALUES ('$und', '')");
			        if (!$com){
			            pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			            echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Cadastar Unidade </font></b></p>";
			            ?>
                        <!DOCTYPE html>
    					<html>
    					<head>
						<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
						</head>
						</html>
						<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
						<?php
                        exit;
			        }
			    }
			    $com=pg_query($conexgll,"select logar('COPIA',1,0);insert into aprodutos select *from aprodutosl where ccodproduto = $producadastrado;
                delete from aprodutosl where ccodproduto = '$producadastrado'");
			    if (!$com){
			        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgll);
			        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
			        ?>
                    <!DOCTYPE html>
    				<html>
    				<head>
					<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
					</head>
					</html>
					<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
					<?php
                    exit;
			    } 
			}
			pg_query ($conexgll,"delete from aprodutosl where ccodproduto = '$producadastrado' ");
			$procuracodigo="select ccodproduto from aprodutosl ";
			$exprocuracodigo=pg_query($procuracodigo);
			$rsprocuracodigo=pg_fetch_array($exprocuracodigo);
			$producadastrado=$rsprocuracodigo['ccodproduto'];			
		}
		pg_close($conexgll);				
		if(!@($conexgl=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))) {
		    pg_close($conexgl,$conexgj,$conexgc,$conexgv);
		    echo "$errotrolllages";
		    echo "$voltalogin";
		    exit;
			}
			echo "<script>alert('Conectado em Lages');</script>";
			$comandoContadorL = "SELECT COUNT(*) FROM ahistorico5";
			$ContaL = pg_query($conexgl,$comandoContadorL);
			$tottalL=pg_fetch_array($ContaL);
			$totalL = $tottalL ['count'];
			while ($total <> $totalL ){ 
			    usleep(9000000);			    
			    $comandoContadorL = "SELECT COUNT(*) FROM ahistorico5";
			    $ContaL = pg_query($conexgl,$comandoContadorL);
			    $tottalL=pg_fetch_array($ContaL);
			    $totalL = $tottalL ['count'];
			    echo"<script>alert('Sincronzando ahistorico.....');</script>";
			    if ($total == $totalL) {
			        break;
				    }
			}
			$ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
		    $ExComandoFornecedor = pg_query($conexgl,$ComandoFornecedor);
		    $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
		    $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
		    if ($ResulComandoFornecedor == ''){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo"<script>alert('Fornecedor não cadastrado em lages');</script>";
		        echo "$voltalogin";
		        exit;
		    }
		    $comandoEmpresaDestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino' ";
		    $ExcomandoEmpresaDestino= pg_query($conexgl,$comandoEmpresaDestino);
		    $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
		    $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
		    if ($ResultadocomandoEmpresaDestino == ''){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<script>alert('Empresa destino não Confere com o cliente da Nfe favor verefique');</script>";
		        echo "$voltalogin";
		        exit;
		    }
		    $comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor' ";
		    $ExcomandocomandoVereficaNfe= pg_query($conexgl,$comandoVereficaNfe);
		    $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
		    if ( $ResultadocomandoVereficaNfe >= '1'){
		        pg_close($conexgl);pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
		        echo "<script>alert('Esse numero de nfe já existe para esse fornecedor');</script>";
		        ?>
                <!DOCTYPE html>
				<html>
				<head>    
				<link rel="stylesheet" href="css/style.css"></link>
				<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
				</head>
				</html>
				<?php
                echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Número de Nfe:'$NumeroNfe' Já existente  '$dia' , '$time'  </font></b></p>"; 
                ?>
                <!DOCTYPE html>
				<html>
				<head>    
				<link rel="stylesheet" href="css/style.css"></link>
				<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
				<center><form name = "form1" method= "post" action= "login.php"></center>
				<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
				</form>
				</head>
				</html>
				<?php		    
	            exit;		        
		    }
		    $com=pg_query($conexgl,"INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    } 
		    $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe'  ";
		    $selecaoEntrada=pg_query($conexgl,$comandoEntrada);
		    $cienhistorico=pg_fetch_array($selecaoEntrada);
		    $ideEntradahistorico = $cienhistorico ['csidentradas'];
		    if ($cienhistorico == ''){
		        pg_query("delete from ahistorico5");
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<script>alert('Nota não foi incluida automaticamente');</script>";		        
		        echo "<br><br>";
		        echo "<span style='color:red;'> Confira os dados coletados </span> ";
		        echo "<br><br>";
		        echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";
		        exit;
		    }
		    $com=pg_query($conexgl,"update ahistorico5 set centhistorico = csaihisotorico where cprohistorico = cprohistorico;update ahistorico5 set csaihisotorico = '0';
            update ahistorico5 set ctiphistorico = 'E';update ahistorico5 set cisahistorico = '0';update ahistorico5 set cidehistorico = nextval('seque_ahistorico');update ahistorico5 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE';
            update ahistorico5 set cclihistorico = '0';update ahistorico5 set cipehistorico = '0';update ahistorico5 set ccfohistorico = '1.102';update ahistorico5 set cemphistorico = '$EmpNfe';update ahistorico5 set cforhistorico= '$Fonnecedor';update ahistorico5 set cienhistorico=  '$ideEntradahistorico';
            ");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    }
		    $com=pg_query($conexgl,"insert into ahistorico select * from ahistorico5;delete from ahistorico5;select logar('COPIA',1,0)");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!!</font></b></p>";
		        ?>
           		<!DOCTYPE html>
				<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit; 
		    }
		    $com=pg_query($conexgl,"INSERT INTO aeduplicatas(
            cideduplicata, cienduplicata, cparduplicata, cforduplicata, ctipduplicata, 
            cnumduplicata, cvalduplicata, cvenduplicata, cjurduplicata, cdesduplicata, 
            cdpaduplicata, cvapduplicata, cfladuplicata, cbeduplicata, cdtcadduplicata, 
            chocadduplicata, cuscadduplicata, copcadduplicata, cdtatuduplicata, 
            choatuduplicata, cusatuduplicata, copatuduplicata, cempduplicata, 
            c_aceite_duplicata, s_aed_observacoes, i_aed_ide_ped, i_aed_numero_empenho)
            VALUES (nextval('seque_aeduplicatas'),'$ideEntradahistorico', '1', '$Fonnecedor', 'DUPLICATA', 
            '1', '$TotalSaidas','$dia','0.00','0.00',NULL,'0.00','','NAO','$DataNfe','$time','$login','1',NULL, 
            NULL,'','0','$EmpNfe','','','0','0')");
		    if (!$com){
		        pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);pg_close($conexgl);
		        echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! Ao Inserir a Duplicata </font></b></p>";
		        ?>
                <!DOCTYPE html>
    			<html>
    			<head>
				<center><img src="img/X.png"alt="1" heigth ="100px" width="100px" ></center>
				</head>
				</html>
				<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
				<?php
                exit;
		    } 		    
		    pg_close($conexgl);pg_close($conexgc);pg_close($conexgj);pg_close($conexgv);
		    ?>
            <!DOCTYPE html>
			<html>
			<head>    
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
			</head>
			</html>
			<?php
            echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Lançado Com Sucesso  em: '$dia' , '$time'  </font></b></p>"; 
            ?>
            <!DOCTYPE html>
			<html>
			<head>    
			<link rel="stylesheet" href="css/style.css"></link>
			<center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
			<center><form name = "form1" method= "post" action= "login.php"></center>
			<center><input class="btn btn-red"  type="submit" value="Voltar"></center>
			</form>
			</head>
			</html>
			<?php		    
		    exit;
}

if ($Transferencia == '7'){
    $DtBj=$_POST ['databomjesus'];
    $NfBj=$_POST ['nfebomjesus'];
    $conexaocdr = pg_connect('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@');
    pg_query ('delete from ahistorico2');
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha== '' ){
        pg_close($conexaocdr);
        echo "$errologin";
        echo "$voltalogin";
        exit;        
    }
    $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao = pg_query($conexaocdr,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == '') {
        pg_close($conexaocdr);
        echo "$errosenha";
        echo "$voltalogin";
        exit;        
    }
    echo "$mensagemLogin";
    $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas,cmersaidas,cdessaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
    $selecaoSaidas=pg_query($conexaocdr,$comandoSaidas);
    $cisahistorico=pg_fetch_array($selecaoSaidas);
    $cnpjEmpressaDestino= $cisahistorico ['cnpj_saidas'];
    $idehistorico = $cisahistorico ['cidesaidas'];
    $ideempresa= $cisahistorico ['cempresasaidas'];
    $TotalSaidas= $cisahistorico ['ctotsaidas'];
    $valorBruto= $cisahistorico ['cmersaidas'];
    $desconto=$cisahistorico ['cdessaidas'];   
    if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
        pg_close($conexaocdr);
        echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
        echo "$voltalogin";
        exit;        
    }
    pg_query("insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico' ");
    $comandoContador =  'SELECT COUNT(*) FROM ahistorico2';
    $Conta = pg_query($conexaocdr,$comandoContador);
    $tottal=pg_fetch_array($Conta);
    $total = $tottal ['count'];
    pg_close($conexaocdr);
    if(!@($conexaoVideira=pg_connect ('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@'))) {
        pg_close($conexaoVideira);
        echo "$errotrolvideira";
        echo "$voltalogin";
        exit;
    }
    echo "<script>alert('Conectado em Caçador');</script>";
    $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
    $ContaV = pg_query($conexaoVideira,$comandoContadorV);
    $tottalV=pg_fetch_array($ContaV);
    $totalV = $tottalV ['count'];
    while ($total <> $totalV ) {
        pg_close($conexaoVideira);
        usleep(9000000);
        $conexaoVideira=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
        $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
        $ContaV = pg_query($conexaoVideira,$comandoContadorV);
        $tottalV=pg_fetch_array($ContaV);
        $totalV = $tottalV ['count'];
        pg_close($conexaoVideira);
        echo "<script>alert('Não replicando favor avisar o Adriano');</script>";
        if ($total == $totalV) {
            break;
        }
    }
        $conexaoVideira=pg_connect ('host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@');
        $ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpjEmpressaDestino' ";
        $ExComandoFornecedor = pg_query($conexaoVideira,$ComandoFornecedor);
        $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
        $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];   
        
        if ($ResulComandoFornecedor == ''){
            pg_close($conexaoVideira);
            echo "<script>alert('Fornecedor não cadastrado em caçador');</script>";
            echo "$voltalogin";
            exit;
        }
        pg_query("select logar('COPIA',1,0)");
        pg_query("
INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
    VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DtBj','$DataNfe','$NfBj','$TotalSaidas','$valorBruto','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','2.917','$desconto','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','1','2','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
        $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DtBj' and cnfientradas = '$NfBj' and cforentradas =  '$Fonnecedor' and cempentrada = '1' and i_aen_serie_nf= '2'";
        $selecaoEntrada=pg_query($conexaoVideira,$comandoEntrada);
        $cienhistorico=pg_fetch_array($selecaoEntrada);
        $ideEntradahistorico = $cienhistorico ['csidentradas'];
        if ($cienhistorico == ''){
            pg_query('delete from ahistorico2');
            pg_close($conexaoVideira);
            echo "<script>alert('Nota Nao Foi Incluida Automaticamente');</script>";
            echo '<br><br>';
            echo '<br><br>';
            echo "<span style='color:red;'> Confira Os Dados Coletados </span>";
            echo '<br><br>';
            echo " '1', '$Fonnecedor', Emisão: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '1'";            
            exit;
        }
        pg_query("update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
        pg_query("update ahistorico2 set cicmhistorico = 0.000,n_ahi_base_icms = 0.000,n_ahi_base_ipi = 0.000,cvichistorico = 0.000 ");
        pg_query("update ahistorico2 set csaihisotorico = '0'");
        pg_query("update ahistorico2 set ctiphistorico = 'E'");
        pg_query("update ahistorico2 set cisahistorico = '0' ");
        pg_query("update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
        pg_query("update ahistorico2 set cmothistorico= 'Nota Bom Jesus'");
        pg_query("update ahistorico2 set cclihistorico = '0'");
        pg_query("update ahistorico2 set cipehistorico = '0'");
        pg_query("update ahistorico2 set ccfohistorico = '2.917'");
        pg_query("update ahistorico2 set cemphistorico = '1'");
        pg_query("update ahistorico2 set cforhistorico= '$Fonnecedor'");
        pg_query("update ahistorico2 set cienhistorico=  '$ideEntradahistorico'");
        pg_query("insert into ahistorico select * from ahistorico2");
        pg_query("delete from ahistorico2");
        pg_close($conexaoVideira);
        echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
        echo "$voltalogin";
        exit;
}

if ($Transferencia == '1'){
    $conexaocdr = pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha== '' ){
        pg_close($conexaocdr);
        echo "$errologin";
        echo "$voltalogin";
        exit;
    } 
    $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
    $selecao = pg_query($conexaocdr,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == '') {
            pg_close($conexaocdr);
            echo "$errosenha";        
            echo "$voltalogin";
            exit;
        }        
        echo "$mensagemLogin";
        $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
        $selecaoSaidas=pg_query($conexaocdr,$comandoSaidas);
        $cisahistorico=pg_fetch_array($selecaoSaidas);
        $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
        $idehistorico = $cisahistorico ['cidesaidas'];
        $ideempresa= $cisahistorico ['cempresasaidas'];
        $TotalSaidas= $cisahistorico ['ctotsaidas'];
        if($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
            pg_close($conexaocdr);
            echo "<script>alert('Numero nota, cliente ou data invalidos por favor tente novamente ');</script>";
            echo "$voltalogin";
            exit;
            }
            pg_query("insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'" );
            $comandoContador =  'SELECT COUNT(*) FROM ahistorico2';
            $Conta = pg_query($conexaocdr,$comandoContador);
            $tottal=pg_fetch_array($Conta);
            $total = $tottal ['count'];
            $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
            $ExcomandoCNPJFornecedor= pg_query($conexaocdr,$comandoCNPJFornecedor);
            $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
            $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
            pg_close($conexaocdr);
            if(!@($conexaoVideira=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))) {
            pg_close($conexaoVideira);
            echo "$errotrolvideira";
            echo "$voltalogin";
            exit;
            }
            echo "<script>alert('Conectado em Videira com sucesso');</script>";                
            $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
            $ContaV = pg_query($conexaoVideira,$comandoContadorV);
            $tottalV=pg_fetch_array($ContaV);
            $totalV = $tottalV ['count'];
            while ($total <> $totalV ) {                 
                usleep(9000000);
                $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
                $ContaV = pg_query($conexaoVideira,$comandoContadorV);
                $tottalV=pg_fetch_array($ContaV);
                $totalV = $tottalV ['count'];                                    
                echo"<script>alert('Sincronizando');</script>";
                if ($total == $totalV) {
                    break;
                        }                    
                }
                $ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
                $ExComandoFornecedor = pg_query($conexaoVideira,$ComandoFornecedor);
                $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
                $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
                if ($ResulComandoFornecedor == ''){
                    pg_close($conexaoVideira);
                    echo"<script>alert('Fornecedor não cadastrado em videira');</script>";
                    echo "$voltalogin";
                    exit;
                } 
                $comandoEmpresaDestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino' ";
                $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
                $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
                $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
                if ($ResultadocomandoEmpresaDestino == ''){
                pg_close($conexaoVideira);
                echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
                echo "$voltalogin";                    
                exit;
                }
                $comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor' ";
                $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
                $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
                if ( $ResultadocomandoVereficaNfe >= '1'){
                    pg_close($conexaoVideira);
                    echo "<script>alert('Este Numero de Nfe:$NumeroNfe  Já existe para esse fornecedor');</script>";
                    echo "$voltalogin";                        
                    exit;
                    }
                    pg_query("select logar('COPIA',1,0)");
                    pg_query("
INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
    VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
                    $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe'";
                    $selecaoEntrada=pg_query($conexaoVideira,$comandoEntrada);
                    $cienhistorico=pg_fetch_array($selecaoEntrada);
                    $ideEntradahistorico = $cienhistorico ['csidentradas'];
                    if ($cienhistorico == ''){
                        pg_query('delete from ahistorico2');
                        pg_close($conexaoVideira);
                        echo "<script>alert('Nota não foi incluida automaticamente');</script>";
                        echo '<br><br>';
                        echo '<br><br>';
                        echo "<span style='color:red;'> Confira os dados coletados </span>";
                        echo '<br><br>';
                        echo "'$EmpNfe', '$Fonnecedor', Emisão: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";                                                
                        exit;
                    }
                    pg_query("update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
                    pg_query("update ahistorico2 set csaihisotorico = '0'");
                    pg_query("update ahistorico2 set ctiphistorico = 'E'");
                    pg_query("update ahistorico2 set cisahistorico = '0'");
                    pg_query("update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
                    pg_query("update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
                    pg_query("update ahistorico2 set cclihistorico = '0'");
                    pg_query("update ahistorico2 set cipehistorico = '0'");
                    pg_query("update ahistorico2 set ccfohistorico = '1.152'");
                    pg_query("update ahistorico2 set cemphistorico = '$EmpNfe'");
                    pg_query("update ahistorico2 set cforhistorico= '$Fonnecedor'");
                    pg_query("update ahistorico2 set cienhistorico=  '$ideEntradahistorico'");
                    pg_query("insert into ahistorico select * from ahistorico2");
                    pg_query("delete from ahistorico2");
                    pg_close($conexaoVideira);
                    echo "<script>alert('Lancamento Concluido com Suceso ');</script>";
                    echo "$voltalogin";
                    exit;
}
if ($Transferencia == '2') {
    $conexaocdr = pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
    pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);   
    if ($ResulcomandoSenha == '' ){
        pg_close($conexaocdr);
        echo "$errologin";
        echo "$voltalogin";      
        exit;
    } 
    $query ="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario ='$senha' ";
    $selecao = pg_query($conexaocdr,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        pg_close($conexaocdr);
        echo '$errosenha';
        echo "$voltalogin";
        exit;
        }       
        echo "$mensagemLogin";
        $comandoSaidas ="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
        $selecaoSaidas=pg_query($conexaocdr,$comandoSaidas);
        $cisahistorico=pg_fetch_array($selecaoSaidas);
        $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
        $idehistorico = $cisahistorico ['cidesaidas'];
        $ideempresa= $cisahistorico ['cempresasaidas'];
        $TotalSaidas= $cisahistorico ['ctotsaidas'];
        if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
            pg_close($conexaocdr);
            echo "$mensagemNfeCliente";
            echo "$voltalogin";                
            exit;
            } 
            pg_query("insert into ahistorico2 select * from ahistorico where cisahistorico = '$idehistorico'");
            $comandoContador =  'SELECT COUNT(*) FROM ahistorico2';
            $Conta = pg_query($conexaocdr,$comandoContador);
            $tottal=pg_fetch_array($Conta);
            $total = $tottal ['count'];
            $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
            $ExcomandoCNPJFornecedor= pg_query($conexaocdr,$comandoCNPJFornecedor);
            $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
            $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
            pg_close($conexaocdr);
            if(!@($conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))) {
            pg_close($conexaoJoinville);
            echo "$errotroljoinville>";
            echo "$voltalogin";                
            exit;
            }
            echo '<br><br>';
            echo "<span style='color:red;'> Banco de dados troll_joinville conectado com sucesso .</span>!";
            $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
            $ContaV = pg_query($conexaoJoinville,$comandoContadorV);
            $tottalV=pg_fetch_array($ContaV);
            $totalV = $tottalV ['count'];
            while ($total <> $totalV ){
                pg_close($conexaoJoinville);
                usleep(9000000);
                $conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
                $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico2';
                $ContaV = pg_query($conexaoJoinville,$comandoContadorV);
                $tottalV=pg_fetch_array($ContaV);
                $totalV = $tottalV ['count'];
                pg_close($conexaoJoinville);                    
                echo "<script>alert('Sincronizando');</script>";
                if ($total == $totalV) {
                    break;
                    }                    
                }
                $conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
                $ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
                $ExComandoFornecedor = pg_query($conexaoJoinville,$ComandoFornecedor);
                $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
                $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
                if ($ResulComandoFornecedor == ''){
                    pg_close($conexaoJoinville);
                    echo "<script>alert('Fornecedor não cadastrado em joinville ');</script>";
                    echo "$voltalogin";
                    exit;
                }
                $comandoEmpresaDestino="select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino' ";
                $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
                $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
                $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
                if ($ResultadocomandoEmpresaDestino == ''){
                pg_close($conexaoJoinville);
                echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
                echo "$voltalogin";                    
                exit;
                }
                $comandoVereficaNfe="select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor'";
                $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
                $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
                if ( $ResultadocomandoVereficaNfe >= '1'){
                    pg_close($conexaoJoinville);
                    echo "<script>alert('Esse numero de Nfe Já existe para esse fornecedor');</script>";
                    echo "$voltalogin";
                    exit;                    
                    }
                    pg_query("select logar('COPIA',1,0)");
                    pg_query("
INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
    VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
                    $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe' ";
                    $selecaoEntrada=pg_query($conexaoJoinville,$comandoEntrada);
                    $cienhistorico=pg_fetch_array($selecaoEntrada);
                    $ideEntradahistorico = $cienhistorico ['csidentradas'];
                    if ($cienhistorico == ''){
                        pg_query('delete from ahistorico2');
                        pg_close($conexaoJoinville);
                        echo "<script>alert('Nota Não Foi Incluida Automaticamente');</script>";                        
                        echo '<br><br>';
                        echo '<br><br>';
                        echo "<span style='color:red;'> Confira os dados coletados </span> ";
                        echo '<br><br>';
                        echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";                                               
                        exit;
                    }
                    pg_query("update ahistorico2 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
                    pg_query("update ahistorico2 set csaihisotorico = '0'");
                    pg_query("update ahistorico2 set ctiphistorico = 'E'");
                    pg_query("update ahistorico2 set cisahistorico = '0'");
                    pg_query("update ahistorico2 set cidehistorico = nextval('seque_ahistorico')");
                    pg_query("update ahistorico2 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
                    pg_query("update ahistorico2 set cclihistorico = '0'");
                    pg_query("update ahistorico2 set cipehistorico = '0'");
                    pg_query("update ahistorico2 set ccfohistorico = '1.152'");
                    pg_query("update ahistorico2 set cemphistorico = '$EmpNfe'");
                    pg_query("update ahistorico2 set cforhistorico= '$Fonnecedor'");
                    pg_query("update ahistorico2 set cienhistorico=  '$ideEntradahistorico'");
                    pg_query("insert into ahistorico select * from ahistorico2");
                    pg_query("delete from ahistorico2");
                    pg_close($conexaoJoinville);
                    echo "<script>alert('Lancamento Concluido com Suceso');</script>";
                    echo "Lancamento Concluido com Suceso !!! em '$dia', '$time'  ";
                    echo "$voltalogin";
                    exit;
}

if ($Transferencia == '3') {
      $conexaoVideira = pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
      $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
      $ExcomandoSenha= pg_query($comandoSenha);
      $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
      if ($ResulcomandoSenha == '' ){
          pg_close($conexaoVideira);
          echo "$errologin";
          echo "$voltalogin";
          exit;
          }
          $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha' ";
          $selecao = pg_query($conexaoVideira,$query);
          $resut= pg_fetch_array($selecao);
          if ($resut == '') {
              pg_close($conexaoVideira);
              echo "$errosenha";
              echo "$voltalogin";              
              exit;
              } 
              echo "$mensagemLogin";
              $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
              $selecaoSaidas=pg_query($conexaoVideira,$comandoSaidas);
              $cisahistorico=pg_fetch_array($selecaoSaidas);
              $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
              $idehistorico = $cisahistorico ['cidesaidas'];
              $ideempresa= $cisahistorico ['cempresasaidas'];
              $TotalSaidas= $cisahistorico ['ctotsaidas'];
              if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
                  pg_close($conexaoVideira);
                  echo "$mensagemNfeCliente";
                  echo "$voltalogin";                      
                  exit;
                  }
                  pg_query("insert into ahistorico3 select * from ahistorico where cisahistorico = '$idehistorico'" );
                  $comandoContador =  'SELECT COUNT(*) FROM ahistorico3';
                  $Conta = pg_query($conexaoVideira,$comandoContador);
                  $tottal=pg_fetch_array($Conta);
                  $total = $tottal ['count'];
                  $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa'";
                  $ExcomandoCNPJFornecedor= pg_query($conexaoVideira,$comandoCNPJFornecedor);
                  $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
                  $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
                  pg_close($conexaoVideira);
                  
				  if(!@($conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))) {
                      pg_close($conexaocdr);
                      echo "$errotrollcdr";
                      echo "$voltalogin";                      
                      exit;
                  }
                  echo "<script>alert('Banco de Dados Troll_Cdr Conectado com Sucesso');</script>";
                  $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico3';
                  $ContaV = pg_query($conexaocdr,$comandoContadorV);
                  $tottalV=pg_fetch_array($ContaV);
                  $totalV = $tottalV ['count'];
                  while ($total <> $totalV ) {
                      pg_close($conexaocdr);
                      $conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
                      usleep(9000000);
                      $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico3';
                      $ContaV = pg_query($conexaocdr,$comandoContadorV);
                      $tottalV=pg_fetch_array($ContaV);
                      $totalV = $tottalV ['count'];
                      pg_close($conexaocdr);
                      echo "<script>alert('Sincronizando');</script>";
                      if ($total == $totalV) {
                          break;
                      }
                  }
                  $conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
                  $ComandoFornecedor ="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
                  $ExComandoFornecedor = pg_query($conexaocdr,$ComandoFornecedor);
                  $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
                  $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
                  if ($ResulComandoFornecedor == ''){
                      pg_close($conexaocdr);
                      echo "<script>alert('Fornecedor não cadastrado em caçador');</script>";
                      echo "$voltalogin";                          
                      exit;
                  }
                  $comandoEmpresaDestino="select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino' ";
                  $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
                  $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
                  $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
                  if ($ResultadocomandoEmpresaDestino == ''){
                          pg_close($conexaocdr);
                          echo "<script>alert('Empresa destino não confere com o cliente da Nfe favor verefique');</script>";
                          echo "$voltalogin";                          
                          exit;
                      }
                      $comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor' ";
                      $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
                      $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
                      if ( $ResultadocomandoVereficaNfe >= '1'){
                          pg_close($conexaocdr);
                          echo "<script>alert('Esse Numero de Nfe Já existe para esse Fornecedor');</script>";                                                           
                          echo "$voltalogin";
                          exit;
                          
                      }
                      pg_query("
INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
    VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
                      $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe'";
                      $selecaoEntrada=pg_query($conexaocdr,$comandoEntrada);
                      $cienhistorico=pg_fetch_array($selecaoEntrada);
                      $ideEntradahistorico = $cienhistorico ['csidentradas'];
                      if ($cienhistorico == ''){
                          pg_query('delete from ahistorico3');
                          pg_close($conexaocdr);
                          echo "<script>alert('Nota Não Foi Incluida Automaticamente');</script>";
                          echo '<br><br>';
                          echo '<br><br>';
                          echo "<span style='color:red;'> Confira Os Dados Coletados </span> ";
                          echo '<br><br>';
                          echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";
                          exit;
                      }
                      pg_query("update ahistorico3 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
                      pg_query("update ahistorico3 set csaihisotorico = '0'");
                      pg_query("update ahistorico3 set ctiphistorico = 'E'");
                      pg_query("update ahistorico3 set cisahistorico = '0'");
                      pg_query("update ahistorico3 set cidehistorico = nextval('seque_ahistorico')");
                      pg_query("update ahistorico3 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
                      pg_query("update ahistorico3 set cclihistorico = '0'");
                      pg_query("update ahistorico3 set cipehistorico = '0'");
                      pg_query("update ahistorico3 set ccfohistorico = '1.152'");
                      pg_query("update ahistorico3 set cemphistorico = '$EmpNfe'");
                      pg_query("update ahistorico3 set cforhistorico= '$Fonnecedor'");
                      pg_query("update ahistorico3 set cienhistorico=  '$ideEntradahistorico'");
                      pg_query("insert into ahistorico select * from ahistorico3");
                      pg_query("delete from ahistorico3");
                      pg_close($conexaocdr);
                      echo "<script>alert('Lancamento Concluido com Suceso !!!');</script>";                        
                      echo "$voltalogin";
                      exit;
}
if ($Transferencia == '4') {
      $conexaoVideira = pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
      $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
      $ExcomandoSenha= pg_query($comandoSenha);
      $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
      if ($ResulcomandoSenha == '' ){
              pg_close($conexaoVideira);
              echo "$errologin";
              echo "$voltalogin";             
              exit;
      }
      $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
      $selecao = pg_query($conexaoVideira,$query);
      $resut= pg_fetch_array($selecao);
      if ($resut == '') {
                  pg_close($conexaoVideira);
                  echo "$errosenha";
                  echo "$voltalogin";                  
                  exit;
      }
      echo "<script>alert('Bem vindo');</script>";                 
      $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
      $selecaoSaidas=pg_query($conexaoVideira,$comandoSaidas);
      $cisahistorico=pg_fetch_array($selecaoSaidas);
      $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
      $idehistorico = $cisahistorico ['cidesaidas'];
      $ideempresa= $cisahistorico ['cempresasaidas'];
      $TotalSaidas= $cisahistorico ['ctotsaidas'];
      if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
          pg_close($conexaoVideira);
          echo "<script>alert('Numero Nota, Cliente ou Data Invalidos Por Favor Tente Novamente');</script>";
          echo "$voltalogin";                      
          exit;
      }
      pg_query("insert into ahistorico3 select * from ahistorico where cisahistorico = '$idehistorico'" );
      $comandoContador =  'SELECT COUNT(*) FROM ahistorico3';
      $Conta = pg_query($conexaoVideira,$comandoContador);
      $tottal=pg_fetch_array($Conta);
      $total = $tottal ['count'];
      $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
      $ExcomandoCNPJFornecedor= pg_query($conexaoVideira,$comandoCNPJFornecedor);
      $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
      $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
      pg_close($conexaoVideira);
      if(!@($conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@'))) {
          pg_close($conexaoJoinville);
          echo "$errotrolvideira";
          echo "$voltalogin";                      
          exit;
      }
      $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico3';
      $ContaV = pg_query($conexaoJoinville,$comandoContadorV);
      $tottalV=pg_fetch_array($ContaV);
      $totalV = $tottalV ['count'];
      while ($total <> $totalV ) {
          pg_close($conexaoJoinville);
          usleep(9000000);
          $conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
          $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico3';
          $ContaV = pg_query($conexaoJoinville,$comandoContadorV);
          $tottalV=pg_fetch_array($ContaV);
          $totalV = $tottalV ['count'];
          pg_close($conexaoJoinville);
          echo "<script>alert('Sincronizando);</script>";                          
          if ($total == $totalV){
              pg_close($conexaoJoinville);
              break;
              exit;
          }
      }
      $conexaoJoinville=pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
      $ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
      $ExComandoFornecedor = pg_query($conexaoJoinville,$ComandoFornecedor);
      $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
      $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
      if ($ResulComandoFornecedor == ''){
          pg_close($conexaoJoinville);
          echo "<script>alert('Fornecedor Não Cadastrado em Joinville');</script>";
          echo "$voltalogin";                          
          exit;
      }
      $comandoEmpresaDestino="select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino'";
      $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
      $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
      $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
      if ($ResultadocomandoEmpresaDestino == ''){
          pg_close($conexaoJoinville);
          echo "<script>alert('Empresa Destino Não Confere com o Cliente da Nfe Favor Verefique');</script>";
          echo "$voltalogin";                          
          exit;
      }
      $comandoVereficaNfe="select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor'";
      $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
      $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
      if ( $ResultadocomandoVereficaNfe >= '1'){
          pg_close($conexaoJoinville);
          echo "<script>alert('Esse Numero de Nfe Já existe para esse Fornecedor');</script>";
          echo "$voltalogin";                              
          exit;
      }
      pg_query("INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
      $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe'";
      $selecaoEntrada=pg_query($conexaoJoinville,$comandoEntrada);
      $cienhistorico=pg_fetch_array($selecaoEntrada);
      $ideEntradahistorico = $cienhistorico ['csidentradas'];
      if ($cienhistorico == ''){
          pg_query('delete from ahistorico3');
          pg_close($conexaoJoinville);
          echo "<script>alert('Nota Não Foi Incluida Automaticamente');</script>";                             
          echo '<br><br>';
          echo "<span style='color:red;'> Confira Os Dados Coletados </span> ";
          echo '<br><br>';
          echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";                            
          exit;
      }
      pg_query("update ahistorico3 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
      pg_query("update ahistorico3 set csaihisotorico = '0'");
      pg_query("update ahistorico3 set ctiphistorico = 'E'");
      pg_query("update ahistorico3 set cisahistorico = '0'");
      pg_query("update ahistorico3 set cidehistorico = nextval('seque_ahistorico')");
      pg_query("update ahistorico3 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
      pg_query("update ahistorico3 set cclihistorico = '0'");
      pg_query("update ahistorico3 set cipehistorico = '0'");
      pg_query("update ahistorico3 set ccfohistorico = '1.152'");
      pg_query("update ahistorico3 set cemphistorico = '$EmpNfe'");
      pg_query("update ahistorico3 set cforhistorico= '$Fonnecedor'");
      pg_query("update ahistorico3 set cienhistorico=  '$ideEntradahistorico'");
      pg_query("insert into ahistorico select * from ahistorico3");
      pg_query("delete from ahistorico3");
      pg_close($conexaoJoinville);
      echo "<script>alert('Lancamento Concluido com Suceso !!!');</script>";
      echo "$voltalogin";
      exit;
}
if ($Transferencia == '5') {
    $conexaoJoinville = pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha == '' ){
        echo '<br><br>';
        echo "<span style='color:red;'>Usuario Invalido </span>";        
        echo "<span style='color:red;'>Tente Novamente </span>";
        pg_close($conexaoJoinville);
        echo "$voltalogin";
        exit;
    }
    $query = "select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'";
    $selecao = pg_query($conexaoJoinville,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == '') {
        pg_close($conexaoJoinville);
        echo "$errologin";
        echo "$voltalogin";
        exit;
    }
    echo "<script>alert('Bem vindo');</script>";
    $comandoSaidas = "select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
    $selecaoSaidas=pg_query($comandoSaidas);
    $cisahistorico=pg_fetch_array($selecaoSaidas);
    $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
    $idehistorico = $cisahistorico ['cidesaidas'];
    $ideempresa= $cisahistorico ['cempresasaidas'];
    $TotalSaidas= $cisahistorico ['ctotsaidas'];
    if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
        pg_close($conexaoJoinville);
        echo "<script>alert('Numero Nota, Cliente ou Data Invalidos Por Favor Tente Novamente');</script>";
        echo "$voltalogin";                      
        exit;
    }
    pg_query("insert into ahistorico4 select * from ahistorico where cisahistorico = '$idehistorico'" );
    $comandoContador =  'SELECT COUNT(*) FROM ahistorico4';
    $Conta = pg_query($comandoContador);
    $tottal=pg_fetch_array($Conta);
    $total = $tottal ['count'];
    $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
    $ExcomandoCNPJFornecedor= pg_query($comandoCNPJFornecedor);
    $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
    $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
    pg_close($conexaoJoinville);
    if(!@($conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@'))) {
        pg_close($conexaocdr);
        echo "<script>alert('');</script>";
        echo "<span style='color:red;'> Não foi possível estabelecer uma conexão com o banco de dados de Caçador .</span>";
        echo "$voltalogin";
        exit;
    }
    echo "<script>alert('Banco de Dados Troll_Cacador Conectado com Sucesso ');</script>";
    $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico4';
    $ContaV = pg_query($conexaocdr,$comandoContadorV);
    $tottalV=pg_fetch_array($ContaV);
    $totalV = $tottalV ['count'];
    while ($total <> $totalV ){
        pg_close($conexaocdr);
        usleep(9000000);
        $conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
        $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico4';
        $ContaV = pg_query($conexaocdr,$comandoContadorV);
        $tottalV=pg_fetch_array($ContaV);
        $totalV = $tottalV ['count'];
        pg_close($conexaocdr);
        echo "<script>alert('Sincronizando');</script>";                         
        if ($total == $totalV){
            break;
        }
    }
    $conexaocdr=pg_connect ('host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@');
    $ComandoFornecedor ="select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj'";
    $ExComandoFornecedor = pg_query($conexaocdr,$ComandoFornecedor);
    $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
    $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
    if ($ResulComandoFornecedor == ''){
        pg_close($conexaocdr);
        echo "<script>alert('Fornecedor Não Cadastrado em Caçador');</script>";
        echo "$voltalogin";                          
        exit;
    }
    $comandoEmpresaDestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino'";
    $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
    $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
    $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
    if ($ResultadocomandoEmpresaDestino == ''){
        pg_close($conexaocdr);
        echo "<script>alert('Empresa Destino Não Confere com o Cliente da Nfe Favor Verefique');</script>";
        echo "$voltalogin";                          
        exit;
    }
    $comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor' ";
    $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
    $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
    if ( $ResultadocomandoVereficaNfe >= '1'){
        pg_close($conexaocdr);
        echo "<script>alert('Esse Numero de Nfe Já existe para esse Fornecedor');</script>";                      
        echo "$voltalogin";
        exit;
    }
    pg_query("INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe','$NumeroNfe',
            '$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1.152',
            '0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,'0',null,'$login','','$EmpNfe','01','',
            '0.00','0.00','','0.00',null,'2','0.00','0.00','0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00',
            '0.00','0',null)");
    $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe'";
    $selecaoEntrada=pg_query($conexaocdr,$comandoEntrada);
    $cienhistorico=pg_fetch_array($selecaoEntrada);
    $ideEntradahistorico = $cienhistorico ['csidentradas'];
    if ($cienhistorico == ''){
        pg_query('delete from ahistorico4');
        pg_close($conexaocdr);
        echo "<script>alert('Nota Não Foi Incluida Automaticamente');</script>";                            
        echo '<br><br>';
        echo "<span style='color:red;'> Confira Os Dados Coletados </span>";
        echo '<br><br>';
        echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";                                                            
        exit;
    }
    pg_query("update ahistorico4 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
    pg_query("update ahistorico4 set csaihisotorico = '0'");
    pg_query("update ahistorico4 set ctiphistorico = 'E'");
    pg_query("update ahistorico4 set cisahistorico = '0'");
    pg_query("update ahistorico4 set cidehistorico = nextval('seque_ahistorico')");
    pg_query("update ahistorico4 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
    pg_query("update ahistorico4 set cclihistorico = '0'");
    pg_query("update ahistorico4 set cipehistorico = '0'");
    pg_query("update ahistorico4 set ccfohistorico = '1.152'");
    pg_query("update ahistorico4 set cemphistorico = '$EmpNfe'");
    pg_query("update ahistorico4 set cforhistorico= '$Fonnecedor'");
    pg_query("update ahistorico4 set cienhistorico=  '$ideEntradahistorico'");
    pg_query("insert into ahistorico select * from ahistorico4");
    pg_query("delete from ahistorico4");
    pg_close($conexaocdr);
    echo "<script>alert('Lancamento Concluido com Suceso !!!');</script>";
    echo "$voltalogin";
    exit;
}
if ($Transferencia == '6'){
    $conexaoJoinville = pg_connect ('host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
    pg_connect ('host=192.168.10.30 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@');
    $comandoSenha= "select cnomope from parametros where cnomope= '$login'";
    $ExcomandoSenha= pg_query($comandoSenha);
    $ResulcomandoSenha= pg_fetch_array($ExcomandoSenha);
    if ($ResulcomandoSenha == '' ){
        pg_close($conexaoJoinville);
        echo "$errologin";
        echo "$voltalogin";              
        exit;
    }
    $query ="select cnomope,csenhausuario from parametros where cnomope= '$login' and csenhausuario='$senha'  ";
    $selecao = pg_query($conexaoJoinville,$query);
    $resut= pg_fetch_array($selecao);
    if ($resut == ''){
        pg_close($conexaoJoinville);
        echo "$errosenha";
        echo "$voltalogin";
        exit;
    }
    echo"<script>alert('Bem vindo');</script>";
    $comandoSaidas ="select cidesaidas,cempresasaidas,cnpj_saidas,ctotsaidas from asaidas where cemisaidas = '$DataNfe' and cclisaidas = '$ClientNfe' and cnotsaidas = '$NumeroNfe'";
    $selecaoSaidas=pg_query($conexaoJoinville,$comandoSaidas);
    $cisahistorico=pg_fetch_array($selecaoSaidas);
    $cnpjEmpressaDestino= $cisahistorico['cnpj_saidas'];
    $idehistorico = $cisahistorico ['cidesaidas'];
    $ideempresa= $cisahistorico ['cempresasaidas'];
    $TotalSaidas= $cisahistorico ['ctotsaidas'];
    if ($cisahistorico == '' or $cnpjEmpressaDestino == '' ){
        pg_close($conexaoJoinville);
        echo "<script>alert('Numero Nota, Cliente ou Data Invalidos Por Favor Tente Novamente');</script>";
        echo "$voltalogin";
        exit;
    }
    pg_query("insert into ahistorico4 select * from ahistorico where cisahistorico = '$idehistorico'");
    $comandoContador =  'SELECT COUNT(*) FROM ahistorico4';
    $Conta = pg_query($conexaoJoinville,$comandoContador);
    $tottal=pg_fetch_array($Conta);
    $total = $tottal ['count'];
    $comandoCNPJFornecedor= "Select ccnpjempresa from tempresa where ccodempresa = '$ideempresa' ";
    $ExcomandoCNPJFornecedor= pg_query($conexaoJoinville,$comandoCNPJFornecedor);
    $ResulcomandoCNPJFornecedor= pg_fetch_array($ExcomandoCNPJFornecedor);
    $cnpj= $ResulcomandoCNPJFornecedor ['ccnpjempresa'];
    pg_close($conexaoJoinville);
    if(!@($conexaoVideira=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@'))){
        pg_close($conexaoVideira);
        echo "$errotrolvideira";
        echo "$voltalogin";
        exit;
    }
    echo '<br><br>';
    echo "<span style='color:red;'> Banco de Dados Troll_Videira Conectado com Sucesso .</span>!";
    $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico4';
    $ContaV = pg_query($conexaoVideira,$comandoContadorV);
    $tottalV=pg_fetch_array($ContaV);
    $totalV = $tottalV ['count'];
    while ($total <> $totalV ){
        pg_close($conexaoVideira);
        usleep(9000000);
        $conexaoVideira=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
        $comandoContadorV = 'SELECT COUNT(*) FROM ahistorico4';
        $ContaV = pg_query($conexaoVideira,$comandoContadorV);
        $tottalV=pg_fetch_array($ContaV);
        $totalV = $tottalV ['count'];
        pg_close($conexaoVideira);
        echo "<script>alert('Sincronizando');</script>";                          
        if ($total == $totalV){
            break;
        } 
    }
    $conexaoVideira=pg_connect ('host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@');
    $ComandoFornecedor = "select ccodfornecedor from afornecedor where ccgcfornecedor = '$cnpj' ";
    $ExComandoFornecedor = pg_query($conexaoVideira,$ComandoFornecedor);
    $ResulComandoFornecedor = pg_fetch_array($ExComandoFornecedor);
    $Fonnecedor = $ResulComandoFornecedor['ccodfornecedor'];
    if ($ResulComandoFornecedor == ''){
        pg_close($conexaoVideira);
        echo "<script>alert('Fornecedor Não Cadastrado em Caçador');</script>";                          
        echo "$voltalogin";
        exit;
    }
    $comandoEmpresaDestino= "select ccodempresa from tempresa where ccnpjempresa = '$cnpjEmpressaDestino' ";
    $ExcomandoEmpresaDestino= pg_query($comandoEmpresaDestino);
    $ResultadocomandoEmpresaDestino= pg_fetch_array($ExcomandoEmpresaDestino);
    $EmpNfe=$ResultadocomandoEmpresaDestino['ccodempresa'];
    if ($ResultadocomandoEmpresaDestino == ''){
        pg_close($conexaoVideira);
        echo "<script>alert('Empresa Destino Não Confere com o Cliente da Nfe Favor Verefique');</script>";                                                    
        echo "$voltalogin";
        exit;
    }
    $comandoVereficaNfe= "select cnfientradas from aentradas where cnfientradas = '$NumeroNfe'and cforentradas = '$Fonnecedor' ";
    $ExcomandocomandoVereficaNfe= pg_query($comandoVereficaNfe);
    $ResultadocomandoVereficaNfe= pg_fetch_array($ExcomandocomandoVereficaNfe);
    if ( $ResultadocomandoVereficaNfe >= '1'){
        pg_close($conexaoVideira);
        echo "<script>alert('Esse Numero de Nfe Já existe para esse Fornecedor ');</script>";
        echo "$voltalogin";                              
        exit;
    }
    pg_query("INSERT INTO aentradas(
            csidentradas, ctipentradas, cforentradas, cemientradas, cdenentradas,
            cnfientradas, cvalentradas, cvprentradas, cicmentradas, cbasentradas,
            cipientradas, csubentradas, cfreentradas, cfinentradas, caceentradas,
            clucentradas, cfopentradas, cdesentradas, cententradas, ctraentradas,
            ctfreentradas, cqtventradas, cespentradas, cdtcaentradas, chocaentradas,
            cdtatentradas, choatentradas, copeatentradas, copecaentrdada,
            cusucaentrada, cusuatentrada, cempentrada, i_aen_serie_nf, s_aen_obs,
            n_aen_base_substituicao, n_aen_base_isenta, s_aen_cfop_contabil,
            n_margem_convenio_subs, i_aen_ide_pedido, i_aen_codigo_tna, n_aen_valor_pis,
            n_aen_valor_cofins, n_aen_valor_pis_st, n_aen_valor_cofins_st,
            s_aen_protocolo_nfe, s_aen_chave_nfe, n_aen_seguro, s_aen_modelo_nota,
            i_aen_ind_frete, i_aen_exclui_sped, n_aen_base_st_xml, n_aen_valor_st_xml,
            n_aen_custo_operacional, n_aen_tot_iss, i_aen_ide_saida_trans,
            i_aen_codigo_afa)
            VALUES (nextval('seque_aentradas'),'V','$Fonnecedor','$DataNfe','$DataNfe',
            '$NumeroNfe','$TotalSaidas','$TotalSaidas','0.00','0.00','0.00','0.00','0.00','0.00',
            '0.00','0.00','1.152','0.00','0.00',NULL,'PAGO','0','','$DataNfe','$time',null,null,
            '0',null,'$login','','$EmpNfe','01','','0.00','0.00','','0.00',null,'2','0.00','0.00',
            '0.00','0.00','','','0.00','','0','0','0.00','0.00','0.00','0.00','0',null)");
            $comandoEntrada = "select csidentradas from aentradas where cemientradas = '$DataNfe' and cnfientradas = 
            '$NumeroNfe' and cforentradas =  '$Fonnecedor' and cempentrada = '$EmpNfe' ";
            $selecaoEntrada=pg_query($conexaoVideira,$comandoEntrada);
            $cienhistorico=pg_fetch_array($selecaoEntrada);
            $ideEntradahistorico = $cienhistorico ['csidentradas'];
            if ($cienhistorico == ''){
                pg_query('delete from ahistorico4');
                pg_close($conexaoVideira);
                echo "<script>alert('Nota Não Foi Incluida Automaticamente');</script>";
                echo "<br><br>";
                echo "<span style='color:red;'> Confira Os Dados Coletados </span> ";
                echo '<br><br>';
                echo " '$EmpNfe', '$Fonnecedor', Emisao: '$DataNfe', Numero Da Nfe: '$NumeroNfe', Empresa Da Nfe: '$EmpNfe'";
                exit;
            }
            pg_query("update ahistorico4 set centhistorico = csaihisotorico where cprohistorico = cprohistorico");
            pg_query("update ahistorico4 set csaihisotorico = '0'");
            pg_query("update ahistorico4 set ctiphistorico = 'E'");
            pg_query("update ahistorico4 set cisahistorico = '0'");
            pg_query("update ahistorico4 set cidehistorico = nextval('seque_ahistorico')");
            pg_query("update ahistorico4 set cmothistorico= 'TRANFERENCIA DE CACADOR FEITA AUTOMATICAMENTE'");
            pg_query("update ahistorico4 set cclihistorico = '0'");
            pg_query("update ahistorico4 set cipehistorico = '0'");
            pg_query("update ahistorico4 set ccfohistorico = '1.152'");
            pg_query("update ahistorico4 set cemphistorico = '$EmpNfe'");
            pg_query("update ahistorico4 set cforhistorico= '$Fonnecedor'");
            pg_query("update ahistorico4 set cienhistorico=  '$ideEntradahistorico'");
            pg_query("insert into ahistorico select * from ahistorico4");
            pg_query("delete from ahistorico4");
            echo "<script>alert('Lancamento Concluido com Suceso !!!');</script>";
            echo "$voltalogin";
            exit;
}	  
?>
