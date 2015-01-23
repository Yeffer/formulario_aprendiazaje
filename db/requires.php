<?php
global $prefijo;



require("./".$prefijo."db/DBO.php");
require("./".$prefijo."db/db.pruducto.php");
require("./".$prefijo."db/db.marca.php");
require("./".$prefijo."class/classMarca.php");
require("./".$prefijo."class/classProducto.php");

require("./../".$prefijo."Smarty/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->compile_check = true;
$smarty->left_delimiter = '{#';
$smarty->right_delimiter = '#}';

function getLink( $array, $keys )
{
	$link = "";
	$sep = "";
	foreach( $keys as $key )
	{
		$link .= $sep . "$key=" . $array[$key];
		$sep = "&";
	}
	return $link;
}

function getParam( $array, $key, $value = -1 )
{
	if( array_key_exists($key, $array) )
	{
		$value = $array[$key];
	}
	return $value;
}
?>