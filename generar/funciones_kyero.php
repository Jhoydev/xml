<?php

function mysqli_select_agencias($conn)
{
	$sql = "SELECT * FROM inmo413.ofertas";
	$rs = mysqli_query($conn,$sql);
	return $rs;
}
function mysqli_select_propiedades($conn)
{
	
}
function get_price_freq($row){
	$price_freq = "sale";
	if ( $row["precioinmo"] == 0 && $row["precioalq"] > 0 ){
		$price_freq = "month";
	}
	return $price_freq;
}