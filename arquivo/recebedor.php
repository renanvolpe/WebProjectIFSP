<pre>
<?php
$arquivo = $_FILES['arquivo'];



if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0){

	

	if (count($arquivo['tmp_name']) > 0) {
		
		
		
			$nomeArquivo = md5($arquivo['name'].time().rand(0,99)).'.png';

			if(@move_uploaded_file($arquivo['tmp_name'], $nomeArquivo)){
				echo "deu bom 8";
			}else {
				echo "merda";
			}

			

			print_r($nomeArquivo);
		

	}

	

	

echo "  
Deu bom";
}


?>
</pre>