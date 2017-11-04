<?php
include_once('../conexion.php');
include_once('funciones_kyero.php');

$rs = mysqli_select_agencias($conn);

$xml = new XMLWriter();
$xml->openURI("kyero.xml");
$xml->setIndent(true);
$xml->setIndentString("\t");
$xml->startDocument('1.0', 'utf-8');
$xml->startElement("root");
$xml->startElement("kyero");
$xml->writeElement('feed_version','3');
$xml->endElement();
while ($row = mysqli_fetch_assoc($rs)) {
	$xml->startElement("property");

	$xml->writeElement("id",$row["cod_ofer"]);
	$xml->writeElement("date",$row["fecha"]);
	$xml->writeElement("ref",$row["ref"]);
	$xml->writeElement("price",$row["precioinmo"]);
	$xml->writeElement("currency","EUR");
	$xml->writeElement("price_freq", get_price_freq($row));
	$xml->writeElement("type","");
	$xml->writeElement("town","");
	$xml->writeElement("province","");
	$xml->writeElement("country","");

	$xml->startElement("location");
		$xml->writeElement("latitud",$row["latitud"]);
		$xml->writeElement("longitude",$row["altitud"]);
	$xml->endElement();

	$xml->writeElement("location_detail","");
	$xml->writeElement("beds","");
	$xml->writeElement("baths","");
	$xml->writeElement("pool","");

	$xml->startElement("surface_area");
		$xml->writeElement("build","");
		$xml->writeElement("longitude","");
	$xml->endElement();

	$xml->startElement("energy_rating");
		$xml->writeElement("consumption","");
		$xml->writeElement("emissions","");
	$xml->endElement();

	$xml->startElement("url");
		$xml->writeElement("ca","");
		$xml->writeElement("da","");
		$xml->writeElement("de","");
		$xml->writeElement("en","");
		$xml->writeElement("es","");
		$xml->writeElement("fi","");
		$xml->writeElement("fr","");
		$xml->writeElement("it","");
		$xml->writeElement("nl","");
		$xml->writeElement("no","");
		$xml->writeElement("pt","");
		$xml->writeElement("ru","");
		$xml->writeElement("sv","");
	$xml->endElement();

	$xml->startElement("desc");
		$xml->writeElement("ca","");
		$xml->writeElement("da","");
		$xml->writeElement("de","");
		$xml->writeElement("en","");
		$xml->writeElement("es","");
		$xml->writeElement("fi","");
		$xml->writeElement("fr","");
		$xml->writeElement("it","");
		$xml->writeElement("nl","");
		$xml->writeElement("no","");
		$xml->writeElement("pt","");
		$xml->writeElement("ru","");
		$xml->writeElement("sv","");
	$xml->endElement();

	$xml->startElement("features");
		$xml->writeElement("feature","");
		$xml->writeElement("feature","");
		$xml->writeElement("feature","");
	$xml->endElement();

	$xml->writeElement("notes","");
	$xml->startElement("images");
		$xml->startElement("image");
		$xml->writeAttribute("id","");
		$xml->writeElement("url","");
		$xml->endElement();
	$xml->endElement();


	$xml->endElement();
}
$xml->endElement();
$xml->endDocument();
