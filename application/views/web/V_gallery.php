
<div class="fh5co-page-title" style="background-image: url('<?php echo base_url('images/logo/slide_6.jpg'); ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <!--                <h1><span class="colored">All</span> Properties</h1>-->
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
</div>

<style>
    .gal-container{
        padding: 12px;
    }
    .gal-item{
        overflow: hidden;
        padding: 3px;
    }
    .gal-item .box{
        height: 350px;
        overflow: hidden;
    }
    .box img{
        height: 100%;
        width: 100%;
        object-fit:cover;
        -o-object-fit:cover;
    }
    .gal-item a:focus{
        outline: none;
    }
    .gal-item a:after{
        content:"\e003";
        font-family: 'Glyphicons Halflings';
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.75);
        position: absolute;
        right: 3px;
        left: 3px;
        top: 3px;
        bottom: 3px;
        text-align: center;
        line-height: 350px;
        font-size: 30px;
        color: #fff;
        -webkit-transition: all 0.5s ease-in-out 0s;
        -moz-transition: all 0.5s ease-in-out 0s;
        transition: all 0.5s ease-in-out 0s;
    }
    .gal-item a:hover:after{
        opacity: 1;
    }
    .modal-open .gal-container .modal{
        background-color: rgba(0,0,0,0.4);
    }
    .modal-open .gal-item .modal-body{
        padding: 0px;
    }
    .modal-open .gal-item button.close{
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #000;
        opacity: 1;
        color: #fff;
        z-index: 999;
        right: -12px;
        top: -12px;
        border-radius: 50%;
        font-size: 15px;
        border: 2px solid #fff;
        line-height: 25px;
        -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
        box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
    }
    .modal-open .gal-item button.close:focus{
        outline: none;
    }
    .modal-open .gal-item button.close span{
        position: relative;
        top: -3px;
        font-weight: lighter;
        text-shadow:none;
    }
    .gal-container .modal-dialogue{
        width: 80%;
    }
    .gal-container .description{
        position: relative;
        height: 40px;
        top: -40px;
        padding: 10px 25px;
        background-color: rgba(0,0,0,0.5);
        color: #fff;
        text-align: left;
    }
    .gal-container .description h4{
        margin:0px;
        font-size: 15px;
        font-weight: 300;
        line-height: 20px;
    }
    .gal-container .modal.fade .modal-dialog {
        -webkit-transform: scale(0.1);
        -moz-transform: scale(0.1);
        -ms-transform: scale(0.1);
        transform: scale(0.1);
        top: 100px;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .gal-container .modal.fade.in .modal-dialog {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transform: translate3d(0, -100px, 0);
        transform: translate3d(0, -100px, 0);
        opacity: 1;
    }
    @media (min-width: 768px) {
        .gal-container .modal-dialog {
            width: 55%;
            margin: 50 auto;
        }
    }
    @media (max-width: 768px) {
        .gal-container .modal-content{
            height:250px;
        }
    }
    /* Footer Style */
    i.red{
        color:#BC0213;
    }
    .gal-container{
        padding-top :75px;
        padding-bottom:75px;
    }
    footer{
        font-family: 'Quicksand', sans-serif;
    }
    footer a,footer a:hover{
        color: #88C425;
    }
</style>

<section>
    <div class="container gal-container">
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#1">
                    <img src="https://www.aussiespecialist.com/content/asp/en_gb/sales-resources/image-and-video-galleries/jcr:content/mainParsys/hero/image.adapt.1663.medium.jpg">
                </a>
                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://www.aussiespecialist.com/content/asp/en_gb/sales-resources/image-and-video-galleries/jcr:content/mainParsys/hero/image.adapt.1663.medium.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the first one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#2">
                    <img src="https://cdn.athemes.com/wp-content/uploads/Original-JPG-Image.jpg">
                </a>
                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://cdn.athemes.com/wp-content/uploads/Original-JPG-Image.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the second one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#3">
                    <img src="https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider1.jpg">
                </a>
                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider1.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the third one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#4">
                    <img src="http://www.gettyimages.in/gi-resources/images/Homepage/Hero/US/MAR2016/prestige-587705839_full.jpg">
                </a>
                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://www.gettyimages.in/gi-resources/images/Homepage/Hero/US/MAR2016/prestige-587705839_full.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the fourth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#5">
                    <img src="https://www.colbybrownphotography.com/wp-content/uploads/2017/07/Iceland_Photography_Workshop_Tour.jpg">
                </a>
                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://www.colbybrownphotography.com/wp-content/uploads/2017/07/Iceland_Photography_Workshop_Tour.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the fifth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#6">
                    <img src="https://www.w3schools.com/css/img_mountains.jpg">
                </a>
                <div class="modal fade" id="6" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://www.w3schools.com/css/img_mountains.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the sixth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#7">
                    <img src="https://justifiedgrid.com/wp-content/uploads/life/biking/137646854.jpg">
                </a>
                <div class="modal fade" id="7" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://justifiedgrid.com/wp-content/uploads/life/biking/137646854.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the seventh one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#8">
                    <img src="https://www.w3schools.com/css/paris.jpg">
                </a>
                <div class="modal fade" id="8" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="https://www.w3schools.com/css/paris.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the eighth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#9">
                    <img src="http://www.dailydetroit.com/wp-content/uploads/2017/04/detroit-skyline-daily-detroit-licensed.jpg">
                </a>
                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://www.dailydetroit.com/wp-content/uploads/2017/04/detroit-skyline-daily-detroit-licensed.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the ninth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#10">
                    <img src="http://urbantoronto.ca/sites/default/files/imagecache/display-slideshow/images/articles/2013/12/9305/urbantoronto-9305-32248.jpg">
                </a>
                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://urbantoronto.ca/sites/default/files/imagecache/display-slideshow/images/articles/2013/12/9305/urbantoronto-9305-32248.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the tenth one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#11">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/11.jpg">
                </a>
                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/11.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the leventh one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#12">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/12.jpg">
                </a>
                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/12.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the 12th one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#13">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/13.jpg">
                </a>
                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/13.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the 13th one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#14">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/14.jpg">
                </a>
                <div class="modal fade" id="14" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/14.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the 14th one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#15">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/15.jpg">
                </a>
                <div class="modal fade" id="15" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/15.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the 15th one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="box">
                <a href="#" data-toggle="modal" data-target="#16">
                    <img src="http://nabeel.co.in/files/bootsnipp/gallery/16.jpg">
                </a>
                <div class="modal fade" id="16" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <img src="http://nabeel.co.in/files/bootsnipp/gallery/16.jpg">
                            </div>
                            <div class="col-md-12 description">
                                <h4>This is the 16th one on my Gallery</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">

            <h6>Coded with <i class="fa fa-heart red"></i> by <a href="http://www.nabeel.co.in" target="_blank">Nabeel Kondotty</a></h6>
        </div>
    </div>
</footer>