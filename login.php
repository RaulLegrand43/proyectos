<body background="fondos.jpg">
    <center>
<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "raul" && $password === "123") {
        header("Location: inicio.php");
        exit();
    } else {
        $error_message = "datos incorrectas. Intentalo de nuevo.";
    }
}
?>
   
<!DOCTYPE html>
<html>
<head>
    <title> login </title>
</head>
<body>
    <h2>Iniciar sesion</h2>
    <?php if (isset($error_message)) { ?>
        <p style="color: blue;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form action="menu.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contrasena:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <a href="paguina.php"><img src="volve.png" width="100" height="100" >
    </form>
    </center>
</body>
</html>