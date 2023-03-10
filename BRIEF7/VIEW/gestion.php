<?php require(view.'include/header.php') ?>



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
                <form action="<?php url('gestion/index') ?>" method="post">
                    <i class="fa-solid fa-chart-line-up"></i>
                    <button class="btn text-light" type="submit" name="croissant">Croissant</button>
                    <i class="fa-solid fa-chart-line-down"></i>
                    <button class="btn text-light" type="submit" name="decroissant">Decroissant</button>

                </form>

                </a>
            </li>




        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex container-fluid flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="btnNav" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                        method="POST" action="<?php url('gestion/index') ?>">
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
                                    action="<?php url('gestion/index') ?>">
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


                <!-- /.container-fluid -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            MIN PRICE</div>
                                        <div class="h5 mb-0 font-weight-bold d-inline text-gray-800 num " id=""
                                            ><?php echo $min.'$'?></div>
                                        
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
                                        <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline num " id=""
                                            ><?php echo $max.'$' ?></div>
                                        
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
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 num"
                                                    ><?php echo $countP ?>
                                                </div>
                                            </div>
                                            <div class="col">

                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

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
                                        <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline num"
                                          ><?php echo $moyenne.'$'?></div>
                                       
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">


                    <?php foreach($products as $row ): ?>
                    <div class="col-sm-4 mb-4">
                        <div class="thumb-wrapper">

                            <div class="img-box">
                                <img src="<?php url('Public/IMAGE2/'.$row['image']) ?>" class="img-responsive img-box"
                                    alt="">
                            </div>
                            <div class="thumb-content">
                                <h4><?php echo $row['name'] ?></h4>

                                <p class="item-price"> <b class="text-warning">Price</b>
                                    <b><?php echo $row['price'].'$' ?></b>
                                </p>
                                <p class="item-price"> <b class="text-warning">Quantity</b>
                                    <b><?php echo $row['quantity'] ?></b>
                                </p>

                            </div>
                            <div class="star-rating">
                                <a id="btnUpdate" class="fa-solid fa-pen-to-square text-danger"
                                    href="<?php url('gestion/update/'.$row['id'])?>"></a>
                                <a class="fa-solid fa-trash text-danger"
                                    href="<?php url('gestion/delete/'.$row['id']) ?>"></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>



                </div>

                <?php require(view.'include/footer.php') ?>
</body>

</html>