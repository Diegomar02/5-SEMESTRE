<?php

function randomText($length) {
    $key="":
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
    for($i=0;$i<$length;$i++) {
        $key .= $pattern{rand(0,35)};
    }
    return $key;
}
$captcha = randomText(6);
?>


<head>
    <style>
        span{
            font-size: 20px;
            color:blue;
            font-weight:bold;
        }
    </style>
</head>


<form action="page1.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
   <p>
       Username:
       <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>">
   </p>
   <p>
       Password
       <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
   </p>
   <p>
       Ingresar texto:
       <span> <?php echo $captcha?></span><br>
       <input name="respuesta" type="text" size="6">
       <input type="hidden" name="captcha" value="<?php echo $captcha?>">
   </p>
   <p>
       <input type="checkbox" name="remember" />Recordad usuario y contraseña
   </p>
   <p>
       <input type="submit" value="Login">
   </p>
    
    
    
    
</form>