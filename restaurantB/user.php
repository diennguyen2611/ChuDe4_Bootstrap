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
    <title>Manage-User</title>
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
        <h2 class="text-start">Manage Users</h2>

        <button type="button" class="bg-primary text-white my-overview btt-add">Add New User</button>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1.</td>
                        <td scope="row">Arsenio Leach</td>
                        <td scope="row">toduwaxobi</td>
                        <td scope="row">
                            <button type="button" class="bg-primary text-white">Change Passwword</button>
                            <button type="button" class="bg-success text-dark">Update Admin</button>
                            <button type="button" class="bg-danger text-white">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2.</td>
                        <td scope="row">Sasha Mendez</td>
                        <td scope="row">goxemyde</td>
                        <td scope="row">
                            <button type="button" class="bg-primary text-white">Change Passwword</button>
                            <button type="button" class="bg-success text-dark">Update Admin</button>
                            <button type="button" class="bg-danger text-white">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">3.</td>
                        <td scope="row">Vijay Thapa</td>
                        <td scope="row">vijaythapa</td>
                        <td scope="row">
                            <button type="button" class="bg-primary text-white">Change Passwword</button>
                            <button type="button" class="bg-success text-dark">Update Admin</button>
                            <button type="button" class="bg-danger text-white">Delete Admin</button>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">4.</td>
                        <td scope="row">Administrator</td>
                        <td scope="row">admin</td>
                        <td scope="row">
                            <button type="button" class="bg-primary text-white">Change Passwword</button>
                            <button type="button" class="bg-success text-dark">Update Admin</button>
                            <button type="button" class="bg-danger text-white">Delete Admin</button>
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