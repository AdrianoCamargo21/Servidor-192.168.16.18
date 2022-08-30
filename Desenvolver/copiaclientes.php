<!DOCTYPE html>
<html>
<head>
</head>
</html>
<?php
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

<BODY>
</BODY>
</HTML>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
set_time_limit(90000);
date_default_timezone_set('America/Sao_Paulo');
$time=date('H:i:s');
$dia= date('d-m-Y');

if(!@($conc=pg_connect ("host=192.168.10.30 dbname=troll port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados local_Caçador Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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

if(!@($conj=pg_connect ("host=192.168.10.190 dbname=troll_joinville port=5430 user=postgres password=ky$14gr@"))){
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=30 color=#000000> Sem Comunicação Banco de Dados Local_Joinville Data:$dia  Hora:$time </font></b></p>";
    echo "<p style=background:#FFFFFF ; align=center <br/><b><font size=10 color=#7CFC00>Caso Persista e o Adriano Não Estiver Na Sala Favor avisar o Adriano</font></b></p>";
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

$sql="select ccodigo,ccpf from aclientes where ccpf > 0 order by ccodigo";
$exsql=pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['ccodigo'];
    $cpf=$row['ccpf'];
    $com="select ccodigo from aclientes where ccpf='$cpf'";    
    $excom=pg_query($conc,$com);
    $rscom=pg_fetch_array($excom);
    $codn=$rscom['ccodigo'];
    if ($codn == '') {       
       $com="select *from aclientes where ccodigo = $cod ";
       $excom=pg_query($conj,$com);
       $rscom=pg_fetch_array($excom);
       $cnomecliente=$rscom['cnomecliente'];
       if ($cnomecliente== '') {
           $cnomecliente="''";
       }
       $csexo=$rscom['cnomecliente'];
       if ($csexo== '') {
           $csexo="''";
       }
       $csexo=$rscom['csexo'];
       if ($csexo== '') {
           $csexo="''";
       }
       $cnascimento=$rscom['cnascimento'];
       if ($cnascimento== '') {
           $cnascimento='NULL';
       }
       $cestadocivil=$rscom['cestadocivil'];
       if ($cestadocivil== '') {
           $cestadocivil="''";
       }
       $cmae=$rscom['cmae'];
       if ($cmae== '') {
           $cmae="''";
       }
       $cpai=$rscom['cpai'];
       if ($cpai== '') {
           $cpai="''";
       }
       $cdatacadastro=$rscom['cdatacadastro'];
       if ($cdatacadastro== '') {
           $cdatacadastro='NULL';
       }
       $cpessoa=$rscom['cpessoa'];
       if ($cpessoa== '') {
           $cpessoa="''";
       }
       $cdocumento=$rscom['cdocumento'];
       if ($cdocumento== '') {
           $cdocumento="''";
       }
       $ccpf=$rscom['ccpf'];
       if ($ccpf== '') {
           $ccpf="''";
       }
       $ccnpj=$rscom['ccnpj'];
       if ($ccnpj== '') {
           $ccnpj="''";
       }
       $cinsest=$rscom['cinsest'];
       if ($cinsest== '') {
           $cinsest="''";
       }
       $ctituloeleitor=$rscom['ctituloeleitor'];
       if ($ctituloeleitor== '') {
           $ctituloeleitor="''";
       }
       $cnaturalidadde=$rscom['cnaturalidadde'];
       if ($cnaturalidadde== '') {
           $cnaturalidadde="''";
       }
       $cestadonatural=$rscom['cestadonatural'];
       if ($cestadonatural== '') {
           $cestadonatural="''";
       }
       $cendereco=$rscom['cendereco'];
       if ($cendereco== '') {
           $cendereco="''";
       }
       $cbairro=$rscom['cbairro'];
       if ($cbairro== '') {
           $cbairro="''";
       }
       $cproximidade=$rscom['cproximidade'];
       if ($cproximidade== '') {
           $cproximidade="''";
       }
       $ccidade=$rscom['ccidade'];
       if ($ccidade== '') {
           $ccidade="''";
       }
       $ccep=$rscom['ccep'];
       if ($ccep== '') {
           $ccep="''";
       }
       $cuf=$rscom['cuf'];
       if ($cuf== '') {
           $cuf="''";
       }
       $cfoneresidencial=$rscom['cfoneresidencial'];
       if ($cfoneresidencial== '') {
           $cfoneresidencial="''";
       }
       $cfonecomercial=$rscom['cfonecomercial'];
       if ($cfonecomercial== '') {
           $cfonecomercial="''";
       }
       $cfonecelular=$rscom['cfonecelular'];
       if ($cfonecelular== '') {
           $cfonecelular="''";
       }
       $cemail=$rscom['cemail'];
       if ($cemail== '') {
           $cemail="''";
       }
       $chomepage=$rscom['chomepage'];
       if ($chomepage== '') {
           $chomepage="''";
       }
       $cconjuge=$rscom['cconjuge'];
       if ($cconjuge== '') {
           $cconjuge="''";
       }
       $cnasconjuge=$rscom['cnasconjuge'];
       if ($cnasconjuge== '') {
           $cnasconjuge='NULL';
       }
       $cmaeconjuge=$rscom['cmaeconjuge'];
       if ($cmaeconjuge== '') {
           $cmaeconjuge="''";
       }
       $cpaiconjuge=$rscom['cpaiconjuge'];
       if ($cpaiconjuge== '') {
           $cpaiconjuge="''";
       }
       $cdocconjuge=$rscom['cdocconjuge'];
       if ($cdocconjuge== '') {
           $cdocconjuge="''";
       }
       $ccpfconjuge=$rscom['ccpfconjuge'];
       if ($ccpfconjuge== '') {
           $ccpfconjuge="''";
       }
       $cloctraconjuge=$rscom['cloctraconjuge'];
       if ($cloctraconjuge== '') {
           $cloctraconjuge="''";
       }
       $cendtraconjuge=$rscom['cendtraconjuge'];
       if ($cendtraconjuge== '') {
           $cendtraconjuge="''";
       }
       $ctelconjuge=$rscom['ctelconjuge'];
       if ($ctelconjuge== '') {
           $ctelconjuge="''";
       }
       $ccelconjuge=$rscom['ccelconjuge'];
       if ($ccelconjuge== '') {
           $ccelconjuge="''";
       }
       $cproconjuge=$rscom['cproconjuge'];
       if ($cproconjuge== '') {
           $cproconjuge='NULL';
       }
       $crdaconjuge=$rscom['crdaconjuge'];
       if ($crdaconjuge== '') {
           $crdaconjuge='NULL';
       }
       $cadmconjuge=$rscom['cadmconjuge'];
       if ($cadmconjuge== '') {
           $cadmconjuge='NULL';
       }
       $cnatconjuge=$rscom['cnatconjuge'];
       if ($cnatconjuge== '') {
           $cnatconjuge="''";
       }
       $ctracliente=$rscom['ctracliente'];
       if ($ctracliente== '') {
           $ctracliente="''";
       }
       $cendtracliente=$rscom['cendtracliente'];
       if ($cendtracliente== '') {
           $cendtracliente="''";
       }
       $crdacliente=$rscom['crdacliente'];
       if ($crdacliente== '') {
           $crdacliente='NULL';
       }
       $cprofissaocliente=$rscom['cprofissaocliente'];
       if ($cprofissaocliente== '') {
           $cprofissaocliente='NULL';
       }
       $procliente=$rscom['procliente'];
       if ($procliente== '') {
           $procliente='NULL';
       }
       $coutrencliente=$rscom['coutrencliente'];
       if ($coutrencliente== '') {
           $coutrencliente='NULL';
       }
       $ccrecliente=$rscom['ccrecliente'];
       if ($ccrecliente== '') {
           $ccrecliente="''";
       }
       $climcarcliente=$rscom['climcarcliente'];
       if ($climcarcliente== '') {
           $climcarcliente='NULL';
       }
       $cfatmedcliente=$rscom['cfatmedcliente'];
       if ($cfatmedcliente== '') {
           $cfatmedcliente='NULL';
       }
       $cchecliente=$rscom['cchecliente'];
       if ($cchecliente== '') {
           $cchecliente="''";
       }
       $climchecliente=$rscom['climchecliente'];
       if ($climchecliente== '') {
           $climchecliente='NULL';
       }
       $clojrefcliente=$rscom['clojrefcliente'];
       if ($clojrefcliente== '') {
           $clojrefcliente="''";
       }
       $cultcomcliente=$rscom['cultcomcliente'];
       if ($cultcomcliente== '') {
           $cultcomcliente='NULL';
       }
       $ctipcliente=$rscom['ctipcliente'];
       if ($ctipcliente== '') {
           $ctipcliente='NULL';
       }
       $cptucliente=$rscom['cptucliente'];
       if ($cptucliente== '') {
           $cptucliente='NULL';
       }
       $ccodspccliente=$rscom['ccodspccliente'];
       if ($ccodspccliente== '') {
           $ccodspccliente='NULL';
       }
       $cendpagcliente=$rscom['cendpagcliente'];
       if ($cendpagcliente== '') {
           $cendpagcliente="''";
       }
       $ccidpagcliente=$rscom['ccidpagcliente'];
       if ($ccidpagcliente== '') {
           $ccidpagcliente="''";
       }
       $cestpagcliente=$rscom['cestpagcliente'];
       if ($cestpagcliente== '') {
           $cestpagcliente="''";
       }
       $cceppagcliente=$rscom['cceppagcliente'];
       if ($cceppagcliente== '') {
           $cceppagcliente="''";
       }
       $cemiavicliente=$rscom['cemiavicliente'];
       if ($cemiavicliente== '') {
           $cemiavicliente="''";
       }
       $cenvspccliente=$rscom['cenvspccliente'];
       if ($cenvspccliente== '') {
           $cenvspccliente="''";
       }
       $cavicobcliente=$rscom['cavicobcliente'];
       if ($cavicobcliente== '') {
           $cavicobcliente="''";
       }
       $cendcorcliente=$rscom['cendcorcliente'];
       if ($cendcorcliente== '') {
           $cendcorcliente="''";
       }
       $cblovencliente=$rscom['cblovencliente'];
       if ($cblovencliente== '') {
           $cblovencliente="''";
       }
       $cdatavipgtcliente=$rscom['cdatavipgtcliente'];
       if ($cdatavipgtcliente== '') {
           $cdatavipgtcliente='NULL';
       }
       $ccasprocliente=$rscom['ccasprocliente'];
       if ($ccasprocliente== '') {
           $ccasprocliente="''";
       }
       $cterprocliente=$rscom['cterprocliente'];
       if ($cterprocliente== '') {
           $cterprocliente="''";
       }
       $ccarprocliente=$rscom['ccarprocliente'];
       if ($ccarprocliente== '') {
           $ccarprocliente="''";
       }
       $coutbencliente=$rscom['coutbencliente'];
       if ($coutbencliente== '') {
           $coutbencliente="''";
       }
       $ccarprocliente=$rscom['ccarprocliente'];
       if ($ccarprocliente== '') {
           $ccarprocliente="''";
       }
       $coutbencliente=$rscom['coutbencliente'];
       if ($coutbencliente== '') {
           $coutbencliente="''";
       }
       $cdesoutbencliente=$rscom['cdesoutbencliente'];
       if ($cdesoutbencliente== '') {
           $cdesoutbencliente="''";
       }
       $ccodctbcliente=$rscom['ccodctbcliente'];
       if ($ccodctbcliente== '') {
           $ccodctbcliente='NULL';
       }
       $catlcadcliente=$rscom['catlcadcliente'];
       if ($catlcadcliente== '') {
           $catlcadcliente='NULL';
       }
       $cvencadcliente=$rscom['cvencadcliente'];
       if ($cvencadcliente== '') {
           $cvencadcliente='NULL';
       }
       $cfotcliente=$rscom['cfotcliente'];
       if ($cfotcliente== '') {
           $cfotcliente="''";
       }
       $casscliente=$rscom['casscliente'];
       if ($casscliente== '') {
           $casscliente="''";
       }
       $cdoccliente=$rscom['cdoccliente'];
       if ($cdoccliente== '') {
           $cdoccliente="''";
       }
       $canicliente=$rscom['canicliente'];
       if ($canicliente== '') {
           $canicliente="''";
       }
       $copccliente=$rscom['copccliente'];
       if ($copccliente== '') {
           $copccliente='NULL';
       }
       $cusccliente=$rscom['cusccliente'];
       if ($cusccliente== '') {
           $cusccliente="''";
       }
       $choccliente=$rscom['choccliente'];
       if ($choccliente== '') {
           $choccliente='NULL';
       }
       $cdtccliente=$rscom['cdtccliente'];
       if ($cdtccliente== '') {
           $cdtccliente='NULL';
       }
       $choccliente=$rscom['choccliente'];
       if ($choccliente== '') {
           $choccliente='NULL';
       }
       $cdtccliente=$rscom['cdtccliente'];
       if ($cdtccliente== '') {
           $cdtccliente='NULL';
       }
       $cdtacliente=$rscom['cdtacliente'];
       if ($cdtacliente== '') {
           $cdtacliente='NULL';
       }
       $choacliente=$rscom['choacliente'];
       if ($choacliente== '') {
           $choacliente='NULL';
       }
       $copacliente=$rscom['copacliente'];
       if ($copacliente== '') {
           $copacliente='NULL';
       }
       $cusacliente=$rscom['cusacliente'];
       if ($cusacliente== '') {
           $cusacliente="''";
       }
       $cempcliente=$rscom['cempcliente'];
       if ($cempcliente== '') {
           $cempcliente='NULL';
       }
       $cceptabcliente=$rscom['cceptabcliente'];
       if ($cceptabcliente== '') {
           $cceptabcliente="''";
       }
       $cregcliente=$rscom['cregcliente'];
       if ($cregcliente== '') {
           $cregcliente='NULL';
       }
       $ccodconvenio=$rscom['ccodconvenio'];
       if ($ccodconvenio== '') {
           $ccodconvenio='NULL';
       }
       $ctipimpcliente=$rscom['ctipimpcliente'];
       if ($ctipimpcliente== '') {
           $ctipimpcliente='NULL';
       }
       $cluzcliente=$rscom['cluzcliente'];
       if ($cluzcliente== '') {
           $cluzcliente="''";
       }
       $cextin01=$rscom['cextin01'];
       if ($cextin01== '') {
           $cextin01="''";
       }
       $ccarga01=$rscom['ccarga01'];
       if ($ccarga01== '') {
           $ccarga01='NULL';
       }
       $crecarga01=$rscom['crecarga01'];
       if ($crecarga01== '') {
           $crecarga01='NULL';
       }
       $cextin02=$rscom['cextin02'];
       if ($cextin02== '') {
           $cextin02="''";
       }
       $ccarga02=$rscom['ccarga02'];
       if ($ccarga02== '') {
           $ccarga02='NULL';
       }
       $crecarga02=$rscom['crecarga02'];
       if ($crecarga02== '') {
           $crecarga02='NULL';
       }
       $cextin03=$rscom['cextin03'];
       if ($cextin03== '') {
           $cextin03="''";
       }
       $ccarga03=$rscom['ccarga03'];
       if ($ccarga03== '') {
           $ccarga03='NULL';
       }
       $crecarga03=$rscom['crecarga03'];
       if ($crecarga03== '') {
           $crecarga03='NULL';
       }
       $cextin04=$rscom['cextin04'];
       if ($cextin04== '') {
           $cextin04="''";
       }
       $ccarga04=$rscom['ccarga04'];
       if ($ccarga04== '') {
           $ccarga04='NULL';
       }
       $crecarga04=$rscom['crecarga04'];
       if ($crecarga04== '') {
           $crecarga04='NULL';
       }
       $cextin05=$rscom['cextin05'];
       if ($cextin05== '') {
           $cextin05="''";
       }
       $ccarga05=$rscom['ccarga05'];
       if ($ccarga05== '') {
           $ccarga05='NULL';
       }
       $crecarga05=$rscom['crecarga05'];
       if ($crecarga05== '') {
           $crecarga05='NULL';
       }
       $cextin06=$rscom['cextin06'];
       if ($cextin06== '') {
           $cextin06="''";
       }
       $ccarga06=$rscom['ccarga06'];
       if ($ccarga06== '') {
           $ccarga06='NULL';
       }
       $crecarga06=$rscom['crecarga06'];
       if ($crecarga06== '') {
           $crecarga06='NULL';
       }
       $cextin07=$rscom['cextin07'];
       if ($cextin07== '') {
           $cextin07="''";
       }
       $ccarga07=$rscom['ccarga07'];
       if ($ccarga07== '') {
           $ccarga07='NULL';
       }
       $crecarga07=$rscom['crecarga07'];
       if ($crecarga07== '') {
           $crecarga07='NULL';
       }
       $cextin08=$rscom['cextin08'];
       if ($cextin08== '') {
           $cextin08="''";
       }
       $ccarga08=$rscom['ccarga08'];
       if ($ccarga08== '') {
           $ccarga08='NULL';
       }
       $crecarga08=$rscom['crecarga08'];
       if ($crecarga08== '') {
           $crecarga08='NULL';
       }
       $cextin09=$rscom['cextin09'];
       if ($cextin09== '') {
           $cextin09="''";
       }
       $ccarga09=$rscom['ccarga09'];
       if ($ccarga09== '') {
           $ccarga09='NULL';
       }
       $crecarga09=$rscom['crecarga09'];
       if ($crecarga09== '') {
           $crecarga09='NULL';
       }
       $cextin10=$rscom['cextin10'];
       if ($cextin10== '') {
           $cextin10="''";
       }
       $ccarga10=$rscom['ccarga10'];
       if ($ccarga10== '') {
           $ccarga10='NULL';
       }
       $crecarga10=$rscom['crecarga10'];
       if ($crecarga10== '') {
           $crecarga10='NULL';
       }
       $cextin11='';
       if ($cextin11== '') {
           $cextin11="''";
       }
       $ccarga11='';
       if ($ccarga11== '') {
           $ccarga11='NULL';
       }
       $crecarga11='';
       if ($crecarga11== '') {
           $crecarga11='NULL';
       }
       $ccodantigo=$rscom['ccodantigo'];
       if ($ccodantigo== '') {
           $ccodantigo='NULL';
       }
       $cobsclientes=$rscom['cobsclientes'];
       if ($cobsclientes== '') {
           $cobsclientes="''";
       }
       $senha_net=$rscom['senha_net'];
       if ($senha_net== '') {
           $senha_net="''";
       }
       $nivel_net=$rscom['nivel_net'];
       if ($nivel_net== '') {
           $nivel_net="''";
       }
       $ativacao_net=$rscom['ativacao_net'];
       if ($ativacao_net== '') {
           $ativacao_net='NULL';
       }
       $bloqueio_net=$rscom['bloqueio_net'];
       if ($bloqueio_net== '') {
           $bloqueio_net='NULL';
       }
       $cod_fotografo=$rscom['cod_fotografo'];
       if ($cod_fotografo== '') {
           $cod_fotografo='NULL';
       }
       $forma_cadastro=$rscom['forma_cadastro'];
       if ($forma_cadastro== '') {
           $forma_cadastro='NULL';
       }
       $empresa_cadastro=$rscom['empresa_cadastro'];
       if ($empresa_cadastro== '') {
           $empresa_cadastro='NULL';
       }
       $dependente_1=$rscom['dependente_1'];
       if ($dependente_1== '') {
           $dependente_1="''";
       }
       $dependente_2=$rscom['dependente_2'];
       if ($dependente_2== '') {
           $dependente_2="''";
       }
       $dependente_3=$rscom['dependente_3'];
       if ($dependente_3== '') {
           $dependente_3="''";
       }
       $dependente_4=$rscom['dependente_4'];
       if ($dependente_4== '') {
           $dependente_4="''";
       }
       $dependente_5=$rscom['dependente_5'];
       if ($dependente_5== '') {
           $dependente_5="''";
       }
       $dependente_6=$rscom['dependente_6'];
       if ($dependente_6== '') {
           $dependente_6="''";
       }
       $dependente_7=$rscom['dependente_7'];
       if ($dependente_7== '') {
           $dependente_7="''";
       }
       $dependente_8=$rscom['dependente_8'];
       if ($dependente_8== '') {
           $dependente_8="''";
       }
       $dependente_9=$rscom['dependente_9'];
       if ($dependente_9== '') {
           $dependente_9="''";
       }
       $dependente_10=$rscom['dependente_10'];
       if ($dependente_10== '') {
           $dependente_10="''";
       }
       $valor_mensal=$rscom['valor_mensal'];
       if ($valor_mensal== '') {
           $valor_mensal='NULL';
       }
       $dat_inc_celesc=$rscom['dat_inc_celesc'];
       if ($dat_inc_celesc== '') {
           $dat_inc_celesc='NULL';
       }
       $dat_alt_celesc=$rscom['dat_alt_celesc'];
       if ($dat_alt_celesc== '') {
           $dat_alt_celesc='NULL';
       }
       $dat_exc_celesc=$rscom['dat_exc_celesc'];
       if ($dat_exc_celesc== '') {
           $dat_exc_celesc='NULL';
       }
       $mot_bloq_venda=$rscom['mot_bloq_venda'];
       if ($mot_bloq_venda== '') {
           $mot_bloq_venda="''";
       }
       $limite_credito=$rscom['limite_credito'];
       if ($limite_credito== '') {
           $limite_credito='NULL';
       }
       $ati_ult_limite=$rscom['ati_ult_limite'];
       if ($ati_ult_limite== '') {
           $ati_ult_limite='NULL';
       }
       $contatos_cliente=$rscom['contatos_cliente'];
       if ($contatos_cliente== '') {
           $contatos_cliente="''";
       }
       $desconto_cliente=$rscom['desconto_cliente'];
       if ($desconto_cliente== '') {
           $desconto_cliente='NULL';
       }
       $fax_cliente=$rscom['fax_cliente'];
       if ($fax_cliente== '') {
           $fax_cliente="''";
       }
       $bloq_vendas_aprazo=$rscom['bloq_vendas_aprazo'];
       if ($bloq_vendas_aprazo== '') {
           $bloq_vendas_aprazo='NULL';
       }
       $i_acl_codigo_ven_foto=$rscom['i_acl_codigo_ven_foto'];
       if ($i_acl_codigo_ven_foto== '') {
           $i_acl_codigo_ven_foto='NULL';
       }
       $i_acl_tab_preco=$rscom['i_acl_tab_preco'];
       if ($i_acl_tab_preco== '') {
           $i_acl_tab_preco='NULL';
       }
       $i_acl_perc_aplicar_venda=$rscom['i_acl_perc_aplicar_venda'];
       if ($i_acl_perc_aplicar_venda== '') {
           $i_acl_perc_aplicar_venda='NULL';
       }
       $i_cond_pagto_padrao=$rscom['i_cond_pagto_padrao'];
       if ($i_cond_pagto_padrao== '') {
           $i_cond_pagto_padrao='NULL';
       }
       $s_acl_outro_fone=$rscom['s_acl_outro_fone'];
       if ($s_acl_outro_fone== '') {
           $s_acl_outro_fone="''";
       }
       $s_acl_outro_fone2=$rscom['s_acl_outro_fone2'];
       if ($s_acl_outro_fone2== '') {
           $s_acl_outro_fone2="''";
       }
       $s_acl_msn=$rscom['s_acl_msn'];
       if ($s_acl_msn== '') {
           $s_acl_msn="''";
       }
       $s_acl_skype=$rscom['s_acl_skype'];
       if ($s_acl_skype== '') {
           $s_acl_skype='NULL';
       }
       $i_acl_codigo_fon=$rscom['i_acl_codigo_fon'];
       if ($i_acl_codigo_fon== '') {
           $i_acl_codigo_fon='NULL';
       }
       $d_acl_data_casamento=$rscom['d_acl_data_casamento'];
       if ($d_acl_data_casamento== '') {
           $d_acl_data_casamento='NULL';
       }
       $n_acl_limite_cartao_fidelidade=$rscom['n_acl_limite_cartao_fidelidade'];
       if ($n_acl_limite_cartao_fidelidade== '') {
           $n_acl_limite_cartao_fidelidade='NULL';
       }
       $d_acl_entrada_cartao_fid=$rscom['d_acl_entrada_cartao_fid'];
       if ($d_acl_entrada_cartao_fid== '') {
           $d_acl_entrada_cartao_fid='NULL';
       }
       $d_acl_bloqueio_cartao_fid=$rscom['d_acl_bloqueio_cartao_fid'];
       if ($d_acl_bloqueio_cartao_fid== '') {
           $d_acl_bloqueio_cartao_fid='NULL';
       }
       $d_acl_entrega_cartao_fid=$rscom['d_acl_entrega_cartao_fid'];
       if ($d_acl_entrega_cartao_fid== '') {
           $d_acl_entrega_cartao_fid='NULL';
       }
       $d_acl_admissao=$rscom['d_acl_admissao'];
       if ($d_acl_admissao== '') {
           $d_acl_admissao='NULL';
       }
       $s_acl_estatistica=$rscom['s_acl_estatistica'];
       if ($s_acl_estatistica== '') {
           $s_acl_estatistica="''";
       }
       $n_acl_pontos_cliente=$rscom['n_acl_pontos_cliente'];
       if ($n_acl_pontos_cliente== '') {
           $n_acl_pontos_cliente='NULL';
       }
       $n_acl_bloq_gerar_cred_venda=$rscom['n_acl_bloq_gerar_cred_venda'];
       if ($n_acl_bloq_gerar_cred_venda== '') {
           $n_acl_bloq_gerar_cred_venda='NULL';
       }
       $n_acl_bloq_nf_dev_venda=$rscom['n_acl_bloq_nf_dev_venda'];
       if ($n_acl_bloq_nf_dev_venda== '') {
           $n_acl_bloq_nf_dev_venda='NULL';
       }
       $s_acl_numero_cartao_fidelidade=$rscom['s_acl_numero_cartao_fidelidade'];
       if ($s_acl_numero_cartao_fidelidade== '') {
           $s_acl_numero_cartao_fidelidade=="''";
       }
       $s_acl_logradouro=$rscom['s_acl_logradouro'];
       if ($s_acl_logradouro== '') {
           $s_acl_logradouro="''";
       }
       $s_acl_denominacao_social=$rscom['s_acl_denominacao_social'];
       if ($s_acl_denominacao_social== '') {
           $s_acl_denominacao_social="''";
       }
       $i_acl_situacao_cliente=$rscom['i_acl_situacao_cliente'];
       if ($i_acl_situacao_cliente== '') {
           $i_acl_situacao_cliente='NULL';
       }
       $s_acl_usuario_windows=$rscom['s_acl_usuario_windows'];
       if ($s_acl_usuario_windows== '') {
           $s_acl_usuario_windows="''";
       }
       $s_acl_senha_windows=$rscom['s_acl_senha_windows'];
       if ($s_acl_senha_windows== '') {
           $s_acl_senha_windows="''";
       }
       $s_acl_url_logmein=$rscom['s_acl_url_logmein'];
       if ($s_acl_url_logmein== '') {
           $s_acl_url_logmein="''";
       }
       $s_acl_senha_logmein=$rscom['s_acl_senha_logmein'];
       if ($s_acl_senha_logmein== '') {
           $s_acl_senha_logmein=="''";
       }
       $s_acl_nome_responsavel=$rscom['s_acl_nome_responsavel'];
       if ($s_acl_nome_responsavel== '') {
           $s_acl_nome_responsavel="''";
       }
       $i_acl_codigo_parceiro_prc=$rscom['i_acl_codigo_parceiro_prc'];
       if ($i_acl_codigo_parceiro_prc== '') {
           $i_acl_codigo_parceiro_prc='NULL';
       }
       $i_acl_bloqueia_senha=$rscom['i_acl_bloqueia_senha'];
       if ($i_acl_bloqueia_senha== '') {
           $i_acl_bloqueia_senha='NULL';
       }
       $s_acl_insc_municipal=$rscom['s_acl_insc_municipal'];
       if ($s_acl_insc_municipal== '') {
           $s_acl_insc_municipal="''";
       }
       $i_acl_codigo_ram=$rscom['i_acl_codigo_ram'];
       if ($i_acl_codigo_ram== '') {
           $i_acl_codigo_ram='NULL';
       }
       $i_acl_tipo_cliente_juridico=$rscom['i_acl_tipo_cliente_juridico'];
       if ($i_acl_tipo_cliente_juridico== '') {
           $i_acl_tipo_cliente_juridico='NULL';
       }
       $i_acl_modelo_cliente=$rscom['i_acl_modelo_cliente'];
       if ($i_acl_modelo_cliente== '') {
           $i_acl_modelo_cliente='NULL';
       }
       $i_acl_codigo_acl=$rscom['i_acl_codigo_acl'];
       if ($i_acl_codigo_acl== '') {
           $i_acl_codigo_acl='NULL';
       }
       $i_acl_susp_pis_cofins=$rscom['i_acl_susp_pis_cofins'];
       if ($i_acl_susp_pis_cofins== '') {
           $i_acl_susp_pis_cofins='NULL';
       }
       $i_acl_icms_diferido=$rscom['i_acl_icms_diferido'];
       if ($i_acl_icms_diferido== '') {
           $i_acl_icms_diferido='NULL';
       }
       $s_acl_obs_parametros=$rscom['s_acl_obs_parametros'];
       if ($s_acl_obs_parametros== '') {
           $s_acl_obs_parametros="''";
       }
       $i_acl_endereco_numero=$rscom['i_acl_endereco_numero'];
       if ($i_acl_endereco_numero== '') {
           $i_acl_endereco_numero='NULL';
       }
       $i_acl_calculo_rs=$rscom['i_acl_calculo_rs'];
       if ($i_acl_calculo_rs== '') {
           $i_acl_calculo_rs='NULL';
       }
       $i_acl_concessao_icms_st=$rscom['i_acl_concessao_icms_st'];
       if ($i_acl_concessao_icms_st== '') {
           $i_acl_concessao_icms_st='NULL';
       }
       $s_acl_endereco_entrega=$rscom['s_acl_endereco_entrega'];
       if ($s_acl_endereco_entrega== '') {
           $s_acl_endereco_entrega="''";
       }
       $s_acl_bairro_entrega=$rscom['s_acl_bairro_entrega'];
       if ($s_acl_bairro_entrega== '') {
           $s_acl_bairro_entrega="''";
       }
       $i_acl_cep_entrega=$rscom['i_acl_cep_entrega'];
       if ($i_acl_cep_entrega== '') {
           $i_acl_cep_entrega="''";
       }
       $s_acl_complemento_entrega=$rscom['s_acl_complemento_entrega'];
       if ($s_acl_complemento_entrega== '') {
           $s_acl_complemento_entrega="''";
       }
       $s_acl_bairro_cobranca=$rscom['s_acl_bairro_cobranca'];
       if ($s_acl_bairro_cobranca== '') {
           $s_acl_bairro_cobranca="''";
       }
       $i_acl_tipo_mercado=$rscom['i_acl_tipo_mercado'];
       if ($i_acl_tipo_mercado== '') {
           $i_acl_tipo_mercado="''";
       }
       $n_acl_valor_adicional_celesc=$rscom['n_acl_valor_adicional_celesc'];
       if ($n_acl_valor_adicional_celesc== '') {
           $n_acl_valor_adicional_celesc='NULL';
       }
       $n_acl_valor_adesao_celesc=$rscom['n_acl_valor_adesao_celesc'];
       if ($n_acl_valor_adesao_celesc== '') {
           $n_acl_valor_adesao_celesc='NULL';
       }
       $i_acl_qtde_vezes_adesao_celesc=$rscom['i_acl_qtde_vezes_adesao_celesc'];
       if ($i_acl_qtde_vezes_adesao_celesc== '') {
           $i_acl_qtde_vezes_adesao_celesc='NULL';
       }
       $i_acl_contador_adesao_celesc=$rscom['i_acl_contador_adesao_celesc'];
       if ($i_acl_contador_adesao_celesc== '') {
           $i_acl_contador_adesao_celesc='NULL';
       }
       $i_acl_codigo_tco1=$rscom['i_acl_codigo_tco1'];
       if ($i_acl_codigo_tco1== '') {
           $i_acl_codigo_tco1='NULL';
       }
       $s_acl_mensagem_nfe=$rscom['s_acl_mensagem_nfe'];
       if ($s_acl_mensagem_nfe== '') {
           $s_acl_mensagem_nfe="''";
       }
       $i_acl_possui_internet=$rscom['i_acl_possui_internet'];
       if ($i_acl_possui_internet== '') {
           $i_acl_possui_internet='NULL';
       }
       $i_acl_suspensao_retencao=$rscom['i_acl_suspensao_retencao'];
       if ($i_acl_suspensao_retencao== '') {
           $i_acl_suspensao_retencao='NULL';
       }
       $i_acl_suspensao_iss=$rscom['i_acl_suspensao_iss'];
       if ($i_acl_suspensao_iss== '') {
           $i_acl_suspensao_iss='NULL';
       }
       $i_acl_codigo_tgc=$rscom['i_acl_codigo_tgc'];
       if ($i_acl_codigo_tgc== '') {
           $i_acl_codigo_tgc='NULL';
       }
       $i_acl_codigo_tcc=$rscom['i_acl_codigo_tcc'];
       if ($i_acl_codigo_tcc== '') {
           $i_acl_codigo_tcc='NULL';
       }
       $s_acl_inscricao_rural=$rscom['s_acl_inscricao_rural'];
       if ($s_acl_inscricao_rural== '') {
           $s_acl_inscricao_rural="''";
       }
       $i_acl_permite_gerar_senha_offline=$rscom['i_acl_permite_gerar_senha_offline'];
       if ($i_acl_permite_gerar_senha_offline== '') {
           $i_acl_permite_gerar_senha_offline='NULL';
       }
       $i_acl_possui_tabela_preco=$rscom['i_acl_possui_tabela_preco'];
       if ($i_acl_possui_tabela_preco== '') {
           $i_acl_possui_tabela_preco='NULL';
       }
       $i_acl_seq_unica=$rscom['i_acl_seq_unica'];
       if ($i_acl_seq_unica== '') {
           $i_acl_seq_unica='NULL';
       }
       $s_acl_complemento=$rscom['s_acl_complemento'];
       if ($s_acl_complemento== '') {
           $s_acl_complemento="''";
       }
       $i_paf_ide=$rscom['i_paf_ide'];
       if ($i_paf_ide== '') {
           $i_paf_ide='NULL';
       }
       $s_acl_msg_venda=$rscom['s_acl_msg_venda'];
       if ($s_acl_msg_venda== '') {
           $s_acl_msg_venda="''";
       }
       $i_acl_permit_credito_st_ret=$rscom['i_acl_permit_credito_st_ret'];
       if ($i_acl_permit_credito_st_ret== '') {
           $i_acl_permit_credito_st_ret='NULL';
       }
       $n_acl_limite_mensal=$rscom['n_acl_limite_mensal'];
       if ($n_acl_limite_mensal== '') {
           $n_acl_limite_mensal='NULL';
       }
       $s_acl_tipo_logradouro=$rscom['s_acl_tipo_logradouro'];
       if ($s_acl_tipo_logradouro== '') {
           $s_acl_tipo_logradouro="''";
       }
       $s_acl_tipo_bairro=$rscom['s_acl_tipo_bairro'];
       if ($s_acl_tipo_bairro== '') {
           $s_acl_tipo_bairro="''";
       }
       $s_acl_passaporte=$rscom['s_acl_passaporte'];
       if ($s_acl_passaporte== '') {
           $s_acl_passaporte="''";
       }
       $s_acl_uf_entrega=$rscom['s_acl_uf_entrega'];
       if ($s_acl_uf_entrega== '') {
           $s_acl_uf_entrega="''";
       }
       $i_acl_calcula_imp_por_entrega=$rscom['i_acl_calcula_imp_por_entrega'];
       if ($i_acl_calcula_imp_por_entrega== '') {
           $i_acl_calcula_imp_por_entrega='NULL';
       }
       $s_acl_preferencia_perfil=$rscom['s_acl_preferencia_perfil'];
       if ($s_acl_preferencia_perfil== '') {
           $s_acl_preferencia_perfil="''";
       }
       $ccodigoold='';
       if ($ccodigoold== '') {
           $ccodigoold="''";
       }
       $com="INSERT INTO aclientes(
            ccodigo, cnomecliente, csexo, cnascimento, cestadocivil, cmae, 
            cpai, cdatacadastro, cpessoa, cdocumento, ccpf, ccnpj, cinsest, 
            ctituloeleitor, cnaturalidadde, cestadonatural, cendereco, cbairro, 
            cproximidade, ccidade, ccep, cuf, cfoneresidencial, cfonecomercial, 
            cfonecelular, cemail, chomepage, cconjuge, cnasconjuge, cmaeconjuge, 
            cpaiconjuge, cdocconjuge, ccpfconjuge, cloctraconjuge, cendtraconjuge, 
            ctelconjuge, ccelconjuge, cproconjuge, crdaconjuge, cadmconjuge, 
            cnatconjuge, ctracliente, cendtracliente, crdacliente, cprofissaocliente, 
            procliente, coutrencliente, ccrecliente, climcarcliente, cfatmedcliente, 
            cchecliente, climchecliente, clojrefcliente, cultcomcliente, 
            ctipcliente, cptucliente, ccodspccliente, cendpagcliente, ccidpagcliente, 
            cestpagcliente, cceppagcliente, cemiavicliente, cenvspccliente, 
            cavicobcliente, cendcorcliente, cblovencliente, cdatavipgtcliente, 
            ccasprocliente, cterprocliente, ccarprocliente, coutbencliente, 
            cdesoutbencliente, ccodctbcliente, catlcadcliente, cvencadcliente, 
            cfotcliente, casscliente, cdoccliente, canicliente, copccliente, 
            cusccliente, choccliente, cdtccliente, cdtacliente, choacliente, 
            copacliente, cusacliente, cempcliente, cceptabcliente, cregcliente, 
            ccodconvenio, ctipimpcliente, cluzcliente, cextin01, ccarga01, 
            crecarga01, cextin02, ccarga02, crecarga02, cextin03, ccarga03, 
            crecarga03, cextin04, ccarga04, crecarga04, cextin05, ccarga05, 
            crecarga05, cextin06, ccarga06, crecarga06, cextin07, ccarga07, 
            crecarga07, cextin08, ccarga08, crecarga08, cextin09, ccarga09, 
            crecarga09, cextin10, ccarga10, crecarga10, ccodantigo, cobsclientes, 
            senha_net, nivel_net, ativacao_net, bloqueio_net, cod_fotografo, 
            forma_cadastro, empresa_cadastro, dependente_1, dependente_2, 
            dependente_3, dependente_4, dependente_5, dependente_6, dependente_7, 
            dependente_8, dependente_9, dependente_10, valor_mensal, dat_inc_celesc, 
            dat_alt_celesc, dat_exc_celesc, mot_bloq_venda, limite_credito, 
            ati_ult_limite, contatos_cliente, desconto_cliente, fax_cliente, 
            bloq_vendas_aprazo, i_acl_codigo_ven_foto, i_acl_tab_preco, i_acl_perc_aplicar_venda, 
            i_cond_pagto_padrao, s_acl_outro_fone, s_acl_outro_fone2, s_acl_msn, 
            s_acl_skype, i_acl_codigo_fon, d_acl_data_casamento, n_acl_limite_cartao_fidelidade, 
            d_acl_entrada_cartao_fid, d_acl_bloqueio_cartao_fid, d_acl_entrega_cartao_fid, 
            d_acl_admissao, s_acl_estatistica, n_acl_pontos_cliente, n_acl_bloq_gerar_cred_venda, 
            n_acl_bloq_nf_dev_venda, s_acl_numero_cartao_fidelidade, s_acl_logradouro, 
            s_acl_denominacao_social, i_acl_situacao_cliente, s_acl_usuario_windows, 
            s_acl_senha_windows, s_acl_url_logmein, s_acl_senha_logmein, 
            s_acl_nome_responsavel, i_acl_codigo_parceiro_prc, i_acl_bloqueia_senha, 
            s_acl_insc_municipal, i_acl_codigo_ram, i_acl_tipo_cliente_juridico, 
            i_acl_modelo_cliente, i_acl_codigo_acl, i_acl_susp_pis_cofins, 
            i_acl_icms_diferido, s_acl_obs_parametros, i_acl_endereco_numero, 
            i_acl_calculo_rs, i_acl_concessao_icms_st, s_acl_endereco_entrega, 
            s_acl_bairro_entrega, i_acl_cep_entrega, s_acl_complemento_entrega, 
            s_acl_bairro_cobranca, i_acl_tipo_mercado, n_acl_valor_adicional_celesc, 
            n_acl_valor_adesao_celesc, i_acl_qtde_vezes_adesao_celesc, i_acl_contador_adesao_celesc, 
            i_acl_codigo_tco1, s_acl_mensagem_nfe, i_acl_possui_internet, 
            i_acl_suspensao_retencao, i_acl_suspensao_iss, i_acl_codigo_tgc, 
            i_acl_codigo_tcc, s_acl_inscricao_rural, i_acl_permite_gerar_senha_offline, 
            i_acl_possui_tabela_preco, i_acl_seq_unica, s_acl_complemento, 
            i_paf_ide, s_acl_msg_venda, i_acl_permit_credito_st_ret, n_acl_limite_mensal, 
            s_acl_tipo_logradouro, s_acl_tipo_bairro, s_acl_passaporte, s_acl_uf_entrega, 
            i_acl_calcula_imp_por_entrega, s_acl_preferencia_perfil) values (nextval('seque_aclientes'),'$cnomecliente','$csexo','$cnascimento','$cestadocivil','$cmae','$cpai','$cdatacadastro','$cpessoa','$cdocumento','$ccpf','$ccnpj','$cinsest','$ctituloeleitor','$cnaturalidadde','$cestadonatural','$cendereco','$cbairro','$cproximidade','$ccidade','$ccep','$cuf','$cfoneresidencial','$cfonecomercial',
'$cfonecelular','$cemail','$chomepage','$cconjuge',$cnasconjuge,'$cmaeconjuge','$cpaiconjuge','$cdocconjuge','$ccpfconjuge','$cloctraconjuge','$cendtraconjuge','$ctelconjuge','$ccelconjuge','$cproconjuge','$crdaconjuge',$cadmconjuge,'$cnatconjuge','$ctracliente','$cendtracliente','$crdacliente','$cprofissaocliente',
'$procliente','$coutrencliente','$ccrecliente','$climcarcliente','$cfatmedcliente','$cchecliente','$climchecliente','$clojrefcliente','$cultcomcliente','$ctipcliente','$cptucliente','$ccodspccliente','$cendpagcliente','$ccidpagcliente','$cestpagcliente','$cceppagcliente','$cemiavicliente','$cenvspccliente',
'$cavicobcliente','$cendcorcliente','$cblovencliente','$cdatavipgtcliente','$ccasprocliente','$cterprocliente','$ccarprocliente','$coutbencliente','$cdesoutbencliente','$ccodctbcliente','$catlcadcliente','$cvencadcliente','$cfotcliente','$casscliente','$cdoccliente','$canicliente','$copccliente',
'$cusccliente','$choccliente','$cdtccliente','$cdtacliente','$choacliente','$copacliente','$cusacliente','$cempcliente','$cceptabcliente','$cregcliente','$ccodconvenio','$ctipimpcliente','$cluzcliente','$cextin01','$ccarga01',
'$crecarga01','$cextin02','$ccarga02','$crecarga02','$cextin03','$ccarga03','$crecarga03','$cextin04','$ccarga04','$crecarga04','$cextin05','$ccarga05','$crecarga05','$cextin06','$ccarga06','$crecarga06','$cextin07','$ccarga07','$crecarga07','$cextin08','$ccarga08','$crecarga08','$cextin09','$ccarga09',
'$crecarga09','$cextin10','$ccarga10','$crecarga10','$ccodantigo','$cobsclientes','$senha_net','$nivel_net','$ativacao_net','$bloqueio_net','$cod_fotografo','$forma_cadastro','$empresa_cadastro','$dependente_1','$dependente_2','$dependente_3','$dependente_4','$dependente_5','$dependente_6','$dependente_7',
'$dependente_8','$dependente_9','$dependente_10','$valor_mensal','$dat_inc_celesc','$dat_alt_celesc','$dat_exc_celesc','$mot_bloq_venda','$limite_credito','$ati_ult_limite','$contatos_cliente','$desconto_cliente','$fax_cliente','$bloq_vendas_aprazo','$i_acl_codigo_ven_foto','$i_acl_tab_preco','$i_acl_perc_aplicar_venda',
'$i_cond_pagto_padrao','$s_acl_outro_fone','$s_acl_outro_fone2','$s_acl_msn','$s_acl_skype','$i_acl_codigo_fon','$d_acl_data_casamento','$n_acl_limite_cartao_fidelidade','$d_acl_entrada_cartao_fid','$d_acl_bloqueio_cartao_fid','$d_acl_entrega_cartao_fid','$d_acl_admissao','$s_acl_estatistica','$n_acl_pontos_cliente','$n_acl_bloq_gerar_cred_venda',
'$n_acl_bloq_nf_dev_venda','$s_acl_numero_cartao_fidelidade','$s_acl_logradouro','$s_acl_denominacao_social','$i_acl_situacao_cliente','$s_acl_usuario_windows','$s_acl_senha_windows','$s_acl_url_logmein','$s_acl_senha_logmein','$s_acl_nome_responsavel','$i_acl_codigo_parceiro_prc','$i_acl_bloqueia_senha',
'$s_acl_insc_municipal','$i_acl_codigo_ram','$i_acl_tipo_cliente_juridico','$i_acl_modelo_cliente','$i_acl_codigo_acl','$i_acl_susp_pis_cofins','$i_acl_icms_diferido','$s_acl_obs_parametros','$i_acl_endereco_numero','$i_acl_calculo_rs','$i_acl_concessao_icms_st','$s_acl_endereco_entrega',
'$s_acl_bairro_entrega','$i_acl_cep_entrega','$s_acl_complemento_entrega','$s_acl_bairro_cobranca','$i_acl_tipo_mercado','$n_acl_valor_adicional_celesc','$n_acl_valor_adesao_celesc','$i_acl_qtde_vezes_adesao_celesc','$i_acl_contador_adesao_celesc','$i_acl_codigo_tco1','$s_acl_mensagem_nfe','$i_acl_possui_internet',
'$i_acl_suspensao_retencao','$i_acl_suspensao_iss','$i_acl_codigo_tgc','$i_acl_codigo_tcc','$s_acl_inscricao_rural','$i_acl_permite_gerar_senha_offline','$i_acl_possui_tabela_preco','$i_acl_seq_unica','$s_acl_complemento','$i_paf_ide','$s_acl_msg_venda','$i_acl_permit_credito_st_ret','$n_acl_limite_mensal',
'$s_acl_tipo_logradouro','$s_acl_tipo_bairro','$s_acl_passaporte','$s_acl_uf_entrega','$i_acl_calcula_imp_por_entrega','$s_acl_preferencia_perfil')";
       echo $com.';'.'<br><br>';
    } 
}
$sql="select ccodigo,ccnpj from aclientes where ccnpj > 0 order by ccodigo";
$exsql=pg_query($conj,$sql);
while($row = pg_fetch_assoc($exsql)){
    $cod=$row['ccodigo'];
    $cpj=$row['ccnpj'];
    $com="select ccodigo from aclientes where ccnpj='$cpj'";
    $excom=pg_query($conc,$com);
    $rscom=pg_fetch_array($excom);
    $codn=$rscom['ccodigo'];
    if ($codn == '') {
        $com="select *from aclientes where ccodigo = $cod ";
        $excom=pg_query($conj,$com);
        $rscom=pg_fetch_array($excom);
        $cnomecliente=$rscom['cnomecliente'];
        if ($cnomecliente== '') {
            $cnomecliente="''";
        }
        $csexo=$rscom['cnomecliente'];
        if ($csexo== '') {
            $csexo="''";
        }
        $csexo=$rscom['csexo'];
        if ($csexo== '') {
            $csexo="''";
        }
        $cnascimento=$rscom['cnascimento'];
        if ($cnascimento== '') {
            $cnascimento='NULL';
        }
        $cestadocivil=$rscom['cestadocivil'];
        if ($cestadocivil== '') {
            $cestadocivil="''";
        }
        $cmae=$rscom['cmae'];
        if ($cmae== '') {
            $cmae="''";
        }
        $cpai=$rscom['cpai'];
        if ($cpai== '') {
            $cpai="''";
        }
        $cdatacadastro=$rscom['cdatacadastro'];
        if ($cdatacadastro== '') {
            $cdatacadastro='NULL';
        }
        $cpessoa=$rscom['cpessoa'];
        if ($cpessoa== '') {
            $cpessoa="''";
        }
        $cdocumento=$rscom['cdocumento'];
        if ($cdocumento== '') {
            $cdocumento="''";
        }
        $ccpf=$rscom['ccpf'];
        if ($ccpf== '') {
            $ccpf="''";
        }
        $ccnpj=$rscom['ccnpj'];
        if ($ccnpj== '') {
            $ccnpj="''";
        }
        $cinsest=$rscom['cinsest'];
        if ($cinsest== '') {
            $cinsest="''";
        }
        $ctituloeleitor=$rscom['ctituloeleitor'];
        if ($ctituloeleitor== '') {
            $ctituloeleitor="''";
        }
        $cnaturalidadde=$rscom['cnaturalidadde'];
        if ($cnaturalidadde== '') {
            $cnaturalidadde="''";
        }
        $cestadonatural=$rscom['cestadonatural'];
        if ($cestadonatural== '') {
            $cestadonatural="''";
        }
        $cendereco=$rscom['cendereco'];
        if ($cendereco== '') {
            $cendereco="''";
        }
        $cbairro=$rscom['cbairro'];
        if ($cbairro== '') {
            $cbairro="''";
        }
        $cproximidade=$rscom['cproximidade'];
        if ($cproximidade== '') {
            $cproximidade="''";
        }
        $ccidade=$rscom['ccidade'];
        if ($ccidade== '') {
            $ccidade="''";
        }
        $ccep=$rscom['ccep'];
        if ($ccep== '') {
            $ccep="''";
        }
        $cuf=$rscom['cuf'];
        if ($cuf== '') {
            $cuf="''";
        }
        $cfoneresidencial=$rscom['cfoneresidencial'];
        if ($cfoneresidencial== '') {
            $cfoneresidencial="''";
        }
        $cfonecomercial=$rscom['cfonecomercial'];
        if ($cfonecomercial== '') {
            $cfonecomercial="''";
        }
        $cfonecelular=$rscom['cfonecelular'];
        if ($cfonecelular== '') {
            $cfonecelular="''";
        }
        $cemail=$rscom['cemail'];
        if ($cemail== '') {
            $cemail="''";
        }
        $chomepage=$rscom['chomepage'];
        if ($chomepage== '') {
            $chomepage="''";
        }
        $cconjuge=$rscom['cconjuge'];
        if ($cconjuge== '') {
            $cconjuge="''";
        }
        $cnasconjuge=$rscom['cnasconjuge'];
        if ($cnasconjuge== '') {
            $cnasconjuge='NULL';
        }
        $cmaeconjuge=$rscom['cmaeconjuge'];
        if ($cmaeconjuge== '') {
            $cmaeconjuge="''";
        }
        $cpaiconjuge=$rscom['cpaiconjuge'];
        if ($cpaiconjuge== '') {
            $cpaiconjuge="''";
        }
        $cdocconjuge=$rscom['cdocconjuge'];
        if ($cdocconjuge== '') {
            $cdocconjuge="''";
        }
        $ccpfconjuge=$rscom['ccpfconjuge'];
        if ($ccpfconjuge== '') {
            $ccpfconjuge="''";
        }
        $cloctraconjuge=$rscom['cloctraconjuge'];
        if ($cloctraconjuge== '') {
            $cloctraconjuge="''";
        }
        $cendtraconjuge=$rscom['cendtraconjuge'];
        if ($cendtraconjuge== '') {
            $cendtraconjuge="''";
        }
        $ctelconjuge=$rscom['ctelconjuge'];
        if ($ctelconjuge== '') {
            $ctelconjuge="''";
        }
        $ccelconjuge=$rscom['ccelconjuge'];
        if ($ccelconjuge== '') {
            $ccelconjuge="''";
        }
        $cproconjuge=$rscom['cproconjuge'];
        if ($cproconjuge== '') {
            $cproconjuge='NULL';
        }
        $crdaconjuge=$rscom['crdaconjuge'];
        if ($crdaconjuge== '') {
            $crdaconjuge='NULL';
        }
        $cadmconjuge=$rscom['cadmconjuge'];
        if ($cadmconjuge== '') {
            $cadmconjuge='NULL';
        }
        $cnatconjuge=$rscom['cnatconjuge'];
        if ($cnatconjuge== '') {
            $cnatconjuge="''";
        }
        $ctracliente=$rscom['ctracliente'];
        if ($ctracliente== '') {
            $ctracliente="''";
        }
        $cendtracliente=$rscom['cendtracliente'];
        if ($cendtracliente== '') {
            $cendtracliente="''";
        }
        $crdacliente=$rscom['crdacliente'];
        if ($crdacliente== '') {
            $crdacliente='NULL';
        }
        $cprofissaocliente=$rscom['cprofissaocliente'];
        if ($cprofissaocliente== '') {
            $cprofissaocliente='NULL';
        }
        $procliente=$rscom['procliente'];
        if ($procliente== '') {
            $procliente='NULL';
        }
        $coutrencliente=$rscom['coutrencliente'];
        if ($coutrencliente== '') {
            $coutrencliente='NULL';
        }
        $ccrecliente=$rscom['ccrecliente'];
        if ($ccrecliente== '') {
            $ccrecliente="''";
        }
        $climcarcliente=$rscom['climcarcliente'];
        if ($climcarcliente== '') {
            $climcarcliente='NULL';
        }
        $cfatmedcliente=$rscom['cfatmedcliente'];
        if ($cfatmedcliente== '') {
            $cfatmedcliente='NULL';
        }
        $cchecliente=$rscom['cchecliente'];
        if ($cchecliente== '') {
            $cchecliente="''";
        }
        $climchecliente=$rscom['climchecliente'];
        if ($climchecliente== '') {
            $climchecliente='NULL';
        }
        $clojrefcliente=$rscom['clojrefcliente'];
        if ($clojrefcliente== '') {
            $clojrefcliente="''";
        }
        $cultcomcliente=$rscom['cultcomcliente'];
        if ($cultcomcliente== '') {
            $cultcomcliente='NULL';
        }
        $ctipcliente=$rscom['ctipcliente'];
        if ($ctipcliente== '') {
            $ctipcliente='NULL';
        }
        $cptucliente=$rscom['cptucliente'];
        if ($cptucliente== '') {
            $cptucliente='NULL';
        }
        $ccodspccliente=$rscom['ccodspccliente'];
        if ($ccodspccliente== '') {
            $ccodspccliente='NULL';
        }
        $cendpagcliente=$rscom['cendpagcliente'];
        if ($cendpagcliente== '') {
            $cendpagcliente="''";
        }
        $ccidpagcliente=$rscom['ccidpagcliente'];
        if ($ccidpagcliente== '') {
            $ccidpagcliente="''";
        }
        $cestpagcliente=$rscom['cestpagcliente'];
        if ($cestpagcliente== '') {
            $cestpagcliente="''";
        }
        $cceppagcliente=$rscom['cceppagcliente'];
        if ($cceppagcliente== '') {
            $cceppagcliente="''";
        }
        $cemiavicliente=$rscom['cemiavicliente'];
        if ($cemiavicliente== '') {
            $cemiavicliente="''";
        }
        $cenvspccliente=$rscom['cenvspccliente'];
        if ($cenvspccliente== '') {
            $cenvspccliente="''";
        }
        $cavicobcliente=$rscom['cavicobcliente'];
        if ($cavicobcliente== '') {
            $cavicobcliente="''";
        }
        $cendcorcliente=$rscom['cendcorcliente'];
        if ($cendcorcliente== '') {
            $cendcorcliente="''";
        }
        $cblovencliente=$rscom['cblovencliente'];
        if ($cblovencliente== '') {
            $cblovencliente="''";
        }
        $cdatavipgtcliente=$rscom['cdatavipgtcliente'];
        if ($cdatavipgtcliente== '') {
            $cdatavipgtcliente='NULL';
        }
        $ccasprocliente=$rscom['ccasprocliente'];
        if ($ccasprocliente== '') {
            $ccasprocliente="''";
        }
        $cterprocliente=$rscom['cterprocliente'];
        if ($cterprocliente== '') {
            $cterprocliente="''";
        }
        $ccarprocliente=$rscom['ccarprocliente'];
        if ($ccarprocliente== '') {
            $ccarprocliente="''";
        }
        $coutbencliente=$rscom['coutbencliente'];
        if ($coutbencliente== '') {
            $coutbencliente="''";
        }
        $ccarprocliente=$rscom['ccarprocliente'];
        if ($ccarprocliente== '') {
            $ccarprocliente="''";
        }
        $coutbencliente=$rscom['coutbencliente'];
        if ($coutbencliente== '') {
            $coutbencliente="''";
        }
        $cdesoutbencliente=$rscom['cdesoutbencliente'];
        if ($cdesoutbencliente== '') {
            $cdesoutbencliente="''";
        }
        $ccodctbcliente=$rscom['ccodctbcliente'];
        if ($ccodctbcliente== '') {
            $ccodctbcliente='NULL';
        }
        $catlcadcliente=$rscom['catlcadcliente'];
        if ($catlcadcliente== '') {
            $catlcadcliente='NULL';
        }
        $cvencadcliente=$rscom['cvencadcliente'];
        if ($cvencadcliente== '') {
            $cvencadcliente='NULL';
        }
        $cfotcliente=$rscom['cfotcliente'];
        if ($cfotcliente== '') {
            $cfotcliente="''";
        }
        $casscliente=$rscom['casscliente'];
        if ($casscliente== '') {
            $casscliente="''";
        }
        $cdoccliente=$rscom['cdoccliente'];
        if ($cdoccliente== '') {
            $cdoccliente="''";
        }
        $canicliente=$rscom['canicliente'];
        if ($canicliente== '') {
            $canicliente="''";
        }
        $copccliente=$rscom['copccliente'];
        if ($copccliente== '') {
            $copccliente='NULL';
        }
        $cusccliente=$rscom['cusccliente'];
        if ($cusccliente== '') {
            $cusccliente="''";
        }
        $choccliente=$rscom['choccliente'];
        if ($choccliente== '') {
            $choccliente='NULL';
        }
        $cdtccliente=$rscom['cdtccliente'];
        if ($cdtccliente== '') {
            $cdtccliente='NULL';
        }
        $choccliente=$rscom['choccliente'];
        if ($choccliente== '') {
            $choccliente='NULL';
        }
        $cdtccliente=$rscom['cdtccliente'];
        if ($cdtccliente== '') {
            $cdtccliente='NULL';
        }
        $cdtacliente=$rscom['cdtacliente'];
        if ($cdtacliente== '') {
            $cdtacliente='NULL';
        }
        $choacliente=$rscom['choacliente'];
        if ($choacliente== '') {
            $choacliente='NULL';
        }
        $copacliente=$rscom['copacliente'];
        if ($copacliente== '') {
            $copacliente='NULL';
        }
        $cusacliente=$rscom['cusacliente'];
        if ($cusacliente== '') {
            $cusacliente="''";
        }
        $cempcliente=$rscom['cempcliente'];
        if ($cempcliente== '') {
            $cempcliente='NULL';
        }
        $cceptabcliente=$rscom['cceptabcliente'];
        if ($cceptabcliente== '') {
            $cceptabcliente="''";
        }
        $cregcliente=$rscom['cregcliente'];
        if ($cregcliente== '') {
            $cregcliente='NULL';
        }
        $ccodconvenio=$rscom['ccodconvenio'];
        if ($ccodconvenio== '') {
            $ccodconvenio='NULL';
        }
        $ctipimpcliente=$rscom['ctipimpcliente'];
        if ($ctipimpcliente== '') {
            $ctipimpcliente='NULL';
        }
        $cluzcliente=$rscom['cluzcliente'];
        if ($cluzcliente== '') {
            $cluzcliente="''";
        }
        $cextin01=$rscom['cextin01'];
        if ($cextin01== '') {
            $cextin01="''";
        }
        $ccarga01=$rscom['ccarga01'];
        if ($ccarga01== '') {
            $ccarga01='NULL';
        }
        $crecarga01=$rscom['crecarga01'];
        if ($crecarga01== '') {
            $crecarga01='NULL';
        }
        $cextin02=$rscom['cextin02'];
        if ($cextin02== '') {
            $cextin02="''";
        }
        $ccarga02=$rscom['ccarga02'];
        if ($ccarga02== '') {
            $ccarga02='NULL';
        }
        $crecarga02=$rscom['crecarga02'];
        if ($crecarga02== '') {
            $crecarga02='NULL';
        }
        $cextin03=$rscom['cextin03'];
        if ($cextin03== '') {
            $cextin03="''";
        }
        $ccarga03=$rscom['ccarga03'];
        if ($ccarga03== '') {
            $ccarga03='NULL';
        }
        $crecarga03=$rscom['crecarga03'];
        if ($crecarga03== '') {
            $crecarga03='NULL';
        }
        $cextin04=$rscom['cextin04'];
        if ($cextin04== '') {
            $cextin04="''";
        }
        $ccarga04=$rscom['ccarga04'];
        if ($ccarga04== '') {
            $ccarga04='NULL';
        }
        $crecarga04=$rscom['crecarga04'];
        if ($crecarga04== '') {
            $crecarga04='NULL';
        }
        $cextin05=$rscom['cextin05'];
        if ($cextin05== '') {
            $cextin05="''";
        }
        $ccarga05=$rscom['ccarga05'];
        if ($ccarga05== '') {
            $ccarga05='NULL';
        }
        $crecarga05=$rscom['crecarga05'];
        if ($crecarga05== '') {
            $crecarga05='NULL';
        }
        $cextin06=$rscom['cextin06'];
        if ($cextin06== '') {
            $cextin06="''";
        }
        $ccarga06=$rscom['ccarga06'];
        if ($ccarga06== '') {
            $ccarga06='NULL';
        }
        $crecarga06=$rscom['crecarga06'];
        if ($crecarga06== '') {
            $crecarga06='NULL';
        }
        $cextin07=$rscom['cextin07'];
        if ($cextin07== '') {
            $cextin07="''";
        }
        $ccarga07=$rscom['ccarga07'];
        if ($ccarga07== '') {
            $ccarga07='NULL';
        }
        $crecarga07=$rscom['crecarga07'];
        if ($crecarga07== '') {
            $crecarga07='NULL';
        }
        $cextin08=$rscom['cextin08'];
        if ($cextin08== '') {
            $cextin08="''";
        }
        $ccarga08=$rscom['ccarga08'];
        if ($ccarga08== '') {
            $ccarga08='NULL';
        }
        $crecarga08=$rscom['crecarga08'];
        if ($crecarga08== '') {
            $crecarga08='NULL';
        }
        $cextin09=$rscom['cextin09'];
        if ($cextin09== '') {
            $cextin09="''";
        }
        $ccarga09=$rscom['ccarga09'];
        if ($ccarga09== '') {
            $ccarga09='NULL';
        }
        $crecarga09=$rscom['crecarga09'];
        if ($crecarga09== '') {
            $crecarga09='NULL';
        }
        $cextin10=$rscom['cextin10'];
        if ($cextin10== '') {
            $cextin10="''";
        }
        $ccarga10=$rscom['ccarga10'];
        if ($ccarga10== '') {
            $ccarga10='NULL';
        }
        $crecarga10=$rscom['crecarga10'];
        if ($crecarga10== '') {
            $crecarga10='NULL';
        }
        $cextin11='';
        if ($cextin11== '') {
            $cextin11="''";
        }
        $ccarga11='';
        if ($ccarga11== '') {
            $ccarga11='NULL';
        }
        $crecarga11='';
        if ($crecarga11== '') {
            $crecarga11='NULL';
        }
        $ccodantigo=$rscom['ccodantigo'];
        if ($ccodantigo== '') {
            $ccodantigo='NULL';
        }
        $cobsclientes=$rscom['cobsclientes'];
        if ($cobsclientes== '') {
            $cobsclientes="''";
        }
        $senha_net=$rscom['senha_net'];
        if ($senha_net== '') {
            $senha_net="''";
        }
        $nivel_net=$rscom['nivel_net'];
        if ($nivel_net== '') {
            $nivel_net="''";
        }
        $ativacao_net=$rscom['ativacao_net'];
        if ($ativacao_net== '') {
            $ativacao_net='NULL';
        }
        $bloqueio_net=$rscom['bloqueio_net'];
        if ($bloqueio_net== '') {
            $bloqueio_net='NULL';
        }
        $cod_fotografo=$rscom['cod_fotografo'];
        if ($cod_fotografo== '') {
            $cod_fotografo='NULL';
        }
        $forma_cadastro=$rscom['forma_cadastro'];
        if ($forma_cadastro== '') {
            $forma_cadastro='NULL';
        }
        $empresa_cadastro=$rscom['empresa_cadastro'];
        if ($empresa_cadastro== '') {
            $empresa_cadastro='NULL';
        }
        $dependente_1=$rscom['dependente_1'];
        if ($dependente_1== '') {
            $dependente_1="''";
        }
        $dependente_2=$rscom['dependente_2'];
        if ($dependente_2== '') {
            $dependente_2="''";
        }
        $dependente_3=$rscom['dependente_3'];
        if ($dependente_3== '') {
            $dependente_3="''";
        }
        $dependente_4=$rscom['dependente_4'];
        if ($dependente_4== '') {
            $dependente_4="''";
        }
        $dependente_5=$rscom['dependente_5'];
        if ($dependente_5== '') {
            $dependente_5="''";
        }
        $dependente_6=$rscom['dependente_6'];
        if ($dependente_6== '') {
            $dependente_6="''";
        }
        $dependente_7=$rscom['dependente_7'];
        if ($dependente_7== '') {
            $dependente_7="''";
        }
        $dependente_8=$rscom['dependente_8'];
        if ($dependente_8== '') {
            $dependente_8="''";
        }
        $dependente_9=$rscom['dependente_9'];
        if ($dependente_9== '') {
            $dependente_9="''";
        }
        $dependente_10=$rscom['dependente_10'];
        if ($dependente_10== '') {
            $dependente_10="''";
        }
        $valor_mensal=$rscom['valor_mensal'];
        if ($valor_mensal== '') {
            $valor_mensal='NULL';
        }
        $dat_inc_celesc=$rscom['dat_inc_celesc'];
        if ($dat_inc_celesc== '') {
            $dat_inc_celesc='NULL';
        }
        $dat_alt_celesc=$rscom['dat_alt_celesc'];
        if ($dat_alt_celesc== '') {
            $dat_alt_celesc='NULL';
        }
        $dat_exc_celesc=$rscom['dat_exc_celesc'];
        if ($dat_exc_celesc== '') {
            $dat_exc_celesc='NULL';
        }
        $mot_bloq_venda=$rscom['mot_bloq_venda'];
        if ($mot_bloq_venda== '') {
            $mot_bloq_venda="''";
        }
        $limite_credito=$rscom['limite_credito'];
        if ($limite_credito== '') {
            $limite_credito='NULL';
        }
        $ati_ult_limite=$rscom['ati_ult_limite'];
        if ($ati_ult_limite== '') {
            $ati_ult_limite='NULL';
        }
        $contatos_cliente=$rscom['contatos_cliente'];
        if ($contatos_cliente== '') {
            $contatos_cliente="''";
        }
        $desconto_cliente=$rscom['desconto_cliente'];
        if ($desconto_cliente== '') {
            $desconto_cliente='NULL';
        }
        $fax_cliente=$rscom['fax_cliente'];
        if ($fax_cliente== '') {
            $fax_cliente="''";
        }
        $bloq_vendas_aprazo=$rscom['bloq_vendas_aprazo'];
        if ($bloq_vendas_aprazo== '') {
            $bloq_vendas_aprazo='NULL';
        }
        $i_acl_codigo_ven_foto=$rscom['i_acl_codigo_ven_foto'];
        if ($i_acl_codigo_ven_foto== '') {
            $i_acl_codigo_ven_foto='NULL';
        }
        $i_acl_tab_preco=$rscom['i_acl_tab_preco'];
        if ($i_acl_tab_preco== '') {
            $i_acl_tab_preco='NULL';
        }
        $i_acl_perc_aplicar_venda=$rscom['i_acl_perc_aplicar_venda'];
        if ($i_acl_perc_aplicar_venda== '') {
            $i_acl_perc_aplicar_venda='NULL';
        }
        $i_cond_pagto_padrao=$rscom['i_cond_pagto_padrao'];
        if ($i_cond_pagto_padrao== '') {
            $i_cond_pagto_padrao='NULL';
        }
        $s_acl_outro_fone=$rscom['s_acl_outro_fone'];
        if ($s_acl_outro_fone== '') {
            $s_acl_outro_fone="''";
        }
        $s_acl_outro_fone2=$rscom['s_acl_outro_fone2'];
        if ($s_acl_outro_fone2== '') {
            $s_acl_outro_fone2="''";
        }
        $s_acl_msn=$rscom['s_acl_msn'];
        if ($s_acl_msn== '') {
            $s_acl_msn="''";
        }
        $s_acl_skype=$rscom['s_acl_skype'];
        if ($s_acl_skype== '') {
            $s_acl_skype='NULL';
        }
        $i_acl_codigo_fon=$rscom['i_acl_codigo_fon'];
        if ($i_acl_codigo_fon== '') {
            $i_acl_codigo_fon='NULL';
        }
        $d_acl_data_casamento=$rscom['d_acl_data_casamento'];
        if ($d_acl_data_casamento== '') {
            $d_acl_data_casamento='NULL';
        }
        $n_acl_limite_cartao_fidelidade=$rscom['n_acl_limite_cartao_fidelidade'];
        if ($n_acl_limite_cartao_fidelidade== '') {
            $n_acl_limite_cartao_fidelidade='NULL';
        }
        $d_acl_entrada_cartao_fid=$rscom['d_acl_entrada_cartao_fid'];
        if ($d_acl_entrada_cartao_fid== '') {
            $d_acl_entrada_cartao_fid='NULL';
        }
        $d_acl_bloqueio_cartao_fid=$rscom['d_acl_bloqueio_cartao_fid'];
        if ($d_acl_bloqueio_cartao_fid== '') {
            $d_acl_bloqueio_cartao_fid='NULL';
        }
        $d_acl_entrega_cartao_fid=$rscom['d_acl_entrega_cartao_fid'];
        if ($d_acl_entrega_cartao_fid== '') {
            $d_acl_entrega_cartao_fid='NULL';
        }
        $d_acl_admissao=$rscom['d_acl_admissao'];
        if ($d_acl_admissao== '') {
            $d_acl_admissao='NULL';
        }
        $s_acl_estatistica=$rscom['s_acl_estatistica'];
        if ($s_acl_estatistica== '') {
            $s_acl_estatistica="''";
        }
        $n_acl_pontos_cliente=$rscom['n_acl_pontos_cliente'];
        if ($n_acl_pontos_cliente== '') {
            $n_acl_pontos_cliente='NULL';
        }
        $n_acl_bloq_gerar_cred_venda=$rscom['n_acl_bloq_gerar_cred_venda'];
        if ($n_acl_bloq_gerar_cred_venda== '') {
            $n_acl_bloq_gerar_cred_venda='NULL';
        }
        $n_acl_bloq_nf_dev_venda=$rscom['n_acl_bloq_nf_dev_venda'];
        if ($n_acl_bloq_nf_dev_venda== '') {
            $n_acl_bloq_nf_dev_venda='NULL';
        }
        $s_acl_numero_cartao_fidelidade=$rscom['s_acl_numero_cartao_fidelidade'];
        if ($s_acl_numero_cartao_fidelidade== '') {
            $s_acl_numero_cartao_fidelidade=="''";
        }
        $s_acl_logradouro=$rscom['s_acl_logradouro'];
        if ($s_acl_logradouro== '') {
            $s_acl_logradouro="''";
        }
        $s_acl_denominacao_social=$rscom['s_acl_denominacao_social'];
        if ($s_acl_denominacao_social== '') {
            $s_acl_denominacao_social="''";
        }
        $i_acl_situacao_cliente=$rscom['i_acl_situacao_cliente'];
        if ($i_acl_situacao_cliente== '') {
            $i_acl_situacao_cliente='NULL';
        }
        $s_acl_usuario_windows=$rscom['s_acl_usuario_windows'];
        if ($s_acl_usuario_windows== '') {
            $s_acl_usuario_windows="''";
        }
        $s_acl_senha_windows=$rscom['s_acl_senha_windows'];
        if ($s_acl_senha_windows== '') {
            $s_acl_senha_windows="''";
        }
        $s_acl_url_logmein=$rscom['s_acl_url_logmein'];
        if ($s_acl_url_logmein== '') {
            $s_acl_url_logmein="''";
        }
        $s_acl_senha_logmein=$rscom['s_acl_senha_logmein'];
        if ($s_acl_senha_logmein== '') {
            $s_acl_senha_logmein=="''";
        }
        $s_acl_nome_responsavel=$rscom['s_acl_nome_responsavel'];
        if ($s_acl_nome_responsavel== '') {
            $s_acl_nome_responsavel="''";
        }
        $i_acl_codigo_parceiro_prc=$rscom['i_acl_codigo_parceiro_prc'];
        if ($i_acl_codigo_parceiro_prc== '') {
            $i_acl_codigo_parceiro_prc='NULL';
        }
        $i_acl_bloqueia_senha=$rscom['i_acl_bloqueia_senha'];
        if ($i_acl_bloqueia_senha== '') {
            $i_acl_bloqueia_senha='NULL';
        }
        $s_acl_insc_municipal=$rscom['s_acl_insc_municipal'];
        if ($s_acl_insc_municipal== '') {
            $s_acl_insc_municipal="''";
        }
        $i_acl_codigo_ram=$rscom['i_acl_codigo_ram'];
        if ($i_acl_codigo_ram== '') {
            $i_acl_codigo_ram='NULL';
        }
        $i_acl_tipo_cliente_juridico=$rscom['i_acl_tipo_cliente_juridico'];
        if ($i_acl_tipo_cliente_juridico== '') {
            $i_acl_tipo_cliente_juridico='NULL';
        }
        $i_acl_modelo_cliente=$rscom['i_acl_modelo_cliente'];
        if ($i_acl_modelo_cliente== '') {
            $i_acl_modelo_cliente='NULL';
        }
        $i_acl_codigo_acl=$rscom['i_acl_codigo_acl'];
        if ($i_acl_codigo_acl== '') {
            $i_acl_codigo_acl='NULL';
        }
        $i_acl_susp_pis_cofins=$rscom['i_acl_susp_pis_cofins'];
        if ($i_acl_susp_pis_cofins== '') {
            $i_acl_susp_pis_cofins='NULL';
        }
        $i_acl_icms_diferido=$rscom['i_acl_icms_diferido'];
        if ($i_acl_icms_diferido== '') {
            $i_acl_icms_diferido='NULL';
        }
        $s_acl_obs_parametros=$rscom['s_acl_obs_parametros'];
        if ($s_acl_obs_parametros== '') {
            $s_acl_obs_parametros="''";
        }
        $i_acl_endereco_numero=$rscom['i_acl_endereco_numero'];
        if ($i_acl_endereco_numero== '') {
            $i_acl_endereco_numero='NULL';
        }
        $i_acl_calculo_rs=$rscom['i_acl_calculo_rs'];
        if ($i_acl_calculo_rs== '') {
            $i_acl_calculo_rs='NULL';
        }
        $i_acl_concessao_icms_st=$rscom['i_acl_concessao_icms_st'];
        if ($i_acl_concessao_icms_st== '') {
            $i_acl_concessao_icms_st='NULL';
        }
        $s_acl_endereco_entrega=$rscom['s_acl_endereco_entrega'];
        if ($s_acl_endereco_entrega== '') {
            $s_acl_endereco_entrega="''";
        }
        $s_acl_bairro_entrega=$rscom['s_acl_bairro_entrega'];
        if ($s_acl_bairro_entrega== '') {
            $s_acl_bairro_entrega="''";
        }
        $i_acl_cep_entrega=$rscom['i_acl_cep_entrega'];
        if ($i_acl_cep_entrega== '') {
            $i_acl_cep_entrega="''";
        }
        $s_acl_complemento_entrega=$rscom['s_acl_complemento_entrega'];
        if ($s_acl_complemento_entrega== '') {
            $s_acl_complemento_entrega="''";
        }
        $s_acl_bairro_cobranca=$rscom['s_acl_bairro_cobranca'];
        if ($s_acl_bairro_cobranca== '') {
            $s_acl_bairro_cobranca="''";
        }
        $i_acl_tipo_mercado=$rscom['i_acl_tipo_mercado'];
        if ($i_acl_tipo_mercado== '') {
            $i_acl_tipo_mercado="''";
        }
        $n_acl_valor_adicional_celesc=$rscom['n_acl_valor_adicional_celesc'];
        if ($n_acl_valor_adicional_celesc== '') {
            $n_acl_valor_adicional_celesc='NULL';
        }
        $n_acl_valor_adesao_celesc=$rscom['n_acl_valor_adesao_celesc'];
        if ($n_acl_valor_adesao_celesc== '') {
            $n_acl_valor_adesao_celesc='NULL';
        }
        $i_acl_qtde_vezes_adesao_celesc=$rscom['i_acl_qtde_vezes_adesao_celesc'];
        if ($i_acl_qtde_vezes_adesao_celesc== '') {
            $i_acl_qtde_vezes_adesao_celesc='NULL';
        }
        $i_acl_contador_adesao_celesc=$rscom['i_acl_contador_adesao_celesc'];
        if ($i_acl_contador_adesao_celesc== '') {
            $i_acl_contador_adesao_celesc='NULL';
        }
        $i_acl_codigo_tco1=$rscom['i_acl_codigo_tco1'];
        if ($i_acl_codigo_tco1== '') {
            $i_acl_codigo_tco1='NULL';
        }
        $s_acl_mensagem_nfe=$rscom['s_acl_mensagem_nfe'];
        if ($s_acl_mensagem_nfe== '') {
            $s_acl_mensagem_nfe="''";
        }
        $i_acl_possui_internet=$rscom['i_acl_possui_internet'];
        if ($i_acl_possui_internet== '') {
            $i_acl_possui_internet='NULL';
        }
        $i_acl_suspensao_retencao=$rscom['i_acl_suspensao_retencao'];
        if ($i_acl_suspensao_retencao== '') {
            $i_acl_suspensao_retencao='NULL';
        }
        $i_acl_suspensao_iss=$rscom['i_acl_suspensao_iss'];
        if ($i_acl_suspensao_iss== '') {
            $i_acl_suspensao_iss='NULL';
        }
        $i_acl_codigo_tgc=$rscom['i_acl_codigo_tgc'];
        if ($i_acl_codigo_tgc== '') {
            $i_acl_codigo_tgc='NULL';
        }
        $i_acl_codigo_tcc=$rscom['i_acl_codigo_tcc'];
        if ($i_acl_codigo_tcc== '') {
            $i_acl_codigo_tcc='NULL';
        }
        $s_acl_inscricao_rural=$rscom['s_acl_inscricao_rural'];
        if ($s_acl_inscricao_rural== '') {
            $s_acl_inscricao_rural="''";
        }
        $i_acl_permite_gerar_senha_offline=$rscom['i_acl_permite_gerar_senha_offline'];
        if ($i_acl_permite_gerar_senha_offline== '') {
            $i_acl_permite_gerar_senha_offline='NULL';
        }
        $i_acl_possui_tabela_preco=$rscom['i_acl_possui_tabela_preco'];
        if ($i_acl_possui_tabela_preco== '') {
            $i_acl_possui_tabela_preco='NULL';
        }
        $i_acl_seq_unica=$rscom['i_acl_seq_unica'];
        if ($i_acl_seq_unica== '') {
            $i_acl_seq_unica='NULL';
        }
        $s_acl_complemento=$rscom['s_acl_complemento'];
        if ($s_acl_complemento== '') {
            $s_acl_complemento="''";
        }
        $i_paf_ide=$rscom['i_paf_ide'];
        if ($i_paf_ide== '') {
            $i_paf_ide='NULL';
        }
        $s_acl_msg_venda=$rscom['s_acl_msg_venda'];
        if ($s_acl_msg_venda== '') {
            $s_acl_msg_venda="''";
        }
        $i_acl_permit_credito_st_ret=$rscom['i_acl_permit_credito_st_ret'];
        if ($i_acl_permit_credito_st_ret== '') {
            $i_acl_permit_credito_st_ret='NULL';
        }
        $n_acl_limite_mensal=$rscom['n_acl_limite_mensal'];
        if ($n_acl_limite_mensal== '') {
            $n_acl_limite_mensal='NULL';
        }
        $s_acl_tipo_logradouro=$rscom['s_acl_tipo_logradouro'];
        if ($s_acl_tipo_logradouro== '') {
            $s_acl_tipo_logradouro="''";
        }
        $s_acl_tipo_bairro=$rscom['s_acl_tipo_bairro'];
        if ($s_acl_tipo_bairro== '') {
            $s_acl_tipo_bairro="''";
        }
        $s_acl_passaporte=$rscom['s_acl_passaporte'];
        if ($s_acl_passaporte== '') {
            $s_acl_passaporte="''";
        }
        $s_acl_uf_entrega=$rscom['s_acl_uf_entrega'];
        if ($s_acl_uf_entrega== '') {
            $s_acl_uf_entrega="''";
        }
        $i_acl_calcula_imp_por_entrega=$rscom['i_acl_calcula_imp_por_entrega'];
        if ($i_acl_calcula_imp_por_entrega== '') {
            $i_acl_calcula_imp_por_entrega='NULL';
        }
        $s_acl_preferencia_perfil=$rscom['s_acl_preferencia_perfil'];
        if ($s_acl_preferencia_perfil== '') {
            $s_acl_preferencia_perfil="''";
        }
        $ccodigoold='';
        if ($ccodigoold== '') {
            $ccodigoold="''";
        }
        $com="INSERT INTO aclientes(
            ccodigo, cnomecliente, csexo, cnascimento, cestadocivil, cmae,
            cpai, cdatacadastro, cpessoa, cdocumento, ccpf, ccnpj, cinsest,
            ctituloeleitor, cnaturalidadde, cestadonatural, cendereco, cbairro,
            cproximidade, ccidade, ccep, cuf, cfoneresidencial, cfonecomercial,
            cfonecelular, cemail, chomepage, cconjuge, cnasconjuge, cmaeconjuge,
            cpaiconjuge, cdocconjuge, ccpfconjuge, cloctraconjuge, cendtraconjuge,
            ctelconjuge, ccelconjuge, cproconjuge, crdaconjuge, cadmconjuge,
            cnatconjuge, ctracliente, cendtracliente, crdacliente, cprofissaocliente,
            procliente, coutrencliente, ccrecliente, climcarcliente, cfatmedcliente,
            cchecliente, climchecliente, clojrefcliente, cultcomcliente,
            ctipcliente, cptucliente, ccodspccliente, cendpagcliente, ccidpagcliente,
            cestpagcliente, cceppagcliente, cemiavicliente, cenvspccliente,
            cavicobcliente, cendcorcliente, cblovencliente, cdatavipgtcliente,
            ccasprocliente, cterprocliente, ccarprocliente, coutbencliente,
            cdesoutbencliente, ccodctbcliente, catlcadcliente, cvencadcliente,
            cfotcliente, casscliente, cdoccliente, canicliente, copccliente,
            cusccliente, choccliente, cdtccliente, cdtacliente, choacliente,
            copacliente, cusacliente, cempcliente, cceptabcliente, cregcliente,
            ccodconvenio, ctipimpcliente, cluzcliente, cextin01, ccarga01,
            crecarga01, cextin02, ccarga02, crecarga02, cextin03, ccarga03,
            crecarga03, cextin04, ccarga04, crecarga04, cextin05, ccarga05,
            crecarga05, cextin06, ccarga06, crecarga06, cextin07, ccarga07,
            crecarga07, cextin08, ccarga08, crecarga08, cextin09, ccarga09,
            crecarga09, cextin10, ccarga10, crecarga10, ccodantigo, cobsclientes,
            senha_net, nivel_net, ativacao_net, bloqueio_net, cod_fotografo,
            forma_cadastro, empresa_cadastro, dependente_1, dependente_2,
            dependente_3, dependente_4, dependente_5, dependente_6, dependente_7,
            dependente_8, dependente_9, dependente_10, valor_mensal, dat_inc_celesc,
            dat_alt_celesc, dat_exc_celesc, mot_bloq_venda, limite_credito,
            ati_ult_limite, contatos_cliente, desconto_cliente, fax_cliente,
            bloq_vendas_aprazo, i_acl_codigo_ven_foto, i_acl_tab_preco, i_acl_perc_aplicar_venda,
            i_cond_pagto_padrao, s_acl_outro_fone, s_acl_outro_fone2, s_acl_msn,
            s_acl_skype, i_acl_codigo_fon, d_acl_data_casamento, n_acl_limite_cartao_fidelidade,
            d_acl_entrada_cartao_fid, d_acl_bloqueio_cartao_fid, d_acl_entrega_cartao_fid,
            d_acl_admissao, s_acl_estatistica, n_acl_pontos_cliente, n_acl_bloq_gerar_cred_venda,
            n_acl_bloq_nf_dev_venda, s_acl_numero_cartao_fidelidade, s_acl_logradouro,
            s_acl_denominacao_social, i_acl_situacao_cliente, s_acl_usuario_windows,
            s_acl_senha_windows, s_acl_url_logmein, s_acl_senha_logmein,
            s_acl_nome_responsavel, i_acl_codigo_parceiro_prc, i_acl_bloqueia_senha,
            s_acl_insc_municipal, i_acl_codigo_ram, i_acl_tipo_cliente_juridico,
            i_acl_modelo_cliente, i_acl_codigo_acl, i_acl_susp_pis_cofins,
            i_acl_icms_diferido, s_acl_obs_parametros, i_acl_endereco_numero,
            i_acl_calculo_rs, i_acl_concessao_icms_st, s_acl_endereco_entrega,
            s_acl_bairro_entrega, i_acl_cep_entrega, s_acl_complemento_entrega,
            s_acl_bairro_cobranca, i_acl_tipo_mercado, n_acl_valor_adicional_celesc,
            n_acl_valor_adesao_celesc, i_acl_qtde_vezes_adesao_celesc, i_acl_contador_adesao_celesc,
            i_acl_codigo_tco1, s_acl_mensagem_nfe, i_acl_possui_internet,
            i_acl_suspensao_retencao, i_acl_suspensao_iss, i_acl_codigo_tgc,
            i_acl_codigo_tcc, s_acl_inscricao_rural, i_acl_permite_gerar_senha_offline,
            i_acl_possui_tabela_preco, i_acl_seq_unica, s_acl_complemento,
            i_paf_ide, s_acl_msg_venda, i_acl_permit_credito_st_ret, n_acl_limite_mensal,
            s_acl_tipo_logradouro, s_acl_tipo_bairro, s_acl_passaporte, s_acl_uf_entrega,
            i_acl_calcula_imp_por_entrega, s_acl_preferencia_perfil) values (nextval('seque_aclientes'),'$cnomecliente','$csexo','$cnascimento','$cestadocivil','$cmae','$cpai','$cdatacadastro','$cpessoa','$cdocumento','$ccpf','$ccnpj','$cinsest','$ctituloeleitor','$cnaturalidadde','$cestadonatural','$cendereco','$cbairro','$cproximidade','$ccidade','$ccep','$cuf','$cfoneresidencial','$cfonecomercial',
'$cfonecelular','$cemail','$chomepage','$cconjuge',$cnasconjuge,'$cmaeconjuge','$cpaiconjuge','$cdocconjuge','$ccpfconjuge','$cloctraconjuge','$cendtraconjuge','$ctelconjuge','$ccelconjuge','$cproconjuge','$crdaconjuge',$cadmconjuge,'$cnatconjuge','$ctracliente','$cendtracliente','$crdacliente','$cprofissaocliente',
'$procliente','$coutrencliente','$ccrecliente','$climcarcliente','$cfatmedcliente','$cchecliente','$climchecliente','$clojrefcliente','$cultcomcliente','$ctipcliente','$cptucliente','$ccodspccliente','$cendpagcliente','$ccidpagcliente','$cestpagcliente','$cceppagcliente','$cemiavicliente','$cenvspccliente',
'$cavicobcliente','$cendcorcliente','$cblovencliente','$cdatavipgtcliente','$ccasprocliente','$cterprocliente','$ccarprocliente','$coutbencliente','$cdesoutbencliente','$ccodctbcliente','$catlcadcliente','$cvencadcliente','$cfotcliente','$casscliente','$cdoccliente','$canicliente','$copccliente',
'$cusccliente','$choccliente','$cdtccliente','$cdtacliente','$choacliente','$copacliente','$cusacliente','$cempcliente','$cceptabcliente','$cregcliente','$ccodconvenio','$ctipimpcliente','$cluzcliente','$cextin01','$ccarga01',
'$crecarga01','$cextin02','$ccarga02','$crecarga02','$cextin03','$ccarga03','$crecarga03','$cextin04','$ccarga04','$crecarga04','$cextin05','$ccarga05','$crecarga05','$cextin06','$ccarga06','$crecarga06','$cextin07','$ccarga07','$crecarga07','$cextin08','$ccarga08','$crecarga08','$cextin09','$ccarga09',
'$crecarga09','$cextin10','$ccarga10','$crecarga10','$ccodantigo','$cobsclientes','$senha_net','$nivel_net','$ativacao_net','$bloqueio_net','$cod_fotografo','$forma_cadastro','$empresa_cadastro','$dependente_1','$dependente_2','$dependente_3','$dependente_4','$dependente_5','$dependente_6','$dependente_7',
'$dependente_8','$dependente_9','$dependente_10','$valor_mensal','$dat_inc_celesc','$dat_alt_celesc','$dat_exc_celesc','$mot_bloq_venda','$limite_credito','$ati_ult_limite','$contatos_cliente','$desconto_cliente','$fax_cliente','$bloq_vendas_aprazo','$i_acl_codigo_ven_foto','$i_acl_tab_preco','$i_acl_perc_aplicar_venda',
'$i_cond_pagto_padrao','$s_acl_outro_fone','$s_acl_outro_fone2','$s_acl_msn','$s_acl_skype','$i_acl_codigo_fon','$d_acl_data_casamento','$n_acl_limite_cartao_fidelidade','$d_acl_entrada_cartao_fid','$d_acl_bloqueio_cartao_fid','$d_acl_entrega_cartao_fid','$d_acl_admissao','$s_acl_estatistica','$n_acl_pontos_cliente','$n_acl_bloq_gerar_cred_venda',
'$n_acl_bloq_nf_dev_venda','$s_acl_numero_cartao_fidelidade','$s_acl_logradouro','$s_acl_denominacao_social','$i_acl_situacao_cliente','$s_acl_usuario_windows','$s_acl_senha_windows','$s_acl_url_logmein','$s_acl_senha_logmein','$s_acl_nome_responsavel','$i_acl_codigo_parceiro_prc','$i_acl_bloqueia_senha',
'$s_acl_insc_municipal','$i_acl_codigo_ram','$i_acl_tipo_cliente_juridico','$i_acl_modelo_cliente','$i_acl_codigo_acl','$i_acl_susp_pis_cofins','$i_acl_icms_diferido','$s_acl_obs_parametros','$i_acl_endereco_numero','$i_acl_calculo_rs','$i_acl_concessao_icms_st','$s_acl_endereco_entrega',
'$s_acl_bairro_entrega','$i_acl_cep_entrega','$s_acl_complemento_entrega','$s_acl_bairro_cobranca','$i_acl_tipo_mercado','$n_acl_valor_adicional_celesc','$n_acl_valor_adesao_celesc','$i_acl_qtde_vezes_adesao_celesc','$i_acl_contador_adesao_celesc','$i_acl_codigo_tco1','$s_acl_mensagem_nfe','$i_acl_possui_internet',
'$i_acl_suspensao_retencao','$i_acl_suspensao_iss','$i_acl_codigo_tgc','$i_acl_codigo_tcc','$s_acl_inscricao_rural','$i_acl_permite_gerar_senha_offline','$i_acl_possui_tabela_preco','$i_acl_seq_unica','$s_acl_complemento','$i_paf_ide','$s_acl_msg_venda','$i_acl_permit_credito_st_ret','$n_acl_limite_mensal',
'$s_acl_tipo_logradouro','$s_acl_tipo_bairro','$s_acl_passaporte','$s_acl_uf_entrega','$i_acl_calcula_imp_por_entrega','$s_acl_preferencia_perfil')";
        echo $com.';'.'<br><br>';
    }
}








?>