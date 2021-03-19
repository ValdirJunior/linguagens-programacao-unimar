<?php

$elementos = array("Teste", "Elemento2", "Elemento3", "Outro Teste");

echo "<pre>";
print_r($elementos);
echo "</pre>";

echo $elementos[0];
echo "</br>";
echo "Total de elementos: " . count($elementos);

//while -> enquanto
echo "<h1>WHILE</h1>";
$i = 0;
$total = count($elementos);
echo "<br>";
while($i < $total) {
    echo $elementos[$i]."</br>";
    $i++;
} 

//for -> para
echo "<h1>FOR</h1>";
for ($i = 0 ; $i < count($elementos) ; $i++) {
    echo $elementos[$i] . "</br>";
}

//foreach -> para cada
echo "<h1>FOREACH</h1>";

foreach ($elementos as $elemento) {
    echo $elemento . "</br>";
}

?>