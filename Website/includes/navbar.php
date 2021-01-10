<?php
include_once('../backend/db_connect.php');
$sql_category = "SELECT * FROM category";
$result_category = $conn->query($sql_category);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact/KroArt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
<header>
    <nav>
        <div class="container d-flex justify-content-between p-4">
            <div class="row ">
                <a href="../Home/index.php "><img class="logo" src="../img/logo_01.png" alt="logo"></a>
            </div>
            
            <div class="row d-lg-flex d-md-flex d-none pt-3">
                <ul class="d-flex pl-0 ml-0">
                    <li><a href="../About/about.php"> about</a></li>
                    <li><a href="../artists/artists.php"> artists</a></li>
                    <li>
                        <div class="dropdown">
                            <a href="../ArtCategories/art_categories.php"> <span class="dropbtn">categories <i class="fa fa-caret-down d-none d-lg-inline"></i>
                        </span></a> 
                            <div class="dropdown-content">
                            <?php while($row = mysqli_fetch_assoc($result_category)){
                            echo '<a href="../art_category_info/art_info.php?id=' . $row['category_id'] . '"> '. $row["category"] .'</a>';
                            }
                            ?>
                        </div>
                    </li>
                    <li><a href="../News/news.php"> news</a></li>
                    <li><a href="../Contact/contact.php"> contact</a></li>
                    <li> <a href="../collect/collect.php" class="bagImg">collect<img src="../img/shopping-bag.png" class="pl-2" alt="bag" width="35px" height="25px"></a></li>
                </ul>
            </div>

            <div  id="myNav" class="overlay d-sm-block justify-content-sm-between d-lg-none d-md-none">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="../About/about.html">About</a>
                    <a href="../artists/artists.php">Artists</a>
                    <a href="../ArtCategories/art_categories.php">Categories</a>
                    <a href="../News/news.php">News</a>
                    <a href="../Contact/contact.php">Contact</a>
                    <a href="../collect/collect.php">Collect<img src="../img/shopping-bag-white.png" class="pl-2" alt="bag" width="40px" height="40px"></a>
                    <form class="searchOption pt-2 pb-5" action="#.php">
                        <input class="searchForm" type="text" placeholder="Search.." name="search">
                        <button class="searchButton  btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="overlay-content">
                    <a href="">Newsletter</a>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.instagram.com/artwork_vienna/"><img src="../img/insta-white-icon.png" width="50px" alt="insta-white-icon"></a>
                        <a href="https://www.facebook.com/ArtworkCoworking/"><img src="../img/fb-white-icon.png" width="50px" alt="fb-white-icon"></a>
                    </div>
                </div>

            </div>
            <span class=" d-sm-flex d-lg-none d-md-none" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
    </nav>
</header>