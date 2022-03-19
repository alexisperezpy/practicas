<?php
	$palabras = array("sol","luna","cielo", "luz", "estrella", "lluvia");
	

	$openForm = "<form action='analisis.php'>";

		for ($i = 0; $i < count($palabras); $i++) {
			$openForm .="La palabra: ".str_shuffle($palabras[$i])." ".
			"<input type='text' name='palabra".$i."'>".
			"</br>";
		}

		$botonEnviar = "<button type='submit'>Enviar</button>";
		$closeForm = "</form>";

		echo $openForm.$botonEnviar.$closeForm;

?>