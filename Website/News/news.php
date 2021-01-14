<?php  include_once('../includes/navbar.php'); 
$sql_news = "SELECT * FROM `news` ORDER BY news_id DESC";
$result_news = $conn->query($sql_news);
?>
<main>
    <div class="container home-container mt-5">
      <h1><span class="news_line">News</span></h1>
    </div>
    <?php

      if ($result_news-> num_rows > 0){
        while ($row = $result_news-> fetch_assoc()){
      echo '<div class="container p-5 mb-5">';
      echo '<div class="row d-flex">';
      echo '<div class="img_News col-lg-4 col-md-5 col-sm-12">';
      echo "<img class='img_News' src='../img/".$row['picture']."' />";
      echo '</div>';
      echo '<div class="col-lg-8 col-md-7 col-sm-12 pt-5 ">';
      echo '<div><h4>'. $row["headline"] .'</h4></div>';
      echo '<div class="date">'. $row["daten"] .'</div>';
      echo '<div class="textBox"><p>'. $row['textn'].'</p></div>';
      echo '<p class="read-more button-News mt-3">READ MORE</p></div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
        }
      }

?>
</main>   
<?php include_once('../includes/footer.php') ?>
