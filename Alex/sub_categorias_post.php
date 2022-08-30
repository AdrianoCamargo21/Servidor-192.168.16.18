<?php include_once("conexao.php");

	$id_categoria = $_REQUEST['linha'];
	if ($id_categoria <> null) {
	  
    	
    	$result_sub_cat = "SELECT * FROM tgrupo inner join aprodutos on ccodgrupo = cgruporduto  WHERE clinproduto =$id_categoria  group by cgruporduto ORDER BY cdesgrupo";
    	$resultado_sub_cat = pg_query($conn, $result_sub_cat);
    	
    	while ($row_sub_cat = pg_fetch_array($resultado_sub_cat) ) {
    		$sub_categorias_post[] = array(
    			'ccodgrupo'	=> $row_sub_cat['ccodgrupo'],
    			'cdesgrupo' => utf8_encode($row_sub_cat['cdesgrupo']),
    		);
    	}
    	
    	
    	echo(json_encode($sub_categorias_post));
    	
	} else {
	    $result_sub_cat = "SELECT * FROM tgrupo  ORDER BY cdesgrupo";
	    $resultado_sub_cat = pg_query($conn, $result_sub_cat);
	    
	    while ($row_sub_cat = pg_fetch_array($resultado_sub_cat) ) {
	        $sub_categorias_post[] = array(
	            'ccodgrupo'	=> $row_sub_cat['ccodgrupo'],
	            'cdesgrupo' => utf8_encode($row_sub_cat['cdesgrupo']),
	        );
	    }
	    
	    
	    echo(json_encode($sub_categorias_post));
	    
	}
