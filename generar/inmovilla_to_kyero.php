<?php
$feed = simplexml_load_file('../xml.xml');


$xml = new XMLWriter();
$xml->openURI("inmovilla_to_kyero.xml");
$xml->setIndent(true);
$xml->setIndentString("\t");
$xml->startDocument('1.0', 'utf-8');
$xml->startElement("root");
$xml->startElement("kyero");
$xml->writeElement('feed_version','3');
$xml->endElement();
foreach ($feed->propiedad as $propiedad) {

	$xml->startElement("property");

	$xml->writeElement("id",$propiedad->unico);
	$xml->writeElement("date",$propiedad->fecha_modificacion);
	$xml->writeElement("ref",$propiedad->referencia);
	$xml->writeElement("price","");
	$xml->writeElement("currency","EUR");
	$xml->writeElement("price_freq","");
	$xml->writeElement("type",$propiedad->tipo);
	$xml->writeElement("town",$propiedad->ciudad);
	$xml->writeElement("province",$propiedad->provincia);
	$xml->writeElement("country","Spain");

	$xml->startElement("location");
		$xml->writeElement("latitud",$propiedad->latitud);
		$xml->writeElement("longitude",$propiedad->longitud);
	$xml->endElement();

	$xml->writeElement("location_detail",$propiedad->zona);
	$xml->writeElement("beds",$propiedad->habitaciones);
	$xml->writeElement("baths",$propiedad->banos + $propiedad->aseos);
	$xml->writeElement("pool",$propiedad->piscina);

	$xml->startElement("surface_area");
		$xml->writeElement("build","");
		$xml->writeElement("longitude","");
	$xml->endElement();

	$xml->startElement("energy_rating");
		$xml->writeElement("consumption",$propiedad->prestacion_energetica);
		$xml->writeElement("emissions",$propiedad->emisiones);
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
    $xml->startElement("es");
		  $xml->writeCData($propiedad->descripcion);
    $xml->endElement();

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
