<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph
 * Date: 10/07/2017
 * Time: 0:17
 */
/*
 * setData: Recoge cada campo del XML y mapea los campos.
 * */
function setData($li){
    global $numfotos;
    $campo =  $li->getName();
    $valor = $li;
    $dbcampo = "";
    $dbvalor = "";
    switch ($campo){
        case "unico":
            $dbcampo .= "id,";
            $dbvalor .= "$valor,";
            break;
        case "numagencia":
            $dbcampo .= "numagencia,";
            $dbvalor .= "$valor,";
            break;
        case "referencia":
            $dbcampo .= "ref,";
            $dbvalor .= "'$valor',";
            break;
        case "accion":
            $dbcampo .= "operacion,";
            $dbvalor .= "'$valor',";
            break;
        case "precio_venta":
            $dbcampo .= "precio_venta,";
            $dbvalor .= "$valor,";
            break;
        case "precio_alquiler":
            $dbcampo .= "precio_alquiler,";
            $dbvalor .= "$valor,";
            break;
        case "tipo_mensual":
            $dbcampo .= "tipo_mensual,";
            $dbvalor .= "'$valor',";
            break;
        case "banos":
            $dbcampo .= "banos,";
            $dbvalor .= "$valor,";
            break;
        case "habitaciones":
            $dbcampo .= "habitaciones,";
            $dbvalor .= "$valor,";
            break;
        case "provincia":
            $dbcampo .= "provincia,";
            $dbvalor .= "'$valor',";
            break;
        case "codprovincia":
            $dbcampo .= "provincia_id,";
            $dbvalor .= "$valor,";
            break;
        case "ciudad":
            $dbcampo .= "ciudad,";
            $dbvalor .= "'$valor',";
            break;
        case "codciu":
            $dbcampo .= "ciudad_id,";
            $dbvalor .= "$valor,";
            break;
        case "zona":
            $dbcampo .= "zona,";
            $dbvalor .= "'$valor',";
            break;
        case "cp":
            $dbcampo .= "cp,";
            $dbvalor .= "'$valor',";
            break;
        case "latitud":
            $dbcampo .= "latitud,";
            $dbvalor .= "'$valor',";
            break;
        case "longitud":
            $dbcampo .= "longitud,";
            $dbvalor .= "'$valor',";
            break;
        case "tipo":
            $dbcampo .= "tipo,";
            $dbvalor .= "'$valor',";
            break;
        case "titulo":
            $dbcampo .= "titulo,";
            $dbvalor .= "'$valor',";
            break;
        case "descripcion":
            $dbcampo .= "descripcion,";
            $dbvalor .= "'$valor',";
            break;
        case "titulo_ingles":
            $dbcampo .= "titulo_en,";
            $dbvalor .= "'$valor',";
            break;
        case "descripcion_ingles":
            $dbcampo .= "descripcion_en,";
            $dbvalor .= "'$valor',";
            break;

        case "balcon":
            $dbcampo .= "balcon,";
            $dbvalor .= "$valor,";
            break;
        case "jardin":
            $dbcampo .= "jardin,";
            $dbvalor .= "$valor,";
            break;
        case "alarma":
            $dbcampo = "alarma,";
            $dbvalor .= "$valor,";
            break;
        case "conservacion":
            $dbcampo = "conservacion,";
            $dbvalor .= "'$valor',";
            break;
        case "antiguedad":
            $dbcampo = "antiguedad,";
            $dbvalor .= "$valor,";
            break;
        case "galeria":
            $dbcampo = "galeria,";
            $dbvalor .= "$valor,";
            break;
        case "gastos_comunidad":
            $dbcampo = "gastos_comunidad,";
            $dbvalor .= "$valor,";
            break;
        case "superficie":
            $dbcampo = "superficie,";
            $dbvalor .= "$valor,";
            break;
        case "calefaccion":
            $dbcampo = "calefaccion,";
            $dbvalor .= "$valor,";
            break;
        case "m_parcela":
            $dbcampo = "m_parcela,";
            $dbvalor .= "$valor,";
            break;
        case "m_terraza":
            $dbcampo = "m_terraza,";
            $dbvalor .= "$valor,";
            break;
        case "planta":
            $dbcampo = "planta,";
            $dbvalor .= "$valor,";
            break;
        case "aire_acon":
            $dbcampo = "aire_acon,";
            $dbvalor .= "$valor,";
            break;
        case "piscina":
            $dbcampo = "piscina,";
            $dbvalor .= "$valor,";
            break;
        case "orientacion":
            $dbcampo = "orientacion,";
            $dbvalor .= "'$valor',";
            break;
        case "tipo_cocina":
            $dbcampo = "tipo_cocina,";
            $dbvalor .= "'$valor',";
            break;
        case "cocina_equipada":
            $dbcampo = "cocina_equipada,";
            $dbvalor .= "'$valor',";
            break;
        case "entidadbancaria":
            $dbcampo = "entidadbancaria,";
            $dbvalor .= "$valor,";
            break;
        case "exclu":
            $dbcampo = "exclu,";
            $dbvalor .= "$valor,";
            break;
    }

    $mystring = $campo;
    $findme   = 'foto';
    $pos = strpos($mystring, $findme);

    if ($pos === false) {
    } else {
        $numfotos++;
    }
    $datos["dbcampo"] = $dbcampo;
    $datos["dbvalor"] = $dbvalor;

    return $datos;
}