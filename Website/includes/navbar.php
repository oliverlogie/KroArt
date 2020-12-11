<nav>
            <div class="container d-flex justify-content-between p-4">
                <div class="row ">
                    <a href="#"><img class="logo" src="../img/logo_01.png" alt="logo"></a>
                </div>
                
                <div class="row d-lg-flex d-md-flex d-none pt-3">
                    <ul class="d-flex pl-0 ml-0">
                        <li><a href=""> about</a></li>
                        <li><a href=""> artists</a></li>
                        <li>
                            <div class="dropdown">
                              <a href=""> <span class="dropbtn">categories  <i class="fa fa-caret-down"></i>
                            </span></a> 
                                <div class="dropdown-content">
                                <a href="#">categorie 1</a>
                                <a href="#">categorie 2</a>
                                <a href="#">categorie 3</a>
                                <a href="#">categorie 4</a>
                                <a href="#">categorie 5</a>
                                </div>
                            </div>
                        </li>
                        <li><a href=""> news</a></li>
                        <li><a href=""> contact</a></li>
                        <li> <a href="" class="bagImg">collect<img src="../img/shopping-bag.png" class="pl-2" alt="bag" width="35px" height="25px"></a></li>
                    </ul>
                </div>
        
                <div  id="myNav" class="overlay d-sm-block justify-content-sm-between d-lg-none d-md-none">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="../About/about.html">About</a>
                        <a href="#">Artists</a>
                        <a href="#">Categories</a>
                        <a href="#">News</a>
                        <a href="#">Contact</a>
                        <a href="#">Collect<img src="../img/shopping-bag-white.png" class="pl-2" alt="bag" width="40px" height="40px"></a>
                        <form class="searchOption pt-2 pb-5" action="#.php">
                            <input class="searchForm" type="text" placeholder="Search.." name="search">
                            <button class="searchButton  btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="overlay-content">
                        <a href="">Newsletter</a>
                        <div class="d-flex justify-content-center">
                            <a href=""><img src="../img/insta-white-icon.png" width="50px" alt="insta-white-icon"></a>
                            <a href=""><img src="../img/fb-white-icon.png" width="50px" alt="fb-white-icon"></a>
                        </div>
                    </div>

                </div>
              <span class=" d-sm-flex d-lg-none d-md-none" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </nav>