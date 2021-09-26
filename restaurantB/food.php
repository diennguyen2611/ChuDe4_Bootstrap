<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Foods</title>
    <link rel='shortcut icon' href='img/favicon.ico' />
</head>
<body>
<header>
        <div class="container-fluid overflow-hidden"> <!--Thêm overflow-hidden bỏ thanh cuộn ngang-->
        <div class="row header">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand my-logo" href="index.php">
                            <img src="img/logo.png" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse justify-content-end collapse" id="navbarNavAltMarkup"> <!--Thêm justify-content-end -->
                            <div class="navbar-nav">
                                <a class="nav-link active my-color" href="index.php">Home</a>
                                <a class="nav-link active my-color" href="categories.php">Categories</a>
                                <a class="nav-link active my-color" href="food.php">Foods</a>
                                <a class="nav-link active my-color" href="#footer">Contact</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
  
        <!--Search-->
        <div class="row my-bg-search" style="background-image: url('img/bg.jpg');">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-main-bg">
                <div class="my-search-input">
                    <form>
                        <input type="text" name="search" placeholder="Search for Food..">
                        <input type="button" value="Search" class="search-button">
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        </div>
    
    </header>
    <!--End Header-->

    <div class="main">
        <!--menu-->
        <div class="container-fluid my-main overflow-hidden bg-secondary" style="--bs-bg-opacity: .15">
            <div class="row">
                <h2 class="text-center my-title">Food Menu</h2>
                <!--1 hàng menu-->
                <div class="row food-menu">
                    <div class="col-md-6  my-row-menu">
                        <div class="card">
                            <div class="row g-0">
                                <div class="my-menu-img col-md-3">
                                    <img src="img/menu-momo.jpg" class="img-fluid" alt="momo">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Dumplings Spectials</h5>
                                        <p class="card-text my-price">$5.00</p>
                                        <p class="card-text"><small class="text-muted">Chicken Dumpling with herbs from Mountians</small></p>
                                        <a href="order.php" class="btn my-order-btt text-white">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-row-menu">
                        <div class="card">
                            <div class="row g-0">
                                <div class="my-menu-img col-md-3">
                                    <img src="img/menu-burger.jpg" class="img-fluid" alt="burger">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Best Burger</h5>
                                        <p class="card-text my-price">$4.00</p>
                                        <p class="card-text"><small class="text-muted">Burger with Ham, Pineapple and lots of Cheese</small></p>
                                        <a href="order.php" class="btn my-order-btt text-white">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </div>

                <!--hàng 2-->
                <div class="row food-menu">
                    <div class="col-md-6 my-row-menu">
                        <div class="card">
                            <div class="row g-0">
                                <div class="my-menu-img col-md-3">
                                    <img src="img/menu-momo.jpg" class="img-fluid" alt="momo">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Dumplings Spectials</h5>
                                        <p class="card-text my-price">$5.00</p>
                                        <p class="card-text"><small class="text-muted">Chicken Dumpling with herbs from Mountians</small></p>
                                        <a href="order.php" class="btn my-order-btt text-white">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-row-menu">
                        <div class="card">
                            <div class="row g-0">
                                <div class="my-menu-img col-md-3">
                                    <img src="img/menu-pizza.jpg" class="img-fluid" alt="pizza">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Mixed Pizza</h5>
                                        <p class="card-text my-price">$10.00</p>
                                        <p class="card-text"><small class="text-muted">Pizza with Chicken, Ham, Buff, Mushroom and Vegetables</small></p>
                                        <a href="order.php" class="btn my-order-btt text-white">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                
                </div>

                <!--hàng 3-->
                <div class="row food-menu">
                    <div class="col-md-6 my-row-menu">
                        <div class="card">
                            <div class="row g-0">
                                <div class="my-menu-img col-md-3">
                                    <img src="img/menu-momo.jpg" class="img-fluid" alt="momo">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <h5 class="card-title">Dumplings Spectials</h5>
                                        <p class="card-text my-price">$5.00</p>
                                        <p class="card-text"><small class="text-muted">Chicken Dumpling with herbs from Mountians</small></p>
                                        <a href="order.php" class="btn my-order-btt text-white">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>

    <!--Footer-->
    <footer id="footer">
            <div class="text-center">
            <img src="img/logo_facebook.png" alt="logo_facebook" width="32px">
            <img src="img/logo_instagram.png" alt="logo_instagram" width="32px">
            <img src="img/logo_twitter.png" alt="logo_twitter" width="32px">
            <p>All rights reserved. Designed By <span>NguyenThiDien</span></p>

        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>