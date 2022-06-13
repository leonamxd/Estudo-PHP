<?php
$pets = array(1=>"Nina", 2=>"Fenrir", 3=>"Al", 4=>"Ed");
$pets[] = "Levi";

print_r($pets);
echo "<br> <hr>";

echo count($pets);
echo "<br> <hr>";

foreach ($pets as $value) {
    echo $value."<br>";
}

// Array Associativos
echo "<hr>";
$pet = array("Nome" => "Fenrir Fenris", "Idade" => 06, "peso" => 5.80);
$pet["Sexo"] = "Masculino";
echo $pet["Nome"]."<br>";
echo $pet["Sexo"]."<br>";

foreach ($pet as $indice => $value) {
    echo $indice. ": ".$value."<br>" ;
}

// Matrizes 
echo "<br> <hr>";
$animais = array(
    "Mamiferos" => array("Gato", "Cachorro", "Morcego"),
    "Repteis" => array("Crocodilo", "Cobra", "Tartaruga"),
    "Anfibios" => array("Salamandra", "Sapo")
);

echo $animais["Anfibios"][0]."<br>";