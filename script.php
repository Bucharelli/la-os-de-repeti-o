<?php
// receber o valor do formulário
$numero = $_POST['numero'];

// Contador
$x = 0;

while($x <= 10)
{
    $result = $numero * $x;
    echo "$numero * $x = $result";
    echo "<br>";
    $x++;
}
?>