<?php 
	session_start();
	$db = mysqli_connect('localhost','root','','kroart');
	$id=0;
	$update="";
	$headline ="";
	$textn ="";
	$daten ="";
	$fileName="";
	$targetDir = "uploads/";
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
		header('location: news.php');

	}

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$db->query("Delete from news where news_id=$id") or die ($db->error());
		header('location: news.php');

	}
	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true;
		$result= $db->query("Select * From news WHERE news_id=$id") or die ($db->error());
		if(count($result)==1){
			$row = $result->fetch_array();
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
		$fileName = $_POST['picture'];

		$db->query("Update news Set headline='$headline',textn='$textn', daten='$daten', picture='$fileName' WHERE news_id=$id") or die ($db->error());
		header('location: news.php');

	}

?>