<?php  include_once('../includes/navbar.php');
$id= $_GET['id'];
$sql_pic = "SELECT * FROM (((category INNER JOIN artwork ON artwork.fk_category = category.category_id) INNER JOIN artist ON artist.artist_id = artwork.fk_artist_id) INNER JOIN technic ON fk_technic = technic_id) where category_id='$id'";
$sql_category = "SELECT * FROM category where category_id='$id'";
$result_pic = $conn->query($sql_pic);
$result_category = $conn->query($sql_category);
?>
<main>
<div class="container text-center pt-5 pb-5">
<?php
while($row = mysqli_fetch_assoc($result_category)){
echo '<h1 class="text-center">'. $row["category"].'</h1>';
}
?>
<div class="row d-flex mt-5">


<?php
if(mysqli_num_rows($result_pic) > 0)
{
    while($row = mysqli_fetch_array($result_pic))
    {
echo '<div class="card border col-lg-3 col-md-4 col-sm-6 mr-3">';
echo '<form method="post" action="../collect/collect.php?action=add&id=' . $row["artwork_id"] . '">';
echo '<a href="../product_info/product_info.php?id=' . $row['artwork_id'] . '">';
echo '<img class="card-img-top mt-2" src="../img/'. $row["picture"] .'" alt="">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Name:'. $row["name_pic"] .'</h5>';
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