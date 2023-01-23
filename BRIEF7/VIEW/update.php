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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>CureCo</title>
</head>

<body id="page-top">


    <div id="wrapper">

        <ul class="navbar-nav  nav-slide sidebar sidebar-dark accordion" id="accordionSidebar">
            <i class="fa-sharp fa-solid fa-xmark" id="closeDash"></i>

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CureCo</div>
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php url('gestion/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span te>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php url('gestion/add') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <div id="content-wrapper " class="d-flex container-fluid flex-column">


            <div id="content">


                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <button id="btnNav" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


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


                    <ul class="navbar-nav ml-auto">


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
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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

                <section class="row justify-content-md-center">
                    <div class="card col-md-8">
                        <h5 class="text-center mb-4">Powering world-class companies</h5>
                        <form method="POST" action="<?php url('gestion/updateproducts/'.$rowproduct['id'])?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" name="name" value="<?php echo $rowproduct['name'] ?>" class="form-control" id="recipient-name">
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Image:</label>
                                <input type="file" name="image" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                              
                                <img class="img-edit" src="<?php url('Public/IMAGE2/'.$rowproduct['image']) ?>" alt="" >
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Price:</label>
                                <input class="form-control"  value="<?php echo $rowproduct['price'] ?>" type="number" name="price" id="message-text"></input>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Quantity:</label>
                                <input class="form-control"  value="<?php echo $rowproduct['quantity'] ?>" type="number" name="quantity" id="message-text"></input>
                            </div>


                            <div class="modal-footer">

                                <button type="submit" name="submitedit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>

                <?php require(view.'include/footer.php') ?>


</body>

</html>