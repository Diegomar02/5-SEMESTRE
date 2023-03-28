
<style>

    div{
        margin: 50px;
        font-size: 20px;
    }

</style>

<?php
/*$archivo = file_get_contents("Alumnos.txt"); //Guardamos archivo.txt en $archivo
$archivo = ucfirst($archivo); //Le damos un poco de formato
$archivo = nl2br($archivo); //Transforma todos los saltos de linea en tag <br/>

echo $archivo;*/



$file = fopen("Alumnos.txt", "r");

//Output lines until EOF is reached

echo "<div>";
$contador=0;
while(! feof($file)) {
  $line = fgets($file);
  echo "<p>".$line. "</p>"; 
  $contador=$contador+1;
  if ($contador === 8){
      $contador=0;
      echo "<br>";
  } 
      
  
}
echo "</div>";

fclose($file);

?>