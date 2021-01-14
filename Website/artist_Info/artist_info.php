<?php  
include_once('../backend/cart.php');
include_once('../includes/navbar.php');
$id= $_GET['id'];
$sql_pic = "SELECT * FROM ((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id) where fk_artist_id='$id'";
$sql_artist = "SELECT * FROM artist where artist_id='$id'";
$result_artist = $conn->query($sql_artist);
$result_pic = $conn->query($sql_pic);
$query = "SELECT * FROM artwork ORDER BY artwork_id ASC";
$result = mysqli_query($conn, $query);
?>
<main>
<div class="container pt-5 pb-5 mt-5">
<?php
$rowA = mysqli_fetch_assoc($result_artist);
echo '<h1 class="text-center pb-3"> '. $rowA["name"] .' </h1>';
echo '<h5 class="text-right"><a href="../artists/artists.php">back to Artists</a></h5>';
echo '<h3>Biography</h3>';
echo '<p> '. $rowA["bio"] .'</p>';
echo '<h3>Scolarships / Awards</h3>';
echo '<p>'. $rowA["ssa"] .'</p>';
echo '<h3>Exhibitions</h3>';
echo '<p> '.$rowA["exh"].'</p>';
echo '<a href="../pdf/' .$rowA['pdf'] .' "class="text-danger" download="'.$rowA["name"].'">Download CV</a>';
?>
<div class="row d-flex mt-5">
<?php
if(mysqli_num_rows($result_pic) > 0)
{
    while($row = mysqli_fetch_array($result_pic))
    {
echo '<div class="card border col-lg-3 col-md-4 col-sm-6 ">';
echo '<form method="post" action="../collect/collect.php?action=add&id=' . $row["artwork_id"] . '">';
echo '<a href="../product_info/product_info.php?id=' . $row['artwork_id'] . '">';
echo '<img class="card-img-top mt-2" src="../img/'. $row["picture"] .'" alt="">';
echo '<div class="card-body">';
echo '<h5 class="card-title">'. $row["name_pic"] .'</h5>';
echo '</div>';
echo '<ul class="list-group list-group-flush">';
echo '<li class="list-group-item">Artist: '. $row["name"] .'</li>';
echo '<li class="list-group-item">Measurements: '. $row["measurement"] .'</li>';
echo '<li class="list-group-item">Technic: '. $row["technic"] .'</li>';
echo '</ul>';
echo '</a>';
echo '<div class="card-body d-flex justify-content-center">';
echo '<p class="preis  mr-3">Price:'. $row["price"] .' €</p>';
echo '<input type="hidden" name="hidden_name" value='. $row["name_pic"] .' />';
echo '<input type="hidden" name="hidden_price" value='. $row["price"] .' />';
echo '<input type="hidden" name="hidden_quantity" value= 1 />';
echo '<p><button type="submit" name="add_to_cart" class="buttonADD" onclick="add()" value="Add to Cart">ADD</button></p>';
echo '</div>';
echo '</div>';
echo '</form>';
    }
}
?>
</div>
</div>
</main>
<?php include_once('../includes/footer.php') ?>
