<?php

/*
 *  Table Definition for producto - formulario
 */
class DataObjets_Producto extends DB_DataObject
{

    //Define la tabla y sus respectivos campos 

    var $__table = 'productos';          //Normbre de la tabla 
    var $id_producto;                            //Primary key
    var $rel_producto_marca;
    var $nom_producto;
    var $talla_producto;
    var $observacion_producto;
    var $cantidad_producto;
    var $fecha_embar_producto;

    function staticGet($k, $v = NULL) {
        return BD_DataObject::staticGet('DataObject_Producto', $k, $v);
    }

    //Definición estructura de la tabla 

    function table() {
        return array(
            'id_producto' => DB_DATAOBJECT_INT,
            'rel_producto_marca' => DB_DATAOBJECT_INT,
            'nom_producto' => DB_DATAOBJECT_STR,
            'talla_producto' => DB_DATAOBJECT_STR,
            'obaservacion_producto' => DB_DATAOBJECT_STR,
            'cantidad_producto' => DB_DATAOBJECT_INT,
            'fecha_embar_producto' => DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME + DB_DATAOBJECT_NOTNULL,
        );
    }

    function keys() {
        return array('id');
    }

    function sequenceKey() {
        return array(false, false, false);
    }

    function links() {
        $links = array();
        $links['id'] = "producto:id";
        return $links;
    }
}
?>
