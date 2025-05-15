<?php
$idade = $_POST["idade"];
$altura = $_POST["altura"];

if (empty($idade) || empty($altura)) {
    echo "Por favor, preencha todos os campos.";
} elseif (!is_numeric($idade) || !is_numeric($altura)) {
    echo "Idade e altura devem ser valores numéricos.";
} elseif ($idade <= 0 || $altura <= 0) {
    echo "Idade e altura devem ser maiores que zero.";
} else {
    echo "Você informou:<br>";
    echo "Idade: $idade anos<br>";
    echo "Altura: $altura cm";
}