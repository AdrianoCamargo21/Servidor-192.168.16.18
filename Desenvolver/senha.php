

<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
$voltalogin="<script>window.location='http://192.168.13.2/desenvolver/Senha.html';</script>";

$numero=$_POST["numero"];
if ($numero == null) {
    echo "<script>alert('Senha inválida');</script>"; 
    echo $voltalogin;
}
if ($numero <= 25) { 
    if ($numero == 1) {
        $letra="v";
    } elseif ($numero == 2) {
        $letra="e";
    } elseif ($numero == 3) {
        $letra="o";
    }elseif ($numero == 4) {
        $letra="s";
    }elseif ($numero == 5) {
        $letra="c";
    }elseif ($numero == 6) {
        $letra="i";
    }elseif ($numero == 7) {
        $letra="ê";
    }elseif ($numero == 8) {
        $letra="a";
    }elseif ($numero == 9) {
        $letra="é";
    }elseif ($numero == 10) {
        $letra="l";
    }elseif ($numero == 11) {
        $letra="p";
    }elseif ($numero == 12) {
        $letra="b";
    }elseif ($numero == 13) {
        $letra="f";
    }elseif ($numero == 14) {
        $letra="r";
    }elseif ($numero == 15) {
        $letra="z";
    }elseif ($numero == 16) {
        $letra="g";
    }elseif ($numero == 17) {
        $letra="t";
    }elseif ($numero == 18) {
        $letra="d";
    }elseif ($numero == 19) {
        $letra="m";
    }elseif ($numero == 20) {
        $letra="n";
    }elseif ($numero == 21) {
        $letra="Espaço";
    }elseif ($numero == 22) {
        $letra="Ass:";
    }elseif ($numero == 23) {
        $letra="h";
    }elseif ($numero == 25) {
        $letra="ASC";
    }elseif ($numero == 26) {
        $letra="ó";
    }elseif ($numero == 27) {
        $letra="j";
    }elseif ($numero == 28) {
        $letra="u";
    }elseif ($numero == 29) {
        $letra="q";
    }
    if ($numero == 21){
        echo "<script>alert('Espaço');</script>";
    } elseif ($numero == 22 or $numero == 25){
        echo "<script>alert('$letra');</script>";
    }else {
        echo "<script>alert('Letra: $letra');</script>";
    }
    echo $voltalogin;
}elseif ($numero == '020521'){   
    echo "
	<p style=background:#000000; align=center <br/><b><font size=10 color=#7CFC00>Melhor Companhia</font></b></p>
	<!DOCTYPE html>
		<html>
		<head>
		<center><img src='img/Aec.jpeg' alt='500' heigth='500px' width='500px'></center>
		</head>
	</html>";
} else {
    echo "<script>alert('Senha Inválida');</script>";
    echo $voltalogin;
}








exit;
?>    