<?php 
$tabuada = $_POST["num"];
for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabuada * $i;
    echo "$resultado<br>";
}
