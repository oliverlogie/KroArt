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

$sql_artists = "SELECT * FROM `artist`";
$result_artists = $conn->query($sql_artists);

if ($result_artists-> num_rows > 0){
    while ($row = $result_artists-> fetch_assoc()){
        echo "<tr><td><br> ID=" . $row["artist_id"] . "</td><td><br>Name=" . $row["name"] . "</td><td><br> exh=" . $row["exh"] . "</td><td><br>ssa=" . $row["ssa"] . "</td><td><br>bio=" . $row["bio"] . "</td></tr><br>";
    }
    echo "</table>";
}
?>