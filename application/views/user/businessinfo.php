<?php echo $header; ?>
<link href="<?php echo base_url(); ?>include_files/user/css/checkbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>include_files/user/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>include_files/user/css/lightbox.css" />
<style>
    .companybg{
        background:url('<?php echo base_url(); ?>include_files/banners/<?php echo ($business->banner != "" && (file_exists(FCPATH . 'include_files/banners/' . $business->banner))) ? $business->banner : 'detailbg.png' ?>')no-repeat;
        background-size: cover;
    }
</style>
<section> 
    <div id="sms" class="modal fade in" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Get information by SMS/Email</h4>
                </div>
                <div class="modal-body">
                    <form name="info_form" action="#" method="post">
                        <input type="hidden" name="business_id" id="business_id" value="<?php echo $business->id; ?>"
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="text" id="info_name" name="info_name" />
                            <label class="input__label input__label--chisato" for="input-13">
                                <span class="input__label-content input__label-content--chisato" data-content="Enter Name"><i class="fa fa-user"></i> Enter Name</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="email" id="info_email" name="info_email" />
                            <label class="input__label input__label--chisato" for="input-13">
                                <span class="input__label-content input__label-content--chisato" data-content="Enter Email"><i class="fa fa-envelope"></i> Enter Email</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="text" id="info_mobile" name="info_mobile" />
                            <label class="input__label input__label--chisato" for="input-13">
                                <span class="input__label-content input__label-content--chisato" data-content="Enter Mobile"><i class="fa fa-phone"></i> Enter phone</span>
                            </label>
                        </span>
                        <div class="col-sm-12 col-xs-12 col-md-12 gap">
                            <button type="button" name="send_info" id="send_info" class="cart-button center-block">SEND <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="share" class="modal fade in" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Share With</h4>
                </div>
                <div class="modal-body">
                    <ul class="list-inline sharelist">
                        <li class="facebook-wrapper">
                            <a href="#">
                                <i class="fa fa-facebook-official"></i><br>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="twitter-wrapper">
                            <a href="#">
                                <i class="fa fa-twitter"></i><br>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="google-wrapper">
                            <a href="#">
                                <i class="fa fa-google-plus"></i><br>
                                <span>Google Plus</span>
                            </a>
                        </li>
                        <li class="whatsapp-wrapper">
                            <a href="#">
                                <i class="fa fa-whatsapp"></i><br>
                                <span>Whats app</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="editdetail" class="modal fade in" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content row">
                <div class="modal-header custom-modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Help Us Improve This Detail</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><a href="#">Report as inaccurate</a></li>
                        <li><a href="#">Edit / Modify this business</a></li>
                        <li><a href="#">Upload Photos</a></li>
                        <li><a href="#">Remove My Listing</a></li>
                        <li><a href="#">Own This</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid companybg p-0">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="detailpage-title"><?php echo $business->name; ?></h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-right">
                            <h2><i class="fa fa-phone"></i> <?php 
                            $mobile_no = ($business->mobile_code != "") ? '+(' . $business->mobile_code . ')-' : '';
                            echo $mobile_no.$business->mobile_no;
                            ?></h2>
                            <ul class="list-inline pull-right">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($total_ratings < $i) {
                                        echo '<li><i class="fa fa-star-o"></i></li>';
                                    } else {
                                        echo '<li><i class="fa fa-star"></i></li>';
                                    }
                                }
                                ?>
                                <li class="rating"><span><?php echo $total_ratings . '.0'; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container detail-content">
        <div class="row wrapper cf">
            <div class="col-md-3 col-sm-3 col-xs-12 p-0">
                <div class="detail-left col-md-12 col-xs-12">
                    <h4>About</h4>
                    <p><?php echo ($business->business_description != null ) ? $business->business_description . '<a href="#">View more</a>' : 'N/A'; ?> </p>
                    <?php
                    if ($business->year_establishment != null) {
                        ?>
                        <h4>Year Established</h4>
                        <p><?php echo ($business->year_establishment != null ) ? $business->year_establishment : 'N/A'; ?> </p>
                    <?php } ?>
                    <div class="media">
                        <div class="media-left media-top">
                            <a href="#">
                                <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/address.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Address</h4>
                            <address>
                                <?php echo ($business->address != null) ? $business->address : ''; ?>
                                <?php echo ($business->city != 0) ? ',' . $business->city_name : ''; ?>
                                <?php echo ($business->state != 0) ? ',' . $business->state_name : ''; ?>
                                <?php echo ($business->pincode != 0) ? ',' . $business->pincode : ''; ?>
                            </address>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-top">
                            <a href="#">
                                <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/phone.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Contact</h4>
                            <?php
                            $mobile_no = ($business->mobile_code != "") ? '+(' . $business->mobile_code . ')-' : '';
                            $landline_code = ($business->landline_code != "") ? '+ (' . $business->landline_code . ')-' : '';
                            $other_code = ($business->other_code != "") ? '+(' . $business->other_code . ')-' : '';
                            echo ($business->mobile_no != 0) ? '<p>' . $mobile_no . $business->mobile_no . '</p>' : '';
                            echo ($business->landline_no != 0) ? '<p>' . $landline_code . $business->landline_no . '</p>' : '';
                            echo ($business->other_no != 0) ? '<p>' . $other_code . $business->other_no . '</p>' : '';
                            ?>
                        </div>
                    </div>
                    <?php if ($business->min_price_range != 0.00 && $business->max_price_range != 0.00) { ?>
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/rupee.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rate</h4>
                                <p><i class="fa fa-inr"></i> <?php echo $business->min_price_range; ?> to <i class="fa fa-inr"></i> <?php echo $business->max_price_range; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($business->payment_methods != "") { ?>
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/rupee.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mode of Payment</h4>
                                <?php
                                $payment_types = explode(',', $business->payment_methods);
                                foreach ($payment_types as $payment_type) {
                                    echo '<p>' . $payment_type . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>                    
                    <div class="media">
                        <div class="media-left media-top">
                            <a href="#">
                                <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/phone.png" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Hours of Operation</h4>
                            <input type="checkbox" name="hours_display" id="hours_display" onclick="show_timings(<?php echo $business->id; ?>);">
                            <label for="hours_display" id="hours_display_lable">View All</label>
                            <div id="hours_of_opeation">
                                <?php
                                $days = array(
                                    0 => 'Monday',
                                    1 => 'Tuesday',
                                    2 => 'Wednesday',
                                    3 => 'Thursday',
                                    4 => 'Friday',
                                    5 => 'Saturday',
                                    6 => 'Sunday');
                                $from_timings_1 = explode(',', $business->from_timings_1);
                                $to_timings_1 = explode(',', $business->to_timings_1);
                                $from_timings_2 = explode(',', $business->from_timings_2);
                                $to_timings_2 = explode(',', $business->to_timings_2);
                                foreach ($days as $key => $day) {
                                    if (date('l', strtotime(date('Y-m-d'))) == $day) {
                                        echo '<p>' . $day . '  ' . $from_timings_1[$key] . ' - ' . $to_timings_1[$key];
                                        if (!empty($from_timings_2[0])) {
                                            echo ' || ' . $from_timings_2[$key] . ' - ' . $to_timings_2[$key];
                                        }
                                        echo '</p>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $other_locations = explode(',', $business->other_locations);
                    if (!empty($other_locations[0])) {
                        ?>
                        <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="<?php echo base_url(); ?>include_files/user/img/detail/phone.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Other Locations</h4>
                                <?php
                                foreach ($other_locations as $other_location) {
                                    echo '<p>' . $other_location . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 m-15">
                    <img src="<?php echo base_url(); ?>include_files/user/img/adbanner1.png" class="img-responsive" alt="ad"/>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12" id="middle-content">
                <div class="col-md-12 col-sm-12 col-xs-12 detail-center">
                    <h3>Services</h3>
                    <hr>
                    <ul class="list service-list">
                        <?php
                        if ($business->services != "") {
                            $services = explode(',', $business->services);
                            foreach ($services as $service) {
                                ?>
                                <li>
                                    <i class="fa fa-check-circle"></i> <span><?php echo $service; ?></span>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 detail-center m-15">
                    <h3>Photos</h3>
                    <hr>                  
                    <?php
                    if (!empty($business->company_images)) {
                        foreach ($business->company_images as $key => $image) {
                            if ((file_exists(FCPATH . 'include_files/business_images/' . $image->image))) {
                                if ($key < 4) {
                                    ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <a href='<?php echo base_url(); ?>include_files/business_images/<?php echo $image->image; ?>'
                                           class='fresco'
                                           data-fresco-group='example'
                                           data-fresco-caption="<?php echo $business->name; ?>">
                                            <img src='<?php echo base_url(); ?>include_files/business_images/<?php echo $image->image; ?>' alt='' class="img-responsive img" alt="business-image"/>
                                        </a>
                                    </div>
                                    <?php
                                }
                            }
                        }
                    } else {
                        echo 'No Photos Available';
                    }
                    ?>
                    <p class="pull-right col-md-12 col-sm-12 col-xs-12 text-right">Total Photos (<?php echo count($business->company_images); ?>) <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> View All</a></p>
                    <div class="collapse" id="collapseExample">
                        <div class="well row">
                            <?php
                            foreach ($business->company_images as $key => $image) {
                                if ((file_exists(FCPATH . 'include_files/business_images/' . $image->image))) {
                                    if ($key > 3) {
                                        ?>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href='<?php echo base_url(); ?>include_files/business_images/<?php echo $image->image; ?>'
                                               class='fresco'
                                               data-fresco-group='example'
                                               data-fresco-caption="<?php echo $business->name; ?>">
                                                <img src='<?php echo base_url(); ?>include_files/business_images/<?php echo $image->image; ?>' alt='' class="img-responsive img"/>
                                            </a>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            ?>
                            <div class="col-md-12 col-sm-12 col-xs-12 closephoto">
                                <i class="fa fa-chevron-up"></i> Close Photo Gallery
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 detail-center m-15 review">
                    <h3>Review</h3>
                    <hr>
                    <?php
                    if (!empty($results)) {
                        array_pop($results);
                        foreach ($results as $data) {
                            ?>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <img src="<?php echo base_url(); ?>include_files/user/img/r3.png" class="img-responsive img-circle img-thumbnail" />
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-8">
                                    <div class="review-title row">
                                        <h4 class="col-md-7 col-sm-12 col-xs-12"><?php echo $data->name; ?></h4>
                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                            <ul class="list-inline pull-right">                                                
                                                <?php
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($data->rating < $i) {
                                                        echo '<li><i class="fa fa-star-o"></i></li>';
                                                    } else {
                                                        echo '<li><i class="fa fa-star"></i></li>';
                                                    }
                                                }
                                                ?>
                                                <li class="rating"><span><?php echo $data->rating; ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p><?php echo $data->review; ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        No Reviews Available
                    <?php }
                    ?>
                    <div class = "row">
                        <div class = "col-md-12">
                            <nav aria-label = "Page navigation">
                                <ul class = "pagination pull-right">
                                    <?php
                                    foreach ($links as $key => $link) {
                                        echo "<li>" . $link . "</li>";
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="well well-sm p-0">
                        <div class="text-right">
                            <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Give your Review And Rating</a>
                        </div>
                        <div class="row" id="post-review-box" style="display:none;">
                            <div class="col-md-12">
                                <form accept-charset="UTF-8" action="" method="post">
                                    <input id="ratings-hidden" name="rating" type="hidden">
                                    <input type="text" name="name" id="name" class="form-control animated" placeholder="Enter your name">
                                    <input type="hidden" name="business_id" id="business_id" value="<?php echo $business->id; ?>">
                                    <input type="hidden" name="rating_value" id="rating_value">
                                    <br>
                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                    <div class="text-right">
                                        <div class="stars starrr" data-rating="0"></div>
                                        <a class="btn btn-danger btn-sm cancel-btn" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                            Cancel</a>
                                        <button class="btn btn-success cart-button" type="button" name="add_review" id="add_review">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 detail-right">
                <ul class="list action-list">
                    <li data-toggle="modal" data-target="#sms">
                        <img src="<?php echo base_url(); ?>include_files/user/img/detail/sms.png" alt="SMS"/>
                        <span>SMS / E-mail</span>
                    </li>
                    <li data-toggle="modal" data-target="#share">
                        <img src="<?php echo base_url(); ?>include_files/user/img/detail/share.png" alt="Share"/>
                        <span onclick="send_information()">Share</span>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>include_files/user/img/detail/address.png" alt="address"/>
                        <span><a target="_blank" href="<?php echo base_url();?>auth/map/<?php echo $business->id; ?>">Map</a></span>
                    </li>
                    <li data-toggle="modal" data-target="#editdetail">
                        <img src="<?php echo base_url(); ?>include_files/user/img/detail/edit.png" alt="edit"/>
                        <span>Edit This</span>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>include_files/user/img/detail/varyfied.png" alt="varyfied"/>
                        <span>Varified</span>
                    </li>
                </ul>
            </div>            
        </div>
    </div>    
</section>
<?php echo $footer; ?>