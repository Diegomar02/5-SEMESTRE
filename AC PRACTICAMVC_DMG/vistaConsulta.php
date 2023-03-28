<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>

<body>
   
    <?php
 
        include "modelo.php";
        include "menu.html";       
    
        $id = $_POST['id'];
        if(array_key_exists($id,$empleados)) {  ?>
            <p>Nombre: <?php echo $empleados[$id]["nombre"];?></p>
            <p>Sueldo: <?php echo $empleados[$id]["sueldo"];?></p>
            <p>Puesto: <?php echo $empleados[$id]["puesto"];?></p>
          <?php }
         else 
            echo "<p> No existe el id del empleado </p>";
          
     ?>    

</body>

</html>
