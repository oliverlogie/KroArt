<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>
<?php
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
?>
<main>
    <div class="container">
        <form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
            <input type="hidden" name="artist_id" value="<?php echo $artist_id?>">
            <div class="input-group">
                <label>Artist First Name</label>
                <input type="text" name="artistName" value="<?php echo $artistName ?>">
            </div>
            <div class="input-group">
                <label>Artist Last Name</label>
                <input type="text" name="artistLastName" value="<?php echo $artistLastName ?>">
            </div>
            <div class="input-group">
                <label>Biography</label>
                <textarea type="text" rows="8" name="biography"  size="100000" placeholder=""><?php echo $biography ?></textarea>
            </div>
            <div class="input-group">
                <label>Scolarships / Awards</label>
                <textarea type="text" rows="8" name="awards"  size="100000" placeholder=""><?php echo $awards ?></textarea>
            </div>
            <div class="input-group">
                <label>Exhibitions</label>
                <textarea type="text" rows="8" name="exhibitions"  size="100000" placeholder=""><?php echo $exhibitions ?></textarea>
            </div>
            <div class="input-group">
                <label>PDF FILE</label>
                <input type="file" name="pdfFile" value="<?php echo '../../pdf/' . $pdfFile ?>">
            </div>
            <div class="input-group">
                <?php if($updateArtist == true){
                echo '<input class="btn btn-info" type="submit" name="updateArtist" value="update">'; 
                } else {
                echo '<input class="btn btn-primary" type="submit" name="saveArtist" value="save">';
                }?>
            </div>


            <?php $resultsArtist = mysqli_query($db, "SELECT * FROM artist"); ?>
            
                <div class="home-container mt-5 mb-5">
                    <h1 class="text-center"><span class="news_line">Artists</span></h1>
                </div>
                <?php while ($row = mysqli_fetch_array($resultsArtist)) { ?>
                <div class="container p-5 mb-5 border">
                    <div class="text-right">
                        <a href="artist.php?editArtist=<?php echo $row['artist_id']; ?>" class="btn btn-info ml-3">Edit</a>
                        <a href="../backend/php_code.php?deleteArtist=<?php echo $row['artist_id']; ?>" class="btn btn-danger">Delete</a>
                    </div>
                    
                    <div class="textBox">
                        <h1 class="text-center pb-3"><?php echo $row['name']; ?>  <?php echo $row['lastname']; ?></h1>
                        <p></p>
                        <h3>Biography</h3>
                        <p><?php echo $row['bio']?></p>
                        <h3>Scolarships / Awards</h3>
                        <p> <?php echo $row['ssa']; ?></p>
                        <h3>Exhibitions</h3>
                        <p><?php echo $row['exh']; ?></p>
                        <a href="../../pdf/' <?php echo $row['pdf']; ?> .' "class="text-danger" download="<?php echo $row['name']; ?>">Download CV</a>
                    </div>
                    <p class="read-more button-News mt-3">READ MORE</p></div>
                </div>
                <?php } ?>
           
        </form>
    </div>
</main>
<?php include_once('../includes/footerAdmin.php') ?>
