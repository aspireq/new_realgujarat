<?php echo $header; ?>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
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
<!-- /.carousel -->
<div class="container">
    <center>
        <h2>What are you interested in? </h2>
        <p>Explore some of the best tips from around the city from our partners and friends. </p>
    </center>
    <div class="row">
        <div class="col-md-9 col-sm-7 col-xs-12">
            <div class="row">
                <?php
                foreach ($categories as $category) {
                    if ($key < 8) {
                        ?>
                        <a href="#" onclick="return theFunction('<?php echo $category->id;?>');">
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
                    <img src="<?php echo base_url(); ?>include_files/user/img/service/more.png" alt="more service"/>
                    <h3>View More</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <img src="<?php echo base_url(); ?>include_files/user/img/adbanner1.png" alt="ad"/>
        </div>
    </div>
</div>

<?php echo $footer; ?>

