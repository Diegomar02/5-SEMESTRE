<?php
if(!empty($_POST["captcha"]) && $_POST["captcha"] == $_POST["respuesta"])
    echo "<br> captcha correcto";
if(!empty($_POST["remember"])){
    setcookie("username",$_POST["username"],time()+3600);
    setcookie("password",$_POST["password"],time()+3600);
    echo "<br>Cookies Set Successfuly";
}else{
    setcookie("username","");
    setcookie("password","");
    echo "<br>Cookies Not Set";
}
?>


<p><a href="index.php">Go to Login Page</a></p>