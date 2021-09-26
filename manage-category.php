<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icon/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <ul class="nav justify-content-center fw-bold border-bottom border-3 border-secondary fs-5">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-users.php">Adimin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-category.php">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-food.php">Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-order.php">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </header>

    <section class=" bg-gray-200">
        <div class="container-fluid">
            <div class="row mb-5 pt-5">
                <h2 class="fw-bold">Manage Category</h2>
            </div>

            <div class="row-cols-6 mb-4">
                <button type="button" class="btn btn-primary">Add Category</button>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-a">
                    <thead>
                        <tr>
                            <th class="col-1">
                                S.N.
                            </th>
                            <th class="col-2">
                                Title
                            </th>
                            <th class="col-2">
                                Image
                            </th>
                            <th class="col-1">
                                Featured
                            </th>
                            <th class="col-1">
                                Active
                            </th>
                            <th class="col-5">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table align-middle container-fluid">
                            <td class="col-1">
                                1.
                            </td>
                            <td class="col-2">
                                Pizza
                            </td>
                            <td class="col-2">
                                <img src="assets/img/pizza.jpg" alt="" class="img-fluid">

                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-5">
                                <button class="btn bd-teal-400 text-dark fw-bold">
                                    Update Category
                                </button>
                                <button class="btn btn-outline-hotpink fw-bold">
                                    Delete Category
                                </button>
                            </td>
                        </tr>
                        <tr class="table align-middle container-fluid">
                            <td class="col-1">
                                2.
                            </td>
                            <td class="col-2">
                                Burger
                            </td>
                            <td class="col-2">
                                <img src="assets/img/burger.jpg" alt="" class="img-fluid">

                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-5">
                                <button class="btn bd-teal-400 text-dark fw-bold">
                                    Update Category
                                </button>
                                <button class="btn btn-outline-hotpink fw-bold">
                                    Delete Category
                                </button>
                            </td>
                        </tr>
                        <tr class="table align-middle container-fluid">
                            <td class="col-1">
                                3.
                            </td>
                            <td class="col-2">
                                Momo
                            </td>
                            <td class="col-2">
                                <img src="assets/img/momo.jpg" alt="" class="img-fluid">
                            </td>
                            <td class="col-1">
                                Yes

                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-5">
                                <button class="btn bd-teal-400 text-dark fw-bold">
                                    Update Category
                                </button>
                                <button class="btn btn-outline-hotpink fw-bold">
                                    Delete Category
                                </button>
                            </td>
                        </tr>
                        <tr class="table align-middle container-fluid">
                            <td class="col-1">
                                4.
                            </td>
                            <td class="col-2">
                                Quia est ipsum id id
                            </td>
                            <td class="col-2">
                                <img src="assets/img/bg.jpg" alt="" class="img-fluid">
                            </td>
                            <td class="col-1">
                                No
                            </td>
                            <td class="col-1">
                                Yes
                            </td>
                            <td class="col-5">
                                <button class="btn bd-teal-400 text-dark fw-bold">
                                    Update Category
                                </button>
                                <button class="btn btn-outline-hotpink fw-bold">
                                    Delete Category
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer>
        <div class="row bg-hotpink text-center justify-content-center m-0">
            <p>
                2020 All right rerved. Food House. Developed By.
                <a href="https://vietcodedi.com/login/index.php">CSE485</a>
            </p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>