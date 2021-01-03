<?php  include_once('../includes/navbar.php'); 
$sql_news = "SELECT * FROM `news`";
$result_news = $conn->query($sql_news);
?>
<main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" id="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="carousel-img d-block" src="../img/1.JPG" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/2.JPG" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/3.JPG" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/4.JPG" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/5.png" alt="Fifth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" id="courusel-btn-1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" id="courusel-btn-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <?php
      echo '<div class="container home-container  pt-5 mt-5">';
      echo '<h1><span class="news_line">News</span></h1>';
      echo '</div>';
      echo '';
      if ($result_news-> num_rows > 0){
        while ($row = $result_news-> fetch_assoc()){
      echo '<div class="container p-5">';
      echo '<div class="row">';
      echo '<div class="col-lg-3 col-md-4 col-sm-12">';
      echo "<img class='img_News' src='../".$row['picture']."' />";
      echo '</div>';
      echo '<div class="col-lg-9 col-md-8 col-sm-12 pt-5">';
      echo '<div><h4>'. $row["headline"] .'</h4></div>';
      echo '<div class="date">'. $row["date"] .'</div>';
      echo '<div class=""><p>'. $row["text"].'</p></div>';
      echo '<div class="button-News"><a href="../News/news.php" class=""><button>see more</button></a></div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
        }
      }
?>
</main>

<?php include_once('../includes/footer.php') ?>
