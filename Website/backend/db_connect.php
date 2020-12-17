<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "kroart");

if (!$conn) {
    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
    echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "DB kroart works!" . PHP_EOL;
echo "Host-Informationen: " . mysqli_get_host_info($conn) . PHP_EOL;

//mysqli_close($conn);

$sql_artists = "SELECT * from artists";
$result_artists = $conn-> query($sql_artists);
?>