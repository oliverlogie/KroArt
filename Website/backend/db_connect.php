<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "kroart");

if (!$conn) {
    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
    echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//mysqli_close($conn);
