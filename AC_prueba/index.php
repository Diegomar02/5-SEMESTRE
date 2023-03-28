<h1>Mi primer programa con PHP</h1>

<?php   
    print("Hola Mundo desde php");
    echo "<h1>Hola Mundo desde php<h1>";

//Variable
$nombre="Diego Marquez Gomez";
$texto="Mi primer program en PHP soy $nombre";
echo $texto;
echo "<h1>".$texto."</h1>";
echo "<h1>";

echo $_GET["nombre"];
$name=$_GET["nombre"];
echo "<br>".$name;

?>


