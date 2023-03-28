
  <?php
      $carrera="isc se fue por campo oculto del formulario";
      $sem="5to se fue por campo oculto del formulario";
      $grupo="A B o C se fue por la url";

?>

  
  <form action='vista.php?grupo=<?php echo $grupo; ?>' method="post" target="_blank">

  <p>Algo de texto: <input type="text" name="algodetexto"></p>

  <p>

    <input type="hidden" name="carrera" value="<?php echo $carrera; ?>">
    <input type="hidden" name="sem" value="<?php echo $sem;?>">
    <input type="submit" value="Enviar datos">

  </p>

</form>