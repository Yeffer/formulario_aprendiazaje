<?php /* Smarty version 2.6.6, created on 2015-01-22 17:00:48
         compiled from marcas.html */ ?>
<!DOCTYPE html>
<html>
    <title>Formulario</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta charset="UTF-8">
    <body>
        <table>
            <tr>
                <td>
                    <form action="requires.php" method="POST">
                        <fieldset>
                            <legend>MARCAS</legend>                            
                            <label>Marca:</label><input type="text"  name="txtMarca" /><br /><br />
                            <label>Referencia:</label> <input type="text" name="txtReferencia" /><br /><br />
                            <label>Fecha Marca:</label><input type="date" name="dateFecha"  /><br/><br />
                            <input type="submit" name="accion" id="crear_marca" value="Crear Marca" />
                           <!-- <input type="submit" name="accion" id="actualizar_marca" value="Actualizar Marca" /><br />
                            <input type="submit" name="accion" id="eliminar_marca" value="Eliminar Marca" /> -->
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table><br /> 
    </body>
</html>
