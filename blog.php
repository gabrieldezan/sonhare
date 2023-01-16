<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#282828" />
    <title>Blog | Sonhare</title>
    <meta name="description" content="Blog | Sonhare">
    <link href="ico/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="preloader">
        <div class="layer"></div>
        <div class="inner">
            <figure><img src="images/preloader.gif" alt="Image"></figure>
            <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Carregando</span></p>
        </div>
    </div>
    <div class="transition-overlay">
        <div class="layer"></div>
    </div>

    <?php include('php/header.php'); ?>

    <header class="page-header" data-background="images/slide01.jpg" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1>Blog</h1>
            <p>Mini descrição do blog</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>
    </header>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog04.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 01</a></h5>
                                    <p class="post-intro">Breve descrição do post.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog03.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 02</a></h5>
                                    <p class="post-intro">Breve descrição do post</p>
                                </div>
                            </div>
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog03.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 03</a></h5>
                                    <p class="post-intro">Breve descrição do post</p>
                                </div>
                            </div>
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog04.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 04</a></h5>
                                    <p class="post-intro">Breve descrição do post</p>
                                </div>
                            </div>
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog03.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 05</a></h5>
                                    <p class="post-intro">Breve descrição do post</p>
                                </div>
                            </div>
                            <div class="col-lg-6 blog-mg">
                                <figure class="post-image">
                                    <img src="images/blog04.jpg" alt="Image">
                                </figure>
                                <div class="post-content">
                                    <h5 class="post-title"><a href="post.php">Título 06</a></h5>
                                    <p class="post-intro">Breve descrição do post</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include('php/sidebarBlog.php'); ?>

                <div class="col-12">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include('./php/footer.php'); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/text-rotater.js"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>