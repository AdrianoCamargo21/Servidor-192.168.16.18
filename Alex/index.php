<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css"></link>
	<head>
		<meta charset="utf-8">
		<title>Vendas/Estoque</title>		
		<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
	</head>
	<body>
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
	<center><img src="img/fundo1.png"alt="10" heigth ="100px" width="400px" ></center>
	<table width="100%" cellspacing="1" cellpadding="3" border="5" bgcolor="#E0FFFF">
    <tr>
    <br><br>
    <td><font color="Black" face="arial, verdana, helvetica">
    <center>
		<h1>Consulta para Reposição</h1>
		<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
		<?php include_once("conexao.php"); 
		date_default_timezone_set('America/Sao_Paulo');
		$dia= date('Y-m-d');?>
		
		<form method="POST" action="salvar_post.php">
		
			
		<br><br>
		Dados do Relátorio
		<INPUT type="radio" name="dados" value="E" checked = “checked”>Total de Estoque 	
		<input type="radio" name="dados" value="V" onClick="expandit(this)">Venda e Estoque
		<span style="display:none" style=&{head};>
        <br><br>
        <font size=4 color=#FF0000><strong><center>**Esse relatório demora um pouco pois o mesmo Analiza a Venda e Custo tbm como o Estoque atual das lojas**</center></strong></font>        
        <br>
        De:
        <input  name= "datai" type= "date" value = <?php echo $dia ?> >
        Até:
       <input  name= "dataf" type= "date" value = <?php echo $dia ?>  >        
        </span>		
		<br><br>
		Tipo de Relatório:
        <INPUT type="radio" name="rel" value="T" checked = “checked”>Total 	
        <INPUT type="radio" name="rel" value="M">Total Por Marca        
        <input type="radio" name="rel" value="C" onClick="expandit(this)">Marca e Código
        <span style="display:none" style=&{head};>
        <br>
        <INPUT type="radio" name="tipo" value="C" checked = “checked”>C/ Descrição 	
        <INPUT type="radio" name="tipo" value="S">S/ Descrição
        </span>
        
        
        
        
        
		<br><br>
			<label>Linha:</label>
			<select name="linha" id="linha">
				<option value="">Escolha a Linha</option>
				<?php
					$result_cat_post = "SELECT * FROM tlinha ORDER BY cdeslinha";
					$resultado_cat_post = pg_query($conn, $result_cat_post);
					while($row_cat_post = pg_fetch_array($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['ccodlinha'].'">'.$row_cat_post['cdeslinha'].'</option>';
					}
				?>
			</select><br><br>
			<label>Grupo:</label>
			
			<select name="grupo" id="grupo">
				<option value="">Escolha o Grupo</option>
				<?php
					$result_cat_post = "SELECT * FROM tgrupo ORDER BY cdesgrupo";
					$resultado_cat_post = pg_query($conn, $result_cat_post);
					while($row_cat_post = pg_fetch_array($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['ccodgrupo'].'">'.$row_cat_post['cdesgrupo'].'</option>';
					}
				?>
			</select><br><br>		
			<label>Marca:</label>
			<select name="marca" id="marca">
				<option value="">Escolha a Marca</option>
				<?php
					$result_cat_post = "SELECT * FROM tmarca ORDER BY cdesmarca";
					$resultado_cat_post = pg_query($conn, $result_cat_post);
					while($row_cat_post = pg_fetch_array($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['ccodmarca'].'">'.$row_cat_post['cdesmarca'].'</option>';
					}
				?>
			</select><br><br>
			
			<label>Departamento:</label>
			<select name="departamento" id="departamento">
				<option value="">Escolha o Departamento</option>
				<?php
					$result_cat_post = "SELECT * FROM tdepartamento ORDER BY cdesdepartamento";
					$resultado_cat_post = pg_query($conn, $result_cat_post);
					while($row_cat_post = pg_fetch_array($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['ccoddepartamento'].'">'.$row_cat_post['cdesdepartamento'].'</option>';
					}
				?>
			</select><br><br>
			
			
			
			<input class="btn btn-green" type="submit" value="ENVIAR"/>
			<input class="btn btn-red" type="reset" value="Cancelar" />	
			<br><br>
		</form>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		</center>

		
	</body>
</html>