

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.10.30/Desenvolver/Idpaf.php';</script>";
$errocon="<script>alert('Não foi possivel conectar ao Banco de Dados');</script>";

$base=$_POST["Base"];

if ($base == ''){
    echo "<script>alert('Selecione uma base..');</script>";
    echo "$voltalogin";    
}
$filtro1=$_POST["id"];
if ($filtro1 =='' or $filtro1 < 0 ){
    echo "<script>alert('Número do PAF inválido');</script>";
    echo "$voltalogin";
    
}
$filtro2=$_POST["id2"];
if ($filtro2 =='' or $filtro2 < 0 ){
    echo "<script>alert('Número do PAF inválido');</script>";
    echo "$voltalogin";
    
}

date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('Y-m-d');

if ($base == 'C'){
    if(!@($conexao=pg_connect ("host=192.168.16.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
}

if ($base == 'L'){
    if(!@($conexao=pg_connect ("host=192.168.11.2 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
}
if ($base == 'V'){
    if(!@($conexao=pg_connect ("host=192.168.9.10 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
}
if ($base == 'J'){
    if(!@($conexao=pg_connect ("host=192.168.16.77 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
        pg_close($conexao);
        echo "$errocon";
        echo "$voltalogin";
        exit;
    }
}
pg_query("select logar('COPIA',1,0)");
$com=pg_query("update aprodutos set i_paf_ide = nextval('sequencia_paf') where i_paf_ide >= $filtro1 and i_paf_ide <=$filtro2 ");
if (!$com){
    pg_close($conexao);
    echo "<p style=background:#000000; align=center <br/><b><font size=30 color=#FF0000>ERRO!!! ** Ao atulizar dados na tabela Log2 de Caçador**</font></b></p>";
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
echo "<script>alert('Atualizado!!');</script>";

   

?>
    <!DOCTYPE html>
    <html>
    <head>
    <center><img src="img/fundo1.jpg"alt="10" heigth ="100px" width="400px" ></center>
    <center><img src=img/okk.jpg alt="400" heigth ="400px" width="300px" ></center>
<link rel="stylesheet" href="css/style.css"></link>
<center><form name = "form1" method= "post" action= "Idpaf.php"></center>
<center><input class="btn btn-green"  type="submit" name="inativar" value="Voltar" />
</center>

</head>
</html>

   

    




