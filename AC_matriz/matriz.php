<html>
<head>
    <style>
        table,td{
            border-collapse: 20px;
        }
        td{
            padding: 20px;
            text-align: center;
        }
        matriz{
            text-align: center;
        }
    </style>
</head>


<?php
    function matriz($a,$b,$min,$max){
        for($x=0;$x<$a;$x++)
            for($y=0;$y<$b;$y++)
                $r[$x][$y]=rand($min,$max);
        return $r;
    }

    $txt='<table border>';
    $q = $_GET['a'];
    $w = $_GET['b'];
    $e = $_GET['min'];
    $r = $_GET['max'];
    $mat = matriz($q,$w,$e,$r);
    foreach($mat as $x){
        $txt.='<tr>';
        foreach($x as $xy){
            if( $xy % 2 == 0)
                $txt.='<td style="color:green;">'. $xy . '</td>';
            else 
                $txt.='<td style="color:orange;">'. $xy . '</td>';
        }
        $txt.='</tr>';
    }
    $txt.='</table>';
    echo $txt;

?>
</html>