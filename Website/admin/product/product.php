<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>
<?php  
    $results = mysqli_query($db, "SELECT * FROM ((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id) where fk_artist_id='$artwork_id'"); 
    $option="";
    while ($row = mysqli_fetch_array($results)) { 
      $option .='<option value="'.$fk_artist_id.' name="$fk_artist_id">'.$row['name'].'</option>';

    }
      $resultsTechnic = mysqli_query($db, "SELECT * FROM technic"); 
      $optionTechnic="";
      while ($row = mysqli_fetch_array($resultsTechnic)) { 
      $optionTechnic .='<option value="'.$fk_technic.' name="fk_technic">'.$row['technic'].'</option>';

    }
    $resultsCategory = mysqli_query($db, "SELECT * FROM category"); 
    $optionCategory="";
    while ($row = mysqli_fetch_array($resultsCategory)) { 
    $optionCategory .='<option value="'.$fk_category.' name="fk_category"">'.$row['category'].'</option>';

  }

  var_dump($option,$optionTechnic,$resultsCategory);
?>
<main>
    <div class="container">
        <form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
            <input type="hidden" name="artwork_id" value="<?php echo $artwork_id?>">
            <div class="input-group">
                <label>Name nad Year of the Product</label>
                <input type="text" name="name_pic" value="<?php echo $name_pic ?>">
            </div> 
            <div class="input-group">
                <label>Artist</label>
                <select id="fk_artist_id" name="fk_artist_id" >
                    <?php echo $option; ?>
                </select>
            </div>
            <div class="input-group">
                <label>Category</label>
                <select id="fk_category" name="fk_category" >
                    <?php echo $optionCategory; ?>
                </select>
            </div>     
             <div class="input-group">
                <label>Measurementt</label>
                <input type="text" name="measurement" value="<?php echo $measurement ?>">
            </div> 
            <div class="input-group">
                <label>Technic</label>
                <select id="artwork" name="artwork" >
                    <?php echo $optionTechnic; ?>
                </select>
            </div>
            <div class="input-group">
                <label>Add Technic</label>
                <input type="text" name="fk_technic" value="<?php echo $fk_technic ?>">
            </div>
            <div class="input-group">
                <label>Price</label>
                <input type="text" name="price" value="<?php echo $price ?>">
            </div>
            <div class="input-group">
                <label>Picture</label>
                <input type="file" name="pictureProduct" value="<?php echo '../img/' . $productFile ?>">
            </div>
            <div class="input-group">
                <?php if($updateProduct == true){
                echo '<input class="btn btn-info" type="submit" name="updateProduct" value="update">'; 
                } else {
                echo '<input class="btn btn-primary" type="submit" name="saveProduct" value="save">';
                }?>
            </div>
            <?php 
            var_dump($artwork_id,$measurement,$price,$fk_artist_id,$fk_category,$fk_technic)
            ?>
            <div class="home-container mt-5 mb-5">
                <h1 class="text-center"><span class="news_line">Artworks</span></h1>
            </div>
            <div class="row d-flex">
            <div class="border col-lg-3 col-md-4 col-sm-6">
                <?php $results = mysqli_query($db, "SELECT * FROM artwork"); ?>
                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                        <div class="text-right">
                            <a href="product.php?editArtwork=<?php echo $row['artwork_id']; ?>" class="btn btn-info ml-3">Edit</a>
                            <a href="../backend/php_code.php?deleteArtwork=<?php echo $row['artwork_id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                        <?php echo '<img  class="card-img-top mt-2" src=../../img/'.$row["picture"].' alt="">' ?>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["name_pic"]?></h5>
                        </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Artist:<?php echo $row["fk_artist_id"]?></li>
                        <li class="list-group-item">Measurements:<?php echo $row["measurement"]?> </li>
                        <li class="list-group-item">Technic:<?php echo $row["fk_technic"]?></li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <p class="preis  mr-3">Price:<?php echo $row["price"]?>  €</p>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name_pic"]?>"  />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>" />
                
                    </div>
            </div>
            </div>
            <?php } ?>
        
        </form>
    </div>





</main>
<?php include_once('../includes/footerAdmin.php') ?>