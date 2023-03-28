 

<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    session_start(); /*<---------------------------------------------------------*/
  // Set session variables
  $_SESSION["favcolor"] = $_POST['favcolor'];
  $_SESSION["favanimal"] = $_POST['favanimal'];
  echo "Session variables are set.";
  //sleep(5);
  //header("Location: ejemplo2.php");    
}
else { ?>
<link rel="stylesheet" href="estilos.css">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
    
<input type="text" class="caja" name="favcolor" placeholder="Dame tu color favorito">   
<input type="text" class="caja" name="favanimal" placeholder="Dame tu animal favorito">     
<input type="submit" class="btn-borde" value="enviar">    
    
</form>

<?php } ?>

</body>
</html>