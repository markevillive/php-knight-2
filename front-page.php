<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <style>
        .preloader{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1002;
            background-color: #000;
        }

    </style>

    <?php wp_head() ?>
</head>
<?php php_knight_debug($custom_logo)?>
<body>
<div class="preloader d-flex justify-content-center align-items-center"><!---PRELOADER--->
    <div class="spinner-border text-danger" style="width: 10rem; height: 10rem; color: #ff0000" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div><!------------------------END PRELOADER----------------->
<button class="scrollToTop"><i class="fas fa-arrow-alt-circle-up"></i></button><!---Button TO TOP--->
<header class="main-header">

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="<?php echo home_url('/')?>">
            <?php $custom_logo = wp_get_attachment_image_src( get_theme_mod('custom_logo') ); if($custom_logo): ?>
                <img src="<?php echo $custom_logo[0] ?>" alt="<?php bloginfo('name') ?>">
            <?php endif; ?>
            <?php bloginfo('name') ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Works <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 d-none d-lg-block">
                <img src="<?php bloginfo('template_url') ?>/assets/img/knight.png" class="hero">
            </div>
            <div class="col-lg-5">
                <div class="main-header-text">
                    <h3>Marc<span>&nbsp; Shreder</span></h3>
                    <h4>Web developer blog.</h4>
                    <div class="main-header-text-content">

                        <p>
                            <?php php_knight_debug($custom_logo)?>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor consequat augue, nec viverra sem ultricies vel. Nulla luctus efficitur egestas. Vestibulum venenatis ligula nec.
                        </p>
                        <div class="main-header-button-group">
                            <button type="button" class="btn btn-danger">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--------------------------END ROW--------------------------------------------------->
    </div><!-------------------------------------END CONTAINER------------------------------------------------>
</header>
<section class="section-skills">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Just my</h3>
                <h4 class="bg-danger">Awesome Skills</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quam magna, mattis id pretium eget, pharetra et ipsum. In lacus velit, euismod sed bibendum in, iaculis ut turpis. Nam volutpat pretium imperdiet. Ut nec metus odio. Curabitur elementum nec nibh viverra aliquam.
                </p>
                <div class="button-group">
                    <button class="btn btn-danger">Read more</button>
                </div>

            </div>
            <!---------------------------END COL-MD-5 -------------------------------->
            <div class="col-md-7">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/photoshop-logo.png" alt="photoshop">
                            <a href="#"><h5>Graphic &amp; Web Design.</h5></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse leo nibh, egestas in lorem non, placerat.
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/back-end.png" alt="html-logo">
                            <a href="#" ><h5>Front-end.</h5></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse leo nibh, egestas in lorem non, placerat.
                            </p>
                        </div>
                    </div><!-----------END ROW-------------->
                </div><!-------------------END CONTAINER-------------------->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/php-logo.png" alt="php-logo">
                            <a href="#" ><h5>Back-end</h5></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse leo nibh, egestas in lorem non, placerat.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/debian-logo.png" alt="debian-logo">
                            <a href="#"> <h5>Operating Systems</h5></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse leo nibh, egestas in lorem non, placerat.
                            </p>
                        </div>
                    </div>
                </div><!-------------------END CONTAINER-------------------->

            </div>
            <!-----------------------------END COL-MD-7---------------------------------->
        </div>
        <!------------------------------END ROW---------------------------------------------->
    </div>
    <!------------------------------------------------END CONTAINER----------------------------------->
</section>
<!---------------------------------------------------END SECTION SKILLS------------------------------------------------->
<section class="section-gallery text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h3>Gallery</h3>
                <h4 class="section_title">My Recent Works</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur iaculis enim arcu, eget condimentum nisi faucibus vitae. Vivamus faucibus vehicula.
                </p>
            </div><!----------END col-md-8------------------------>
            <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active rounded-pill" id="webdesign-tab" data-toggle="tab" href="#webdesign" role="tab" aria-controls="webdesign" aria-selected="true">Webdesign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="frontend-tab" data-toggle="tab" href="#frontend" role="tab" aria-controls="frontend" aria-selected="false">Front-end</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="backend-tab" data-toggle="tab" href="#backend" role="tab" aria-controls="backend" aria-selected="false">Backend</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdesign" role="tabpanel" aria-labelledby="webdesign-tab">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(1).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(1)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(2).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(2)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(3).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(3)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(4).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(4)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(5).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(5)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(6).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(6)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(7).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(7)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(8).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(8)-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/cats/cat-1%20(9).jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/cats/cat-1%20(9)-s.jpg"></a>
                            </div>

                        </div>
                        <!--------------------END GALLERY-------------------->
                    </div><!---END TAB-PANE--->
                    <div class="tab-pane fade" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-1.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-1-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-2.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-2-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-3.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-3-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-4.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-4-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-5.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-5-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-6.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-6-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-7.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-7-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-8.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-8-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/girls/girl-9.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/girls/girl-9-s.jpg"></a>
                            </div>
                        </div>
                        <!--------------------END GALLERY-------------------->
                    </div>
                    <!---END TAB-PANE--->
                    <div class="tab-pane fade" id="backend" role="tabpanel" aria-labelledby="backend-tab">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-1.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-1-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-2.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-2-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-3.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-3-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-4.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-4-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-5.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-5-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-6.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-6-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-7.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-7-s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-8.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-8-1.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/auto/car-9.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/auto/car-9-1.jpg"></a>
                            </div>

                        </div><!-------------------END GALLERY-------------------------->
                    </div> <!-----------------------END TAB-PANE------------------------------>
                </div><!-------------END TAB-CONTENT--------------------------->
            </div><!-----------------------------------------------END col-md-12------------------->
        </div><!----------------END ROW-------------------------->
    </div>
</section>
<!---------------------------------------------------END SECTION GALLERY------------------------------------------------->
<section class="section-blog">
    <div class="container">
        <h3 class="text-center">Latest news</h3>
        <h4 class="section_title">Latest blog posts</h4>
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <article class="article-preview">
                    <header class="article-header">
                        <h5><a href="single.html">Lorem ipsum dolor sit amet</a> </h5>
                        <p><span class="article-date"><i class="far fa-calendar-alt"></i>01.01.2000</span> </p>
                    </header>
                    <div class="aricle-body">
                        <a href="single.html"><img src="/https://picsum.photos/id/1/300/180" class="thumb"></a>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis, neque a iaculis volutpat, lectus enim posuere sem, eu pretium nunc lectus sit amet ante. Phasellus sit amet nunc orci. Vivamus et tincidunt massa, accumsan tempor elit. Suspendisse porttitor placerat diam, quis euismod lorem mollis sed. Aliquam sed eros egestas lacus interdum mollis vitae at justo.
                        </p>
                    </div>
                    <footer class="article-footer">
                        <address>Autor:<a href="#"> John Smith</a> </address>
                        <p>
                            <a href="single.html" class="more">Read more</a>
                        </p>
                    </footer>
                </article>
            </div>
            <div class="col-md-4 col-sm-12">
                <article class="article-preview">
                    <header class="article-header">
                        <h5><a href="single.html">Lorem ipsum dolor sit amet</a> </h5>
                        <p><span class="article-date"><i class="far fa-calendar-alt"></i>01.01.2000</span> </p>
                    </header>
                    <div class="aricle-body">
                        <a href="single.html"><img src="/https://picsum.photos/id/1/300/180" class="thumb"></a>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis, neque a iaculis volutpat, lectus enim posuere sem, eu pretium nunc lectus sit amet ante. Phasellus sit amet nunc orci. Vivamus et tincidunt massa, accumsan tempor elit. Suspendisse porttitor placerat diam, quis euismod lorem mollis sed. Aliquam sed eros egestas lacus interdum mollis vitae at justo.
                        </p>
                    </div>
                    <footer class="article-footer">
                        <address>Autor: <a href="#"> John Smith</a> </address>
                        <p>
                            <a href="single.html" class="more">Read more</a>
                        </p>
                    </footer>
                </article>
            </div>
            <div class="col-md-4 col-sm-12">
                <article class="article-preview">
                    <header class="article-header">
                        <h5><a href="single.html">Lorem ipsum dolor sit amet</a> </h5>
                        <p><span class="article-date"><i class="far fa-calendar-alt"></i>01.01.2000</span> </p>

                    </header>
                    <div class="aricle-body">
                        <a href="single.html"><img src="https://picsum.photos/id/1/300/180" class="thumb"></a>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis, neque a iaculis volutpat, lectus enim posuere sem, eu pretium nunc lectus sit amet ante. Phasellus sit amet nunc orci. Vivamus et tincidunt massa, accumsan tempor elit. Suspendisse porttitor placerat diam, quis euismod lorem mollis sed. Aliquam sed eros egestas lacus interdum mollis vitae at justo.
                        </p>
                    </div>
                    <footer class="article-footer">
                        <address>Autor:<a href="#"> John Smith</a> </address>
                        <p>
                            <a href="single.html" class="more">Read more</a>
                        </p>
                    </footer>
                </article>
            </div>
        </div><!-----------------------END ROW------------------------------------>
    </div><!-----------------------------END CONTAINER----------------------------------->
</section><!----------------------------END SECTION BLOG----------------------------------------->
<section class="section-reviews">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h3>My Happy Clients</h3>
                <h4 class="section_title">Testimonials</h4>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="review">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel massa et mi euismod cursus et vel orci. Nunc id commodo augue. Donec sed est sit amet eros mattis molestie. Sed ultricies eget metus ac finibus. Quisque eget efficitur mi. Fusce consectetur, metus a.
                                </blockquote>
                                <img class="rounded-circle" src="img/client-1.jpg" alt="John Doe">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <address class="client-address-1"><span class="client-name">John Doe</span><br> <span class="client-position">Art-director</span></address>

                            </div><!-----END REVIEW-1----->
                        </div>
                        <div class="carousel-item">
                            <div class="review">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sollicitudin dui. Cras sodales, metus eu fermentum aliquam, tortor tortor molestie ipsum, id aliquet enim lacus eget tortor. Vestibulum finibus fringilla mi sed condimentum. Aenean eu auctor sem. Nullam eu nunc sem. Duis eu.
                                </blockquote>
                                <img class="rounded-circle" src="img/client-2.jpg" alt="Trump">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <address class="client-address-1"><span class="client-name"> Domald Trump</span><br> <span class="client-position">President of The United States Of America</span></address>

                            </div><!-----END REVIEW-2----->
                        </div>
                        <div class="carousel-item">
                            <div class="review">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut facilisis diam vel nunc lacinia, sed posuere tellus bibendum. In vestibulum quam nec neque varius sagittis. Pellentesque vitae pretium augue, eget blandit quam. In hendrerit turpis at sem euismod maximus. Vivamus facilisis neque eu lectus.
                                </blockquote>
                                <img class="rounded-circle" src="img/client-3.jpg" alt="Norris">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <address class="client-address-1"><span class="client-name"> Tracy R. Norris</span><br> <span class="client-position">Major General</span></address>

                            </div><!-----END REVIEW-3----->
                        </div>
                        <div class="carousel-item">
                            <div class="review">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis malesuada sapien. Vivamus non lectus vel mi ullamcorper faucibus quis ut augue. Sed bibendum magna est, sit amet rutrum turpis rutrum tristique. Vestibulum id tellus sed lectus iaculis tincidunt vitae a odio. Nam ipsum.</blockquote>
                                <img class="rounded-circle" src="img/client-4.jpg" alt="Lee">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <address class="client-address-1"><span class="client-name"> Robert Edward Lee</span><br> <span class="client-position">CSA General</span></address>

                            </div><!-----END REVIEW-4----->
                        </div>
                        <div class="carousel-item">
                            <div class="review">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget lectus aliquam ex ultrices sollicitudin et eu mauris. Morbi auctor ex et lacinia porta. Integer cursus nunc in lacus congue volutpat. Sed rutrum non elit ac bibendum. Mauris vitae lectus dictum, convallis tortor cursus.
                                </blockquote>
                                <img class="rounded-circle" src="img/client-5.jpg" alt="O'Nil">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <address class="client-address-1"><span class="client-name">Gladis O'Nil</span><br> <span class="client-position">Beauty Blogger</span></address>

                            </div><!-----END REVIEW-5----->
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div><!------------------------------END COL-MD-8----------------------------------->
        </div><!--------------------END ROW------------------------------->
    </div><!-------------------------END CONTAINER-------------------------------------------->

</section><!--------------------------------END SECTION REVIEWS------------------------------------>
<section class="section-brands text-center">
    <div class="container">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <h4 class="section_title">My Clients</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non.
        </p>
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/adidas.png" alt="adidas"> </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/redbull.png" alt="redbull"></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/boss.png" alt="boss"></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/cocacola.png" alt="cocacola"></a>
                        </div>
                    </div><!-------------------------END INNER ROW------------------->
                </div><!---END CONTAINER--->
                <div class="row">
                    <div class="col-md-3">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/adobe-logo.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/philipmorris.png"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/brand.png"> </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="<?php bloginfo('template_url') ?>/assets/img/kalashnikov-logo.png"></a>
                    </div>
                </div><!-------------------------END INNER ROW------------------->
                <div class="container"><!---END CONTAINER--->
                </div>
            </div>
        </div>
    </div>
</section><!-------------------------------END SECTION-BRAND--------------------------------------->
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Are you interested in cooperation?</h3>
                <h4 class="section_title">Send me a Message.</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut egestas nulla. Integer ut dui nec lorem rutrum scelerisque. Nulla placerat eros eget augue condimentum bibendum et id orci. Etiam vel nunc pretium, bibendum velit ac, suscipit lacus. Nunc ut suscipit ex. Aliquam finibus diam non lacus rutrum, id pretium lacus consectetur. In eget pretium sem. Fusce non ornare magna, sit amet interdum nisl. Quisque facilisis semper lacinia. Suspendisse sed elit neque. Mauris scelerisque nisi est, non tempor nunc tincidunt quis.
                </p>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">

                            <input type="text" required placeholder="Name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-4">

                            <input type="email" required placeholder="Email" class="form-control" id="email">
                            <small id="emailHelp" class="form-text ">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group col-md-4">

                            <input type="tel" placeholder="Phone" class="form-control tel" id="phone">


                        </div>

                    </div><!----------End form-row--------------->
                    <div class="form-row">
                        <div class="form-group col-md-10">

                            <textarea required placeholder="Message" class="form-control" id="message">

                            </textarea>
                        </div>
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-submit">Sign in</button>
                        </div>
                    </div><!----------End form-row--------------->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" required id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I agree to the processing of personal data
                        </label>
                    </div>

                </form>
                <!--------------------------End MY Form---------------------------->


            </div><!----------------END COL-MD-12-------------------------------->
        </div><!--------------------------END ROW---------------------------------->
    </div><!-------------------------END CONTAINER--------------------------------->

</section><!-----------------------------------END SECTION FORM----------------------------------------->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h3>php <span>knight</span>&trade;</h3>
                <h4 class="section_title">Web Developer Blog</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt ante arcu, nec consectetur mi iaculis in. Maecenas rhoncus mi vel mauris tempus egestas. Vestibulum.
                </p>
                <div class="footer-logo">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/knight_2.png" alt="phpknight_logo">
                </div>
                <div class="social-links">
                    <h5>Follow me in Social networks</h5>
                    <ul class="social-list">
                        <li><a href="#"><img class="social-icon" src="img/social/facebook-icon.png" alt="facebook"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/twitter-icon.png" alt="twitter"> </a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/linkedin-icon.png" alt="linkedin"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/vk-icon.png" alt="vkontakte"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/github-icon.png" alt="github"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/instagram-icon.png" alt="instagram"></a></li>
                        <li><a href="#"><img class="social-icon" src="img/social/telegram-icon.png" alt="telegram"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/whatsapp-icon.png" alt="whatsapp"></a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/parler_icon.png" alt="parler"> </a> </li>
                        <li><a href="#"><img class="social-icon" src="img/social/meve-icon.png" alt="mewe"></a> </li>
                    </ul>
                </div>
                <div class="contact-data">

                    <p>Address: 634050 PO-box #### Tomsk, Russia</p>
                    <p>Email: <a href="mailto:mark_evillive@hotmail.com"> mark_evillive@hotmail.com</a></p>
                    <p>Phone: +7 960-972-26-46</p>
                </div>
                <div class="publishers-imprint">
                    <small>&copy; Marc Shreder, 2020, All right reserved. PHP <span>Knight</span> &trade; and PHP <span>Knight</span> &trade; Logo is registered trade marks.</small>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>