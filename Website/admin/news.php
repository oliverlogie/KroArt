<?php include('php_code.php');?>
<?php  include_once('../includes/navbar.php') ?>

<div class="container">
<form method="post" action="php_code.php" enctype="multipart/form-data">
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
	<thead>
		<tr>
			<th>Headline</th>
			<th>Text</th>
            <th>Date</th>
			<th>Picture</th>
			<th colspan="2" class=>Action</th>
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr class="border">
			<td class="border"><?php echo $row['headline']; ?></td>
			<td class="border"><?php echo $row['textn']; ?></td>
			<td class="border"><?php echo $row['daten']; ?></td>
			<td class="border"><?php echo '<img width= 80px; height=80px; src=../img/'.$row["picture"].' alt="">' ?></td>
			<td class="d-flex">
				<a href="news.php?edit=<?php echo $row['news_id']; ?>" class="btn btn-info">Edit</a>
				<a href="php_code.php?delete=<?php echo $row['news_id']; ?>" class="btn btn-danger">Delete</a>
			</td>
			
		</tr>
	<?php } ?>
</table>

</form>


</div>
<?php include_once('../includes/footer.php') ?>
