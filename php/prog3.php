<?php
echo "<article class='article'>
<h2>Programa No.3</h2>
<p>El factorial de un número (n) está dado por: n! =  n x (n - 1) . Ejemplo: 5! = 5x4x3x2x1 = 120. Calcular la suma de los dígitos del resultado del factorial. (En el ejemplo anterior, la suma de los dígitos sería: 1 + 2 + 0 = 3).</p>
";

// Programa 3
$num = 10;
$fact = 1;
$suma = 0;

for($i=1; $i<=$num; $i++)
{
    $fact = $fact*$i;
}

$fact2 = $fact;
settype($fact2,'string'); 
$cant = strlen($fact2);

for($j=0; $j<$cant; $j++)
{
    $digito = $fact2[$j];
    settype($digito, 'int');
    $suma += $digito; 
}

echo "El Factorial de ".$num." es: ".$fact;
echo "\nLa suma de los digitos del factorial es: ".$suma;
echo "</article>";
?>
