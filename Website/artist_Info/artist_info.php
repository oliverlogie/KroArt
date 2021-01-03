<?php  include_once('../includes/navbar.php'); 
$id= $_GET['id'];
$sql_artist = "SELECT DISTINCT artist.artist_id, artist.name, picture, ssa, exh, bio, price, name_pic,measurement, technic FROM ((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id) where artist_id='$id'";
$result_artist = $conn->query($sql_artist);
?>
<main>
<div class="container pt-5 pb-5">
<?php
$row = mysqli_fetch_array($result_artist);
echo '<h1 class="text-center pb-3"> '. $row["name"] .' </h1>';
echo '<h5 class="text-right"><a href="../artists/artists.php">back to Artists</a></h5>';
echo '<h3>Biography</h3>';
echo '<p> '. $row["bio"] .'</p>';
echo '<h3>Scolarships / Awards</h3>';
echo '<p>'. $row["ssa"] .'</p>';
echo '<h3>Exhibitions</h3>';
echo '<p> '.$row["exh"].'</p>';
echo '<a href="" class="text-danger">Download CV</a>';
while($row = mysqli_fetch_array($result_artist)){
echo '<div class="row d-flex mt-5">';
echo '<div class="card border col-lg-3 col-md-4 col-sm-6">';
echo '<img class="card-img-top" src="../'. $row["picture"] .'" alt="">';
echo '<div class="card-body">';
echo '<h5 class="card-title">'. $row["name_pic"] .'</h5>';
echo '</div>';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item">'. $row["name"] .'</li>';
echo '<li class="list-group-item">'. $row["measurement"] .'</li>';
echo '<li class="list-group-item">'. $row["technic"] .'</li>';
echo '</ul>';
echo '<div class="card-body d-flex justify-content-center">';
echo '<p class="preis  mr-3">'. $row["price"] .' €</p>';
echo '<p><button type="button" class="buttonADD">ADD</button></p>';
echo '</div>';
echo '</div>';
echo '</div>';
}

?>
</div>
</main>
<?php include_once('../includes/footer.php') ?>
