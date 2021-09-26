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
    <title>Manage-Order</title>
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
        <h2 class="text-start">Manage Order</h2>
        <div class="table-responsive">
            <table class="table table-borderless my-overview">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Food</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                        <th scope="col">Order date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1.</td>
                        <td scope="row">Mixed Pizza</td>
                        <td scope="row">$10.00</td>
                        <td scope="row">2</td>
                        <td scope="row">$20.00</td>
                        <td scope="row">2020-11-30 04:07:17</td>
                        <td scope="row" class="text-success">Delivered</td>
                        <td scope="row">Jana Bush</td>
                        <td scope="row">+1 (656) 232-3222</td>
                        <td scope="row">tyjiji@mailnator.com</td>
                        <td scope="row">Minima iure ducimus</td>
                        <td scope="row">
                            <button type="button" class="bg-success text-dark">Update Category</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2.</td>
                        <td scope="row">Best Burger</td>
                        <td scope="row">$4.00</td>
                        <td scope="row">4</td>
                        <td scope="row">$16.00</td>
                        <td scope="row">2020-11-30 04:27:34</td>
                        <td scope="row" class="text-success">Delivered</td>
                        <td scope="row">Keylly Dillard</td>
                        <td scope="row">+1 (636) 298-6382</td>
                        <td scope="row">federds@mailnator.com</td>
                        <td scope="row">Incidunt ipsum ad d</td>
                        <td scope="row">
                            <button type="button" class="bg-success text-dark">Update Category</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">3.</td>
                        <td scope="row">Sadeko Momo</td>
                        <td scope="row">$6.00</td>
                        <td scope="row">3</td>
                        <td scope="row">$18.00</td>
                        <td scope="row">2020-11-11 07:07:35</td>
                        <td scope="row" class="text-danger">Cancelled</td>
                        <td scope="row">Bradiey Farrel</td>
                        <td scope="row">+1 (983) 982-3222</td>
                        <td scope="row">bradieyi@mailnator.com</td>
                        <td scope="row">Duies aliqua</td>
                        <td scope="row">
                            <button type="button" class="bg-success text-dark">Update Category</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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