<?php  include_once('../includes/navbar.php');
$id= $_GET['id'];
$sql_pic = "SELECT * FROM ((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id) where artwork_id='$id'";
$result_pic = $conn->query($sql_pic);
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} ?>
<main>
  <div class="container pt-5 pb-5">
    <h5 class="text-right"><a href="<?= $previous ?>">back to ....</a></h5>

    <?php
    $row = mysqli_fetch_assoc($result_pic);
      echo '<form method="post" action="../collect/collect.php?action=add&id=' . $row["artwork_id"] . '">';
      echo '<div class="row d-block d-lg-flex d-md-flex justify-content-center productInfo">';
      echo '<div class="col-lg-6 col-md-6 col-sm-12 pb-5 text-center">';
      echo '<img src="../img/'. $row["picture"] .'" alt="">';
      echo '</div>';
      echo '<div class="border-0 col-lg-6 col-md-6 col-sm-12  productCard">';
      echo '<ul class="border-0">';
      echo '<li class="list-group-item border-0"><h3>Name: '. $row["name_pic"] .'</h3></li>';
      echo '<li class="list-group-item border-0">Artist:<a href="../artist_Info/artist_info.php?id=' . $row['artist_id'] . '"> <h4 class="artName"">'. $row["name"] .'</h4></a></li>';
      echo '<li class="list-group-item border-0"><h5>Measurements: '. $row["measurement"] .'</h5></li>';
      echo '<li class="list-group-item border-0"><h5>Technic: '. $row["technic"] .'</h5></li>';
      echo '<li class="list-group-item border-0" ><h3 class="preis">Price:'. $row["price"] .' €</h3></li>';
      echo '<input type="hidden" name="hidden_name" value='. $row["name_pic"] .' />';
      echo '<input type="hidden" name="hidden_price" value='. $row["price"] .' />';
      echo '<input type="hidden" name="hidden_quantity" value= 1 />';
      echo '<li class="list-group-item border-0 mt-5"><button type="submit" name="add_to_cart" class="productADD" onclick="add()" value="Add to Cart">ADD</button></li>';
      echo '</ul>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</form>';
    ?>
</main>
<?php include_once('../includes/footer.php') ?>