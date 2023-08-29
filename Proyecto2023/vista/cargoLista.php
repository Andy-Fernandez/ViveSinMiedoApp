<?php
// Realizar la conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "28281010", "test2");

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Realizar una consulta a la base de datos
$query = "SELECT id_cargo, cargo FROM tabla_de_cargos";
$res = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- ... metadatos y título ... -->
</head>
<body>
<table>
<tr>
<td>id_cargo</td>
<td>CARGO</td>
</tr>
<?php
// Utilizar los resultados obtenidos en la consulta
while ($reg = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>" . $reg['id_cargo'] . "</td>";
    echo "<td>" . $reg['cargo'] . "</td>";
    echo "<tr>";
}

// Cerrar la conexión
mysqli_close($conn);
?>
</table>
</body>
</html>
