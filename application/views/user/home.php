<?php //echo $header;                 ?>
<!--<div id="myCarousel" class="carousel slide">
     Indicators 
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo base_url(); ?>include_files/user/img/banner1.jpg" alt="advertize">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>include_files/user/img/banner2.jpg" alt="advertize">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo base_url(); ?>include_files/user/img/banner1.jpg" alt="advertize">
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <form class="form-inline col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" id="searchForm" action="<?php echo base_url(); ?>auth/businesses" method="post">
        <h1 class="hidden-xs">Search for anything, anywhere in India</h1>
        <div class="search row">
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <input type="text" class="form-control" id="search_key" name="search_key" placeholder="Enter Keyword">
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <select class="form-control selectpicker" name="city" id="city"  data-live-search="true">
                    <option value="">Enter City</option>
<?php foreach ($cities as $city) { ?>
                                                                                        <option value="<?php echo $city->id; ?>"><?php echo $city->name; ?></option>
<?php } ?>
                </select>
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <select class="form-control selectpicker" name="category" id="category" data-live-search="true">
                    <option value="">Select Category</option>
<?php foreach ($categories as $category) { ?>
                                                                                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
<?php } ?>
                </select>
            </div>
            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                <button type="submit" class="btn btn-primary btn-block" name="business_search" id="business_search">Search</button>
            </div>
        </div>
    </form>
</div>
 /.carousel 
<div class="container">
    <center>
        <h2>What are you interested in? </h2>
        <p>Explore some of the best tips from around the city from our partners and friends. </p>
    </center>
    <div class="row">
        <div class="col-md-9 col-sm-7 col-xs-12">
            <div class="row">
<?php
foreach ($categories as $key => $category) {
    if ($key < 11) {
        ?>
                                                                                                                                                        <a href="#" onclick="return theFunction('<?php echo $category->id; ?>');">
                                                                                                                                                            <div class="col-md-2 col-sm-2 col-xs-6 service">
                                                                                                                                                                <img src="<?php echo base_url(); ?>include_files/categories/<?php echo $category->image; ?>" alt="categories"/>
                                                                                                                                                                <h3><?php echo $category->name; ?></h3>
                                                                                                                                                            </div>
                                                                                                                                                        </a>
                                                                                                                                                        <form method="post" id="<?php echo $category->id; ?>" action="<?php echo base_url(); ?>auth/businesses">
                                                                                                                                                            <input type="hidden" name="category_id_row" id="category_id_row" value="<?php echo $category->id; ?>">                           
                                                                                                                                                        </form>
        <?php
    }
}
?>
                <div class="col-md-2 col-sm-2 col-xs-6 service">
                    <a onclick="show_more_categories();">
                        <img src="<?php echo base_url(); ?>include_files/user/img/service/more.png" alt="more service"/>
                        <h3>View More</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <img src="<?php echo base_url(); ?>include_files/user/img/adbanner1.png" alt="ad"/>
        </div>
    </div>
    <div class="row" id="more_categoruies">
        <div class="col-md-9 col-sm-7 col-xs-12">
            <div class="row">
<?php
foreach ($categories as $key => $category) {
    if ($key >= 11) {
        ?>
                                                                                                                                                        <a href="#" onclick="return theFunction('<?php echo $category->id; ?>');">
                                                                                                                                                            <div class="col-md-2 col-sm-2 col-xs-6 service">
                                                                                                                                                                <img src="<?php echo base_url(); ?>include_files/categories/<?php echo $category->image; ?>" alt="categories"/>
                                                                                                                                                                <h3><?php echo $category->name; ?></h3>
                                                                                                                                                            </div>
                                                                                                                                                        </a>
                                                                                                                                                        <form method="post" id="<?php echo $category->id; ?>" action="<?php echo base_url(); ?>auth/businesses">
                                                                                                                                                            <input type="hidden" name="category_id_row" id="category_id_row" value="<?php echo $category->id; ?>">                           
                                                                                                                                                        </form>
        <?php
    }
}
?>
            </div>
        </div>
    </div>
</div>

<?php //echo $footer; ?>


<script src="<?php echo base_url(); ?>include_files/user/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/js/review.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>include_files/user/js/lightbox.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/plugin/imageupload/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>include_files/user/plugin/imageupload/js/fileinput.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>include_files/user/plugin/imageupload/themes/explorer/theme.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>include_files/user/plugin/select2/select2.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>include_files/user/plugin/taginput/js/bootstrap-tagsinput.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/js/classie.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/js/zeroGravity.js"></script>
<script src="<?php echo base_url(); ?>include_files/user/js/bootstrap-select.min.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUtuwvvgzEjpbGtnBpi-94V9auHIa_n1M&callback=initMap">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#more_categoruies').hide();
        $('#myCarousel').carousel({
            interval: 4000
        });
        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function () {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function (e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
    function show_more_categories() {        
        $('#more_categoruies').show();
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
        );
    });
</script>
<script>
    function theFunction(form_id) {
        $('form#' + form_id).submit();
    }
</script>
</body>
</html>
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="user-scalable = yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Listing - Directory Listing HTML Template">
        <meta name="keywords" content="Listing,HTML,CSS,Directory,blog,business,corporate,clean,responsive">
        <meta name="author" content="Muqadass Aleem, Muammad Asif">
        <title>Realgujarat Business</title>
        <!--================================FAVICON================================-->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>include_files/classified/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>include_files/classified/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>include_files/classified/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>include_files/classified/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>include_files/classified/images/favicon/favicon-16x16.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>include_files/classified/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(); ?>include_files/classified/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="<?php echo base_url(); ?>include_files/classified/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>include_files/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!--================================BOOTSTRAP STYLE SHEETS================================-->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/bootstrap/css/bootstrap.min.css">

        <!--================================ Main STYLE SHEETs====================================-->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/css/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/css/color/color.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/assets/testimonial/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/assets/testimonial/css/elastislide.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/css/responsive.css">

        <!--================================FONTAWESOME==========================================-->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/css/font-awesome.css">

        <!--================================GOOGLE FONTS=========================================-->

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

        <!--================================SLIDER REVOLUTION =========================================-->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/classified/assets/revolution_slider/css/revslider.css" media="screen" />

    </head>
    <body>
        <div class="preloader"><span class="preloader-gif"></span></div>
        <div class="theme-wrap clearfix">
            <!--================================responsive log and menu==========================================-->
            <div class="wsmenucontent overlapblackbg"></div>
            <div class="wsmenuexpandermain slideRight">
                <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
                <a href="#" class="smallogo"><img src="<?php echo base_url(); ?>include_files/classified/images/logo.png" width="120" alt="" /></a>
            </div>
            <!--================================HEADER==========================================-->
            <div class="header">
                <div class="header-inner">
                    <div class="nav-wrapper"><!--main navigation-->
                        <div class="container">
                            <div class="top-toolbar"><!--header toolbar-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                                            <div class="top-contact-info">
                                                <ul>
                                                    <li class="toolbar-email"><i class="fa fa-envelope-o"></i> support@realgujarat.com</li>
                                                    <li class="toolbar-contact"><i class="fa fa-phone"></i> +91.84017.91999</li>
                                                </ul>
                                            </div>
                                            <div class="social-content">
                                                <ul class="social-links">
                                                    <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                                    <!--<li><button class = "login" data-toggle = "modal" data-target = "#login">login</button></li>
                                                    <li><button class = "register" data-toggle = "modal" data-target = "#register">register</button></li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div><!--header toolbar end-->
                            <!--Main Menu HTML Code-->
                            <nav class="wsmenu slideLeft clearfix">
                                <div class="logo pull-left"><a href="<?php echo base_url(); ?>" title="Responsive Slide Menus"><img  height="40px" width="210px" src="<?php echo base_url(); ?>include_files/classified/images/logo.png" alt="" /></a></div>
                                <ul class="mobile-sub wsmenu-list pull-right">
                                    <li><a href="index.html" class="">Home</a>
                                        <ul class="wsmenu-submenu">
                                            <li><a href="index.html">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing.html" class="">Pricing</a></li>
                                    <li><a href="category.html">categories</a></li>
                                    <li><a href="listing-archive.html">listings</a></li>
                                    <li><a href="#">pages</a>
                                        <ul class="wsmenu-submenu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Single</a></li>
                                            <li><a href="single-listing.html">listing Single</a></li>
                                            <li><a href="404.html">Error 404</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a class="toolbar-new-listing" href="<?php echo base_url(); ?>free_listing"> Add Listing</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div><!--main navigation end-->
                </div>
            </div><!-- header end -->

            <section class="static-section">
                <div class="container">
                    <div class="static-header-content">
                        <div class="static-header-text">
                            <h1 class="white">BUSIN<span>ESS</span></h1>
                            <h3 class="white margin-bottom-30">GET BEST SERVICES ACROSS GUJARAT</h3>
                        </div>
                        <div class="search-form-wrap2">
                            <form class="clearfix" action="<?php echo base_url(); ?>auth/businesses" method="post">
                                <div class="input-field-wrap pull-left">
                                    <input class="search-form-input" id="search_key" name="search_key" placeholder="enter keyword" type="text"/>
                                </div>
                                <div class="select-field-wrap pull-left">
                                    <select class="search-form-select" name="category" id="category" >
                                        <option class="options" value="">all categories</option>                                       
                                        <?php foreach ($categories as $category) { ?>
                                            <option class="options" value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="select-field-wrap pull-left">
                                    <select class="search-form-select" name="city" id="city"  >
                                        <option class="options" value="">all Locations</option>
                                        <?php foreach ($cities as $city) { ?>
                                            <option class="options" value="<?php echo $city->id; ?>"><?php echo $city->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="submit-field-wrap pull-left">
                                    <input class="search-form-submit bgblue-1 white" name="key-word" type="submit" value="Submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>            
            <!--================================FEATURE LISTING SECTION==========================================-->
            <section class="feature-section border-top padding-bottom-100">
                <div class="container-fluid"><!-- section container -->
                    <div class="feature-wrap">
                        <ul class="feature-slider clearfix" data-items="5" data-items-tab-ls="4" data-items-tab="3" data-autoplay="true" data-loop="true" data-nav="false" data-gutter="0">
                            <?php foreach ($top_all_business as $business) { ?>
                                <form method="post" id="<?php echo $business->id; ?>" action="<?php echo base_url(); ?>auth/businessinfo">
                                    <input type="hidden" name="business_id_row" id="business_id_row" value="<?php echo $business->id; ?>">                                                                                                            
                                    <li class="item"><!-- .ITEM -->
                                        <div class="feature-item">
                                            <div class="figure">
        <!--                                        <img src="<?php echo base_url(); ?>include_files/classified/images/carousel/01.jpg" alt="feature item"/>-->
                                                <img height="300px;" width="350px;" src="<?php echo base_url(); ?>include_files/banners/<?php echo ($business->banner != "" && (file_exists(FCPATH . 'include_files/banners/' . $business->banner))) ? $business->banner : 'noimageavailable.jpg' ?>" alt="feature item"/>
                                                <div class="item-love"><a href="#"><i class="fa fa-heart-o"></i><i class="fa fa-heart "></i></a></div>
                                                <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                                <div class="feature-content clearfix">
                                                    <div class="feature-meta-cat">
                                                        <a class="bgyallow-1 c333" href="#" onclick="search_business('<?php echo $business->id; ?>')"><?php echo $business->category_name; ?></a>
                                                    </div>
                                                    <div class="feature-title">
                                                        <h6><a href="#" onclick="search_business('<?php echo $business->id; ?>')"><?php echo $business->name; ?></a></h6>
                                                    </div>
                                                    <div class="feature-location pull-left"><!-- location-->
                                                        <a href="#" onclick="search_business('<?php echo $business->id; ?>')"><i class="fa fa-map-marker"></i><?php echo $business->city_name; ?></a>
                                                    </div><!-- location end-->
                                                    <div class="star-rating pull-right"><!-- rating-->
                                                        <div class="score-callback" data-score="5"></div>
                                                    </div><!-- rating end-->
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- /.ITEM -->
                                </form>
                            <?php } ?>              
                        </ul>
                    </div>
                </div>
            </section>

            <!--================================CATEGORY SECTION ==========================================-->

            <section class="categories-section padding-bottom-70"><!-- content area column -->
                <div class="container">
                    <div class="section-title-wrap shadow-1 bgwhite padding-bottom-30 padding-top-30 margin-bottom-50"><!-- section title -->
                        <h5>Business<span>Category</span></h5>
                    </div><!-- section title end -->
                    <div class="category-section-wrap cat-style-3 cat-slider clearfix">
                        <?php
                        foreach ($categories as $key => $category) {
                            ?>
                            <form method="post" id="<?php echo 'category_search' . $category->id; ?>" action="<?php echo base_url(); ?>auth/businesses">
                                <div class="main-wrap"><!-- category column -->
                                    <div class="cat-wrap shadow-1">
                                        <div class="cat-wrap-inner">
                                            <p><i class="fa fa-home yallow-1 white"></i></p>
                                            <h5><a href="#" onclick="search_category('<?php echo $category->id; ?>');"><?php echo $category->name; ?></a></h5>
                                        </div>
                                    </div>
                                </div>                        
                                <input type="hidden" name="category_id_row" id="category_id_row" value="<?php echo $category->id; ?>">                           
                            </form>
                            <?php
                        }
                        ?>
                    </div>
                </div><!--/container-->
            </section>            
            <!--================================LISTING SECTION ==========================================-->
            <section class="listing-section padding-top-100 padding-bottom-70 bgwhite">
                <div class="container"><!-- section container -->
                    <div class="section-title-wrap margin-bottom-50"><!-- section title -->
                        <h4>recent<span>listings</span></h4>
                        <div class="title-divider">
                            <div class="line"></div>
                            <div class="box"></div>
                            <div class="line"></div>
                        </div>
                        <p>We help new customers & search engines to find your business online</p>
                    </div><!-- section title end -->
                    <div class="add-listing-wrapper">
                        <div class="listing-main gridview tab-content">
                            <div id="latest-listing" class="tab-pane active">
                                <div class="listing-wrapper row">
                                    <?php foreach ($top_business as $business) { ?>
                                        <form method="post" id="<?php echo $business->id; ?>" action="<?php echo base_url(); ?>auth/businessinfo">
                                            <input type="hidden" name="business_id_row" id="business_id_row" value="<?php echo $business->id; ?>">
                                            <div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
                                                <div class="listing-item clearfix">
                                                    <div class="figure">                                                    
                                                        <img height="300px;" width="350px;" src="<?php echo base_url(); ?>include_files/banners/<?php echo ($business->banner != "" && (file_exists(FCPATH . 'include_files/banners/' . $business->banner))) ? $business->banner : 'noimageavailable.jpg' ?>" alt="feature item"/>
                                                        <div class="item-love"><a href="#"><i class="fa fa-heart-o"></i><i class="fa fa-heart "></i></a></div>
                                                        <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                                        <div class="listing-content clearfix">
                                                            <div class="listing-meta-cat">
                                                                <a class="bgyallow-1 c333" href="#" onclick="search_business('<?php echo $business->id; ?>')"><?php echo $business->category_name; ?></a>
                                                            </div>
                                                            <div class="listing-title">
                                                                <h6><a href="#" onclick="search_business('<?php echo $business->id; ?>')"><?php echo $business->name; ?></a></h6>
                                                            </div>
                                                            <div class="listing-location pull-left"><!-- location-->
                                                                <a href="#" onclick="search_business('<?php echo $business->id; ?>')"><i class="fa fa-map-marker"></i><?php echo $business->city_name; ?></a>
                                                            </div><!-- location end-->
                                                            <div class="star-rating pull-right"><!-- rating-->
                                                                <div class="score-callback" data-score="5"></div>
                                                            </div><!-- rating end-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- section container end -->
            </section>
            <!--================================CALLOUT SECTION==========================================-->
            <section class="callout-section padding-top-100 padding-bottom-100 bgwhite">
                <div class="container"><!-- section container -->
                    <div class="callout-wrapper">
                        <div class="callout-1">
                            <div class="callout-message"><!--blog entry column-->
                                <h2 class="white">STARTing YOUR new BUSINESS</h2>
                                <h4 class="white">Get leads that will drive your business</h4>
                            </div><!--blog entry column end-->
                            <div class="callout-btns"><!--blog entry column-->
                                <a class="bgwhite c333" href="#">Read More</a>
                                <a class="bgyallow-1 c333" href="#">Purchase</a>
                            </div><!--blog entry column end-->
                        </div>
                    </div>
                </div><!-- section container end -->
            </section>
            <!--================================LOCATION SECTION==========================================-->
            <section class="location-section padding-top-100 padding-bottom-70">
                <div class="container"><!-- section container -->
                    <div class="section-title-wrap margin-bottom-50"><!-- section title -->
                        <h4>Explore<span>locations</span></h4>
                        <div class="title-divider">
                            <div class="line"></div>
                            <div class="box"></div>
                            <div class="line"></div>
                        </div>
                        <p>We help new customers & search engines to find your business online</p>
                    </div><!-- section title end -->
                    <div class="location-wrapper style1">
                        <div class="row">
                            <?php foreach ($business_cities as $key => $business_city) { ?>
                                <?php if ($key % 2 == 0) { ?>
                                    <div class="col-md-8 col-sm-6 col-xs-12"><!--blog entry column-->
                                        <div class="location-entry">
                                            <div class="figure">
                                                <img src="<?php echo base_url(); ?>include_files/classified/images/location/01.jpg" alt="location"/>
                                                <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                                <div class="location-content-1 clearfix">
                                                    <div class="location-icon">
                                                        <i class="fa fa-map-marker bgyallow-1 white"></i>
                                                    </div>
                                                    <div class="location-title-disc">
                                                        <h5><a href="#"><?php echo $business_city->city_name; ?></a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
                                        <div class="location-entry">
                                            <div class="figure">
                                                <img src="<?php echo base_url(); ?>include_files/classified/images/location/02.jpg" alt="location"/>
                                                <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                                <div class="location-content-1 clearfix">
                                                    <div class="location-icon">
                                                        <i class="fa fa-map-marker bgyallow-1 white"></i>
                                                    </div>
                                                    <div class="location-title-disc">
                                                        <h5><a href="#"><?php echo $business_city->city_name; ?></a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div><!-- section container end -->
            </section>

            <!--================================FUNFACTS COUNTER SECTION==========================================-->

            <section id="funfact" class=" padding-top-100 padding-bottom-70 bgwhite">
                <div class="container">
                    <div class="row" id="funfact-1">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                            <div class="funfact-1 color-1  clearfix">
                                <div class="fun-wrap">
                                    <div class="count" id="items" data-to="<?php echo $siteinfo->businesses; ?>" data-speed="4000"><?php echo $siteinfo->businesses; ?></div>
                                    <div class="funfact"><p> Businesses</p></div>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 col -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                            <div class="funfact-1 color-1  clearfix">
                                <div class="fun-wrap">
                                    <div class="count" id="location" data-to="<?php echo $siteinfo->total_cities; ?>" data-speed="4000"><?php echo $siteinfo->total_cities; ?></div>
                                    <div class="funfact"><p> Locations</p></div>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 col -->  				
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                            <div class="funfact-1 color-1  clearfix">
                                <div class="fun-wrap">
                                    <div class="count" id="projects" data-to="<?php echo $siteinfo->total_categories; ?>" data-speed="4000"><?php echo $siteinfo->total_categories; ?></div>
                                    <div class="funfact"><p> Categories</p></div>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 col -->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
                            <div class="funfact-1 color-1  clearfix">
                                <div class="fun-wrap">
                                    <div class="count" id="events" data-to="<?php echo $siteinfo->total_users; ?>" data-speed="4000"><?php echo $siteinfo->total_users; ?></div>
                                    <div class="funfact"><p> Users</p></div>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 col -->
                    </div><!-- /#funfact-1 -->
                </div><!-- container end -->
            </section>

            <!--================================BLOG SECTION==========================================-->

            <section class="blog-section padding-top-100 padding-bottom-70">
                <div class="container"><!-- section container -->
                    <div class="section-title-wrap margin-bottom-50"><!-- section title -->
                        <h4>our<span>blog</span></h4>
                        <div class="title-divider">
                            <div class="line"></div>
                            <div class="box"></div>
                            <div class="line"></div>
                        </div>
                        <p>We help new customers & search engines to find your business online</p>
                    </div><!-- section title end -->
                    <div class="blog-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
                                <div class="blog-entry shadow-1">
                                    <div class="figure">
                                        <img src="<?php echo base_url(); ?>include_files/classified//images/news/home/01.jpg" alt="blog entry"/>
                                        <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-title">
                                            <h6>Take me out of country</h6>
                                        </div>
                                        <div class="entry-disc">
                                            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
                                        </div>
                                        <div class="entry-metas clearfix">
                                            <a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
                                            <a class="permalink bgyallow-1 c333" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--blog entry column end-->
                            <div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
                                <div class="blog-entry shadow-1">
                                    <div class="figure">
                                        <img src="<?php echo base_url(); ?>include_files/classified//images/news/home/02.jpg" alt="blog entry"/>
                                        <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-title">
                                            <h6>Take me out of country</h6>
                                        </div>
                                        <div class="entry-disc">
                                            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
                                        </div>
                                        <div class="entry-metas clearfix">
                                            <a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
                                            <a class="permalink bgyallow-1 c333" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--blog entry column end-->
                            <div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
                                <div class="blog-entry shadow-1">
                                    <div class="figure">
                                        <img src="<?php echo base_url(); ?>include_files/classified/images/news/home/03.jpg" alt="blog entry"/>
                                        <div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-title">
                                            <h6>Take me out of country</h6>
                                        </div>
                                        <div class="entry-disc">
                                            <p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
                                        </div>
                                        <div class="entry-metas clearfix">
                                            <a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
                                            <a class="permalink bgyallow-1 c333" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--blog entry column end-->
                        </div>
                    </div>
                </div><!-- section container end -->
            </section>



            <!--================================ PARTNER SECTION ==========================================-->

            <section class="partner-section padding-top-100 padding-bottom-40">
                <div class="container"><!-- section container -->
                    <div class="section-title-wrap margin-bottom-50"><!-- section title -->
                        <h4>our<span>partners</span></h4>
                        <div class="title-divider">
                            <div class="line"></div>
                            <div class="box"></div>
                            <div class="line"></div>
                        </div>
                        <p>We help new customers & search engines to find your business online</p>
                    </div><!-- section title end -->

                    <div class="row partner-wrap style-1 clearfix">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?php echo base_url(); ?>include_files/classified/images/partner/01.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?php echo base_url(); ?>include_files/classified/images/partner/02.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?php echo base_url(); ?>include_files/classified/images/partner/03.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 margin-bottom-30"><!-- .partner -->
                            <div class="partner shadow-1 clearfix">
                                <a href="#"><img src="<?php echo base_url(); ?>include_files/classified/images/partner/04.jpg" alt="partner"/></a>
                            </div>
                        </div><!-- partner end -->
                    </div><!-- .row partner end -->
                </div><!-- container end -->
            </section>
            <!--================================ subscription ==========================================-->
            <section class="subscription">
                <div class="container">
                    <div class="subscribe-wrap shadow-2 bgwhite padding-top-30 padding-bottom-30 clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="subscribe-text">
                                <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="subscribe-form">
                                <form class="mailchimp">
                                    <input class="subs-field" type="email" name="email" placeholder="Enter your email address" required/>
                                    <input class="subs-btn bgyallow-1" type="submit" value="sunscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--================================ FOOTER AREA ==========================================-->

            <footer class="footer style-1 padding-top-70 bg222">
                <div class="container">
                    <div class="footer-main padding-bottom-10">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>LATEST NEWS</h5>
                                </div>
                                <div class="footer-logo">
                                    <a href="#"><img  src="<?php echo base_url(); ?>include_files/classified/images/logo.png" alt="footer logo"></a>
                                </div>
                                <div class="footer-intro">
                                    <p>Lorem ipsum dolor sit amet sectetuer
                                        esl adipiscing elit sed diam nonummy
                                        nibhi euismod tincidunt ut laoreet
                                        dolore amet magna.
                                    </p>
                                    <a href="about.html">read more</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>recent posts</h5>
                                </div>
                                <div class="footer-recent-post-widget">
                                    <div class="footer-recent-post clearfix">
                                        <div class="footer-recent-post-figure">
                                            <img src="<?php echo base_url(); ?>include_files/classified/images/news/thumb/100/01.jpg" alt="recent post"/>
                                        </div>
                                        <div class="footer-recent-post-content">
                                            <div class="footer-recent-post-title">
                                                <a href="#">Hello Directory Listing</a>
                                            </div>
                                            <div class="footer-recent-post-disc">
                                                <p>Welcome to listing</p>
                                            </div>
                                            <div class="footer-recent-post-caption">
                                                <p class="date">07 Sep, 2015</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-recent-post clearfix">
                                        <div class="footer-recent-post-figure">
                                            <img src="<?php echo base_url(); ?>include_files/classified/images/news/thumb/100/01.jpg" alt="recent post"/>
                                        </div>
                                        <div class="footer-recent-post-content">
                                            <div class="footer-recent-post-title">
                                                <a href="#">Hello Directory Listing</a>
                                            </div>
                                            <div class="footer-recent-post-disc">
                                                <p>Welcome to listing</p>
                                            </div>
                                            <div class="footer-recent-post-caption">
                                                <p class="date">07 Sep, 2015</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-30">
                                <div class="footer-widget-title">
                                    <h5>Flikr Photos</h5>
                                </div>
                                <div class="footer-flikr-widget">
                                    <ul class="flikr-list clearfix">
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/01.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/02.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/03.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/04.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/05.jpg" alt="flikr photo"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url(); ?>include_files/images/news/flikr/06.jpg" alt="flikr photo"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container end -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="social-section style-2 pull-right">
                                <div class="social-wrap clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12 social-links">
                                        <ul class="pull-right clearfix">
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-twitter-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-linkedin-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-facebook-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class=" " href="#"><i class="fa fa-skype"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-pinterest-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-apple"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-instagram"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-google-plus-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-dribbble"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-youtube-play"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-tumblr-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-bitbucket-square"></i></a>
                                            </li><!-- .ITEM -->
                                            <li class="item">
                                                <a class="" href="#"><i class="fa fa-windows"></i></a>
                                            </li><!-- .ITEM -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 pull-left margin-bottom-20">
                                <div class="footer-copyright">
                                    <p>&copy; 2017 All Rights Reserved @ <a href="http://zerogravityweb.in" target="_blank">Zero Gravity</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--================================MODAL WINDOWS FOR REGISTER AND LOGIN FORMS ===========================================-->
        <!-- Modal login form -->
        <div class = "modal fade" id = "login" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
            <div class = "listing-modal-1 modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
                        <h4 class = "modal-title" id = "myModalLabel"> LOGIN</h4>
                    </div>
                    <div class = "modal-body">
                        <div class=" listing-login-form">
                            <form action="#">
                                <div class="listing-form-field">
                                    <i class="fa fa-user blue-1"></i>
                                    <input class="form-field bgwhite" type="text" name="user_name" placeholder="username" />
                                </div>
                                <div class="listing-form-field">
                                    <i class="fa fa-lock blue-1"></i>
                                    <input class="form-field bgwhite" type="password" name="user_pass" placeholder="password"  />
                                </div>
                                <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                    <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" /><label for="checkbox-1-1"></label>
                                    <label class="checkbox-lable">Remember me</label>
                                    <a href="#">forgot password?</a>
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field submit bgblue-1" type="submit"  value="login" />
                                </div>
                            </form>
                            <div class="bottom-links">
                                <p>not a member?<a href="#">create account</a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal registration form -->
        <div class = "modal fade" id = "register" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
            <div class = "listing-modal-1 modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">&times;</button>
                        <h4 class = "modal-title" id = "myModalLabel2">registration</h4>
                    </div>
                    <div class = "modal-body">
                        <div class=" listing-register-form">
                            <form action="#">
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="text" name="user_name" placeholder="name"  />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="email" name="user_email" placeholder="email" />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="password" name="user_password" placeholder="password"  />
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field bgwhite" type="password" name="user_confirm_password" placeholder="confirm password" />
                                </div>
                                <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
                                    <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" /><label for="checkbox-1-2"></label>
                                    <label class="checkbox-lable">i agree with</label>
                                    <a href="#">terms & conditions</a>
                                </div>
                                <div class="listing-form-field">
                                    <input class="form-field submit bgblue-1" type="submit"  value="create account" />
                                </div>
                            </form>
                            <div class="bottom-links">
                                <p>login with social network</p>
                                <div class="listing-form-social">
                                    <ul>
                                        <li><a class=" bgblue-4 white" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class=" bgblue-1 white" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class=" bgred-2 white" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/jquery-1.11.3.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/classified/js/jquery.js"></script><!-- jquery 1.11.2 -->
        <script src="<?php echo base_url(); ?>include_files/classified/js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/classified/js/modernizr.custom.js"></script>

        <!--================================BOOTSTRAP===========================================-->

        <script src="<?php echo base_url(); ?>include_files/classified/bootstrap/js/bootstrap.min.js"></script>	

        <!--================================NAVIGATION===========================================-->

        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/menu.js"></script>

        <!--================================SLIDER REVOLUTION===========================================-->

        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/assets/revolution_slider/js/revolution-slider-tool.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/assets/revolution_slider/js/revolution-slider.js"></script>

        <!--================================MAP===========================================-->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/map.js"></script>
        <!-- map with geo locations -->

        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/jquery.mapit.js"></script>
        <script src="<?php echo base_url(); ?>include_files/js/initializers.js"></script>

        <!--================================OWL CARESOUL=============================================-->

        <script src="<?php echo base_url(); ?>include_files/classified/js/owl.carousel.js"></script>
        <script src="<?php echo base_url(); ?>include_files/classified/js/triger.js" type="text/javascript"></script>

        <!--================================FunFacts Counter===========================================-->

        <script src="<?php echo base_url(); ?>include_files/classified/js/jquery.countTo.js"></script>

        <!--================================jquery cycle2=============================================-->

        <script src="<?php echo base_url(); ?>include_files/classified/js/jquery.cycle2.min.js" type="text/javascript"></script>	

        <!--================================waypoint===========================================-->

        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->

        <!--================================RATINGS===========================================-->	

        <script src="<?php echo base_url(); ?>include_files/classified/js/jquery.raty-fa.js"></script>
        <script src="<?php echo base_url(); ?>include_files/classified/js/rate.js"></script>

        <!--================================ testimonial ===========================================-->
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	

            <div class="rg-image-wrapper">
            <div class="rg-image"></div>
            <div class="rg-caption-wrapper">
            <div class="rg-caption" style="display:none;">
            <p></p>
            <h5></h5>
            <div class="caption-metas">
            <p class="position"></p>
            <p class="orgnization"></p>
            </div>
            </div>
            </div>
            <div class="clear"></div>
            </div>
        </script>	
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/assets/testimonial/js/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/assets/testimonial/js/jquery.elastislide.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/assets/testimonial/js/gallery.js"></script>
        <!--================================custom script===========================================-->
        <script type="text/javascript" src="<?php echo base_url(); ?>include_files/classified/js/custom.js"></script>    </body>
    <script>
                                                                    function search_business(business_id) {
                                                                        $('form#' + business_id).submit();
                                                                    }
                                                                    function search_category(business_id) {
                                                                        $('form#' + 'category_search' + business_id).submit();
                                                                    }


    </script>
</html>
