<?php  include_once('../includes/navbar.php'); ?>
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

    <div class="container home-container  pt-5 mt-5">
      <h1><span class="news_line">Last News</span></h1>
    </div>

    <div class="container d-block d-lg-flex d-md-flex p-5 pb-5 mb-5 justify-content-center "> 
      <div class="row text-center p-0 m-0 pb-5">
          <img class="img_News" src="../img/newsimg.jpg" alt="">
      </div>
      <div class="ro pl-0 pl-lg-5 pl-md-5">
        <div class="container d-flex justify-content-between">
          <div><h4>Überschrift</h4></div>
          <div><input class="date" type="date" name="" id=""></div>
        </div>
        <div class="container">
            <div class=""><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam nihil modi magnam sunt perferendis soluta porro dolorum enim. Fuga nobis quos tempore architecto dolore, aliquid blanditiis natus sunt in optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam nihil modi magnam sunt perferendis soluta porro dolorum enim. Fuga nobis quos tempore architecto dolore, aliquid blanditiis natus sunt in optio?</p></div>
            <div class="button-News"><a href="../News/news.php" class="">see more</a></div>
        </div>
      </div>
    </div>
</main>

<?php include_once('../includes/footer.php') ?>
