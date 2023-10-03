<!--Cabecera-->
<?php include 'includes/cabecera.php'; ?>
<!--Fin de cabecera-->

<!--Contenido: formulario-->
	<hr>
	<h1>Introduzca una acción sobre el array de arrays</h1><br>
    <form action="index.php" method="get">
        
        <p>
        <label for="valor">Acción:</label>
        <select name="accion">
            <option value=""></option>
            <option value="ver_todos">Ver todos</option>
            <option value="ver_uno">Ver un cliente</option>
        </select>
        </p>

        <input type="submit" value="Enviar">
    </form>
    <hr>
<!--Contenido: formulario-->

<!--Pie-->
<?php include 'includes/pie.php'; ?>
<!--Fin de pie-->