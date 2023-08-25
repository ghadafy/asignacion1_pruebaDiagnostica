<?php
// Programa 2
echo "<article class='article'>
                <h2>Programa No.2</h2>
                <p>Determinar si una cadena se considera un “palíndromo”.</p>
     ";
$palabra = "ana la galana";
$palabra2 = "";

$palabra = strtolower($palabra);
$auxiliar = $palabra;

echo "La palabra por verificar es: ".$palabra."\n";

$palabra = str_replace(' ','',$palabra);
$cant_letras = strlen($palabra); 

for($i=$cant_letras-1; $i>=0; $i--)
{
    $palabra2 .= $palabra[$i];        
}

if($palabra == $palabra2)
{
    echo "La cadena ".$auxiliar." ES un Palindromo";
}
else
{
    echo "La cadena ".$auxiliar." NO ES un Palindromo";
}
echo "</article>";
?>
