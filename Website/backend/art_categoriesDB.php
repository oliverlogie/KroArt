<?php

$sql_artwork = "SELECT * FROM `artwork`";
$result_artwork = $conn->query($sql_artwork);

/* if ($result_artwork-> num_rows > 0){
    while ($row = $result_artwork-> fetch_assoc()){
        echo $row["picture"];
        echo "<img src='../".$row['picture']."' />";
    }
} */
?>