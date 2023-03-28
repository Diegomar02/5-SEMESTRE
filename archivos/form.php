<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="row mt-3">
               <div class="col"></div>
               
               <div class="col border">
                   <h1>ALUMNO</h1>
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                      <label for="nom">Nombre:</label> <input class="form-control" type="text" id="nom" name="nombre" required> <br>
                      
                      
                      <label ><input class="radio-inline" type="radio" name="sexo" value="femenino" checked> Femenino</label>&nbsp;&nbsp;
                      <label ><input class="radio-inline" type="radio" name="sexo" value="masculino"> Masculino</label>
                      
                      <h2>CALIFICACIONES</h2>
                     
                      <label  for="pri">primera: </label><input required class="form-control" type="number" name="1" id="pri" max="10" min="0"> 
                      <label for="seg">segunda: </label><input required class="form-control" type="number" name="2" id="seg" max="10" min="0"> 
                      <label for="ter">tercera: </label><input required class="form-control" type="number" name="3" id="ter" max="10" min="0">
                      
                      
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="ENVIAR" name="Enviar">
                    
                    <?php 
                       if(isset($_POST['Enviar'])){
                           
                           echo "<br><br><p> NOMBRE: ". $_POST['nombre'] ."<br>";
                           echo "SEXO: ". $_POST['sexo'] ."<br>";
                           echo "CALIF 1: ". $_POST['1'] ."<br>";
                           echo "CALIF 2: ". $_POST['2'] ."<br>";
                           echo "CALIF 3: ". $_POST['3'] ."<br>";
                           $prom = ($_POST['1']+$_POST['2']+$_POST['3'])/3.0;
                           echo "PROMEDIO : ". $prom ."<br></p>";
                           
                          
                           
                           $myfile = fopen("Alumnos.txt", "a") or die("Unable to open file!");
                           $alum = "NOMBRE: ". $_POST['nombre'] ."\nSEXO:". $_POST['sexo'] ."\nCALIF 1: ". $_POST['1'] ."\nCALIF 2: ". $_POST['2'] ."\nCALIF 3: ". $_POST['3'] ."\nPromedio: " . $prom . "\n\n\n";
                           fwrite($myfile, $alum);
                           
                            fclose($myfile);
                       }
                       ?>
                       
                   </form>
                   <br><br>
                   <form action="leer.php">
                       <input type="submit" class="btn btn-primary" value="Archivo de alumnos..." name="arch">
                   </form>
                   
               </div>
        <div class="col"></div>               
       </div>
   </div>
    
</body>
</html>