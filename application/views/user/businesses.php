<?php echo $header ?>
<link href="<?php echo base_url(); ?>include_files/user/css/checkbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>include_files/user/css/jquery-ui.css">

<section class="innerpage">
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url(); ?>include_files/user/img/banner1.jpg" alt="banner">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>include_files/user/img/banner2.jpg" alt="banner">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url(); ?>include_files/user/img/banner1.jpg" alt="banner">
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>
        <form class="form-inline col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" id="searchForm" action="<?php echo base_url(); ?>auth/businesses" method="post">
            <div class="search row">
                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                    <input type="text" class="form-control" id="search_key" name="search_key" placeholder="Enter Keyword">
                </div>
                <div class="form-group col-md-3 col-sm-3 col-xs-12">
                    <select class="form-control selectpicker" name="city" id="city" data-live-search="true">
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
    <!-- /.carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="col-md-12 filter">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Brand</h2>
                        </div>
                        <ul class="">
                            <li class="toggle-button toggle-button--tuli">
                                <input id="apple" type="checkbox">
                                <label for="apple">Apple</label>
                                <span class="toggle-button__icon"></span>
                            </li>
                            <li class="toggle-button toggle-button--tuli">
                                <input id="dell" type="checkbox">
                                <label for="dell">Dell</label>
                                <span class="toggle-button__icon"></span>
                            </li>
                            <li class="toggle-button toggle-button--tuli">
                                <input id="acer" type="checkbox">
                                <label for="acer">Acer</label>
                                <span class="toggle-button__icon"></span>
                            </li>
                            <li class="toggle-button toggle-button--tuli">
                                <input id="lenovo" type="checkbox">
                                <label for="lenovo">Lenovo</label>
                                <span class="toggle-button__icon"></span>
                            </li>
                            <li class="toggle-button toggle-button--tuli">
                                <input id="asus" type="checkbox">
                                <label for="asus">Asus</label>
                                <span class="toggle-button__icon"></span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </h2>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Date</h2>
                            <p><input type="text" class="form-control" id="datepicker" placeholder="select date"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12 ">
                <div class="row">
                    <div class="col-md-12 col-xs-12 sorting">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php
                        if (!empty($results)) {
                            array_pop($results);
                            foreach ($results as $data) {
                                ?>
                                <div class="row" id="listing">
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <img src="<?php echo base_url(); ?>include_files/logo/<?php echo ($data->logo != "" && (file_exists(FCPATH . 'include_files/logo/' . $data->logo))) ? $data->logo : 'noimage.jpg' ?>" class="img-responsive img-thumbnail" alt="bsiness_logo">
                                    </div>
                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12 titlediv">
                                                <h3 class="title"><?php echo $data->name; ?></h3>
                                                <hr class="listing-hr" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-8 col-xs-12">
                                                        <ul class="list">
                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $data->mobile_no; ?></li>
                                                            <li title="<?php echo $data->address; ?>"><span class="ellipsis"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $data->address; ?></span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12">                                                        
                                                        <a class="listing-button" onclick="show_business(<?php echo $data->id; ?>)">View More</a>
                                                    </div>
                                                    <form method="post" id="<?php echo $data->id; ?>" action="<?php echo base_url(); ?>auth/businessinfo">
                                                        <input type="hidden" name="business_id_row" id="business_id_row" value="<?php echo $data->id; ?>">                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <img src="<?php echo base_url(); ?>include_files/norecordfound.png" class="img-responsive" alt="no-image" />
                        <?php }
                        ?>
                        <!--                        <div class="row" id="listing">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <img src="<?php echo base_url(); ?>include_files/user/img/logo2.jpg" class="img-responsive img-thumbnail">
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 titlediv">
                                                                <span class="title">Company Name Title Here</span>
                                                                <hr class="listing-hr" />
                                                            </div>
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-xs-12">
                                                                        <ul class="list">
                                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 123456789</li>
                                                                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Shivranjni, Ahmedabad</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12">
                                                                        <a href="#" class="listing-button">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="listing">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <img src="<?php echo base_url(); ?>include_files/user/img/logo3.jpg" class="img-responsive img-thumbnail">
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12 titlediv">
                                                                <span class="title">Lorm ipsum dummy Title Here</span>
                                                                <hr class="listing-hr" />
                                                            </div>
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-xs-12">
                                                                        <ul class="list">
                                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 123456789</li>
                                                                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Bopal, Ahmedabad</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12">
                                                                        <a href="#" class="listing-button">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="listing">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <img src="<?php echo base_url(); ?>include_files/user/img/logo1.png" class="img-responsive img-thumbnail">
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12 titlediv">
                                                                <span class="title">Company Title Here</span>
                                                                <hr class="listing-hr" />
                                                            </div>
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-xs-12">
                                                                        <ul class="list">
                                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 123456789</li>
                                                                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Maninagar, Ahmedabad</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12">
                                                                        <a href="#" class="listing-button">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="listing">
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <img src="<?php echo base_url(); ?>include_files/user/img/logo2.jpg" class="img-responsive img-thumbnail">
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12 titlediv">
                                                                <span class="title">Company Name Title Here</span>
                                                                <hr class="listing-hr" />
                                                            </div>
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-xs-12">
                                                                        <ul class="list">
                                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 123456789</li>
                                                                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Shivranjni, Ahmedabad</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <a href="#" class="listing-button">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="listing">
                                                    <div class="col-md-3 col-sm-4">
                                                        <img src="<?php echo base_url(); ?>include_files/user/img/logo3.jpg" class="img-responsive img-thumbnail">
                                                    </div>
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="row">
                                                            <div class="col-md-12 titlediv">
                                                                <span class="title">Lorm ipsum dummy Title Here</span>
                                                                <hr class="listing-hr" />
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <ul class="list">
                                                                            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+91 123456789</li>
                                                                            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Bopal, Ahmedabad</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <a href="#" class="listing-button">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 p-0">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pull-right">
                                <?php
                                foreach ($links as $key => $link) {
                                    echo "<li>" . $link . "</li>";
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <img src="<?php echo base_url(); ?>include_files/user/img/adbanner1.png" alt="ad" />
            </div>
        </div>
    </div>
</section>
<?php echo $footer; ?>
