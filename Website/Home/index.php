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
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="carousel-img d-block" src="../img/c_pic3.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic1.JPG" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic4.JPG" alt="Fourth slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic5.JPG" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic6.JPG" alt="sixth slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic7.JPG" alt="seventh slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic8.JPG" alt="eight slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic9.JPG" alt="nineth slide">
          </div>
          <div class="carousel-item">
            <img class="carousel-img d-block" src="../img/c_pic10.jpg" alt="tenth slide">
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
      echo '<h1><span class="news_line">Last news</span></h1>';
      echo '</div>';
      echo '';
      if ($result_news-> num_rows > 0){
        while ($row = $result_news-> fetch_assoc()){
      echo '<div class="container p-5">';
      echo '<div class="row d-flex">';
      echo '<div class="col-lg-4 col-md-5 col-sm-12">';
      echo "<img class='img_News' src='../img/".$row['picture']."' />";
      echo '</div>';
      echo '<div class="col-lg-8 col-md-7 col-sm-12 pt-5 newsDiv">';
      echo '<div><h4>'. $row["headline"] .'</h4></div>';
      echo '<div class="date">'. $row["daten"] .'</div>';
      echo '<div class="textBox"><p>'. $row["textn"].'</p></div>';
      echo '<div class="button-News mt-3"><a href="../News/news.php"><p >SEE MORE</p></a></div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
        }
      }
?>
</main>

<?php include_once('../includes/footer.php') ?>
