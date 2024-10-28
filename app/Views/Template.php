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
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/templatemo-stand-blog.css">
        <link rel="stylesheet" href="/assets/css/owl.css">
    </head>
    <body>
        <!-- Header -->
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/home"><h2>Stand Blog<em>.</em></h2></a>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
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
