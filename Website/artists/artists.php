<?php  include_once('../includes/navbar.php'); 
$sql_artist = "SELECT artist.artist_id, artist.name, picture, ssa, exh,bio FROM (artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id) GROUP BY artist_id";
$result_artist = $conn->query($sql_artist);
?>
<main>
  <div class="container text-center pt-5 pb-5">
      <h1>Artists</h1>
      <div class="row artistsCard d-flex mt-5">
      <?php
        if(mysqli_num_rows($result_artist) > 0){
          $i=1;
        while($row = mysqli_fetch_array($result_artist)){
          echo '<div class="card border-0 col-lg-3 col-md-4 col-sm-6  text-left">';
          echo '<a href="../artist_Info/artist_info.php?id=' . $row['artist_id'] . '"><img class="card-img-top" src="../img/'. $row["picture"] .'" alt=""></a>';
          echo '<div class="card-body text-center">';
          echo '<a href="../artist_Info/artist_info.php?id=' . $row['artist_id'] . '"><h5 class="card-title artName">' . $row["name"] . '</h5></a>';
          echo '</div>';
          echo '</div>';
        }
        $i++;
      }
    ?>
    </div>
  </div>
</main>
<?php include_once('../includes/footer.php') ?>