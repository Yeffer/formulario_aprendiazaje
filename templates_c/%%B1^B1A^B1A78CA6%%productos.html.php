<?php /* Smarty version 2.6.6, created on 2015-01-23 06:32:46
         compiled from productos.html */ ?>
       <!DOCTYPE html>
<html>
    <title>Formulario</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta charset="UTF-8">
    <body>
        <table>
            <tr>
                <td>
        <table>
            <tr>
                <td>
                    <form action="requires.php"  method="POST"> 
                        <fieldset>
                            <legend>PRODUCTOS {$test}</legend>
                            <label>Nombre del Producto:</label>
                            <input type="text" name="txtNomProducto"/><br/><br /> 
                            <label>Talla (S,M,L):</label>
                            <select name="txtTalla"/>
                                <option> </option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>                                
                            </select><br/> <br />                            
                            <label>Observaciones:</label>
                            <input type="text" name="txtObservaciones"/><br/> <br />
                            <label>Marca del Producto:</label>
                            <input type="text" name="txtMarcaProducto"/><br/><br />
                            <label>Cantidad Inventario:</label>
                            <input type="number" name="numCantidad"/><br/><br />
                            <label>Fecha de embarque:</label>
                            <input type="date" name="dateFecha"/><br/><br />

                            <input type="submit" name="accion" id="crear_producto" value="Guardar Producto" />
                           <!-- <input type="submit" name="accion" id="eliminar_producto" value="Eliminar Producto" /><br />
                            <input type="submit" name="accion" id="actualizar_producto" value="Actualizar Producto" /> -->
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>        
    </body>
</html>