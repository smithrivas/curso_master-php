<?php
/*
echo '<Table style="border-style: solid; border=1px;">';
echo "<tr>";
echo "<th>Tabla<th>";
echo "<th>Resultado<th>";
echo "</tr>";
$i=1;
while ($i<=10){
    echo "<tr>";
    echo "<td style='border-style: solid; border=1px;'><h2>Tabla del $i</h2><td>";
    echo "<td style='border-style: solid; border=1px;'>";
    echo "$i*1=".($i*1)."</br>";
    echo "$i*2=".($i*2)."</br>";
    echo "$i*3=".($i*3)."</br>";
    echo "$i*4=".($i*4)."</br>";
    echo "$i*5=".($i*5)."</br>";
    echo "$i*6=".($i*6)."</br>";
    echo "$i*7=".($i*7)."</br>";
    echo "$i*8=".($i*8)."</br>";
    echo "$i*9=".($i*9)."</br>";
    echo "$i*10=".($i*10)."</br>";
    $i++;
    echo "<td>";
    echo "</tr>";
}
*/
echo "<table border='1'><tr>"; //Inicio de la tabla

echo "<tr>"; //Inicio fila 1 de celdas 
    for($cabecera=1;$cabecera<=10;$cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "<tr>"; //Fin fila 1 de celdas

echo "<tr>"; //Inicio fila 2 de celdas 
    for($i=1;$i<=10;$i++){
        echo "<td>";
        for($x=1;$x<=10;$x++){
            echo "$i x $x = ".($i*$x)."</br>";
        }
        echo "</td>";
    }
echo "</tr>"; //Fin fila 2 de celdas

echo "</table>"; //Fin de la tabla