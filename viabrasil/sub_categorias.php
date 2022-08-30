<?php include_once("conexao.php");

	$id_categoria = $_REQUEST['id_categoria'];
	
	if ($id_categoria == null) {
	    $result_sub_cat = "select ccodgrupo,cdesgrupo from tgrupo order by cdesgrupo ";
	    $resultado_sub_cat = pg_query($conn, $result_sub_cat);
	    while ($row_sub_cat = pg_fetch_array($resultado_sub_cat) ) {
	        $resultao_sub_cat[] = array(
	            'id'	=> $row_sub_cat['ccodgrupo'],
	            'nome' => utf8_encode($row_sub_cat['cdesgrupo']),
	        );
	    }
	    
	    echo(json_encode($resultao_sub_cat));
	}
	
	$result_sub_cat = "select ccodgrupo,cdesgrupo from tgrupo  inner join aprodutos on cgruporduto = ccodgrupo where clinproduto = $id_categoria
                  group by ccodgrupo,cdesgrupo order by cdesgrupo ";
	$resultado_sub_cat = pg_query($conn, $result_sub_cat);	
	while ($row_sub_cat = pg_fetch_array($resultado_sub_cat) ) {
		$resultao_sub_cat[] = array(
			'id'	=> $row_sub_cat['ccodgrupo'],
			'nome' => utf8_encode($row_sub_cat['cdesgrupo']),
		);
	}
	
	echo(json_encode($resultao_sub_cat));
