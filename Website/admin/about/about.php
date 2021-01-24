<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>
<main>

<div class="container">
    <form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
    <input type="hidden" name="about_id" value="<?php echo $about_id?>">
        <div class="input-group">
            <label class="mt-5">Redact Text Deutsh</label>
            <textarea type="text" rows="8" name="deutsch"  size="10000000" placeholder=""><?php echo $deutsch ?></textarea>
        </div>

        <div class="input-group">
            <label class="mt-5">Redact Text English</label>
            <textarea type="text" rows="8" name="englisch"  size="10000000" placeholder=""><?php echo $englisch ?></textarea>
        </div>
        <div class="input-group">
            <?php if($updateAbout == true){
            echo '<input class="btn btn-info" type="submit" name="updateAbout" value="update">'; 
            } else {
            echo '<input class="btn btn-primary" type="submit" name="saveAbout" value="save">';
            }?>
        </div>
    </form>
</div>



<?php $resultsAbout = mysqli_query($conn, "SELECT * FROM about"); ?>
    <div class="container p-lg-5 p-4  ">
    <?php while ($row = mysqli_fetch_array($resultsAbout)) { 
        echo' <div class="pl-lg-5 pr-lg-5 ml-lg-5 mr-lg-5 mb-5 ">';
        echo' <div class="text-right">
        <a class="btn btn-info ml-3" href="about.php?editAbout='. $row['about_id'].' class="btn btn-info ml-3">Edit</a>
        </div>';
        echo'<h1 class="mb-3">Kro Art Contemporary online - DEUTSCH</h1>';
        echo'<p>'.$row['deutsch_text'].'</p></div>';
        echo'<div class="textEnglish pl-lg-5 pr-lg-5 ml-lg-5 mr-lg-5 mt-5 ">';
        echo'<h1 class="mb-3">Kro Art Contemporary online - ENGLISH</h1>';
        echo'<p>'.$row['englisch_text'].'</p></div>';
    } ;?>

    </div>

</main>
<?php include_once('../includes/footerAdmin.php') ?>
