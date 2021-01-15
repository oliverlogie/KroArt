<?php  
include_once('../includes/navbar.php');
$sql_category = "SELECT * FROM category INNER JOIN artwork ON artwork.fk_category = category.category_id GROUP BY category_id";
$result_category = $conn->query($sql_category);
?>
<main>
<div class="p-5">
<div class="row artCategories justify-content-center ">
<?php
if(mysqli_num_rows($result_category) > 0)
{
    while($row = mysqli_fetch_array($result_category))
    {
echo '<div class="artCategorie col-lg-2 col-md-2 col-sm-6 mb-5 justify-content-center d-block ">';
echo '<div class="d-none d-md-flex d-lg-flex"><a href="../art_category_info/art_info.php?id=' . $row['category_id'] . '"><img class="card-img-top" src="../img/'. $row["img_categorie"] .'" alt=""></a></div>';
echo '<div><a href=../art_category_info/art_info.php?id=' . $row['category_id'] . '">'. $row["category"] .  '</a></div>';
echo '</div>';
    }
}
?>
</div>
</div>
</main>
<?php include_once('../includes/footer.php') ?>
