<!DOCTYPE html>
<html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" >
<br><br>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include_once("conexao.php");
date_default_timezone_set('America/Sao_Paulo');
$time = date('H:i:s');
$dia = date('Y-m-d');
set_time_limit(0);
error_reporting(0);
function line(){
    $backtrace = debug_backtrace();
    $line = $backtrace[0]['line'];
    return $line;
}
$voltalogin = "<script>window.location='http://192.168.13.2/result/'</script>";
$botao = $_POST["bt"];
if ($botao == 'FECHAR') {
    session_destroy();
    echo "<script>alert('Desconectado com Sucesso!!');</script>";
    echo $voltalogin;
    exit;
}
$servidor = $_SESSION['servidor'];
if ($servidor == null) {
    session_destroy();
    echo "<script>alert('Erro Ao carregar o Servidor de Origem');</script>";
    echo $voltalogin;
    exit;
} 

$data = $_SESSION['data'];
if ($data == null) {
    session_destroy();
    echo "<script>alert('Erro Ao carregar Data de Cadastro');</script>";
    echo $voltalogin;
    exit;
} else {
    $ref = explode("-", $data);
    $ano = $ref[0];
    $mes = $ref[1];		    		    
    $ref = $ano.'/'.$mes;
}
if ($servidor == 'C') {
    $sql = "BEGIN";
    $exsql = pg_query($congl ,$sql);
    $exsql = pg_query($congc ,$sql);
    $exsql = pg_query($congv ,$sql);
    $exsql = pg_query($congj ,$sql);
    $exsql = pg_query($conrc ,$sql);
    $exsql = pg_query($conrv ,$sql);
    $exsql = pg_query($conrl ,$sql);
     $login = $_SESSION['login'];
     $codlogin = $_SESSION['codlogin'];
     if ($login == null or $codlogin == null) {
        session_destroy();
        echo "<script>alert('Erro ao Carregar o Login');</script>";
        echo $voltalogin;
        exit;
     } 
     $con = $conrc;

     $sql = "select *from fechamento where data ='$data' and base = 'C'";
     $exsql = pg_query($con ,$sql);
     $resulsql = pg_fetch_array($exsql);
     $fechamento  = $resulsql['data'];
     if ($fechamento <> null ) {
         $data = implode("/",array_reverse(explode("-",$data)));
         echo "<script>alert('Data : $data ja estava lancada ');</script>";
         echo $voltalogin;
         exit;		        
     } else {
         $sql = "INSERT INTO fechamento VALUES (nextval('seque_fechamento'),'$data','C')";
         $exsql = pg_query($con ,$sql);        
         if (!$exsql){
             $sql = "ROLLBACK";
             $exsql = pg_query($con,$sql);
             echo "<script>alert('Erro ao Incluir lancamento Do Fachamento Avissar o Suporte');</script>"; 
             echo $voltalogin;
             exit;		        
         } 
     }
     function fat($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)     
     {        
         $fat = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$j $c',
         $d,$m,11,$k,$l,'','','$e',null,null,0,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
         null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
         return $fat;
     }        
     $loja = $_SESSION['loja1'];
     $ger = 'ROSANE';
     $dep = '2';
     if ($loja > 0 ) {
        $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00); 
        $exsql = pg_query($con ,$sql);        
         if (!$exsql){
             $sql = "ROLLBACK";
             $exsql = pg_query($con,$sql);
             echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
             echo $voltalogin;
             exit;		        
         }    
    }
    $juro =  $_SESSION['juro1'];
    if ($juro > 0 ) {
        $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
        $exsql = pg_query($con ,$sql);        
         if (!$exsql){
             $sql = "ROLLBACK";
             $exsql = pg_query($con,$sql);
             echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
             echo $voltalogin;
             exit;		        
         }    
    }
    $dev = $_SESSION['dev1'];
    if ($dev > 0 ) {
        $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
        $exsql = pg_query($con ,$sql);        
         if (!$exsql){
             $sql = "ROLLBACK";
             $exsql = pg_query($con,$sql);
             echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
             echo $voltalogin;
             exit;		        
         }    
    }
    $loja = $_SESSION['loja3'];
    $ger = 'LUCELIA';
    $dep = '4';
    if ($loja > 0 ) {
       $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $juro =  $_SESSION['juro3'];
   if ($juro > 0 ) {
       $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $dev = $_SESSION['dev3'];
   if ($dev > 0 ) {
       $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $loja = $_SESSION['loja5'];
   $ger = 'VILA';
   $dep = '3';
   if ($loja > 0 ) {
      $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $juro =  $_SESSION['juro5'];
  if ($juro > 0 ) {
      $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $dev = $_SESSION['dev5'];
  if ($dev > 0 ) {
      $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $loja = $_SESSION['loja7'];
   $ger = 'ADRIELI';
   $dep = '1';
   if ($loja > 0 ) {
      $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $juro =  $_SESSION['juro7'];
  if ($juro > 0 ) {
      $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $dev = $_SESSION['dev7'];
  if ($dev > 0 ) {
      $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $loja = $_SESSION['loja9'];
  $ger = 'APOLO ANTIGO';
  $dep = '5';
  if ($loja > 0 ) {
     $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
 }
 $juro =  $_SESSION['juro9'];
 if ($juro > 0 ) {
     $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
 }
 $dev = $_SESSION['dev9'];
 if ($dev > 0 ) {
     $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
 }
 $loja = $_SESSION['loja11'];
 $ger = 'SHOP MASP CDR';
 $dep = '8';
 if ($loja > 0 ) {
    $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
    $exsql = pg_query($con ,$sql);        
     if (!$exsql){
         $sql = "ROLLBACK";
         $exsql = pg_query($con,$sql);
         echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
         echo $voltalogin;
         exit;		        
        }    
    }
    $juro =  $_SESSION['juro11'];
    if ($juro > 0 ) {
        $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $dev = $_SESSION['dev11'];
    if ($dev > 0 ) {
        $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $loja = $_SESSION['atloja1'];
    $ger = 'ATAC. MAYARA';
    $dep = '11';
    if ($loja > 0 ) {
        $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $juro =  $_SESSION['atjuro1'];
    if ($juro > 0 ) {
        $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $dev = $_SESSION['atdev1'];
    if ($dev > 0 ) {
        $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $loja = $_SESSION['atloja3'];
    $ger = 'ATAC. JOSI';
    $dep = '5';
    if ($loja > 0 ) {
        $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $juro =  $_SESSION['atjuro3'];
    if ($juro > 0 ) {
        $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }
    $dev = $_SESSION['atdev3'];
    if ($dev > 0 ) {
        $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
    }     
    function transf($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p) 
    /*
    a = Login;
    b = codigo login
    c = Descricao operacao
    d = credito
    e = data
    f = referencia
    g = dia
    h = time
    i = departamento (nao ussa na transferencia) null
    j = segundo id transferencia
    k = categoria historico (nao ussa na transferencia) 1
    l = favorecido (nao ussa na transferencia) 1
    m = valor debito
    n = id ahcontas (caso for transferencia) null
    o = conta
    p = participa resumos (nao ussa na transferencia) null ''
    */     
        {        
            $transf = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES ($j,'$p','$c',
            $d,$m,$o,$k,$l,'','0','$e',null,'$h',$n,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
            null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
            return $transf;
        }  
    $aa = $_SESSION['aa1'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
               and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as duplicatas em Lages Favor baixar Manualmente valor diferentes');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Lages Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    $aa = $_SESSION['bb1'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 749 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 749 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit; 
            }
        }        
    }
    $aa = $_SESSION['cc1'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 749 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>";
             echo $voltalogin;
             exit;	 
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 749 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;	
            }
        }                
    }
    $aa = $_SESSION['tdd1'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ROSANE P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ROSANE P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 749 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 749 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['aa3'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 245 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as duplicatas em Lages Favor baixar Manualmente valor diferentes');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 245 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Lages Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }
    }
    $aa = $_SESSION['bb3'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 7 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 7 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }                
    }
    $aa = $_SESSION['cc3'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 7 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 7 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com); 
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['dd3'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE LUCELIA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 7 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 7 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['aa5'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 247 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as duplicatas em Lages Favor baixar Manualmente valor diferentes');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 247 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Lages Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }
        
    }
    $aa = $_SESSION['bb5'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 691 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 691 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['cc5'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 691 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 691 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['dd5'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE VILA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE VILA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 691 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 691 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }    
    $aa = $_SESSION['aa7'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Id');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 246 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as duplicatas em Lages Favor baixar Manualmente valor diferentes');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 246 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);            
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Lages Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
    }
    $aa = $_SESSION['bb7'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 741 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 741 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }
        
    }
    $aa = $_SESSION['cc7'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 741 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 741 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['dd7'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE ADRIELI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 741 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 741 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['ataa1'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Id');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 948 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 948 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['atbb1'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2217 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2217 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }
    }
    $aa = $_SESSION['atcc1'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2217 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2217 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['atdd1'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE MAYARA P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE MAYARA P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2217 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2217 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['ataa3'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Id');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrl ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 947 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 947 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['atbb3'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
                $aa,'null',11,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2330 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2330 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }
    }
    $aa = $_SESSION['atcc3'];   
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        } 
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2330 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2330 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $aa = $_SESSION['atdd3'];    
    if ($aa > 0) {
        $sql = "select nextval('seque_ahcontas')";
        $exsql = pg_query($con,$sql);
        $resulsql = pg_fetch_array($exsql);
        $id = $resulsql['nextval'];
        if ($id == null) {
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Pegar Login');</script>"; 
            echo $voltalogin;
            exit;
        }
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,78,null); 
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
            ,1,1,$aa,$id,11,null);
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }      
        $sql = transf($login,$codlogin,'MERCADORIA DE JOSI P/ SHOP VIDEIRA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
                ,1,1,$aa,$id,5,null);
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $sql =  transf($login,$codlogin,'MERCADORIA DE JOSI P/ SHOP VIDEIRA',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
                $aa,'null',81,1); 
        $exsql = pg_query($conrv ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
            echo $voltalogin;
            exit;		        
        }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2330 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
        and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
             echo "<script>alert('Nao foi possivel baixar as duplicatas em Videira Favor baixar Manualmente valor diferentes');</script>"; 
             echo $voltalogin;
             exit;	
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2330 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas em Videira Favor baixar Manualmente e avissar o Suporte');</script>"; exit($com);
                echo $voltalogin;
                exit;	
            }
        }        
    }
    $sql = "COMMIT";
    $exsql = pg_query($congl ,$sql);
    $exsql = pg_query($congc ,$sql);
    $exsql = pg_query($congv ,$sql);
    $exsql = pg_query($congj ,$sql);
    $exsql = pg_query($conrc ,$sql);
    $exsql = pg_query($conrv ,$sql);
    $exsql = pg_query($conrl ,$sql);
    echo "<script>alert('Lancamento Cadastrado!');</script>";
    echo $voltalogin;    
} elseif ($servidor == 'V') {    
    $login = $_SESSION['login'];
    $codlogin = $_SESSION['codlogin'];
    if ($login == null or $codlogin == null) {
       session_destroy();
       echo "<script>alert('Erro ao Carregar o Login');</script>";
       echo $voltalogin;
       exit;
    }    
    $con = $conrv;
    $sql = "BEGIN";
    $exsql = pg_query($congl ,$sql);
    $exsql = pg_query($congc ,$sql);
    $exsql = pg_query($congv ,$sql);
    $exsql = pg_query($congj ,$sql);
    $exsql = pg_query($conrc ,$sql);
    $exsql = pg_query($conrv ,$sql);
    $exsql = pg_query($conrl ,$sql);
    $sql = "select *from fechamento where data ='$data'";
    $exsql = pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $fechamento  = $resulsql['data'];    
    if ($fechamento <> null ) {
        $data = implode("/",array_reverse(explode("-",$data)));
        echo "<script>alert('Data : $data ja estava lancada ');</script>";
        echo $voltalogin;
        exit;		        
    } else {
        $sql = "INSERT INTO fechamento VALUES (nextval('seque_fechamento'),'$data','C')";
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento Do Fachamento Avissar o Suporte');</script>"; 
            echo $voltalogin;
            exit;		        
        } 
    }
    function fatu($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n) //conta dif    
    {        
        $fatu = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$j $c',
        $d,$m,$n,$k,$l,'','','$e',null,null,0,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
        null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
        return $fatu;
    }
    function fat($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)     
    {        
        $fat = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$j $c',
        $d,$m,11,$k,$l,'','','$e',null,null,0,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
        null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
        return $fat;
    }        
    $loja = $_SESSION['loja13'];    
    $ger = 'NADIA';
    $dep = '6';
    if ($loja > 0 ) {
       $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00); 
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $juro =  $_SESSION['juro13'];
   if ($juro > 0 ) {
       $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $dev = $_SESSION['dev13'];
   if ($dev > 0 ) {
       $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $loja = $_SESSION['loja15'];
   $ger = 'CLEUSA';
   $dep = '7';
   if ($loja > 0 ) {
      $sql = fatu($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00,81);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $juro =  $_SESSION['juro15'];
  if ($juro > 0 ) {
      $sql = fatu($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00,81);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $dev = $_SESSION['dev15'];
  if ($dev > 0 ) {
      $sql = fatu($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev,81);
      $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
           echo $voltalogin;
           exit;		        
       }    
  }
  $loja = $_SESSION['loja17'];
  $ger = 'SHOP MASP VID';
  $dep = '10';
  if ($loja > 0 ) {
     $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
 }
 $juro =  $_SESSION['juro17'];
 if ($juro > 0 ) {
     $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
 }
 $dev = $_SESSION['dev17'];
 if ($dev > 0 ) {
     $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
     $exsql = pg_query($con ,$sql);        
      if (!$exsql){
          $sql = "ROLLBACK";
          $exsql = pg_query($con,$sql);
          echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
          echo $voltalogin;
          exit;		        
      }    
    }     
    function transf($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p) 
   /*
   a = Login;
   b = codigo login
   c = Descricao operacao
   d = credito
   e = data
   f = referencia
   g = dia
   h = time
   i = departamento (nao ussa na transferencia) null
   j = segundo id transferencia
   k = categoria historico (nao ussa na transferencia) 1
   l = favorecido (nao ussa na transferencia) 1
   m = valor debito
   n = id ahcontas (caso for transferencia) null
   o = conta
   p = participa resumos (nao ussa na transferencia) null ''
   */     
    {        
        $transf = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES ($j,'$p','$c',
        $d,$m,$o,$k,$l,'','0','$e',null,'$h',$n,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
        null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
        return $transf;
    }
    $aa = $_SESSION['aa13'];    
    if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ LUCELIA',0.00,$data,$ref,$dia,$time,4,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
               and cempduplicata in (3,4) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $linha;
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['bb13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ROSANE',0.00,$data,$ref,$dia,$time,2,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
        $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
                and cempduplicata in (1,2) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $linha;
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['cc13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ VILA',0.00,$data,$ref,$dia,$time,3,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (5,6) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $linha;
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (5,6)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['dd13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ ADRIELI',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (7,8) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (7,8)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ee13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ MAYARA',0.00,$data,$ref,$dia,$time,11,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 17 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 17 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ff13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ JOSI',0.00,$data,$ref,$dia,$time,5,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 17 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 17 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }               
   }
   $aa = $_SESSION['gg13'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE NADIA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,52,null);
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE NADIA P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 866 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 866 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }               
   }
   $aa = $_SESSION['aa15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ LUCELIA',0.00,$data,$ref,$dia,$time,4,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2349 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2349 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['bb15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ROSANE',0.00,$data,$ref,$dia,$time,2,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2349 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2349 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }         
   }
   $aa = $_SESSION['cc15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ VILA',0.00,$data,$ref,$dia,$time,3,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2349 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (5,6) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2349 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (5,6)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }         
   }
   $aa = $_SESSION['dd15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ ADRIELI',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2349 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (7,8) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2349 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (7,8)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }         
   }
   $aa = $_SESSION['ee15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ MAYARA',0.00,$data,$ref,$dia,$time,11,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 97 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 97 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }         
   }
   $aa = $_SESSION['ff15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ JOSI',0.00,$data,$ref,$dia,$time,5,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 97 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 97 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }                
   }
   $aa = $_SESSION['gg15'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,81,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,52,null);
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CLEUSA P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 985 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 985 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }                
   }
   $aa = $_SESSION['aa17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ LUCELIA',0.00,$data,$ref,$dia,$time,4,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2549 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2549 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }         
   }
   $aa = $_SESSION['bb17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ROSANE',0.00,$data,$ref,$dia,$time,2,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2549 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2549 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['cc17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ VILA',0.00,$data,$ref,$dia,$time,3,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2549 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (5,6) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2549 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (5,6)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['dd17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ ADRIELI',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       } 
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 2549 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (7,8) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 2549 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (7,8)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }       
   }
   $aa = $_SESSION['ee17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ MAYARA',0.00,$data,$ref,$dia,$time,11,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ff17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ JOSI',0.00,$data,$ref,$dia,$time,5,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 260 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 260 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }               
   }
   $aa = $_SESSION['gg17'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrl,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ CESAR',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ CESAR',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,52,null);
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE SHOP MASP VID P/ CESAR',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrl ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 924 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congl,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 924 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congl,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo $voltalogin;
                exit;
            }
        }               
   }
   $sql = "COMMIT";
   $exsql = pg_query($con ,$sql);
   $exsql = pg_query($congl ,$sql);
   $exsql = pg_query($congc ,$sql);
   $exsql = pg_query($congv ,$sql);
   $exsql = pg_query($congj ,$sql);
   $exsql = pg_query($conrc ,$sql);
   $exsql = pg_query($conrv ,$sql);
   $exsql = pg_query($conrl ,$sql);
   echo "<script>alert('Lancamento Cadastrado!');</script>";
   echo $voltalogin;    
   echo "<script>alert('Lancamento Cadastrado!');</script>";
   echo $voltalogin;    
} elseif ($servidor == 'L') {
    $login = $_SESSION['login'];
    $codlogin = $_SESSION['codlogin'];
    if ($login == null or $codlogin == null) {
       session_destroy();
       echo "<script>alert('Erro ao Carregar o Login');</script>";
       echo $voltalogin;
       exit;
    }    
    $con = $conrl;
    $sql = "BEGIN";
    $exsql = pg_query($congl ,$sql);
    $exsql = pg_query($congc ,$sql);
    $exsql = pg_query($congv ,$sql);
    $exsql = pg_query($congj ,$sql);
    $exsql = pg_query($conrc ,$sql);
    $exsql = pg_query($conrv ,$sql);
    $exsql = pg_query($conrl ,$sql);
    $sql = "select *from fechamento where data ='$data'";
    $exsql = pg_query($con ,$sql);
    $resulsql = pg_fetch_array($exsql);
    $fechamento  = $resulsql['data'];     
    if ($fechamento <> null ) {
        $data = implode("/",array_reverse(explode("-",$data)));
        echo "<script>alert('Data : $data ja estava lancada ');</script>";
        echo $voltalogin;
        exit;		        
    } else {
        $sql = "INSERT INTO fechamento VALUES (nextval('seque_fechamento'),'$data','C')";
        $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento Do Fachamento Avissar o Suporte');</script>"; 
            echo $voltalogin;
            exit;		        
        } 
    }
    function fat($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)     
    {        
        $fat = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES (nextval('seque_ahcontas'),'1','$j $c',
        $d,$m,11,$k,$l,'','','$e',null,null,0,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
        null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
        return $fat;
    }        
    $loja = $_SESSION['loja1'];    
    $ger = 'CESAR';
    $dep = '1';
    if ($loja > 0 ) {
       $sql = fat($login,$codlogin,$ger,$loja,$data,$ref,$dia,$time,$dep,'FATURAMENTO',16,39,0.00); 
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $juro =  $_SESSION['juro1'];
   if ($juro > 0 ) {
       $sql = fat($login,$codlogin,$ger,$juro,$data,$ref,$dia,$time,$dep,'JUROS',17,49,0.00);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
   $dev = $_SESSION['dev1'];
   if ($dev > 0 ) {
       $sql = fat($login,$codlogin,$ger,0.00,$data,$ref,$dia,$time,$dep,'DEVOLUCOES',11,34,$dev);
       $exsql = pg_query($con ,$sql);        
        if (!$exsql){
            $sql = "ROLLBACK";
            $exsql = pg_query($con,$sql);
            echo "<script>alert('Erro ao Incluir lancamento loja: $ger');</script>"; 
            echo $voltalogin;
            exit;		        
        }    
   }
      
    function transf($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p) 
   /*
   a = Login;
   b = codigo login
   c = Descricao operacao
   d = credito
   e = data
   f = referencia
   g = dia
   h = time
   i = departamento (nao ussa na transferencia) null
   j = segundo id transferencia
   k = categoria historico (nao ussa na transferencia) 1
   l = favorecido (nao ussa na transferencia) 1
   m = valor debito
   n = id ahcontas (caso for transferencia) null
   o = conta
   p = participa resumos (nao ussa na transferencia) null ''
   */     
    {        
        $transf = "select logar('$a','$b',0); INSERT INTO ahcontas VALUES ($j,'$p','$c',
        $d,$m,$o,$k,$l,'','0','$e',null,'$h',$n,'$f',1,0,0,0,'',0,'','$g','$h',$b,'$a',null,null,0,'','',
        null,null,null,null,0,0,0,0,null,null,0,null,null,$i,null,'','',0,'',null,0,0)";
        return $transf;
    }
    $aa = $_SESSION['aa1'];    
    if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ LUCELIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ LUCELIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,5,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ LUCELIA',0.00,$data,$ref,$dia,$time,4,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";                
                echo line();
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['bb1'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ ROSANE',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ROSANE',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,5,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ROSANE',0.00,$data,$ref,$dia,$time,2,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ccl1'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ VILA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ VILA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,5,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ VILA',0.00,$data,$ref,$dia,$time,3,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (5,6) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (5,6)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['dd1'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ ADRIELI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ADRIELI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,5,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ ADRIELI',0.00,$data,$ref,$dia,$time,1,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (7,8) ";
        $excom = pg_query($congc,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (7,8)";
            $excom = pg_query($congc,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ee1'];  
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ MAYARA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ MAYARA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,5,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ MAYARA',0.00,$data,$ref,$dia,$time,11,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 111 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (1,2) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo line();
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 111 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (1,2)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }        
   }
   $aa = $_SESSION['ff1'];  
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,5,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrc,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ JOSI',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ JOSI',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,78,null);
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ JOSI',0.00,$data,$ref,$dia,$time,5,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrc ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 111 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (3,4) ";
        $excom = pg_query($congj,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor']; 
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>"; 
            echo line();
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 111 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (3,4)";
            $excom = pg_query($congj,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }               
   }
   $aa = $_SESSION['gg1'];   
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,52,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ NADIA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ NADIA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,6,null);
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ NADIA',0.00,$data,$ref,$dia,$time,6,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (13,14) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (13,14)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }               
   }
   $aa = $_SESSION['hh1'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,52,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ CLEUSA',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,81,null); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ CLEUSA',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,6,null);
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ CLEUSA',0.00,$data,$ref,$dia,$time,7,"nextval('seque_ahcontas')",13,41,
               $aa,'null',81,1); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (15,16) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (15,16)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }                
   }
   $aa = $_SESSION['ii1'];    
   if ($aa > 0) {
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($con,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ SHOP MASP VID',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,52,null); 
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ SHOP MASO VID',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
           ,1,1,$aa,$id,11,null);
       $exsql = pg_query($con ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql = "select nextval('seque_ahcontas')";
       $exsql = pg_query($conrv,$sql);
       $resulsql = pg_fetch_array($exsql);
       $id = $resulsql['nextval'];
       if ($id == null) {
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Pegar o Id');</script>"; 
           echo $voltalogin;
           exit;
       }     
       $sql = transf($login,$codlogin,'MERCADORIA DE CESAR P/ SHOP MASO VID',$aa,$data,$ref,$dia,$time,'null',$id,1,1,0.00,$id,11,null); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ SHOP MASO VID',0.00,$data,$ref,$dia,$time,'null',"nextval('seque_ahcontas')"
               ,1,1,$aa,$id,6,null);
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $sql =  transf($login,$codlogin,'MERCADORIA DE CESAR P/ SHOP MASP VID',0.00,$data,$ref,$dia,$time,8,"nextval('seque_ahcontas')",13,41,
               $aa,'null',11,1); 
       $exsql = pg_query($conrv ,$sql);        
       if (!$exsql){
           $sql = "ROLLBACK";
           $exsql = pg_query($con,$sql);
           echo "<script>alert('Erro ao Incluir transferencia');</script>"; 
           echo $voltalogin;
           exit;		        
       }
       $com = "select sum(cvalduplicata) as valor from aeduplicatas where cforduplicata = 1602 and cvenduplicata = '$data' and cdpaduplicata IS NULL 
       and cempduplicata in (17,18) ";
        $excom = pg_query($congv,$com);
        $rescom = pg_fetch_array($excom);
        $dupli = $rescom['valor'];
        if ($dupli <> $aa ) {
            echo "<script>alert('Nao foi possivel baixar as  Favor baixar Manualmente valor diferente');</script>";
            echo $voltalogin;
            exit;
        } else {
            $com = "update aeduplicatas set cdpaduplicata = '$data', cvapduplicata = cvalduplicata, cdtatuduplicata = '$dia', 
            choatuduplicata = '$time', cuscadduplicata = '$login', copatuduplicata = '$codlogin' where cforduplicata = 1602 and 
            cvenduplicata = '$data' and cdpaduplicata IS NULL and cempduplicata in (17,18)";
            $excom = pg_query($congv,$com);
            if (!$excom){
                echo "<script>alert('Erro ao  baixar as duplicatas Favor baixar Manualmente e avissar o Suporte');</script>";
                echo line();
                echo $voltalogin;
                exit;
            }
        }                
   }
   $sql = "COMMIT";
   $exsql = pg_query($congl ,$sql);
   $exsql = pg_query($congc ,$sql);
   $exsql = pg_query($congv ,$sql);
   $exsql = pg_query($congj ,$sql);
   $exsql = pg_query($conrc ,$sql);
   $exsql = pg_query($conrv ,$sql);
   $exsql = pg_query($conrl ,$sql);
   echo "<script>alert('Lancamento Cadastrado!');</script>";
   echo $voltalogin;
}
?>