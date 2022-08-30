

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.10.190/Desenvolver/backup.html';</script>";
$errocon="<script>alert('Não foi possivel conectar ao Banco de Dados');</script>";

$base=$_POST["Base"];

if ($base == ''){
    echo "<script>alert('Selecione uma base..');</script>";
    echo "$voltalogin";    
}
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');

if ($base <> 'R'){
    if ($base == 'C'){
        if(!@($conexao=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
            pg_close($conexao);
            echo "$errocon";
            echo "$voltalogin";
            exit;
        }
    }
    if ($base == 'L'){
        if(!@($conexao=pg_connect ("host=192.168.11.2 dbname=Troll port=5431 user=postgres password=ky$14gr@"))){
            pg_close($conexao);
            echo "$errocon";
            echo "$voltalogin";
            exit;
        }
    }
    if ($base == 'V'){
        if(!@($conexao=pg_connect ("host=192.168.10.99 dbname=troll port=5433 user=postgres password=ky$14gr@"))){
            pg_close($conexao);
            echo "$errocon";
            echo "$voltalogin";
            exit;
        }
    }
    if ($base == 'J'){
        if(!@($conexao=pg_connect ("host=192.168.10.153 dbname=troll port=5434 user=postgres password=ky$14gr@"))){
            pg_close($conexao);
            echo "$errocon";
            echo "$voltalogin";
            exit;
        }
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    ?>
    <!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Backup Com Sucesso  em: '$dia' , '$time'  </font></b></p>";
    
}
if ($base == 'R'){
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=result_cdr port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=result_joinville port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=result_lages port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_cdr port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_lages port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    if(!@($conexao=pg_connect ("host=192.168.10.190 dbname=troll_videira port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
    pg_query("select logar('COPIA',1,0)");
    $com=pg_query("INSERT INTO tbackup(id, datab, hora, copiado, zipado, encaminhado, erro, tipo)
    VALUES (nextval('seque_tbackup'),'$dia','$time','1','1','1',0,'1');");
    if (!$com){
        pg_close($conexao);
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
    pg_close($conexao);
    ?>
    <!DOCTYPE html>
<html>
<head>    
<link rel="stylesheet" href="css/style.css"></link>
<center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
</head>
</html>
<?php
echo "<p style=background:#00FF00; align=center <br/><b><font size=30 color=#0000FF>Backup Com Sucesso  em: '$dia' , '$time'  </font></b></p>"; 
}
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
    




