<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php url('Public/css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?php url('Public/css/responsive.css') ?>" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="<?php url('Public/css/style.css') ?>"> -->
    <link rel="stylesheet" href="<?php url('Public\css\dashbord.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="<?php url('Public/IMAGE2/logo.png')?>" type="image/x-icon">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>CureCo</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  nav-slide sidebar sidebar-dark accordion" id="accordionSidebar">
            <i class="fa-sharp fa-solid fa-xmark" id="closeDash"></i>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?php url('Public/IMAGE2/logo.png')?>" class="" alt="Bootstrap" width="40" height="34">
                </div>
                <div class="sidebar-brand-text mx-3">CureCo</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php url('gestion/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span te>Dashboard</span></a>
            </li>

            <!-- Divider -->


            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php url('gestion/add') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                The sorted
            </div>


            <li class="nav-item">
                <form action="<?php url('gestion/add') ?>" method="post">
                    <i class="fa-solid fa-chart-line-up"></i>
                    <button class="btn text-light" type="submit" name="croissant">Croissant</button>
                    <i class="fa-solid fa-chart-line-down"></i>
                    <button class="btn text-light" type="submit" name="decroissant">Decroissant</button>

                </form>

                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper " class="d-flex container-fluid flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="btnNav" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        method="POST" action="<?php url('gestion/add') ?>">
                        <div class="input-group">
                            <input list="searchs" type="text" name="search" id="search"
                                class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <datalist id="searchs">
                                <?php foreach($products as $row): ?>
                                <option value="<?php echo $row['name']?>">
                                    <?php endforeach ?>
                            </datalist>

                            <div class="input-group-append">
                                <button class="btn btn-primary" name="sumbitsearch" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search" method="POST"
                                    action="<?php url('gestion/add') ?>">
                                    <div class="input-group">
                                        <input list="searchs" type="text" name="search"
                                            class="form-control bg-light border-0 small" placeholder="Search for..."
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <datalist id="searchs">
                                            <?php foreach($products as $row): ?>
                                            <option value="<?php echo $row['name']?>">
                                                <?php endforeach ?>
                                        </datalist>

                                        <div class="input-group-append">
                                            <button class="btn btn-primary" name="sumbitsearch" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-primary small"><strong>
                                        <?php echo strtoupper($_SESSION['username'])?></strong></span>
                                <img class="img-profile rounded-circle" src="<?php url('Public/IMAGE2/logo.png')?>"
                                    width="20" height="15">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <a class="dropdown-item" href="<?php url('gestion/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                MIN PRICE</div>
                                            <div class="h5 mb-0 font-weight-bold d-inline text-gray-800 num " id="">
                                                <?php echo $min.'$'?></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                MAX PRICE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline num " id="">
                                                <?php echo $max.'$' ?></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                NUMBER OF PRODUCTS
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 num">
                                                        <?php echo $countP ?>
                                                    </div>
                                                </div>
                                                <div class="col">

                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                MOYENNE PRICE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline num">
                                                <?php echo $moyenne.'$'?></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- DataTales Example -->
                    <button id="btnModal" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@getbootstrap"></button>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table ">
                                    <thead class="thead-primary">
                                        <tr>

                                            <th>Product <a data-bs-toggle="modal" data-bs-target="#exampleModal1"
                                                    data-bs-whatever="@fat" class="fa-solid fa-plus"></a></th>
                                            <th>image</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>total</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  foreach($products as $row):?>
                                        <tr class="alert" role="alert">
                                            <td>
                                                <div class="email">
                                                    <span><strong><?php echo $row['name']?></strong> </span>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="img">
                                                    <img class="image-table"
                                                        src="<?php url('Public/IMAGE2/'.$row['image']) ?>" alt="">
                                                </div>
                                            </td>

                                            <td><?php echo $row['price'].'$'?></td>
                                            <td class="quantity"><?php echo $row['quantity']?></td>
                                            <td><?php echo $row['price']*$row['quantity'].'$'?></td>
                                            <td>
                                                <a class="fa-solid fa-trash"
                                                    href="<?php url('gestion/delete/'.$row['id']) ?>"></a>
                                            </td>
                                            <td>

                                                <a id="btnUpdate" class="fa-solid fa-pen-to-square"
                                                    href="<?php url('gestion/update/'.$row['id'])?>"></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>



            <!-- Footer -->

            <?php require(view . 'include\formadd.php') ?>

            <!-- End of Footer -->
            <?php require(view . 'include/footer.php') ?>

        </div>
        <!-- End of Content Wrapper -->


    </div>



    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->