

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/Desenvolver/pedidos.html'</script>";
$erro="<script>alert('N�o Foi possivel Conectar ao Bancp de Dados');</script>";


$pedido=$_POST['numeropedido'];
if ($pedido== '' or $pedido <= '0' ) {
    echo '<script>window.alert(\'Favor inserir um numero de pedido V�lido\');</script>';
    echo $voltalogin;
}
$empre1=$_POST['emppedido'];
if ($empre1== '' or $empre1 <= '0') {
    echo '<script>window.alert(\'Numero da empresa inv�lido\');</script>';
    echo $voltalogin;
}
$data=$_POST['data'];
if ($data=='') {
    echo '<script>window.alert(\'Data Invalida\');</script>';
    echo $voltalogin;    
}
$empre2=$_POST['empdespedido'];
if ($empre2== '' or $empre2 <= '0') {
    echo '<script>window.alert(\'Numero da empresa de destino inv�lido\');</script>';
    echo $voltalogin;
}

?>