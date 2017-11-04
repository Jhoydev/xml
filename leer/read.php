<?php 
$xml = simplexml_load_file('xml.xml');
$arr = array();
foreach ($xml->propiedad as $propiedad) {
	$arr[strval($propiedad->unico)]["referencia"] = strval($propiedad->referencia);
	$arr[strval($propiedad->unico)]["ciudad"] = strval($propiedad->ciudad);
}
echo $arr["6979101015"]["referencia"];