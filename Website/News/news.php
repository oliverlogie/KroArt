<?php  include_once('../includes/navbar.php'); 
$sql_news = "SELECT * FROM `news`";
$result_news = $conn->query($sql_news);
?>
<main>
    <div class="container home-container mt-5">
      <h1><span class="news_line">News</span></h1>
    </div>

    <div class="container pb-5">
    <?php
    if ($result_news-> num_rows > 0){
    while ($row = $result_news-> fetch_assoc()){
        echo '<div class="row">';
echo '<div class="col-lg-3 col-md-4 col-sm-12">';
echo "<img class='img_News' src='../".$row['picture']."' />";
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
    </div>
</main>   
<?php include_once('../includes/footer.php') ?>
