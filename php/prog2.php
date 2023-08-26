<?php
$palabra2 = "";
// Programa 2
echo "<article class='article'>
                <h2>Programa No.2</h2>
                <p>Determinar si una cadena se considera un “palíndromo”.</p>
                <div>
                    <form action='./prueba2.php' method='post' name='form2'>
                    <p id='p2'>Ingrese la palabra o frase: </label><input type='text' name='palabra' id='palabra' size='25'></p>
                    <input type='submit' id='btn2' value=' EVALUAR '>
                    </form>
                </div>
     ";

if(isset($_POST['palabra']))
{
    $palabra=$_POST['palabra'];
}
else
{
    $palabra = "";
}

echo "<br>";

if(isset($_POST['palabra']))
{  

    $auxiliar = $palabra;
    $palabra = strtolower($palabra);
    
    echo "La palabra por evaluar es: <i>".$auxiliar."</i><br/><br>";

    $palabra = str_replace(' ','',$palabra);
    $cant_letras = strlen($palabra); 

    for($i=$cant_letras-1; $i>=0; $i--)
    {
        $palabra2 .= $palabra[$i];        
    }

    if($palabra == $palabra2)
    {
        echo "<spam style='Color:blue'>La cadena <i>".$auxiliar."</i> <strong> ES un Palíndromo</strong>.";
    }
    else
    {
        echo "<spam style='Color:red'>La cadena <i>".$auxiliar."</i> <strong>NO ES un Palindromo</strong>.";
    }
}    
echo "</article>";
?>
