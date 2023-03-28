<?php
 
$foo = array( 5, 0.0, "Hola", false, '' );

var_dump( $foo );
//Imprime
array(5) {
    [0]=> int(5)
    [1]=> float(0)
    [2]=> string(4) "Hola"
    [3]=> bool(false)
    [4]=> string(0) ""
}
print_r( $foo );
//Imprime
Array (
    [0] => 5
    [1] => 0
    [2] => Hola
    [3] =>
    [4] =>
)
    
?>