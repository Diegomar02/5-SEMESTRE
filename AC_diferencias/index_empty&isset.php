<?php
 
$fruit = '';
 
if(isset($fruit)) {
    echo 'Do you like '.$fruit.'?';
}
// Output:  Do you like ?
 
if(!empty($fruit)) {
    echo 'Do you like '.$fruit.'?';
}
// No Output
 
?>