<?php
$ROOT ='./';
include "cabecera.inc.php";
include "conexion.inc.php";


$sql = "select * from identificador";
$resultado = mysqli_query($conn, $sql);



?>

<table align="left" width=300 height=300 border="1px" bgcolor=00FF00>
	<caption>IDENTIFICADOR</caption>
	<tr>
		<td bgcolor="FFFF00">ci</td>
		<td bgcolor="FFFF00">nombre</td>
		<td bgcolor="FFFF00">fecnac</td>
		<td bgcolor="FFFF00">lugar_r</td>
		
	</tr>
<?php

while ($fila = mysqli_fetch_row($resultado))
{
	//print_r($fila);
	echo "<tr>";
	echo "<td>".$fila[0]."</td>";
	echo "<td>".$fila[1]."</td>";
	echo "<td>".$fila[2]."</td>";
	echo "<td>".$fila[3]."</td>";
	echo "<tr>";
}
?>
</table>

<?php

$sql1 = "select * from notas";
$resultado1 = mysqli_query($conn, $sql1);



?>

<table align="left" width=300 height=300 border="1px" bgcolor=F6B816>
	<caption>NOTAS</caption>
	<tr>
		<td bgcolor="FFFF00">id</td>
		<td bgcolor="FFFF00">ci</td>
		<td bgcolor="FFFF00">materia</td>
		<td bgcolor="FFFF00">nota</td>
		
	</tr>
<?php

while ($filas = mysqli_fetch_row($resultado1))
{
	//print_r($fila);
	echo "<tr>";
	echo "<td>".$filas[0]."</td>";
	echo "<td>".$filas[1]."</td>";
	echo "<td>".$filas[2]."</td>";
	echo "<td>".$filas[3]."</td>";
	echo "<tr>";
}
?>
</table>

<?php

$sql2 = "SELECT SUM(case when  i.lugar_r='01' then 1 else 0 end) chuquisaca, SUM(case when  i.lugar_r='02' then 1 else 0 end) LaPaz,sum(case when  i.lugar_r='03' then 1 else 0 end) cochabamba  FROM identificador i inner join notas n on i.ci=n.ci  WHERE n.nota >50";
$resultado2 = mysqli_query($conn, $sql2);



?>

<table align="left" width=300 height=50 border="1px" bgcolor=D74942>
	<caption>EJERCICIO3</caption>
	<tr>
		<td bgcolor="F6AB16">chuquisaca</td>
		<td bgcolor="F6AB16">La Paz</td>
		<td bgcolor="F6AB16">Cochabamba</td>
		
		
	</tr>
<?php

while ($fil = mysqli_fetch_row($resultado2))
{
	//print_r($fila);
	echo "<tr>";
	echo "<td>".$fil[0]."</td>";
	echo "<td>".$fil[1]."</td>";
	echo "<td>".$fil[2]."</td>";
	
	echo "<tr>";
}
?>
</table>



<?php


include "pie.inc.php";
?>
			