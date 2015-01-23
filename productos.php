<?php
	error_reporting(E_ALL);
	$prefijo = "";

	//require("DBO.php");
	//require("db/requires.php");
	//require("class/classProducto.php");
	include('libs/Smarty.class.php');
	require("db/requires.php");

	$strAccion = NULL;

	$strProducto = NULL;
	$strTalla = NULL;
	$strObservaciones = NULL;
	$strMarcaproducto = NULL;
	$intCantidad = NULL;
	$dateFecha = NULL;
	$test = "Eze bith";

	if (!empty($_REQUEST['accion'])){
		$strAccion = $_REQUEST['accion'];
	}
	if(!empty($_POST['txtNomProducto'])){
		$strProducto = $_POST['txtNomProducto'];
	}
	if(!empty($_POST['txtTalla'])){
		$strProducto = $_POST['txtTalla'];
	}

	if(!empty($_POST['txtObservaciones'])){
		$strObservaciones = $_POST['txtObservaciones'];
	}
	if(!empty($_POST['txtMarcaProducto'])) {
		$strMarcaproducto = $_POST['txtMarcaProducto'];
	}
	if(!empty($_POST['intCantidad'])){
		$intCantidad = $_POST['intCantidad'];
	}
	if(!empty($_POST['dateFecha'])){
		$dateFecha = $_POST['dateFecha'];
	}

	switch ($strAccion) {
	  case "Crear Producto":

	    if (empty($idRegistro)) {
	      $objProductos->create($strProducto,$strTalla,$strObservaciones, $strMarcaproducto,$intCantidad,$dateFecha);
	    }
	    else {
	      $objProductos->update($idRegistro, $strTalla,$strObservaciones, $strMarcaproducto,$intCantidad,$dateFecha);
	    }

	    break;

	  case "eliminar":
	    
	    $idRegistro = $_GET['id'];
	    
	    $objProductos->delete($idRegistro);
	    break;
	}
	
	$smarty->display("productos.html");

?>