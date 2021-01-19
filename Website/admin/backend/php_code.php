<?php 
	session_start();
	$db = mysqli_connect('localhost','root','','kroart');

/*-------------------------------- NEWS -------------------------*/
	$id=0;
	$update="";
	$headline ="";
	$textn ="";
	$daten ="";
	$fileName="";
	$targetDir = "../../img";
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	if (isset($_POST['save'])) {
		$headline = $_POST['headline'];
		$textn = $_POST['text'];
		$daten = $_POST['date'];
		$fileName = basename($_FILES["picture"]["name"]);

        $sql = "Insert into news (headline,textn,daten,picture)
            Values('$headline','$textn','$daten','$fileName')";
		$result = mysqli_query($db,$sql);
		header('location:../news/news.php');

	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$db->query("Delete from news where news_id=$id") or die ($db->error());
		header('location ../news/news.php');

	}
	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true;
		$resultEdit= $db->query("Select * From news WHERE news_id=$id") or die ($db->error());
		if(($resultEdit)==1){
			$row = $resultEdit->fetch_assoc();
			$headline = $row['headline'];
			$textn = $row['textn'];
			$daten = $row['daten'];
			$fileName = $row['picture'];
			
		}
	}
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$headline = $_POST['headline'];
		$textn = $_POST['text'];
		$daten = $_POST['date'];
		$fileName = basename($_FILES["picture"]["name"]);

		$db->query("Update news Set headline='$headline',textn='$textn', daten='$daten', picture='$fileName' WHERE news_id=$id") or die ($db->error());
		header('location:../news/news.php');

	}
/*-------------------------------- NEWS END ---------------------*/

/*-------------------------------- ARTIST  ----------------------*/

$artist_id=0;
$updateArtist="";
$artistName="";
$biography ="";
$awards ="";
$exhibitions ="";
$pdfFile="";
$pdfTargetDir = "../../pdf/";
$pdfTargetFilePath = $pdfTargetDir . $pdfFile;
$pdfFileType = pathinfo($pdfTargetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['saveArtist'])) {
	$artistName = $_POST['artistName'];
	$biography = $_POST['biography'];
	$awards = $_POST['awards'];
	$exhibitions = $_POST['exhibitions'];
	$pdfFile = basename($_FILES["pdf"]["name"]);

	$sqlA = "Insert into artist (name,exh,ssa,bio,pdf)
		Values('$artistName','$exhibitions','$awards','$biography','$pdfFile')";
	$resultArtist = mysqli_query($db,$sqlA);
	header('location:../artist/artist.php');

}

if(isset($_GET['deleteArtist'])){
	$artist_id = $_GET['deleteArtist'];
	$db->query("Delete from artist WHERE artist_id=$artist_id") or die ($db->error());
	header('location:../artist/artist.php');

}
if(isset($_GET['editArtist'])){
	$artist_id = $_GET['editArtist'];
	$updateArtist = true;
	$resultEditArtist= $db->query("Select * From artist WHERE artist_id=$artist_id") or die ($db->error());
	if(($resultEditArtist)==1){
		$row = $resultEditArtist->fetch_assoc();
		$artistName = $row['name'];
		$biography = $row['bio'];
		$awards = $row['ssa'];
		$exhibitions = $row['exh'];
		$pdfFile = $row['pdf'];
		
	}
}

if(isset($_POST['updateArtist'])){
	$artist_id=$_POST['artist_id'];
	$artistName = $_POST['artistName'];
	$biography = $_POST['biography'];
	$awards = $_POST['awards'];
	$exhibitions = $_POST['exhibitions'];
	$pdfFile = basename($_FILES["pdfFile"]["name"]);

	$db->query("Update artist Set name='$artistName',exh='$exhibitions', ssa='$awards', bio='$biography' ,pdf='$pdfFile' WHERE artist_id=$artist_id") or die ($db->error());

	header('location:../artist/artist.php');

}

/*-------------------------------- ARTIST END ----------------------*/



/*-------------------------------- ARTWORK --- ----------------------*/



$name_pic="";
$fk_artist_id="";
$fk_category = "";
$measurement = "";
$fk_technic = "";
$price = 0;
$artwork_id=0;
$updateProduct="";
$productFile="";
$productTargetDir = "../../img";
$productTargetFilePath = $productTargetDir . $productFile;
$productFileType = pathinfo($productTargetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['saveProduct'])) {
	$name_pic = $_POST['name_pic'];
	$fk_artist_id = $_POST['fk_artist_id'];
	$fk_category = $_POST['fk_category'];
	$measurement = $_POST['measurement'];
	$fk_technic = $_POST['fk_technic'];
	$price = $_POST['price'];
	$pictureProduct = basename($_FILES["pictureProduct"]["name"]);

	$sqlP = "Insert into artwork(name_pic, picture, price, measurement, fk_category, fk_technic, fk_artist_id) VALUES ('$name_pic','$pictureProduct','$price,$measurement','$fk_category','$fk_technic','$fk_artist_id')";
	header('location:../product/product.php');

}

if(isset($_GET['deleteArtwork'])){
	$artwork_id = $_GET['deleteArtwork'];
	$db->query("Delete from artwork WHERE artwork_id=$artwork_id") or die ($db->error());
	header('location:../product/product.php');


}
if(isset($_GET['editArtwork'])){
	$artwork_id = $_GET['editArtwork'];
	$updateArtwork = true;
	$result= $db->query("Select * From artwork WHERE artwork_id=$artwork_id") or die ($db->error());
	if(($result)==1){
		$row = $result->fetch_assoc();
		$name_pic = $row['name_pic'];
		$fk_artist_id = $row['name_pic'];
		$fk_category = $row['fk_category'];
		$measurement = $row['measurement'];
		$fk_technic = $row['fk_technic'];
		$price = $row['price'];
		$pictureProduct = $row['picture'];
		
	}
}

if(isset($_POST['updateArtwork'])){
	$artwork_id=$_POST['artwork_id'];
	$name_pic = $_POST['name_pic'];
	$fk_artist_id = $_POST['fk_artist_id'];
	$fk_category = $_POST['fk_category'];
	$measurement = $_POST['measurement'];
	$fk_technic = $_POST['fk_technic'];
	$price = $_POST['price'];
	$pictureProduct = basename($_FILES["pictureProduct"]["name"]);

	$db->query("UPDATE artwork SET artwork_id='$artwork_id',name_pic='$name_pic',picture='$pictureProduct',price='$price',measurement='$measurement',fk_category='$fk_category',fk_technic='$fk_technic',fk_artist_id='$fk_artist_id' WHERE 1") or die ($db->error());

	header('location:../product/product.php');




}



?>