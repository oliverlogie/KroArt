<?php
include('../backend/db_connect.php');

$sql_artists = "SELECT * FROM `artist`";
$result_artists = $conn->query($sql_artists);

if ($result_artists-> num_rows > 0){
    while ($row = $result_artists-> fetch_assoc()){
        echo "<tr><td><br> ID=" . $row["artist_id"] . "</td><td><br>Name=" . $row["name"] . "</td><td><br> exh=" . $row["exh"] . "</td><td><br>ssa=" . $row["ssa"] . "</td><td><br>bio=" . $row["bio"] . "</td></tr><br>";
    }
    echo "</table>";
}
?>