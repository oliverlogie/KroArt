<?php  include_once('../includes/navbar.php'); ?>
<main>
    <div class="conactDaten container p-lg-5 p-4">
    <?php $resultsAbout = mysqli_query($conn, "SELECT * FROM contact"); ?>

        <div class="row d-block d-lg-flex text-center ">
    <?php while ($row = mysqli_fetch_array($resultsAbout)) { 

        echo '<div class="col-sm-12 col-md-12 col-lg-7 m-0 p-0 pb-5 pt-5 text-center ">';
        echo '<img src="../img/'.$row['img_contact'].'" class="img_contact" alt="Artwork Cowork Space">
            </div>';
        echo '<div class="col-sm-12 col-md-12 col-lg-5 d-block m-0 p-0 pt-5 pb-5 text-center">
         <p>'.$row['info'].'</p>
        </div>';
     } ?>
        </div>
    </div>
    <div class="iFrame container pb-5 text-center" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.237651674816!2d16.360592749519714!3d48.202038226733954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07622cbed4b1%3A0x65d6d1849097ff9!2sArtwork%20Coworking%20Space!5e0!3m2!1sbg!2sat!4v1607511435018!5m2!1sbg!2sat"  frameborder="0" style="border-radius:30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> 
</main>
<?php include_once('../includes/footer.php') ?>