<html>
    <h1 style="text-align: center;">DIEGO MARQUEZ GOMEZ</h1>
    <h3 style="text-align: center;">Formulario </h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Nombre de usuario:
    <input type="text" name="nombre" maxlength="50"> <br>
    Contraseña:
    <input type="password" name="password"> <br>
    Nivel de educación:
    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria">Educacion obligatoria</option>
        <option value="formacion-profesional">Formacion profesional</option>
        <option value="Universidad">Universidad</option>
    </select><br>
    Nacionalidad:
    <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
    <input type="radio" name="nacionalidad" value="otra">Otra</input>
    <br> 
    Idiomas que domina:
    <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
    <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
    <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
    <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
    Correo electronico:
    <input type="text" name="email"><br>
    Sitio web:
    <input type="text" name="sitioweb"><br>
    <!-- Boton de enviar -->
    <input type="submit" name="submit" value="Enviar">

<?php
function filtrado($datos){
    $datos = trim($datos); 
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos); 
    return $datos;
}
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = filtrado($_POST["nombre"]);
    $password = filtrado($_POST["password"]);
    $educacion = filtrado($_POST["educacion"]);
    $nacionalidad = filtrado($_POST["nacionalidad"]);
    $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
    $email = filtrado($_POST["email"]);
    $sitioweb = filtrado($_POST["sitioweb"]);
} 
if(isset($_POST["submit"])): ?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?php isset($nombre) ? print $nombre : ""; ?> <br>
    Contraseña : <?php isset($password) ? print $password : ""; ?> <br>
    Educación : <?php isset($educacion) ? print $educacion : ""; ?> <br>
    Nacionalidad : <?php isset($nacionalidad) ? print $nacionalidad : "";?> <br>
    Idiomas : <?php isset($idiomas) ? print $idiomas : ""; ?> <br>
    Email : <?php isset($email) ? print $email : ""; ?> <br>
    Sitio web : <?php isset($sitioweb) ? print $sitioweb : ""; ?> <br>
    <?php endif;
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["nombre"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    if(!filter_var($_POST["sitioweb"], FILTER_VALIDATE_URL) || empty($_POST["sitioweb"])){
        $errores[] = "No se ha indicado sitio web o el formato no es correcto";
    }
    if(empty($errores)) {
        $nombre = filtrado($_POST["nombre"]);
        $password = filtrado($_POST["password"]);
        $educacion = filtrado($_POST["educacion"]);
        $nacionalidad = filtrado($_POST["nacionalidad"]);
        $idiomas = filtrado(implode(", ", $_POST["idiomas"]));
        $email = filtrado($_POST["email"]);
        $sitioweb = filtrado($_POST["sitioweb"]);
    }
}?>
<ul>
<?php if(isset($errores)){
    foreach ($errores as $error){
        echo "<li> $error </li>";
    }
}
?> 
</ul>
</form>
</html>