<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DashbordAdmin</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Dashbord.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- SideBar.php  -->
        <?php include('shortphp/sidebar.php') ?>




        <!-- Page content wrapper-->
        <!-- <div id="page-content-wrapper"> -->
        <!-- Top navigation-->
        <!-- <nav class="navbar navbar-expand-lg  bg-light navbar-light "> -->
        <!-- <div class="container-fluid">
                    <a class="navbar-brand navIcons" id="sidebarToggle">
                        <i class="bi bi-arrow-left-circle fs-3"></i></a>
                    <form class="d-flex">

                        <div class="me-2 position-relative">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn position-absolute top-0 end-0" type="submit"><i class="bi bi-search"></i></button>
                        </div>

                        <button class="btn"> <i class="bi bi-bell"></i></button>
                    </form>
                </div>
            </nav> -->

        <?php include('shortphp/topnavigation.php') ?>

        <!-- Page content-->
        <?php include('shortphp/coursesArray.php') ?>
    </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>