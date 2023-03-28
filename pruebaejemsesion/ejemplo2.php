<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<style>
    body{
        margin:30px;
        color:brown;
        font-size:26px;
    }    
</style>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>