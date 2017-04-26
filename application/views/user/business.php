<?php echo $header; ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>include_files/user/plugin/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>include_files/user/plugin/taginput/css/bootstrap-tagsinput.css">
<link href="<?php echo base_url(); ?>include_files/user/plugin/imageupload/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>include_files/user/plugin/imageupload/themes/explorer/theme.css" media="all" rel="stylesheet" type="text/css"/>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 p-r-0">
                <div class="form-container">
                    <h3><i class="fa fa-cube"></i>&nbsp;&nbsp;<strong>Post Free AD</strong></h3>
                    <hr class="form-hr" />
                    <?php if ($message != "") { ?>
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>
                    <div class="stepwizard col-md-12 col-sm-12 col-xs-12">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-danger btn-circle">1</a>
                                <p>Step 1</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" >2</a>
                                <p>Step 2</p>
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" >3</a>
                                <p>Step 3</p>
                            </div>
                        </div>
                    </div>
                    <form role="form" action="" method="post" enctype="multipart/form-data" id="business_form">
                        <div class="row setup-content" id="step-1">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h3>Step 1 : Basic Information</h3>
                                </div>
                                <input type="hidden" name="visitor_id" id="visitor_id" value="<?php echo $visitor_id; ?>">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" class="form-control" placeholder="Company name" required name="company_name" id="company_name" value="<?php echo (!empty($businessinfo) && $businessinfo['name'] != "") ? $businessinfo['name'] : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-cube"></i></div>
                                        <select class="form-control" name="category" id="category" required="">
                                            <option value="">Select Category</option>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category->id; ?>" <?php echo (!empty($businessinfo) && $businessinfo['category_id'] != "" && $businessinfo['category_id'] == $category->id ) ? 'selected' : '' ?>><?php echo $category->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-cube"></i></div>
                                        <select class="form-control" name="subcategory" id="subcategory">
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <textarea type="text" class="form-control" rows="2" placeholder="Company Address" name="company_address" id="company_address" required=""><?php echo (!empty($businessinfo) && $businessinfo['address'] != "") ? $businessinfo['address'] : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <input type="text" class="form-control" placeholder="Pincode" name="pincode" id="pincode" maxlength="6" value="<?php echo (!empty($businessinfo) && $businessinfo['pincode'] != "") ? $businessinfo['pincode'] : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <select class="form-control" name="state" id="state">
                                            <option value="">Select State</option>
                                            <?php foreach ($states as $state) { ?>
                                                <option value="<?php echo $state->id; ?>"><?php echo $state->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                        <select class="form-control" id="city" name="city">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo (!empty($businessinfo) && $businessinfo['email'] != "") ? $businessinfo['email'] : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" id="find_duplicates">
                                    <div class="alert alert-danger alert-dismissable">                                                
                                        One of the Contact already registered with the system
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <div class="input-group-addon codeinput">
                                            <input type="text" placeholder="Code" class="form-control" name="landline_code" id="landline_code" value="<?php echo (!empty($businessinfo) && $businessinfo['landline_code'] != "") ? $businessinfo['landline_code'] : '' ?>">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Landline No." name="landline_no" id="landline_no" maxlength="10" value="<?php echo (!empty($businessinfo) && $businessinfo['landline_no'] != "") ? $businessinfo['landline_no'] : '' ?>" >
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                        <div class="input-group-addon codeinput">
                                            <input type="text" placeholder="Code" class="form-control" name="mobile_code" id="mobile_code" value="<?php echo (!empty($businessinfo) && $businessinfo['mobile_code'] != "") ? $businessinfo['mobile_code'] : '' ?>">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Mobile No." required name="mobile_no" id="mobile_no" maxlength="10" value="<?php echo (!empty($businessinfo) && $businessinfo['mobile_no'] != "") ? $businessinfo['mobile_no'] : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                        <div class="input-group-addon codeinput">
                                            <input type="text" placeholder="Code" class="form-control" name="other_code" id="other_code" value="<?php echo (!empty($businessinfo) && $businessinfo['other_code'] != "") ? $businessinfo['other_code'] : '' ?>">
                                        </div>
                                        <input type="text" class="form-control" placeholder="Other No." name="other_no" id="other_no" maxlength="10" value="<?php echo (!empty($businessinfo) && $businessinfo['other_no'] != "") ? $businessinfo['other_no'] : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-times-rectangle-o"></i></div>
                                        <input type="text" class="form-control" placeholder="Establishment Year" name="year_establishment" id="year_establishment" value="<?php echo (!empty($businessinfo) && $businessinfo['year_establishment'] != "") ? $businessinfo['year_establishment'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-danger nextBtn pull-right" type="button" id="btn-step-1" name="btn-step-1">Next&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-2">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h3>Step 2 : Company Detail</h3>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
<!--                                        <textarea class="form-control" placeholder="About Company" name="about_company" required id="about_company"><?php echo (!empty($businessinfo) && $businessinfo['business_description'] != "") ? $businessinfo['business_description'] : '' ?></textarea>-->
                                        <textarea class="form-control" placeholder="About Company" type="text" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="form-title">Services You Provide :</h4>
                                </div>
                                <div class="form-group col-md-12">
                                    <select multiple data-role="tagsinput" class="form-control" name="services[]" id="services">
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4 class="form-title">Other Locations :</h4>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <select multiple data-role="tagsinput" class="form-control" name="other_locations[]" id="other_locations">                                        
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="form-title">Hours Of Operation :</h4>
                                </div>
                                <div class="form-group col-md-12">
                                    <?php
                                    $days = array(
                                        0 => 'Monday',
                                        1 => 'Tuesday',
                                        2 => 'Wednesday',
                                        3 => 'Thursday',
                                        4 => 'Friday',
                                        5 => 'Saturday',
                                        6 => 'Sunday');
                                    ?>
                                    <?php foreach ($days as $key => $day) { ?>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-3 col-xs-12">
                                                <p><?php echo $day; ?> :</p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                <select class="form-control" name="from_timings[]" id="from_timings<?php echo '-' . $key; ?>">
                                                    <option value="Open 24 Hours">Open 24 Hours</option>
                                                    <option value = '00:00'> 00:00 </option><option value = '00:30'> 00:30 </option><option value = '01:00'> 01:00 </option><option value = '01:30'> 01:30 </option><option value = '02:00'> 02:00 </option><option value = '02:30'> 02:30 </option><option value = '03:00'> 03:00 </option><option value = '03:30'> 03:30 </option><option value = '04:00'> 04:00 </option><option value = '04:30'> 04:30 </option><option value = '05:00'> 05:00 </option><option value = '05:30'> 05:30 </option><option value = '06:00'> 06:00 </option><option value = '06:30'> 06:30 </option><option value = '07:00'> 07:00 </option><option value = '07:30'> 07:30 </option><option value = '08:00'> 08:00 </option><option value = '08:30'> 08:30 </option><option value = '09:00'> 09:00 </option><option value = '09:30'> 09:30 </option><option value = '10:00'> 10:00 </option><option value = '10:30'> 10:30 </option><option value = '11:00'> 11:00 </option><option value = '11:30'> 11:30 </option><option value = '12:00'> 12:00 </option><option value = '12:30'> 12:30 </option><option value = '13:00'> 13:00 </option><option value = '13:30'> 13:30 </option><option value = '14:00'> 14:00 </option><option value = '14:30'> 14:30 </option><option value = '15:00'> 15:00 </option><option value = '15:30'> 15:30 </option><option value = '16:00'> 16:00 </option><option value = '16:30'> 16:30 </option><option value = '17:00'> 17:00 </option><option value = '17:30'> 17:30 </option><option value = '18:00'> 18:00 </option><option value = '18:30'> 18:30 </option><option value = '19:00'> 19:00 </option><option value = '19:30'> 19:30 </option><option value = '20:00'> 20:00 </option><option value = '20:30'> 20:30 </option><option value = '21:00'> 21:00 </option><option value = '21:30'> 21:30 </option><option value = '22:00'> 22:00 </option><option value = '22:30'> 22:30 </option><option value = '23:00'> 23:00 </option><option value = '23:30'> 23:30 </option>
                                                    <option value="Closed">Closed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                <p>To</p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                <select class="form-control" name="to_timings[]" id="to_timings<?php echo '-' . $key; ?>">
                                                    <option value="Open 24 Hours">Open 24 Hours</option>
                                                    <option value = '00:00'> 00:00 </option><option value = '00:30'> 00:30 </option><option value = '01:00'> 01:00 </option><option value = '01:30'> 01:30 </option><option value = '02:00'> 02:00 </option><option value = '02:30'> 02:30 </option><option value = '03:00'> 03:00 </option><option value = '03:30'> 03:30 </option><option value = '04:00'> 04:00 </option><option value = '04:30'> 04:30 </option><option value = '05:00'> 05:00 </option><option value = '05:30'> 05:30 </option><option value = '06:00'> 06:00 </option><option value = '06:30'> 06:30 </option><option value = '07:00'> 07:00 </option><option value = '07:30'> 07:30 </option><option value = '08:00'> 08:00 </option><option value = '08:30'> 08:30 </option><option value = '09:00'> 09:00 </option><option value = '09:30'> 09:30 </option><option value = '10:00'> 10:00 </option><option value = '10:30'> 10:30 </option><option value = '11:00'> 11:00 </option><option value = '11:30'> 11:30 </option><option value = '12:00'> 12:00 </option><option value = '12:30'> 12:30 </option><option value = '13:00'> 13:00 </option><option value = '13:30'> 13:30 </option><option value = '14:00'> 14:00 </option><option value = '14:30'> 14:30 </option><option value = '15:00'> 15:00 </option><option value = '15:30'> 15:30 </option><option value = '16:00'> 16:00 </option><option value = '16:30'> 16:30 </option><option value = '17:00'> 17:00 </option><option value = '17:30'> 17:30 </option><option value = '18:00'> 18:00 </option><option value = '18:30'> 18:30 </option><option value = '19:00'> 19:00 </option><option value = '19:30'> 19:30 </option><option value = '20:00'> 20:00 </option><option value = '20:30'> 20:30 </option><option value = '21:00'> 21:00 </option><option value = '21:30'> 21:30 </option><option value = '22:00'> 22:00 </option><option value = '22:30'> 22:30 </option><option value = '23:00'> 23:00 </option><option value = '23:30'> 23:30 </option>
                                                    <option value="Closed">Closed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="check_closed<?php echo '-' . $key; ?>" onclick="set_closed('<?php echo 'from_timings-' . $key; ?>', '<?php echo 'to_timings-' . $key; ?>')">
                                                        Closed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="checkbox" class="" id="copy_timings" name="copy_timings">
                                    <label for="copy_timings">Copy Timings from Monday to Saturday</label>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="checkbox" class="" id="dual_timings" name="dual_timings" value="1">
                                    <label for="dual_timings">Dual Timings</label>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" id="dual_timings_check">
                                    <?php foreach ($days as $key => $day) { ?>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-3 col-xs-12">
                                                <p><?php echo $day; ?> :</p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                <select class="form-control" name="from_timings_1[]" id="from_timings_1<?php echo '-' . $key; ?>">
                                                    <option value="Open 24 Hours">Open 24 Hours</option>
                                                    <option value = '00:00'> 00:00 </option><option value = '00:30'> 00:30 </option><option value = '01:00'> 01:00 </option><option value = '01:30'> 01:30 </option><option value = '02:00'> 02:00 </option><option value = '02:30'> 02:30 </option><option value = '03:00'> 03:00 </option><option value = '03:30'> 03:30 </option><option value = '04:00'> 04:00 </option><option value = '04:30'> 04:30 </option><option value = '05:00'> 05:00 </option><option value = '05:30'> 05:30 </option><option value = '06:00'> 06:00 </option><option value = '06:30'> 06:30 </option><option value = '07:00'> 07:00 </option><option value = '07:30'> 07:30 </option><option value = '08:00'> 08:00 </option><option value = '08:30'> 08:30 </option><option value = '09:00'> 09:00 </option><option value = '09:30'> 09:30 </option><option value = '10:00'> 10:00 </option><option value = '10:30'> 10:30 </option><option value = '11:00'> 11:00 </option><option value = '11:30'> 11:30 </option><option value = '12:00'> 12:00 </option><option value = '12:30'> 12:30 </option><option value = '13:00'> 13:00 </option><option value = '13:30'> 13:30 </option><option value = '14:00'> 14:00 </option><option value = '14:30'> 14:30 </option><option value = '15:00'> 15:00 </option><option value = '15:30'> 15:30 </option><option value = '16:00'> 16:00 </option><option value = '16:30'> 16:30 </option><option value = '17:00'> 17:00 </option><option value = '17:30'> 17:30 </option><option value = '18:00'> 18:00 </option><option value = '18:30'> 18:30 </option><option value = '19:00'> 19:00 </option><option value = '19:30'> 19:30 </option><option value = '20:00'> 20:00 </option><option value = '20:30'> 20:30 </option><option value = '21:00'> 21:00 </option><option value = '21:30'> 21:30 </option><option value = '22:00'> 22:00 </option><option value = '22:30'> 22:30 </option><option value = '23:00'> 23:00 </option><option value = '23:30'> 23:30 </option>
                                                    <option value="Closed">Closed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                <p>To</p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                <select class="form-control" name="to_timings_1[]" id="to_timings_1<?php echo '-' . $key; ?>">
                                                    <option value="Open 24 Hours">Open 24 Hours</option>
                                                    <option value = '00:00'> 00:00 </option><option value = '00:30'> 00:30 </option><option value = '01:00'> 01:00 </option><option value = '01:30'> 01:30 </option><option value = '02:00'> 02:00 </option><option value = '02:30'> 02:30 </option><option value = '03:00'> 03:00 </option><option value = '03:30'> 03:30 </option><option value = '04:00'> 04:00 </option><option value = '04:30'> 04:30 </option><option value = '05:00'> 05:00 </option><option value = '05:30'> 05:30 </option><option value = '06:00'> 06:00 </option><option value = '06:30'> 06:30 </option><option value = '07:00'> 07:00 </option><option value = '07:30'> 07:30 </option><option value = '08:00'> 08:00 </option><option value = '08:30'> 08:30 </option><option value = '09:00'> 09:00 </option><option value = '09:30'> 09:30 </option><option value = '10:00'> 10:00 </option><option value = '10:30'> 10:30 </option><option value = '11:00'> 11:00 </option><option value = '11:30'> 11:30 </option><option value = '12:00'> 12:00 </option><option value = '12:30'> 12:30 </option><option value = '13:00'> 13:00 </option><option value = '13:30'> 13:30 </option><option value = '14:00'> 14:00 </option><option value = '14:30'> 14:30 </option><option value = '15:00'> 15:00 </option><option value = '15:30'> 15:30 </option><option value = '16:00'> 16:00 </option><option value = '16:30'> 16:30 </option><option value = '17:00'> 17:00 </option><option value = '17:30'> 17:30 </option><option value = '18:00'> 18:00 </option><option value = '18:30'> 18:30 </option><option value = '19:00'> 19:00 </option><option value = '19:30'> 19:30 </option><option value = '20:00'> 20:00 </option><option value = '20:30'> 20:30 </option><option value = '21:00'> 21:00 </option><option value = '21:30'> 21:30 </option><option value = '22:00'> 22:00 </option><option value = '22:30'> 22:30 </option><option value = '23:00'> 23:00 </option><option value = '23:30'> 23:30 </option>
                                                    <option value="Closed">Closed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="check_closed<?php echo '-' . $key; ?>" onclick="set_closed('<?php echo 'from_timings_1-' . $key; ?>', '<?php echo 'to_timings_1-' . $key; ?>')">
                                                        Closed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="form-title">Payment Modes Accepted By You :</h4>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control select2" multiple="multiple" data-placeholder="Select Payment Mode" style="width: 100%" name="payment_mode[]" id="payment_mode">
                                        <option value="Cash">Cash</option>
                                        <option value="Visa Card">Visa Card</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Debit Card">Debit Card</option>
                                        <option value="Money Order">Money Order</option>
                                        <option value="Financing Available">Financing Available</option>
                                        <option value="Cheque">Cheque</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <h4 class="form-title">Product Rate:</h4>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="min_rate" name="min_rate" placeholder="Minimum Rate(INR)" value="<?php echo (!empty($businessinfo) && $businessinfo['min_price_range'] != "") ? $businessinfo['min_price_range'] : '' ?>">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control" id="max_rate" name="max_rate"  placeholder="Maximum Rate(INR)" value="<?php echo (!empty($businessinfo) && $businessinfo['max_price_range'] != "") ? $businessinfo['max_price_range'] : '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-danger prevBtn pull-left" type="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Previous</button>
                                    <button class="btn btn-danger nextBtn pull-right" type="button">Next&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <h3>Step 3: Upload Photos</h3>
                                </div>
                                <div class="form-group col-md-12">
                                    <h4 class="form-title">Upload Logo :</h4>
                                    <div class="kv-avatar">
<!--                                        <input id="avatar-1" name="avatar-1" type="file" class="file-loading" name="avatar-1" required="">-->
                                        <input id="avatar-1" type="file" accept="image/*" name="avatar-1" class="file-loading"  data-show-upload="false">
<!--                                        <input id="input-1" type="file" accept="image/*" name="avatar-1" class="file-loading"  data-show-upload="false" required="">-->
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <h4 class="form-title">Upload Banner :</h4>
<!--                                    <input id="input-2" type="file" accept="image/*" class="file-loading">-->
                                    <input id="input-2" name="company_banner" type="file" accept="image/*" class="file-loading"  data-show-upload="false">
                                </div>
                                <div class="form-group col-md-12">
                                    <h4 class="form-title">Upload Images :</h4>
                                    <div class="alert alert-info">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        Maximum 50 Files are allowed
                                    </div>
<!--                                    <input id="input-3" type="file" accept="image/*" class="file-loading"  multiple>-->
                                    <input id="input-3" type="file" accept="image/*" name="userFiles[]" class="file-loading"  multiple  data-show-upload="false">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-danger prevBtn pull-left" type="button"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp;Previous</button>
                                    <button class="btn btn-success pull-right" type="submit">Submit&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="login" class="modal fade in" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content row">
            <div class="modal-header custom-modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">LOGIN</h4>
            </div>
            <div class="modal-body">
                <form name="info_form" action="#" method="post">
                    <span class="input input--chisato">
                        <input class="input__field input__field--chisato" type="email" id="input-13" />
                        <label class="input__label input__label--chisato" for="input-13">
                            <span class="input__label-content input__label-content--chisato" data-content="Enter Name"><i class="fa fa-envelope"></i> Enter Name</span>
                        </label>
                    </span>
                    <span class="input input--chisato">
                        <input class="input__field input__field--chisato" type="password" id="input-13" />
                        <label class="input__label input__label--chisato" for="input-13">
                            <span class="input__label-content input__label-content--chisato" data-content="Enter Password"><i class="fa fa-lock"></i> Enter Password</span>
                        </label>
                    </span>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="pull-right">Forgot Password?</a>
                        </div>
                        <div class="form-group col-md-12 p-15">
                            <button type="submit" class="cart-button center-block">Submit <i class="fa fa-sign-in"></i></button>
                        </div>
                    </div>
                </form>
                <div class="text-center col-md-12 signuplink">
                    <hr class="modalhr">
                    <a href="#"><b>New For Real Gujarat? Join Us Now</b></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>  