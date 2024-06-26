<?php $Nome = $_GET['nome'];
$Nota_1 = $_GET['nota1'];
$Nota_2 = $_GET['nota2'];
$Nota_3 = $_GET['nota3'];
$Nota_1 = str_replace(",",".",$Nota_1);
$Nota_2 = str_replace(",",".",$Nota_2);
$Nota_3 = str_replace(",",".",$Nota_3);
$Media = ($Nota_1+$Nota_2+$Nota_3)/3;
$Media = round($Media, 2);
echo "<center><h1>$Nome foi: </h1> <br>";
if($Media>=7)
{
    echo "<h2 style='color: blue;'>Aprovado</h1>";
    echo "<h2 style='color: blue;'>Sua media é: $Media</h2>";
    echo "<center><img src='Aproved.gif' style='width: 200px;'></center>";
}
else
{
    echo "<h2 style='color: red;'>Reprovado</h1>";
    echo "<h1 style='color: red;'> sua media é: $Media</h1>";
    if($Media > 6)
    echo "<img src='perto.jpg' style='width: 200px;'>";
}
echo "</center>"
?>