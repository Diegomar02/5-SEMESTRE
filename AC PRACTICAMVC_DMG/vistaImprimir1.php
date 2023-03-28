

<?php
 include "menu.html";
 include "modelo.php";
  
?>

<link rel="stylesheet" href="estilos.css">
 <div style="padding-top:20px;" class="centrar">
 <h1 >Opcion#1 para imprimir</h1>
 <h2>DIEGO MARQUEZ GOMEZ</h2>
 
  <?php
    echo "Fecha de ultima modificacion: ";
    echo date ("F d Y H:i:s.", getlastmod()); 
    ?>
        <br>
        <br>
        <br>
 
<?php
        foreach($empleados as $emp => $detalles)
        {
            echo "<h1> $emp</h1>";
            foreach($detalles as $indice => $valor)
            {
                echo "<p> $indice: $valor</p>";
            }
        }
?>
</div>
