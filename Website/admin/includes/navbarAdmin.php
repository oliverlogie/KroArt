<?php
include_once('../../backend/db_connect.php');
$sql_category = "SELECT * FROM category";
$result_category = $conn->query($sql_category);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kro Art Contemporary online</title>
    <link rel="icon" type="image/gif" href="../img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Style/style.css">
</head>
<body>
<header>
    <nav>
        <div class="container d-flex justify-content-between p-4">
            <div class="row ">
                <a href="../../Home/index.php "><img class="logo" src="../../img/logo_01.png" alt="logo"></a>
            </div>
            
            <div class="row d-lg-flex d-md-flex d-none pt-3">
                <ul class="d-flex pl-0 ml-0">
                    <li><a href="../about/about.php"> redact about</a></li>
                    <li><a href="../artist/artist.php"> add artist</a></li>
                    <li><a href="../product/product.php">add product</a></li>
                    <li><a href="../news/news.php"> add news</a></li>
                    <li><a href="../contact/contact.php"> redact contact</a></li>
                    <li><a href="../login/logout.php" class="btn btn-danger">Sign Out</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>
</header>