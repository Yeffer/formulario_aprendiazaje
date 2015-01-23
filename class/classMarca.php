<?php

class ClassMarcas extends DB_DataObject
{
 /*   var $nomMarca;
    var $referencia;
    var $dataFecha;
*/
    function InsertarMarcas() {
//Crea una nueva instancia de UsuarioActivo a partir de DataObject
        $marca = DB_DataObject::Factory('marca');
        $referencia = DB_DataObject::Factory('referencia');
        $fecha_marca = DB_DataObject::Factory('fecha_marca');

        $marcaDBO->joinAdd($marcaDBO);
        $marcaDBO->joinAdd($referenciaDBO);
        $marcaDBO->joinAdd($fecha_marcaDBO);
        $marcaDBO->find();


        $marca = new DataObjects_Marca();
        $nom_marca->name = '';
        $marca = $marca->insert();
        $referencia->referencia = '';
        $referencia = $referencia->insert();
        $fecha_marca->fecha_marca = '';
        $fecha_marca = $fecha_marca->insert();


        if ($marcaDBO->fetch()) {
            //printVar($usuarioDBO);
            $this->marca = $marcaDBO->marca;
            $this->referencia = $referenciaDBO->referencia;
            $this->fecha_marca = $fecha_marcaDBO->fecha_marca;

            $reto = true;
        } else {
            $reto = false;
        }
        //Libera los objetos DBO
        $marcaDBO->free();
        $referenciaDBO->free();
        $fecha_marcaDBO->free();

        return($reto);
    }

    function MostrasMarcas(){

    }
    function ActualizarMarcas(){

    }
    function EliminarMarcas(){

    }
}
?>