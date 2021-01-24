<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>

<main>


    <div class="container">
        <form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
        <input type="hidden" name="contact_id" value="<?php echo $contact_id?>">
            <div class="input-group">
                <label class="mt-5">Redact Contact Info</label>
                <textarea type="text" rows="8" name="info"  size="10000" placeholder=""><?php echo $info ?></textarea>
            </div>

            <div class="input-group">
                <label class="">Redact Contact Image</label>
                <input type="file" name="img_contact" value="<?php echo '../../img/' . $img_contact ?>">
            </div>
            <div class="input-group">
                <?php if($updateContact == true){
                echo '<input class="btn btn-info" type="submit" name="updateContact" value="update">'; 
                } else {
                echo '<input class="btn btn-primary" type="submit" name="updateContact" value="save">';
                }?>
            </div>
        </form>
    </div>
    <div class="conactDaten container p-lg-5 p-4">
    <?php $resultsContact = mysqli_query($conn, "SELECT * FROM contact"); ?>
    <div class="text-right">
    <?php while ($row = mysqli_fetch_array($resultsContact)) { 

        echo '<a class="btn btn-info ml-3" href="contact.php?editContact= '.$row['contact_id'].'" class="btn btn-info ml-3">Edit</a>
        </div>
        <div class="row d-block d-lg-flex text-center ">';
        echo '<div class="col-sm-12 col-md-12 col-lg-7 m-0 p-0 pb-5 pt-5 text-center ">';
        echo '<img src="../img/'.$row['img_contact'].'" class="img_contact" alt="Artwork Cowork Space">
            </div>';
        echo '<div class="col-sm-12 col-md-12 col-lg-5 d-block m-0 p-0 pt-5 pb-5 text-center">
         <p>'.$row['info'].'</p>
        </div>';
     } ?>
        </div>
    </div> 
</main>
<?php include_once('../includes/footerAdmin.php') ?>