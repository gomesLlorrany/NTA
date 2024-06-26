<?php 
$peso = $_GET['Peso'];
$alt = $_GET['Altu'];
$alt = str_replace(",",".",$alt);
$peso = str_replace(",",".",$peso);
$IMC= $peso/($alt*$alt);
$IMC = round($IMC, 2);
echo "<center><h1>Seu IMC foi de: $IMC portanto você foi classicado como...</h1>";
if($IMC < 18.5)
{
    echo "Abaixo da media de peso, de acordo com está tabela:";
    echo "<style>#f1{background-color: rgba(102, 51, 153, 0.411);}</style>";
}
elseif($IMC >= 18.5 && $IMC < 25)
{
    echo "Normal, de acordo com está tabela:";
    echo "<style>#f2{background-color: rgba(102, 51, 153, 0.411);}</style>";
}
elseif($IMC >= 25 && $IMC < 30)
{
    echo "Acima da media de peso, de acordo com está tabela:";
    echo "<style>#f3{background-color: rgba(102, 51, 153, 0.411);}</style>";
}
elseif($IMC >= 30 && $IMC < 35)
{
    echo "Obeso tipo I, de acordo com está tabela:";
    echo "<style>#f4{background-color: rgba(102, 51, 153, 0.411);}</style>";
}
elseif($IMC >= 35 && $IMC < 40)
{
    echo "Obeso tipo II, de acordo com está tabela:";
    echo "<style>#f5{background-color: rgba(102, 51, 153, 0.411);}</style>";
}
elseif($IMC >= 40)
{
    echo "Obeso tipo III, de acordo com está tabela:";
    echo "<style>#f6{background-color: rgba(102, 51, 153, 0.411);}</style>";
}

echo "
<table border='2px solid'>
    <th>IMC</th>
    <th>Classificado como:</th>
    <tr id='f1'>
        <td>Menor do que 18,5</td>
        <td>Abaixo do peso normal</td>
    </tr>
    <tr id='f2'>
        <td>18,5 - 24,9</td>
        <td>Peso normal</td>
    </tr>
    <tr id='f3'>
        <td>25 - 29,9</td>
        <td>Execesso de peso</td>
    </tr>
    <tr id='f4'>
        <td>30 - 34,9</td>
        <td>Obesidade classe I</td>
    </tr>
    <tr id='f5'>
        <td>35 - 39,9</td>
        <td>Obesidade classe II</td>
    </tr>
    <tr id='f6'>
        <td>Maior ou igual a 40</td>
        <td>Obesidade classe III</td>
    </tr>
</table>
Tabela segundo a classificação da OMS sobre IMC</center>"
?>