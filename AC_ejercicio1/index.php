
<head>

    <style>
        body{
            margin-left: 50px;
            margin-top: 50px;
        }
    </style>

</head>


<body>
   
   <h1>Mi segundo programa con PHP</h1>
   <h2>Diego Marquez Gomez</h2>
   
    <?php   

    print("Hola Mundo");
    echo "<h3> Hola Mundo </h3>";

    $carrera="ISC";
    $texto="<p> Estudiante de la carrera $carrera </p>";
    echo $texto;
    $texto="<p> Estudiante de la carrera".$carrera."</p>";
    echo $texto;

    if (isset($_GET["base"])&&isset($_GET["altura"])){
        $base=$_GET["base"];
        $altura=$_GET["altura"];
        echo "Base = $base <br>";
        echo "Altura = $altura <br>";
        $area=calcularArea($base,$altura);
        echo "<h3 style='background:yellow;color:blue;'>El area del triangulo es $area </h3>";

    }else
        echo "<h3 style='background:green;color:white;'>No procede el calculo del area del triangulo </h3>";
    
    $personas = ["Jacky","Donovan","Geras","Paco","Fabiola","Mayte"];
        echo "<h4> $personas[0] $personas[1] $personas[2]";

    function calcularArea($b,$h){
        return $b * $h / 2.0;
    }


    ?>


    <h1>Listado de Nombres</h1>

    <ul>
        <?php
        foreach($personas as $name){
            echo "<li>$name</li>";
        }
        ?>
    </ul>
    
</body>

