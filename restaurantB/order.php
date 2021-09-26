<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Order</title>
    <link rel='shortcut icon' href='img/favicon.ico' />
</head>

<body>
    <!--header-->
    <header>
        <div class="container-fluid overflow-hidden">
            <!--Thêm overflow-hidden bỏ thanh cuộn ngang-->
            <div class="row header">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand my-logo" href="index.php">
                                <img src="img/logo.png" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navbar-collapse justify-content-end collapse" id="navbarNavAltMarkup">
                                <!--Thêm justify-content-end -->
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
        </div>
    </header>
    <!--End Header-->


    <!--Form-->

    <div class="my-form-main">
        <div class="row">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
        </div>
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md-5">
                <form>
                    <fieldset class="boder-form">
                        <legend>Selected Food</legend>
                        <div class="card mb-3 my-bg-none" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="img/menu-pizza.jpg" class="img-fluid" alt="pizza">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body my-description">
                                        <h5 class="card-title fw-bolder">Pizza</h5>
                                        <p class="fw-bold">$2.3</p>
                                        <p class="fw-bolder">Quantity</p>
                                        <input type="number" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <form>
                    <fieldset class="boder-form">
                        <legend>Delivery Details</legend>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="E.g. Vijay Thapa">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bold">Phone Number</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="E.g. 9843xxxxxx">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="E.g. hi@VaijayThapa.com">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label fw-bold">Address</label>
                            <br>
                            <textarea rows="10" placeholder="E.g. Street, City, Country"></textarea>
                        </div>

                        <input type="button" class="text-white" value="Confirm Order"></input>
                        
                    </fieldset>
                </form>
            </div>
            <div class="col-md"></div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>