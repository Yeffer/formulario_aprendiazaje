<?php

$include_path = ini_get("include_path");

@ini_set("include_path", $include_path . ";" . $_SERVER["DOCUMENT_ROOT"] . "/PEAR");

require_once("DB.php");
require_once ("./../PEAR/DB/DataObject.php");

$username_link = "root";
$password_link = "root";
$database_link = "formulario";

$optionsDataObject = &PEAR::getStaticProperty('DB_DataObject', 'options');
$optionsDataObject = array(
    'debug' => 3, 
    'database' => "mysql://$username_link:$password_link@localhost/$database_link", 
    'schema_location' => 'c:\\xampp\\www\\htdocs\\formulario\\dbNew',
    'class_location' => 'c:\\xampp\\www\\htdocs\\formulario\\dbNew',
    'require_prefix' => 'db/',
    'class_prefix' => 'DataObject_',
    'generator_no_ini' => true);


//C:\xampp\htdocs\formulario

?>

