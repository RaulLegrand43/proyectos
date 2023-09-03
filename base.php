<!DOCTYPE html>
<html lang="en">
<head>
<title>registro</title>
</head>
<body bgcolor="fffffffff">
    
    <?php
   
   $conexion = mysqli_connect("localhost", "root", "", "final")or
    die("Problemas con la conexion");

    $registros=mysqli_query($conexion, "select nombre, edad, usuario,contraseña from registro1")or
    die("Problemas con el select".mysqli_error($conexion));
?>  
<table border=4>
<thead>
    <tr>
    <th>nombre:    
    <th>edad:
    <th>usuario: 
    <th>contraseña:
</tr>  
</thead>

<?php
while ($fila = mysqli_fetch_assoc($registros)) {
    echo "<tr>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['edad']."</td>";
    echo "<td>".$fila['usuario']."</td>";
    echo "<td>".$fila['contraseña']."</td>";
    echo "</tr>";
}





mysqli_close($conexion);
?>


<a href="registro.php"> <img  width="200" height="200" src="pepe.png">




</head>
<body>
    
