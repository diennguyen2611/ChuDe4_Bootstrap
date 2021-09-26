<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Manage-Home</title>
    <link rel='shortcut icon' href='img/favicon.ico' />
</head>

<body>
    <header>
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse justify-content-center collapse" id="navbarNavAltMarkup">
                        <!--justify....-->
                        <div class="navbar-nav">
                            <a class="nav-link active my-color" aria-current="page" href="admin.php">Home</a>
                            <a class="nav-link active my-color" href="user.php">Admin</a>
                            <a class="nav-link active my-color" href="category_ad.php">Category</a>
                            <a class="nav-link active my-color" href="food_ad.php">Food</a>
                            <a class="nav-link active my-color" href="order_ad.php">Order</a>
                            <a class="nav-link active my-color" href="#">Logout</a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--End header-->

    <!--Main-->
    <div class="container-fluid overflow-hidden my-main-ad">
        <h2 class="text-start">Dashboard</h2>

        <div class="row my-total">
            <div class="col-md-3 my-overview">
                <div class="my-content">
                    <h2>4</h2>
                    <p>Categories</p>
                </div>
            </div>

            <div class="col-md-3 my-overview">
                <div class="my-content">
                    <h2>6</h2>
                    <p>Foods</p>
                </div>
            </div>

            <div class="col-md-3 my-overview">
                <div class="my-content">
                    <h2>3</h2>
                    <p>Total Order</p>
                </div>
            </div>

            <div class="col-md-3 my-overview">
                <div class="my-content">
                    <h2>$36.00</h2>
                    <p>Revenue Generated</p>
                </div>
            </div>
        </div>


    </div>

    <!--footer-->
    <footer>
        <p class="text-center text-white">2020 All rights reserved, Food House. Developed By - <span
                class="text-primary">NguyenThiDien</span></p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>