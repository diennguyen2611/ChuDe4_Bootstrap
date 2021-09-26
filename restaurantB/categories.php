<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Categories</title>
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
    </header>
    <!--End Header-->

    <!--Container-->
    <div class="main">
        <div class="container-fluid my-main overflow-hidden my-categories">
            <div class="row">
                <h2 class="text-center my-title">Explore Foods</h2>
            </div>
            <div class="row my-explore">
                <div class="col-md-4 my-img-explore">
                    
                    <a href="#"><img src="img/pizza.jpg" class="img-fluid" alt="food">
                    <h5>Pizza</h5></a>
                </div>
                <div class="col-md-4 my-img-explore">
                    <a href="#"><img src="img/burger.jpg" class="img-fluid" alt="food">
                    <h5>Burger</h5></a>
                </div>
                <div class="col-md-4 my-img-explore">
                    <a href="#"><img src="img/momo.jpg" class="img-fluid" alt="food">
                    <h5>Momo</h5></a>
                </div>

            </div>

            <div class="row my-explore">
                <div class="col-md-4 my-img-explore">
                    
                    <a href="#"><img src="img/pizza.jpg" class="img-fluid" alt="food">
                    <h5>Pizza</h5></a>
                </div>
                <div class="col-md-4 my-img-explore">
                    <a href="#"><img src="img/burger.jpg" class="img-fluid" alt="food">
                    <h5>Burger</h5></a>
                </div>
                <div class="col-md-4 my-img-explore">
                    <a href="#"><img src="img/momo.jpg" class="img-fluid" alt="food">
                    <h5>Momo</h5></a>
                </div>

            </div>

            
        </div>
        
    </div>

    <!--FOOTER-->
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