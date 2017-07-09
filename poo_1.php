<html>

<body>

<?php

include("vehiculos.php");


$mazda=new Coche();
$pegaso=new Camion();

echo "El Mazda tiene ". $mazda->ruedas . " ruedas.";

echo "<br>";

echo "Pegaso tiene ". $pegaso->ruedas . " ruegas.";

echo "<br>";

$pegaso->Camion();



?>



</body>



</html>