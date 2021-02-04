<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
?>

<?php  
    $resultsArtist = mysqli_query($db, "SELECT * FROM artist"); 
    $option="";
    while ($row = mysqli_fetch_array($resultsArtist)) { 
      $option .= '<option value="choose artist" name="$fk_artist_id">'.$row['name'].' '.$row['lastname'] .'</option>';

    }
      $resultsTechnic = mysqli_query($db, "SELECT * FROM technic"); 
      $optionTechnic="";
      while ($row = mysqli_fetch_array($resultsTechnic)) { 
      $optionTechnic .='<option value="choose technic" name="fk_technic">'.$row['technic'].'</option>';

    }
    $resultsCategory = mysqli_query($db, "SELECT * FROM category"); 
    $optionCategory="";
    while ($row = mysqli_fetch_array($resultsCategory)) { 
    $optionCategory .='<option value="choose category" name="fk_category"">'.$row['category'].'</option>';

  }

  var_dump($option,$optionTechnic,$resultsCategory);
?>
<main>
    <div class="container">
        <form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
            <input type="hidden" name="artwork_id" value="<?php echo $artwork_id?>">
            <div class="input-group">
                <label class="mr-2">Name nad Year of the Product: </label>
                <input type="text" name="name_pic" value="<?php echo $name_pic ?>">
            </div> 
            <div class="input-group">
                <label class="mr-2">Artist: </label>
                <select id="" name="" >
                    <?php echo $option; ?>
                </select>
                <p class="ml-3"><?php echo $fk_artist_id.' '. $lastname_artist?></p>
            </div>
            <div class="input-group">
                <label class="mr-2">Category: </label>
                <select id="" name="" >
                    <?php echo $optionCategory; ?>
                </select>
                <p class="ml-3"><?php echo $fk_category ?></p>
            </div>     
             <div class="input-group">
                <label class="mr-2">Measurement: </label>
                <input type="text" name="measurement" value="<?php echo $measurement ?>">
            </div> 
            <div class="input-group">
                <label class="mr-2">Technic: </label>
                <select id="" name="" >
                    <?php echo $optionTechnic; ?>
                </select>
                <p class="ml-3"><?php echo $fk_technic ?></p>

            </div>
            <div class="input-group">
                <label class="mr-2">Add Technic: </label>
                <input type="text" name="fk_technic" value="<?php echo $fk_technic ?>">
            </div>
            <div class="input-group">
                <label class="mr-2">Price: </label>
                <input type="text" name="price" value="<?php echo $price ?>">
            </div>
            <div class="input-group">
                <label class="mr-2">Picture: </label>
                <input type="file" name="pictureProduct" value="<?php echo '../img/' . $productFile ?>">
            </div>
            <div class="input-group">
                <?php if($updateArtwork == true){
                echo '<input class="btn btn-info" type="submit" name="updateArtwork" value="update">'; 
                } else {
                echo '<input class="btn btn-primary" type="submit" name="saveArtwork" value="save">';
                }?>
            </div>
            <?php 
            var_dump($fk_artist_id,$fk_category,$fk_technic,$measurement,$price)
            ?>
            <div class="home-container mt-5 mb-5">
                <h1 class="text-center"><span class="news_line">Artworks</span></h1>
            </div>

            <div class="row d-flex  ">
                    <?php
                    $sql_pic = "SELECT * FROM (((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id)INNER JOIN category ON fk_category=category_id)";
                    $result = $conn->query($sql_pic);
                    $result = mysqli_query($db, $sql_pic); 
                   
                        while($row = mysqli_fetch_array($result))
                        {
                        echo '<div class="card border col-lg-3 col-md-4 col-sm-6 mb-5">';
                        echo' <div class="text-right">
                        <a class="btn btn-info ml-3" href="product.php?editArtwork='. $row['artwork_id'].'" class="btn btn-info ml-3">Edit</a>
                        <a class="btn btn-danger" href="../backend/php_code.php?deleteArtwork='.$row['artwork_id'].' " class="btn btn-danger">Delete</a>
                        </div>';
                        echo '<img class="card-img-top mt-2" src="../../img/'. $row["picture"] .'" alt="">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">'. $row["name_pic"] .'</h5>';
                        echo '</div>';
                        echo '<ul class="list-group list-group-flush">';
                        echo '<li class="list-group-item">'. $row["name"] . '</a></li>';
                        echo '<li class="list-group-item">'. $row["measurement"] .'</li>';
                        echo '<li class="list-group-item">'. $row["technic"] .'</li>';
                        echo '<li class="list-group-item">'. $row["category"] .'</li>';
                        echo '</ul>';
                        echo '<p class="preis text-center">'. $row["price"] .' €</p>'; 
                        echo '</div>';
                    }
                
                        ?> 
            </div>
        </form>
    </div>
</main>
<?php include_once('../includes/footerAdmin.php') ?>