<?php 

require 'BD.class.php';
$miDB = new DB();
$sSQL = 'SELECT nombre, texto FROM usuario ORDER BY fecha ASC';
$aResul = $miDB->obtenerResultado($sSQL);

foreach ($aResul as $key => $value) {
	echo $aResul[$key]['nombre'] . ' : ' . $aResul[$key]['texto'] . '<br>';
}



?>