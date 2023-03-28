<head>
    <style>
        h2 {
            color: midnightblue;
        }
        

        h1, h5 {
            text-align: center;
            color: midnightblue;
        }
    </style>
</head>

<body>
    <form method="get">
        <h1>DIEGO MARQUEZ GOMEZ</h1>
        <table>
            <tr>
                <td>Tamaño del vector:</td>
                <td><input type="number" name="tam" required></td>
            </tr>
            <tr>
                <td>Numero maximo a imprimir:</td>
                <td><input type="number" name="inf" required></td>
            </tr>
            <tr>
                <td>Numero minimo a imprimir:</td>
                <td><input type="number" name="sup" required></td>
            </tr>
            <tr>
               
                <td colspan="2" style="text-align: center;"><input type="submit" value="ENVIAR"></td>
            </tr>
        </table>
    </form>

</body>

<?php
    function vector($tam,$min,$max){
        for($x=0;$x<$_GET['tam'];$x++)
            $r[$x]=rand($_GET['inf'],$_GET['sup']);
        return $r;
    }

    $txt='<table border>';
    $mat = vector(10,1,100);
    foreach($mat as $x){
            $txt.='<td style="color:gray;">'. $x . '</td>';
    }
    $txt.='</table>';
    echo $txt;
    echo "<h4>Numero menor del vector: " . min($mat) . "</h1>";
    echo "<h4>Numero mayor del vector: " . max($mat) . "</h1>";
    promedio($mat);
    function promedio($arr){
        $prom = 0;
        for($x=0;$x<count($arr);$x++){
            $prom+=$arr[$x];
        }
        $prom = $prom / count($arr);
        echo "<br><br>";
        echo "El promedio es: ", $prom;
        echo "<br><br>";
    }

    asort($mat);

    $txta='<table border>';
    foreach($mat as $x){
            $txta.='<td style="color:brown;">'. $x . '</td>';
    }
    $txta.='</table>';
    echo $txta;

$txtb='<table border>';
    arsort($mat);
    foreach($mat as $x){
            $txtb.='<td style="color:purple;">'. $x . '</td>';
    }
    $txtb.='</table>';
    echo $txtb;
    
    echo "<br><br>";

    shuffle($mat);
    $txta='<table border>';
    foreach($mat as $x){
            $txta.='<td style="color:blue;">'. $x . '</td>';
    }
    $txta.='</table>';
    echo $txta;
    shuffle($mat);
    $txta='<table border>';
    foreach($mat as $x){
            $txta.='<td style="color:green;">'. $x . '</td>';
    }
    $txta.='</table>';
    echo $txta;

    shuffle($mat);
    $txta='<table border>';
    foreach($mat as $x){
            $txta.='<td style="color:pink;">'. $x . '</td>';
    }
    $txta.='</table>';
    echo $txta;
    

?>

