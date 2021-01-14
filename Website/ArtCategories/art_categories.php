<?php  
include_once('../includes/navbar.php');
$sql_category = "SELECT * FROM category INNER JOIN artwork ON artwork.fk_category = category.category_id GROUP BY category_id";
$result_category = $conn->query($sql_category);
?>
<main>
<div class="container pt-5 pb-5">
<div class="row artCategories justify-content-center">
<?php
if(mysqli_num_rows($result_category) > 0)
{
    while($row = mysqli_fetch_array($result_category))
    {
echo '<div class="artCategorie col-lg-4 col-md-6 col-sm-6 mb-5">';
echo '<a href="../art_category_info/art_info.php?id=' . $row['category_id'] . '"><img class="card-img-top" src="../img/'. $row["picture"] .'" alt=""></a>';
echo '<a href="../malerei/malerei.php">'. $row["category"] .  '</a>';
echo '</div>';
    }
}
?>
</div>
</div>
</main>
<?php include_once('../includes/footer.php') ?>
