<?php
session_start();
?>
<!DOCTYPE html>
<style>
 body{
        margin:30px;
        color:brown;
        font-size:26px;
    }    
</style>
<body>

<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>