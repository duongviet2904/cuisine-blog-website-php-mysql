<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="TemplateMo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <title>Stand CSS Blog by TemplateMo</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/templatemo-stand-blog.css">
        <link rel="stylesheet" href="/assets/css/owl.css">
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v21.0&appId=419268717888276"></script>
<!--        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>-->
<!--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>-->

        <!-- Header -->
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/home"><h2><img src="">Cuisine Blog<em>.</em></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?php if($selected == 'home') { echo 'active';} ?>">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item <?php if($selected == 'about-us') { echo 'active';} ?>">
                                <a class="nav-link" href="/about-us">About Us</a>
                            </li>
                            <li class="nav-item <?php if($selected == 'blog-entries') { echo 'active';} ?>">
                                <a class="nav-link" href="/blog-entries">Blog Entries</a>
                            </li>
                            <li class="nav-item <?php if($selected == 'post-detail') { echo 'active';} ?>">
                                <a class="nav-link" href="/post-detail">Post Details</a>
                            </li>
                            <li class="nav-item <?php if($selected == 'contact-us') { echo 'active';} ?>">
                                <a class="nav-link" href="/contact-us">Contact Us</a>
                            </li>
                            <li class="nav-item ">
                                <div data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signUpModal">Sign Up</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/register" method="POST">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signup-username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="signup-username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="signup-password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="signup-password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        </header>
        <div class="heading-page header-text" style = "display: <?php if($selected == 'home') { echo 'none';} ?>;">
            <section class="page-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-content">
                                <h4>
                                    <?php
                                        if($selected == 'about-us') {
                                            echo 'About us';
                                        }elseif ($selected == 'blog-entries'){
                                            echo 'Recent Posts';
                                        }elseif ($selected == 'post-detail') {
                                            echo 'Post Details';
                                        }else{
                                            echo 'Contact Us';
                                        }
                                    ?>
                                </h4>
                                <h2>
                                    <?php
                                        if($selected == 'about-us') {
                                            echo 'More about us';
                                        }elseif ($selected == 'blog-entries'){
                                            echo 'Our Recent Blog Entries';
                                        }elseif ($selected == 'post-detail') {
                                            echo 'Single blog post';
                                        }else{
                                            echo 'Let’s stay in touch!';
                                        }
                                    ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php require_once $content; ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="social-icons">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Behance</a></li>
                            <li><a href="#">Linkedin</a></li>
                            <li><a href="#">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p>Copyright 2020 Stand Blog Co.

                                | Design: <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript -->

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Additional Scripts -->

        <script src="/assets/js/custom.js"></script>
        <script src="/assets/js/owl.js"></script>
        <script src="/assets/js/slick.js"></script>
        <script src="/assets/js/isotope.js"></script>
        <script src="/assets/js/accordions.js"></script>
        <script language = "text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0;
            function clearField(t){
                if(! cleared[t.id]){
                    cleared[t.id] = 1;
                    t.value='';
                    t.style.color='#fff';
                }
            }
        </script>
    </body>
</html>
