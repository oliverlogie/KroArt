<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "kroart");
$sql_news = "SELECT * FROM `news`";
$result_news = $conn->query($sql_news);

if ($result_news-> num_rows > 0){
    while ($row = $result_news-> fetch_assoc()){
        echo '<div class="row">';
echo '<div class="col-lg-3 col-md-4 col-sm-12">';
echo "<img src='../".$row['picture']."' />";
echo '</div>';
echo '<div class="col-lg-9 col-md-8 col-sm-12 pt-5">';
echo '<div><h4>'. $row["headline"] .'</h4></div>';
echo '<div> Date '. $row["date"] .'</div>';
echo '<div class=""><p>'. $row["text"].'</p></div>';
echo '<div class="button-News"><button>read more</button></div>';
echo '';
echo '</div>';
echo '</div>';
    }
}
?>