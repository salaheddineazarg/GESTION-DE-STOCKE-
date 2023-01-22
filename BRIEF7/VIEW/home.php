<?php 
require(view.'include/header.php') ?>

<body>
    <!-- Bootstrap Static Header -->
    <div class="jumbotron bg-cover  text-white">
        <div class="container py-5 mt-md-5 text-center"  data-aos="fade-right">
            <h1 class="display-4   font-weight-bold">Gestion Pharmacy Stocke</h1>
            <p class="font-italic  mb-5">Using simple jumbotron-style component, create a nice Bootstrap 4 header with a
                background image.</p>

            <button id="btnLogin" type="button"  data-toggle="modal" data-target="#exampleModal" class="btnhome d-block px-5">Go to Dashbord</button>
        </div>
    </div>
   

    <!-- For Demo Purpose -->
    <div class="container py-5">
        <h2 class="h3 font-weight-bold">Some demo content</h2>
        <div class="row">
            <div class="col-lg-10 mb-4">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            </div>
            <div class="col-lg-8">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur <strong
                        class="font-weight-bold text-dark">adipisicing elit, sed </strong>do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <strong
                        class="font-weight-bold text-dark">reprehenderit in voluptate </strong>velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <div class="container-fluide py-3">

        <!-- Card Start -->
        <div class="card text_card text-center">
            <div class="row h-100 ">

                <div class="col-md-6  px-3"  data-aos="fade-right">
                    <div class="card-block mt-4 px-6">
                        <h4 class="card-title">Gestion Pharmacy Stocke </h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit provident vitae
                            consequuntur aut
                            illum alias officia impedit beatae suscipit velit officiis magni modi molestiae porro
                            commodi odio quia ex quos libero, voluptatum labore, veritatis deleniti. Aut, quaerat saepe
                            commodi illo tenetur voluptate reiciendis ad quis a laborum sapiente ea, voluptas modi porro
                            explicabo ipsam iste, facere sequi in libero atque minus fugit fuga. Cupiditate minima
                            beatae ullam consequatur corrupti nihil voluptatibus laboriosam. Repellendus quam doloribus
                            obcaecati ullam minima deserunt ratione et quia reprehenderit recusandae ducimus quis quod
                            doloremque modi architecto, iure sunt quas. Voluptates expedita provident officia rem
                            officiis dolorem! </p>

                        <br>
                        <a href="#" class="mt-auto btnContact  ">Read More</a>
                    </div>
                </div>
                <!-- Carousel start -->
                <div class="col-md-6  carouselimage"  data-aos="fade-left">
                    <div id="CarouselTest" class="carousel slide w-100" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
                            <li data-target="#CarouselTest" data-slide-to="1"></li>
                            <li data-target="#CarouselTest" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://plus.unsplash.com/premium_photo-1661777752178-fa6055526eb8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://images.unsplash.com/photo-1547489432-cf93fa6c71ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://plus.unsplash.com/premium_photo-1661776255948-7a76baa9d7b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                                    alt="">
                            </div>
                            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of carousel -->
            </div>
        </div>
        <!-- End of card -->

    </div>


    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://i.pinimg.com/564x/02/7e/0f/027e0f5d31debf5d1f27fbb543d6dac2.jpg" alt="rocket_contact" />
        </div>
        <form method="post">
            <h3>Drop Us a Message</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control input" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control input" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control input" placeholder="Your Phone Number *"
                            value="" />
                    </div>
                   
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                            style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-5">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                    </div>
                
            </div>
            
        </form>
    </div>
    <?php  require(view.'include/formlogin.php') ?>


    <script type="text/javascript" src="<?php url('Public/js/login.js')?>"></script>

    <?php  require(view.'include/footer.php') ?>


     

</body>

</html>