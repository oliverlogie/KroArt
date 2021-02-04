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

	};

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$db->query("Delete from news where news_id=$id") or die ($db->error());
		header('location ../news/news.php');

	};
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
	};
	
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$headline = $_POST['headline'];
		$textn = $_POST['text'];
		$daten = $_POST['date'];
		$fileName = basename($_FILES["picture"]["name"]);

		$db->query("Update news Set headline='$headline',textn='$textn', daten='$daten', picture='$fileName' WHERE news_id=$id") or die ($db->error());
		header('location:../news/news.php');

	};
/*-------------------------------- NEWS END ---------------------*/

/*-------------------------------- ARTIST  ----------------------*/

$artist_id=0;
$updateArtist="";
$artistName="";
$artistLastName="";
$biography ="";
$awards ="";
$exhibitions ="";
$pdfFile="";
$pdfTargetDir = "../../pdf/";
$pdfTargetFilePath = $pdfTargetDir . $pdfFile;
$pdfFileType = pathinfo($pdfTargetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['saveArtist'])) {
	$artistName = $_POST['artistName'];
	$artistLastName = $_POST['artistLastName'];
	$biography = $_POST['biography'];
	$awards = $_POST['awards'];
	$exhibitions = $_POST['exhibitions'];
	$pdfFile = basename($_FILES["pdf"]["name"]);

	$sqlA = "Insert into artist (name,lastname,exh,ssa,bio,pdf)
		Values('$artistName','$artistLastName','$exhibitions','$awards','$biography','$pdfFile')";
	$resultArtist = mysqli_query($db,$sqlA);
	header('location:../artist/artist.php');

};

if(isset($_GET['deleteArtist'])){
	$artist_id = $_GET['deleteArtist'];
	$db->query("Delete from artist WHERE artist_id=$artist_id") or die ($db->error());
	header('location:../artist/artist.php');

};
if(isset($_GET['editArtist'])){
	$artist_id = $_GET['editArtist'];
	$updateArtist = true;
	$resultEditArtist= $db->query("Select * From artist WHERE artist_id=$artist_id") or die ($db->error());
	if(($resultEditArtist)==1){
		$row = $resultEditArtist->fetch_assoc();
		$artistName = $row['name'];
		$artistLastName = $row['lastname'];
		$biography = $row['bio'];
		$awards = $row['ssa'];
		$exhibitions = $row['exh'];
		$pdfFile = $row['pdf'];
		
	}
};

if(isset($_POST['updateArtist'])){
	$artist_id=$_POST['artist_id'];
	$artistName = $_POST['artistName'];
	$artistLastName = $_POST['artistLastName'];
	$biography = $_POST['biography'];
	$awards = $_POST['awards'];
	$exhibitions = $_POST['exhibitions'];
	$pdfFile = basename($_FILES["pdfFile"]["name"]);

	$db->query("Update artist Set name='$artistName',lastname='$artistLastName',exh='$exhibitions', ssa='$awards', bio='$biography' ,pdf='$pdfFile' WHERE artist_id=$artist_id") or die ($db->error());

	header('location:../artist/artist.php');

}

/*-------------------------------- ARTIST END ----------------------*/



/*-------------------------------- ARTWORK --- ----------------------*/



$name_pic="";
$fk_artist_id="";
$fk_category = "";
$measurement = "";
$fk_technic = "";
$lastname_artist="";
$price = 0;
$artwork_id=0;
$updateArtwork="";
$productFile="";
$productTargetDir = "../../img";
$productTargetFilePath = $productTargetDir . $productFile;
$productFileType = pathinfo($productTargetFilePath,PATHINFO_EXTENSION);

if (isset($_POST['saveArtwork'])) {
	$name_pic = $_POST['name_pic'];
	$fk_artist_id = $_POST['fk_artist_id'];
	$fk_category = $_POST['fk_category'];
	$measurement = $_POST['measurement'];
	$fk_technic = $_POST['fk_technic'];
	$price = $_POST['price'];
	$pictureProduct = basename($_FILES["pictureProduct"]["name"]);

	$sqlP = "Insert into artwork (name_pic, picture, price, measurement) VALUES  ('$name_pic','$pictureProduct','$price','$measurement');
	Insert into artist name Values ('$fk_artist_id');
	Insert into category category Values ('$fk_category');
	Insert into technic technic) Values ('$fk_technic') "or die ($db->error());
	$result = mysqli_query($db,$sqlP);
	header('location:../product/product.php');

}

if(isset($_GET['deleteArtwork'])){
	$artwork_id = $_GET['deleteArtwork'];
	$db->query("Delete from artist WHERE artist_id=$artist_id") or die ($db->error());
	header('location:../product/product.php');

}
if(isset($_GET['editArtwork'])){
	$artwork_id = $_GET['editArtwork'];
	$updateArtwork = true;
	$resultArtwork= $db->query("SELECT * FROM (((artwork INNER JOIN artist ON artwork.fk_artist_id = artist.artist_id)INNER JOIN technic ON fk_technic = technic_id)INNER JOIN category ON fk_category=category_id) Where artwork_id=$artwork_id") or die ($db->error());
	if(($resultArtwork)==1){
		$row = $resultArtwork->fetch_assoc();
		$name_pic = $row['name_pic'];
		$fk_artist_id = $row['name'];
		$lastname_artist = $row['lastname'];
		$fk_category = $row['category'];
		$measurement = $row['measurement'];
		$fk_technic = $row['technic'];
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

	$db->query("UPDATE artwork SET artwork_id='$artwork_id',name_pic='$name_pic',picture='$pictureProduct',price='$price',measurement='$measurement',fk_category='$fk_category',fk_technic='$fk_technic',fk_artist_id='$fk_artist_id' WHERE artwork_id='$artwork_id") or die ($db->error());

	header('location:../product/product.php');




}

/*-------------------------------- ARTWORK END --- ----------------------*/


/*-------------------------------- ABOUT  --- ----------------------*/

	$about_id=0;
	$updateAbout="";
	$deutsch ="";
	$englisch ="";
	if(isset($_GET['editAbout'])){
		$about_id = $_GET['editAbout'];
		$updateAbout = true;
		$resultEdit= $db->query("SELECT * FROM about WHERE about_id=1")or die ($db->error()) ;
		if(($resultEdit)==1){
			$row = $resultEdit->fetch_assoc();
			$deutsch = $row['deutsch_text'];
			$englisch = $row['englisch_text'];
		
			
		}
	};
	
	if(isset($_POST['updateAbout'])){
		$about_id=$_POST['about_id'];
		$deutsch = $_POST['deutsch'];
		$englisch = $_POST['englisch'];

		$db->query("UPDATE about SET deutsch_text='$deutsch',englisch_text='$englisch' WHERE about_id=1") or die ($db->error());
		header('location:../about/about.php');

	};
	
/*-------------------------------- ABOUT END --- ----------------------*/

/*-------------------------------- Contact --- ----------------------*/


$contact_id=0;
$updateContact="";
$info ="";
$img_contact ="";
$contactTargetDir = "../../img";
$contactTargetFilePath = $contactTargetDir . $img_contact;
$contactFileType = pathinfo($contactTargetFilePath,PATHINFO_EXTENSION);
if(isset($_GET['editContact'])){
	$contact_id = $_GET['editContact'];
	$updatecontact = true;
	$resultEdit= $db->query("SELECT * FROM contact WHERE contact_id=1")or die ($db->error()) ;
	if(($resultEdit)==1){
		$row = $resultEdit->fetch_assoc();
		$info = $row['info'];
		$img_contact = $row['img_contact'];
	
		
	}

};

if(isset($_POST['updateContact'])){
	$contact_id=$_POST['contact_id'];
	$info = $_POST['info'];
	$img_contact = basename($_FILES["img_contact"]["name"]);
	

	$db->query("UPDATE contact SET img_contact='$img_contact',info='$info' WHERE contact_id=1") or die ($db->error());
	header('location:../contact/contact.php');

}


/*-------------------------------- Contact END --- ----------------------*/


?>
