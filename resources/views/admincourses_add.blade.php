<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Add Course | Heart/NSTA Trust</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/heart-shortcut-icon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/owl.carousel.css">
    <link rel="stylesheet" href="css-5/owl.theme.css">
    <link rel="stylesheet" href="css-5/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/main.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/dropzone/dropzone.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css-5/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css-5/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js-5/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Start Left menu area -->
        @include('adminsidemenu')
    <!-- End Left menu area -->

<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {{-- ------------image to push down page content------------------}}
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        {{-- --------------admin navabr--------------------}}
            @include('adminnavbar')
        {{-- ------X--------admin navabr----------X----------}}

        <!-- Mobile Menu start -->
            @include('adminmobilemenu')
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Add Courses</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Courses Details</a></li>
                            <li><a href="#reviews"> Acount Information</a></li>
                            <li><a href="#INFORMATION">Social Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <form action="/upload" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="coursename" type="text" class="form-control" placeholder="Course Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="finish" id="finish" type="text" class="form-control" placeholder="Course Start Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="duration" type="text" class="form-control" placeholder="Course Duration">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="price" type="number" class="form-control" placeholder="Course Price">
                                                            </div>
                                                            <div class="form-group alert-up-pd">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                    <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                    <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                    </p>
                                                                    <input name="imageico" class="hd-pro-img" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group res-mg-t-15">
                                                                <input name="department" type="text" class="form-control" placeholder="Department">
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea name="description" placeholder="Description"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="crprofessor" type="text" class="form-control" placeholder="Professor">
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="year" name="year" type="text" class="form-control" placeholder="Year">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Confirm Password">
                                                        </div>
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Facebook URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Twitter URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Google Plus">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="url" class="form-control" placeholder="Linkedin URL">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    ----------------footer---------------------}}
         @include('adminfooter')
    {{--    -------X---------footer--------X-------------}}
</div>

<!-- jquery
    ============================================ -->
<script src="js-5/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js-5/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js-5/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js-5/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js-5/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js-5/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="js-5/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js-5/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js-5/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js-5/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="js-5/metisMenu/metisMenu.min.js"></script>
<script src="js-5/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="js-5/sparkline/jquery.sparkline.min.js"></script>
<script src="js-5/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="js-5/calendar/moment.min.js"></script>
<script src="js-5/calendar/fullcalendar.min.js"></script>
<script src="js-5/calendar/fullcalendar-active.js"></script>
<!-- maskedinput JS
    ============================================ -->
<script src="js-5/jquery.maskedinput.min.js"></script>
<script src="js-5/masking-active.js"></script>
<!-- datepicker JS
    ============================================ -->
<script src="js-5/datepicker/jquery-ui.min.js"></script>
<script src="js-5/datepicker/datepicker-active.js"></script>
<!-- form validate JS
    ============================================ -->
<script src="js-5/form-validation/jquery.form.min.js"></script>
<script src="js-5/form-validation/jquery.validate.min.js"></script>
<script src="js-5/form-validation/form-active.js"></script>
<!-- dropzone JS
    ============================================ -->
<script src="js-5/dropzone/dropzone.js"></script>
<!-- tab JS
    ============================================ -->
<script src="js-5/tab.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js-5/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js-5/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
{{-- <script src="js-5/tawk-chat.js"></script> --}}
</body>

</html>
