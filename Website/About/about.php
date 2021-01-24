<?php  include_once('../includes/navbar.php'); ?>

<main> 
    <?php $resultsAbout = mysqli_query($conn, "SELECT * FROM about"); ?>
    <div class="container p-lg-5 p-4  ">
    <?php while ($row = mysqli_fetch_array($resultsAbout)) { 
        echo' <div class="pl-lg-5 pr-lg-5 ml-lg-5 mr-lg-5 mb-5 ">';
        echo'<h1 class="mb-3">Kro Art Contemporary online</h1>';
        echo'<p>'.$row['deutsch_text'].'</p></div>';
        echo'<div class="textEnglish pl-lg-5 pr-lg-5 ml-lg-5 mr-lg-5 mt-5 ">';
        echo'<h1 class="mb-3">Kro Art Contemporary online</h1>';
        echo'<p>'.$row['englisch_text'].'</p></div>';
    } ;?>

    </div>
</main>
<?php include_once('../includes/footer.php') ?>
