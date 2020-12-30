<?php  include_once('../includes/navbar.php'); 
$sql_artist = "SELECT * FROM `artist`";
$result_artist = $conn->query($sql_artist);
?>
<main>
  <div class="container text-center pt-5 pb-5">
      <h1>Artists</h1>
      <?php
      if ($result_artist-> num_rows > 0){
      while ($row = $result_artist-> fetch_assoc()){
          echo '<div class="row artistsCard d-flex mt-5">';
          echo '<div class="card border-0 col-lg-3 col-md-4 col-sm-6  text-left">';
          echo '<a href="../artist_Info/artist_info.php"><img class="card-img-top" src="../img/newsimg.jpg" alt=""></a>';
          echo '<div class="card-body text-center">';
          echo '<a href="../artist_Info/artist_info.php"><h5 class="card-title">' . $row["name"] . '</h5></a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
      }
    ?>
  </div>
</main>
<?php include_once('../includes/footer.php') ?>