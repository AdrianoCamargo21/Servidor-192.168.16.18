<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<?php
if (file_exists('cte.xml')) {
    $object = simplexml_load_file('cte.xml');
    {
        foreach($object->CTe as  $item)
            $cn=$item->infCte->emit->CNPJ;
            $dst=$item->infCte->dest->CNPJ;
            $val=$item->infCte->vPrest->vTPrest;
            echo $cn.'-'.$dst.'-'.$val;
    }
    
    //print_r($object);
} else {
    exit('Falha ao Carregar o Arquivo');
}









 
   

?>
