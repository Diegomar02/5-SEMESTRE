<?php
include "menu.html";
 include "modelo.php";       
?>


<div style="padding-top:20px;" class="container">
        <h1>Opcion#2 para imprimir</h1>
        <h2>DIEGO MARQUEZ GOMEZ</h2>
<?php
    echo "FECHA DE MODIFICACION: ";
    echo date ("F D Y H:i:s.",getlastmod());
    ?>
        <br>
        <br>
        <br>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sueldo</th>
                <th>Puesto</th>
            </tr>
            <?php
                foreach($empleados as $emp => $detalles)
                {
                    echo "<tr>";
                    echo "<td> $emp </td>";
                    foreach($detalles as $indice => $valor)
                    {
                        echo "<td> $valor </td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>