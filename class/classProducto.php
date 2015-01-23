<?php

class ClassProductos //extends DB_DataObject

{
	    function InsertarProductos (){

        $id = DB_DataObject::Factory('id');            
        $id_marca = DB_DataObject::Factory('id_marca');
        $nom_producto = DB_DataObject::Factory('nom_producto');
        $talla_producto = DB_DataObject::Factory('talla_producto');
        $observaciones_producto = DB_DataObject::Factory('observaciones_producto');
        $cantidad_producto = DB_DataObject::Factory('cantidad_producto');
        $fecha_embar_producto = DB_DataObject::Factory('fecha_embar_producto');

        $idDBO->joinAdd($idDBO);
        $id_marcaDBO->joinAdd($id_marcaDBO);
        $nom_productoDBO->joinAdd($nom_productoDBO);
        $talla_productoDBO->joinAdd($talla_productoDBO);
        $observaciones_productoDBO->joinAdd($observaciones_productoDBO);
        $cantidad_productoDBO->joinAdd($cantidad_productoDBO);
        $fecha_embar_productoDBO->joinAdd($fecha_embar_productoDBO);

        $producto = new DataObjects_Prodcuto();
        $id->name = '';
        $id = $id->insert();

        $id_marca->name = '';
        $id_marca->$id_marca->insert();

        $nom_producto->name ='';
        $nom_producto->$nom_producto->insert();

        $talla_producto->name = '';
        $talla_producto->$talla_producto->insert();

        $observaciones_producto->name = '';
        $observaciones_producto->$observaciones_producto->insert();

        $cantidad_producto->$name = '';
        $cantidad_producto->$cantidad_producto->insert();

        $fecha_embar_producto->name='';
        $fecha_embar_producto->$fecha_embar_producto->insert();


        if ($productoDBO->fetch()) {
            //printVar($usuarioDBO);
            $this->id = $idDBO->marca;
            $this->referencia = $referenciaDBO->referencia;
            $this->fecha = $fechaDBO->fecha;

            $reto = true;
        } else {
            $reto = false;
        }
        //Libera los objetos DBO
        $marcaDBO->free();
        $referenciaDBO->free();
        $fechaDBO->free();

        return($reto);
        }        
	}

	/*function MostrarProductos(){

	}

	function ActualizarProductos(){

	}

	function EliminarProductos(){

	}*/







?>