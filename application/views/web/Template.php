
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ERKA Interindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/web/'); ?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/web/'); ?>css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/web/'); ?>css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/web/'); ?>css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/web/'); ?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/'); ?>css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/template/web/'); ?>js/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/jquery.flexslider-min.js"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url('assets/template/web/'); ?>js/main.js"></script>

</head>
<body>

<style>
    :root{
        /*cca630*/
        --primary-color: #bb9e41;
        --accent-color: #FF4081;
    }
    #fh5co-header nav ul li a,#fh5co-offcanvas ul li a {
        /*color: #bb9e41;*/
        color: var(--primary-color);
    }
    #fh5co-header nav ul li.cta a,#fh5co-offcanvas ul li.cta a {
        border: 2px solid var(--primary-color);
    }

    .fh5co-nav-toggle i,.fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
        background: var(--primary-color);
    }

    #fh5co-header nav ul li.cta a:hover,#fh5co-offcanvas ul li.cta a:hover {
        background : none;
        color: #ffffff;
        border: 2px solid #ffffff;
    }


    #fh5co-header {
        position:fixed;
        background:#000;
        z-index:1002;
        border-bottom: 3px solid var(--primary-color);
        border-top: 3px solid var(--primary-color);
    }

    #fh5co-header .header-inner {
        height: 65px;
    }

    #fh5co-header h1, #fh5co-header nav {
        margin: 30px 0 0 0;
    }

    #modalGlobal .modal-content {
        background-color : #1d1d1d;
        border: 3px solid var(--primary-color);
        border-radius: 15px;
    }
</style>

<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1 style="margin:7px 0 0 0;"><a href="<?php echo base_url(); ?>">
<!--                            <img src="--><?php //echo base_url('images/logo/logo.png'); ?><!--" alt="">-->
<!--                            <img src="--><?php //echo base_url('images/logo/ERKA-INTERINDO.jpg'); ?><!--" style="max-width: 125px;" alt="">-->
                            <img src="<?php echo base_url('images/logo/logo.png'); ?>" style="max-width: 125px;" alt="">
                        </a></h1>
                    <nav role="navigation">
                        <ul>
                            <li class="<?php if($this->uri->segment(1)=='about-us'){echo 'active';} ?>">
                                <a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                            <li class="<?php if($this->uri->segment(1)=='services'){echo 'active';} ?>">
                                <a href="<?php echo base_url('services'); ?>">Services</a></li>
                            <li class="<?php if($this->uri->segment(1)=='projects'){echo 'active';} ?>">
                                <a href="<?php echo base_url('projects'); ?>">Projects</a></li>
                            <li class="<?php if($this->uri->segment(1)=='teams'){echo 'active';} ?>">
                                <a href="<?php echo base_url('teams'); ?>">Teams</a></li>
                            <li class="<?php if($this->uri->segment(1)=='clients'){echo 'active';} ?>">
                                <a href="<?php echo base_url('clients'); ?>">Clients</a></li>
                            <li class="<?php if($this->uri->segment(1)=='gallery'){echo 'active';} ?>">
                                <a href="<?php echo base_url('gallery'); ?>">Gallery</a></li>
                            <li class="call"><a href="tel://123456789"><i class="icon-phone"></i> +1 123 456 789</a></li>
                            <li class="cta"><a href="javascript:void(0)" id="btnContact">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <?php echo $content; ?>



<!--    <footer id="fh5co-footer" role="contentinfo">-->
<!---->
<!--        <div class="container">-->
<!--            <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">-->
<!--                <h3>About Us</h3>-->
<!--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>-->
<!--                <p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">I'm button <i class="icon-arrow-right"></i></a></p>-->
<!--            </div>-->
<!--            <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">-->
<!--                <h3>Our Services</h3>-->
<!--                <ul class="float">-->
<!--                    <li><a href="#">Web Design</a></li>-->
<!--                    <li><a href="#">Branding &amp; Identity</a></li>-->
<!--                    <li><a href="#">Free HTML5</a></li>-->
<!--                    <li><a href="#">HandCrafted Templates</a></li>-->
<!--                </ul>-->
<!--                <ul class="float">-->
<!--                    <li><a href="#">Free Bootstrap Template</a></li>-->
<!--                    <li><a href="#">Free HTML5 Template</a></li>-->
<!--                    <li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>-->
<!--                    <li><a href="#">HandCrafted Templates</a></li>-->
<!--                </ul>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">-->
<!--                <h3>Follow Us</h3>-->
<!--                <ul class="fh5co-social">-->
<!--                    <li><a href="#"><i class="icon-twitter"></i></a></li>-->
<!--                    <li><a href="#"><i class="icon-facebook"></i></a></li>-->
<!--                    <li><a href="#"><i class="icon-google-plus"></i></a></li>-->
<!--                    <li><a href="#"><i class="icon-instagram"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!---->
<!---->
<!--            <div class="col-md-12 fh5co-copyright text-center">-->
<!--                <p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </footer>-->
</div>



<!-- Modal -->
<div class="modal fade" id="modalGlobal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#btnContact').click(function () {

        $('#modalGlobal .modal-header').addClass('hide');
        $('#modalGlobal .modal-footer').addClass('hide');

        $('#modalGlobal .modal-body').html('<div style="text-align:center;"><h2 style="color: #fff;">Contact Info</h2></div>');

        $('#modalGlobal').modal({
            'show' : true,
            // 'backdrop' : 'static'
        });
    });
</script>

</body>
</html>
