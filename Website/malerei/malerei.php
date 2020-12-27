<?php  include_once('../includes/navbar.php'); ?>
<div class="container text-center pt-5 pb-5">
  <h1>Malerei / Painting</h1>
  <div class="row d-flex">
    <div class="card col-lg-3 col-md-4 col-sm-6 border-0">
      <a href=""><img class="card-img-top" src="../img/newsimg.jpg" alt=""></a>
      <div class="card-body">
       <h5 class="card-title">Name des kunstwerks</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Name des Künstlers</li>
        <li class="list-group-item">Maßen</li>
        <li class="list-group-item">Techinik</li>
      </ul>
      <div class="card-body d-flex justify-content-center">
        <p class="p-1 mr-3">Preis</p>
        <p><button type="button" class="btn btn-outline-danger">ADD</button></p>
      </div>
    </div>  
  </div>
</div>
<?php include_once('../includes/footer.php') ?>
