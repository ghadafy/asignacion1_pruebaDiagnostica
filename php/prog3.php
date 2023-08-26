<?php
echo "<article class='article'>
    <h2>Programa No.3</h2>
    <p>El factorial de un número (n) está dado por: n! =  n x (n - 1) . <br/>Ejemplo: 5! = 5 x 4 x 3 x 2 x 1 = 120. <br/>Calcular la suma de los dígitos del resultado del factorial. <i>(En el ejemplo anterior, la suma de los dígitos sería: 1 + 2 + 0 = 3)</i>.</p>
    <div>
        <form action='./prueba3.php' method='post' name='form3'>
        <p id='p3'>Ingrese el factorial por calcular: </label><input type='text' name='factorial' id='factorial' size='5'></p>
        <input type='submit' id='btn3' value=' CALCULAR '>
        </form>
    </div>
    ";

// Programa 3
if(isset($_POST['factorial']) && $_POST['factorial']>0)
{
    $num=$_POST['factorial'];
}
else
{
    $num = 1;
}


if(isset($_POST['factorial']) && $_POST['factorial']>0)
{
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

    echo "<br/>El Factorial de <strong>".$num." es: ".$fact."</strong>";
    echo "<br/><br/><spam  style='Color:blue'>La suma de los dígitos del factorial es: <strong>".$suma."</strong></spam>";
}
echo "</article>";
?>
