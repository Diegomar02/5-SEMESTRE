<body>
   <h1>DIEGO MARQUEZ GOMEZ</h1>
   <br>
   <br>
   <br>
   <br>
    <form action="page1.php" method="POST" style="border: 2px dotted blue; text-align:center; width: 400px">
        <p>
            Nombre de usuario: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"]))
        {
         echo $_COOKIE["username"];    
        } ?>">
        </p>
        <p>
            Contraseña: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])){
            echo $_COOKIE["password"]; } ?>">
        </p>
        <p>
            <input type="checkbox" name="remember" /> Recordar usuario y contraseña
        </p
        <p>
            <input type="submit" value="Login">
        </p>
    </form>
</body>