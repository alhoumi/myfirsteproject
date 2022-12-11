<?php

$my_file = fopen("location.txt", "w");
$information = "lat:"  . $_GET["lat"]  . "long:" . $_GET["long"];
fwrite($my_file, $information)
fclose($my_file)


?>

lat: 3232332 long: 32423423