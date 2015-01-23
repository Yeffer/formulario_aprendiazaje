<?php

$prefijo = "";

//include('libs/Smarty.class.php');

//require("DBO.php");
//require("db/requires.php");
//require("class/classMarcas.php");

/*$strAccion = NULL;
$strNomMarca = NULL;
$strReferencia = NULL;



if (!empty($_REQUEST['accion'])){
		$strAccion = $_REQUEST['accion'];
}
if (!empty($_POST['txtMarca'])){
		$strUsuario = $_POST['txtMarca'];
}
if (!empty($_POST['txtReferencia'])){
		$strReferencia = $_POST['txtReferencia'];
} 

switch ($strAccion) {
  case "Crear Marca":

    if (empty($idRegistro)) {
      $objMarcas->create($txtNomMarca, $txtReferencia);
    }
    else {
      $objMarcas->update($idRegistro, $txtNomMarca, $txtReferencia);
    }

    break;



  /*case "eliminar":
    
    $idRegistro = $_GET['id'];
    
    $objMarcas->delete($idRegistro);
    break;*/
}

$smarty->display("marcas.html");

?>