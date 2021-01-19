<?php include('../backend/php_code.php');?>
<?php  include_once('../includes/navbarAdmin.php') ?>
<main>
<div class="container">
<form method="post" action="../backend/php_code.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id?>">
    <div class="input-group">
        <label>Headline</label>
        <input type="text" name="headline" value="<?php echo $headline ?>">
    </div>
    <div class="input-group">
        <label>Textarea</label>
        <textarea type="text" rows="8" name="text"  size="100000" placeholder=""><?php echo $textn ?></textarea>
    </div>
    <div class="input-group">
        <label>date</label>
        <input type="date" name="date" value="<?php echo $daten ?>" >
    </div>
    <div class="input-group">
        <label>Picture</label>
        <input type="file" name="picture" value="<?php echo '../img/' . $fileName ?>">
    </div>
    <div class="input-group">
		<?php if($update == true){
		 echo '<input class="btn btn-info" type="submit" name="update" value="update">'; 
		} else {
         echo '<input class="btn btn-primary" type="submit" name="save" value="save">';
		}?>
    </div>


<?php $results = mysqli_query($db, "SELECT * FROM news"); ?>
<table>
	<div class="container home-container mt-5">
      <h1><span class="news_line">News</span></h1>
    </div>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
	<div class="container p-5 mb-5">
    <div class="text-right">
    <a href="news.php?edit=<?php echo $row['news_id']; ?>" class="btn btn-info ml-3">Edit</a>
	<a href="../backend/php_code.php?delete=<?php echo $row['news_id']; ?>" class="btn btn-danger">Delete</a>
    </div>
     <div class="row d-flex">
     <div class="img_News col-lg-4 col-md-5 col-sm-12">
	 <?php echo '<img  class="img_News" src=../../img/'.$row["picture"].' alt="">' ?>
	 </div>
     <div class="col-lg-8 col-md-7 col-sm-12 pt-5 ">
     <div><h4><?php echo $row['headline']; ?></h4></div>
     <div class="date"><?php echo $row['daten']; ?></div>
     <div class="textBox"><p><?php echo $row['textn']; ?></p></div>
     <p class="read-more button-News mt-3">READ MORE</p></div>
	 
     </div>
     </div>
     </div>

	<?php } ?>
</table>

</form>
</div>
</main>
<?php include_once('../includes/footerAdmin.php') ?>
