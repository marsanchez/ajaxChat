<?php 

$iRespuesta = 1;
if($_POST) {

	$sNom = trim($_POST['nombre']);
	$sTexto = $_POST['texto'];

	if(strlen($sNom) <= 50) {
		require 'BD.class.php';
		$miDB = new DB();
		$sSQL = "INSERT INTO usuario VALUES (NULL, '$sNom', '$sTexto', now());";
		$miDB->ejecutarQuery($sSQL);
		$iRespuesta = 0;
	}
}

echo $iRespuesta;

?>