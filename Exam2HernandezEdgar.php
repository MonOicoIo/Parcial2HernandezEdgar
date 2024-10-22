<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

$carros = [
    "Toyota Corolla" => 20000,
    "Honda Civic" => 22000,
    "Ford Focus" => 21000,
    "Chevrolet Spark" => 15000,
    "Hyundai Elantra" => 19000,
];

echo "Carros y precios originales: " . "<br>";

foreach ($carros as $modelo => $precio) {

    echo "$modelo: $precio " . "<br>";
}

array_push($carros, ["Nissan Sentra" => 18000, "Kia Forte" => 17000]);

asort($carros);

echo "<br>" . "Carros y precios ordenados: " . "<br>";

foreach ($carros as $modelo => $precio) {

    echo "$modelo: $precio " . "<br>";
}

?>


</body>
</html>