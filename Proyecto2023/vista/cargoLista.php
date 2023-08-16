<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<table>
<tr>
<td>id_cargo</td>
<td>CARGO</td>
</tr>
<?php

while ($reg = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>" . $reg['id_cargo'] . "</td>";
    echo "<td>" . $reg['cargo'] . "</td>";
    echo "<tr>";
}
?>
</table>

</body>
</html>