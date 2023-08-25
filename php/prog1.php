

<?php
// Programa 1
echo "<article class='article'>
                <h2>Programa No.1</h2>
                <p>Encuentre la suma de los primeros números impares indicados por el usuario de la serie de fibonacci.</p>
                <div>
                    <form action='./prueba1.php' method='post' name='form1'>
                    <p id='p1'>Ingrese la cantidad de numeros impares que desea sumar: </label><input type='text' name='cantidad' id='cantidad' size='5'></p>
                    <input type='submit' id='btn1' value=' SUMAR '>
                    </form>
                </div>
     ";



$num1 = 0;
$num2 = 1;
$num3 = 0;
$suma = 0;
$contador = 0;
$flag = true;
if(isset($_POST['cantidad']))
{
    $cantidad=$_POST['cantidad'];
}
else
{
    $cantidad = 0;
}


echo "<br>";

while($flag==true && isset($_POST['cantidad']))
{  
     
    $num3 = $num1 + $num2;
    if($num1==0)
    {
        echo "<spam style='font-size:20px'>Los elementos de la serie de Fibonacci son: </spam><br/>";
    }

    if($num2%2!=0)
    {
        $contador++;
        $suma +=  $num2;
        if($contador<$cantidad)
        {
            echo "<spam style='font-size:20px'>".$num2."</spam>, ";
            if($contador%20==0)
            {
                echo "<br/>";
            }
            
        }
        else
        {
            echo "<spam style='font-size:20px'>".$num2."</spam>";
            $flag=false;
            echo "<br/><br/><i><strong>OBSERVACIÓN: </strong>Los números de color rojo son los pares y el resto los impares:</i><br/><br/>";
            echo "<spam style='color:blue; font-size:20px'>La suma de los  numeros impares es: ".$suma."</spam>";

        }
        
        
    }
    else
    {   
        if($contador<$cantidad)
        {
            echo "<spam style='color:RED; font-size:20px'>".$num2."</spam>, ";
            if($contador%20==0)
            {
                echo "<br/>";
            }
        }
        else
        {
            echo "<spam style='color:RED; font-size:20px'>".$num2."</spam>";
            $flag=false;
            echo "<br/><br/><i><strong>OBSERVACIÓN: </strong>Los números de color rojo son los pares y el resto los impares:</i><br/><br/>";
            echo "<spam style='color:blue; font-size:20px'>La suma de los  numeros impares es: ".$suma."</spam>";
        }
        
    }

    $num1=$num2;
    $num2=$num3;
    
}

echo "</article>";
?>

