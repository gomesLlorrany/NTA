<?php 
$Temp = $_GET['temper'];
$Temp = str_replace(",",".",$Temp);
echo "<center>";
if($Temp>= 25)
{
    echo "A Temperatura registrada ($Temp) pode ser considerada Quente <br><br>";
    echo "De acordo com esta tabela<br>";
    echo "<style>#f1{background-color: red;}</style>";
}
if($Temp>= 15 && $Temp< 25)
{
    echo "A Temperatura registrada($Temp °) pode ser considerada Normal<br><br>";
    echo "De acordo com esta tabela<br>";
    echo "<style>#f2{background-color: gray;}</style>";
}
if($Temp>= 0 && $Temp< 15 )
{
    echo "A Temperatura registrada($Temp °) pode ser considerada Fria<br><br>";
    echo "De acordo com esta tabela<br>";
    echo "<style>#f3{background-color: aqua;}</style>";
}
if($Temp<0)
{
    echo "A Temperatura registrada($Temp °) pode ser considerada Muito Fria <br><br>";
    echo "De acordo com esta tabela<br>";
    echo "<style>#f4{background-color: skyblue;}</style>";
}
echo "
<table border='2px solid'>
    <th>Temperatura (°C)</th>
    <th>Singnifica</th>
    <tr id='f1'>
        <td>Igual ou Maior que 25°</td>
        <td>Quente</td>
    </tr>
    <tr id='f2'>
        <td>Menor que 25° e igual ou maior que 15°</td>
        <td>Razoável</td>
    </tr>
    <tr id='f3'>
        <td>Menor que 15° e igual ou maior que 0°</td>
        <td>Frio</td>
    </tr>
    <tr id='f4'>
        <td>Menor que 0°</td>
        <td>Congelante</td>
    </tr>
</table></center>"
?>