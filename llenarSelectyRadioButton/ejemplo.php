

<?php

$colores = array("amarillo","azul","rojo");

$array = array(
    1=>"perro",
    2=>"gato",
    3=>"conejo",
    4=>"cuyo",
    5=>"pato",
    6=>"tortuga"
   );


   /*https://stackoverflow.com/questions/5249825/auto-populate-a-select-box-using-an-array-in-php*/

   function generateSelectFromArray($array){
    // echo your opening Select
    echo "<select>";
    // Use simple foreach to generate the options
    foreach($array as $key => $value) {
      echo "<option value=' $key '> $value </option>";
     }
     echo "</select>";
  }  
   
   generateSelectFromArray($array);

?>

<br>
<br>

<!-- Llenadno  los radio button -->
<?php

foreach ($colores as $color) {
   echo "<label><input type='radio' name='tipo' value='$color' /> $color</label>";
}

?>


<br>
<br>

<!-- otra manera de llenar los radio button -->

<?php foreach ($colores as $lang){ ?>
   <label><input type="radio" name="lang" value="<?php echo $lang ?>" /> <?php echo $lang ?></label>
<?php } ?>