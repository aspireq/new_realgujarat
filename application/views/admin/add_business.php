<!DOCTYPE html>  
<html lang="en">
    <head>
        <?php echo $common; ?>
    </head>
    <body>
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div id="wrapper">
            <?php echo $header; ?>
            <?php echo $sidebar; ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Add Business</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url(); ?>auth_admin/dashboard">Dashboard</a></li>
                                <li class="active">Add Businesses</li>
                            </ol>
                        </div>                        
                    </div>
                    <div class="row">                                         
                        <div class="white-box">
                            <!-- step-->
                            <div class="stepwizard col-md-12 col-sm-12 col-xs-12">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-circle btn-primary">1</a>
                                        <p>Step 1</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle disabled">2</a>
                                        <p>Step 2</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle disabled">3</a>
                                        <p>Step 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--  form-->
                            <form class="form" role="form" method="post" enctype="multipart/form-data" action="" id="business_post">
                                <input name="total_earnings" id="total_earnings" value="0" type="hidden">
                                <div class="row setup-content" id="step-1" style="display: block;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h3>Step 1 : Basic Information</h3>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input class="form-control" placeholder="Company name" required="" name="company_name" id="company_name" value="" onblur="calculateTotal()" type="text">
                                            </div>
                                        </div>
                                        <input name="edit_id" id="edit_id" value="" type="hidden">
                                        <input name="old_logo" id="old_logo" value="" type="hidden">
                                        <input name="old_banner" id="old_banner" value="" type="hidden">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-cube"></i></div>
                                                <select type="text" class="form-control" name="category" id="category" required="" onchange="calculateTotal()">
                                                    <option value="">Select Category</option>
                                                    <option value="1">Real Estate</option>
                                                    <option value="2">Air Ticket</option>
                                                    <option value="3">Hotel</option>
                                                    <option value="4">Play</option>
                                                    <option value="5">Job Search</option>
                                                    <option value="6">Car</option>
                                                    <option value="7">Electronics</option>
                                                    <option value="8">Salon</option>
                                                    <option value="9">Education</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
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
                                                <textarea type="text" class="form-control" rows="2" placeholder="Company Address" name="company_address" id="company_address" required="" onblur="calculateTotal()"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                <input class="form-control" placeholder="Pincode" name="pincode" id="pincode" maxlength="6" onblur="calculateTotal()" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                <select class="form-control" name="state" id="state">
                                                    <option value="">Select State</option>
                                                    <option value="12">Gujarat</option>
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
                                                <input class="form-control" placeholder="Email" name="email" id="email" value="" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" id="find_duplicates" style="display: none;">
                                            <div class="alert alert-danger alert-dismissable">                                                
                                                One of the Contact already registered with the system
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="input-group-addon codeinput">
                                                    <input placeholder="Code" class="form-control" type="text">
                                                </div>
                                                <input class="form-control" placeholder="Landline No." name="landline_no" id="landline_no" maxlength="10" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                                <div class="input-group-addon codeinput">
                                                    <input placeholder="Code" class="form-control" type="text">
                                                </div>
                                                <input class="form-control" placeholder="Mobile No." required="" name="mobile_no" id="mobile_no" maxlength="10" value="" onblur="calculateTotal()" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                                <div class="input-group-addon codeinput">
                                                    <input placeholder="Code" class="form-control" type="text">
                                                </div>
                                                <input class="form-control" placeholder="Other No." name="other_no" id="other_no" maxlength="10" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                                <input class="form-control" placeholder="Establishment Year" name="year_establishment" id="year_establishment" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" id="btn-step-1" name="btn-step-1" onclick="calculateTotal()">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-2" style="display: none;">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h3>Step 2 : Company Detail</h3>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <textarea class="form-control" placeholder="About Company" name="about_company" id="about_company"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Services You Provide :</h4>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <select multiple="" data-role="tagsinput" class="form-control" name="services[]" id="services" style="display: none;">
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Other Locations :</h4>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <select multiple="" data-role="tagsinput" class="form-control" name="other_locations[]" id="other_locations" style="display: none;">
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Hours Of Operation :</h4>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Monday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-0">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-0">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-0" onclick="set_closed('from_timings-0', 'to_timings-0')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Tuesday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-1">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-1">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-1" onclick="set_closed('from_timings-1', 'to_timings-1')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Wednesday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-2">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-2">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-2" onclick="set_closed('from_timings-2', 'to_timings-2')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Thursday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-3">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-3">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-3" onclick="set_closed('from_timings-3', 'to_timings-3')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Friday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-4">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-4">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-4" onclick="set_closed('from_timings-4', 'to_timings-4')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Saturday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-5">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-5">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-5" onclick="set_closed('from_timings-5', 'to_timings-5')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Sunday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings[]" id="from_timings-6">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="to_timings[]" id="to_timings-6">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-6" onclick="set_closed('from_timings-6', 'to_timings-6')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="" id="copy_timings" name="copy_timings" type="checkbox">
                                            <label for="copy_timings">Copy Timings from Monday to Saturday</label>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input id="dual_timings" name="dual_timings" value="1" type="checkbox">
                                            <label for="dual_timings">Dual Timings</label>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12" id="dual_timings_check" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Monday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-0">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-0">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-0" onclick="set_closed('from_timings_1-0', 'to_timings_1-0')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Tuesday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-1">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-1">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-1" onclick="set_closed('from_timings_1-1', 'to_timings_1-1')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Wednesday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-2">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-2">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-2" onclick="set_closed('from_timings_1-2', 'to_timings_1-2')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Thursday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-3">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-3">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-3" onclick="set_closed('from_timings_1-3', 'to_timings_1-3')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Friday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-4">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-4">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-4" onclick="set_closed('from_timings_1-4', 'to_timings_1-4')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Saturday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-5">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-5">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-5" onclick="set_closed('from_timings_1-5', 'to_timings_1-5')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-3 col-xs-12">
                                                    <p>Sunday :</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">                                                    
                                                    <select class="form-control" name="from_timings_1[]" id="from_timings_1-6">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-1 col-sm-1 col-xs-2 text-center">
                                                    <p>To</p>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-5 bootstrap-timepicker">
                                                    <select class="form-control" name="to_timings_1[]" id="to_timings_1-6">
                                                        <option value="Open 24 Hours">Open 24 Hours</option>
                                                        <option value="00:00"> 00:00 </option>
                                                        <option value="00:30"> 00:30 </option>
                                                        <option value="01:00"> 01:00 </option>
                                                        <option value="01:30"> 01:30 </option>
                                                        <option value="02:00"> 02:00 </option>
                                                        <option value="02:30"> 02:30 </option>
                                                        <option value="03:00"> 03:00 </option>
                                                        <option value="03:30"> 03:30 </option>
                                                        <option value="04:00"> 04:00 </option>
                                                        <option value="04:30"> 04:30 </option>
                                                        <option value="05:00"> 05:00 </option>
                                                        <option value="05:30"> 05:30 </option>
                                                        <option value="06:00"> 06:00 </option>
                                                        <option value="06:30"> 06:30 </option>
                                                        <option value="07:00"> 07:00 </option>
                                                        <option value="07:30"> 07:30 </option>
                                                        <option value="08:00"> 08:00 </option>
                                                        <option value="08:30"> 08:30 </option>
                                                        <option value="09:00"> 09:00 </option>
                                                        <option value="09:30"> 09:30 </option>
                                                        <option value="10:00"> 10:00 </option>
                                                        <option value="10:30"> 10:30 </option>
                                                        <option value="11:00"> 11:00 </option>
                                                        <option value="11:30"> 11:30 </option>
                                                        <option value="12:00"> 12:00 </option>
                                                        <option value="12:30"> 12:30 </option>
                                                        <option value="13:00"> 13:00 </option>
                                                        <option value="13:30"> 13:30 </option>
                                                        <option value="14:00"> 14:00 </option>
                                                        <option value="14:30"> 14:30 </option>
                                                        <option value="15:00"> 15:00 </option>
                                                        <option value="15:30"> 15:30 </option>
                                                        <option value="16:00"> 16:00 </option>
                                                        <option value="16:30"> 16:30 </option>
                                                        <option value="17:00"> 17:00 </option>
                                                        <option value="17:30"> 17:30 </option>
                                                        <option value="18:00"> 18:00 </option>
                                                        <option value="18:30"> 18:30 </option>
                                                        <option value="19:00"> 19:00 </option>
                                                        <option value="19:30"> 19:30 </option>
                                                        <option value="20:00"> 20:00 </option>
                                                        <option value="20:30"> 20:30 </option>
                                                        <option value="21:00"> 21:00 </option>
                                                        <option value="21:30"> 21:30 </option>
                                                        <option value="22:00"> 22:00 </option>
                                                        <option value="22:30"> 22:30 </option>
                                                        <option value="23:00"> 23:00 </option>
                                                        <option value="23:30"> 23:30 </option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="check_closed-6" onclick="set_closed('from_timings_1-6', 'to_timings_1-6')" type="checkbox">
                                                            Closed
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Payment Modes Accepted By You :</h4>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <select class="form-control select2" multiple="multiple" data-placeholder="Select Payment Mode" style="width: 100%" name="payment_mode[]" id="payment_mode">
                                                <?php
                                                if (!empty($businessinfo) && $businessinfo['payment_methods'] != "") {
                                                    $payment_methods = explode(',', $businessinfo['payment_methods']);
                                                }
                                                ?>   
                                                <option value="Cash" <?php echo (!empty($businessinfo) && in_array('Cash', $payment_methods)) ? 'selected' : '' ?>>Cash</option>
                                                <option value="Visa Card" <?php echo (!empty($businessinfo) && in_array('Visa Card', $payment_methods)) ? 'selected' : '' ?>>Visa Card</option>
                                                <option value="Master Card" <?php echo (!empty($businessinfo) && in_array('Master Card', $payment_methods)) ? 'selected' : '' ?>>Master Card</option>
                                                <option value="Debit Card" <?php echo (!empty($businessinfo) && in_array('Debit Card', $payment_methods)) ? 'selected' : '' ?>>Debit Card</option>
                                                <option value="Money Order" <?php echo (!empty($businessinfo) && in_array('Money Order', $payment_methods)) ? 'selected' : '' ?>>Money Order</option>
                                                <option value="Financing Available" <?php echo (!empty($businessinfo) && in_array('Financing Available', $payment_methods)) ? 'selected' : '' ?>>Financing Available</option>
                                                <option value="Cheque" <?php echo (!empty($businessinfo) && in_array('Cheque', $payment_methods)) ? 'selected' : '' ?>>Cheque</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Product Rate:</h4>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-8 col-xs-12">
                                            <div class="input-group">
                                                <input class="form-control" id="min_rate" name="min_rate" placeholder="Minimum Rate(INR)" value="" type="text">
                                                <span class="input-group-addon">To</span>
                                                <input class="form-control" id="max_rate" name="max_rate" placeholder="Maximum Rate(INR)" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button class="btn btn-danger prevBtn btn-lg pull-left" type="button">Previous</button>
                                            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-3" style="display:none">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h3>Step 3: Upload Photos</h3>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Upload Logo :</h4>
                                            <div class="kv-avatar">
                                                <input id="input-1" type="file" accept="image/*" name="avatar-1" class="file-loading"  data-show-upload="false">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Upload Banner :</h4>
                                            <input id="input-2" name="company_banner" type="file" accept="image/*" class="file-loading" data-show-upload="false">
                                        </div>                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <h4 class="form-title">Upload Images</h4>
                                            <div class="alert alert-info">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                Maximum 50 Files are allowed
                                            </div>
                                            <div class="row oldimage">
                                                <?php foreach ($businessinfo['company_images'] as $image) { ?>                                                
                                                    <div class="col-md-3">
                                                        <div class="thumbnail">
                                                            <a class="close" href="#"><i class="fa fa-times-circle"></i></a>
                                                            <input type="hidden" name="old_company_images[]" id="<?php echo $$image->image; ?>" value="<?php echo $image->image; ?>">
                                                            <img src="<?php echo base_url(); ?>include_files/business_images/<?php echo $image->image; ?>">
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                            <input id="input-3" type="file" accept="image/*" name="userFiles[]" class="file-loading"  multiple  data-show-upload="false">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button class="btn btn-danger prevBtn btn-lg pull-left" type="button">Previous</button>
                                            <button class="btn btn-success btn-lg pull-right" type="submit" id="add_busines" name="add_busines">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                   
                </div>

                <?php echo $footer; ?>
            </div>     
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>    
            <script src="<?php echo base_url(); ?>include_files/admin/js/jquery.slimscroll.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/js/waves.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/js/custom.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/js/jQuery.dataTables.reloadAjax.js"></script>
            <!-- bt-switch -->
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/bootstrap-switch/bootstrap-switch.min.js"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/imageupload/js/plugins/sortable.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/imageupload/js/fileinput.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/imageupload/themes/explorer/theme.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/select2/select2.full.min.js"></script>        
            <script type="text/javascript" src="<?php echo base_url(); ?>include_files/admin/plugins/taginput/js/bootstrap-tagsinput.js"></script> 
            <script>
                                                                var myTable = "";
                                                                $(function () {
                                                                    myTable = $('#myTable').DataTable({
                                                                        "bServerSide": true,
                                                                        "sAjaxSource": "<?php echo base_url(); ?>auth_admin/get_business",
                                                                        "sServerMethod": "POST",
                                                                        "info": false,
                                                                        "fnServerParams":
                                                                                function (aoData) {
                                                                                },
                                                                        "aaSorting": [[2, 'desc'], [1, 'desc']],
                                                                        "iDisplayLength": 10,
                                                                        "bStateSave": true,
                                                                        "fnCreatedRow": function (nRow, aData, iDataIndex)
                                                                        {
                                                                            $(nRow).attr("uacc_id", aData.id);
                                                                        },
                                                                        aoColumnDefs: [
                                                                            {
                                                                                mData: 'name',
                                                                                aTargets: [0]
                                                                            },
                                                                            {
                                                                                mData: 'email',
                                                                                aTargets: [1]
                                                                            },
                                                                            {
                                                                                mData: 'mobile_no',
                                                                                aTargets: [2]
                                                                            },
                                                                            {
                                                                                mData: 'other_no',
                                                                                aTargets: [3]
                                                                            },
                                                                            {
                                                                                mData: 'created_date',
                                                                                aTargets: [4]
                                                                            },
                                                                            {
                                                                                mData: '',
                                                                                aTargets: [5],
                                                                                mRender: function (data, type, full)
                                                                                {
                                                                                    if (full['is_approved'] == 1) {
                                                                                        //var html = '<div class="onoffswitch2"><input type="checkbox" name="approved' + full['id'] + '" class="onoffswitch2-checkbox" id="approved' + full['id'] + '" checked><label class="onoffswitch2-label" for="approved' + full['id'] + '"><span class="onoffswitch2-inner"></span><span class="onoffswitch2-switch"></span></label></div>';
                                                                                        var html = '<span class="label label-success font-weight-100">Approved</span>'
                                                                                        return html;
                                                                                    } else {
                                                                                        var html = '<div class="onoffswitch2"><input type="checkbox" onClick="business_status(' + full['id'] + ')" name="pending' + full['id'] + '" class="onoffswitch2-checkbox" id="pending' + full['id'] + '"><label class="onoffswitch2-label" for="pending' + full['id'] + '"><span class="onoffswitch2-inner"></span><span class="onoffswitch2-switch"></span></label></div>';
                                                                                        return html;
                                                                                    }
                                                                                }
                                                                            },
                                                                            {
                                                                                mData: '',
                                                                                aTargets: [6],
                                                                                mRender: function (data, type, full)
                                                                                {
                                                                                    var html = '<a href="<?php echo base_url(); ?>auth_admin/business_detail/' + full['id'] + '" class="btn btn-info fcbtn btn-outline btn-1d">View More</a>';
                                                                                    return html;
                                                                                }
                                                                            },
                                                                        ]
                                                                    });
                                                                });
                                                                $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
                                                                var radioswitch = function () {
                                                                    var bt = function () {
                                                                        $(".radio-switch").on("switch-change", function () {
                                                                            $(".radio-switch").bootstrapSwitch("toggleRadioState")
                                                                        }),
                                                                                $(".radio-switch").on("switch-change", function () {
                                                                            $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
                                                                        }),
                                                                                $(".radio-switch").on("switch-change", function () {
                                                                            $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
                                                                        })
                                                                    };
                                                                    return {
                                                                        init: function () {
                                                                            bt()
                                                                        }
                                                                    }
                                                                }();
                                                                $(document).ready(function () {
                                                                    radioswitch.init()
                                                                });
                                                                function business_status(id) {
                                                                    var x;
                                                                    if (confirm("Are you sure you want approve this business") == true) {
                                                                        x = "ok";
                                                                    } else {
                                                                        x = "cancel";
                                                                    }
                                                                    if (x == "ok") {
                                                                        $.ajax({
                                                                            url: "<?php echo base_url(); ?>auth_admin/business_status/",
                                                                            type: "POST",
                                                                            data: {id: id},
                                                                            dataType: "JSON",
                                                                            success: function (data)
                                                                            {
                                                                                alert('Business approved successfully!');
                                                                            }
                                                                        });
                                                                    }
                                                                    reload_table();
                                                                }
                                                                function reload_table() {
                                                                    myTable.ajax.reload(null, false);
                                                                }
            </script>
            <script src="<?php echo base_url(); ?>include_files/admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
            <script>
                                                                /*step form*/
                                                                $(".select2").select2();
                                                                $(document).ready(function () {
                                                                    var navListItems = $('div.setup-panel div a'),
                                                                            allWells = $('.setup-content'),
                                                                            allNextBtn = $('.nextBtn'),
                                                                            allPrevBtn = $('.prevBtn');



                                                                    navListItems.click(function (e) {
                                                                        e.preventDefault();
                                                                        var $target = $($(this).attr('href')),
                                                                                $item = $(this);

                                                                        if (!$item.hasClass('disabled')) {
                                                                            navListItems.removeClass('btn-danger').addClass('btn-default');
                                                                            $item.addClass('btn-primary').removeClass('btn-default');
                                                                            allWells.hide();
                                                                            $target.show();
                                                                            $target.find('input:eq(0)').focus();
                                                                        }
                                                                    });

                                                                    allPrevBtn.click(function () {
                                                                        var curStep = $(this).closest(".setup-content"),
                                                                                curStepBtn = curStep.attr("id"),
                                                                                prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                                                                        prevStepWizard.removeAttr('disabled').trigger('click');
                                                                    });

                                                                    allNextBtn.click(function () {
                                                                        var curStep = $(this).closest(".setup-content"),
                                                                                curStepBtn = curStep.attr("id"),
                                                                                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                                                                                curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email'],textarea[type='text'],select[name='category']"),
                                                                                isValid = true;

                                                                        $(".form-group").removeClass("has-error");
                                                                        for (var i = 0; i < curInputs.length; i++) {
                                                                            if (!curInputs[i].validity.valid) {
                                                                                isValid = false;
                                                                                $(curInputs[i]).closest(".form-group").addClass("has-error");
                                                                            }
                                                                        }

                                                                        if (isValid)
                                                                            nextStepWizard.removeClass('disabled').trigger('click');
                                                                    });

                                                                    $('div.setup-panel div a.btn-danger').trigger('click');
                                                                });

            </script>
            <script type="text/javascript">
                                                                    $(document).on('ready', function () {
                                                                        var total_earning = 0;
                                                                        var business_id = $('#edit_id').val();
                                                                        $('.close').click(function () {
                                                                            $(this).parents('.oldimage .col-md-3').remove();
                                                                            $(this).closest('input').remove();
                                                                        });
//                                                                        $('#btn-step-1').click(function () {
//                                                                            if (business_id == "") {
//                                                                                var company_name = $('#company_name').val();
//                                                                                var category = $('#category').val();
//                                                                                var address = $('#company_address').val();
//                                                                                var mobileno = $('#mobile_no').val();
//                                                                                total_earning = 0;
//                                                                                (company_name !== "") ? total_earning += 1 : total_earning -= 1;
//                                                                                (category !== "") ? total_earning += 1 : total_earning -= 1;
//                                                                                (address !== "") ?  total_earning += 1 : total_earning -= 1;
//                                                                                (mobileno !== "") ? total_earning += 1 : total_earning -= 1;
//                                                                                alert(total_earning);
//                                                                            }
//                                                                        });
                                                                        var dual_timings = $('#dual_timings').is(':checked');
                                                                        $("#input-3").fileinput({
                                                                            uploadUrl: '/file-upload-batch/2',
                                                                            uploadAsync: false,
                                                                            overwriteInitial: false,
                                                                            initialPreviewAsData: true,
                                                                            purifyHtml: true,
                                                                            maxFilePreviewSize: 10240,
                                                                            allowedFileExtensions: ["jpg", "png", "gif"],
                                                                            previewFileType: "image",
                                                                            removeClass: "btn btn-warning",
                                                                            removeLabel: "Delete",
                                                                            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                                                                            browseClass: "btn btn-danger",
                                                                            browseLabel: "Pick Image",
                                                                            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                                                                        });
                                                                        if (dual_timings === true) {
                                                                            $('#dual_timings_check').show();
                                                                        } else {
                                                                            $('#dual_timings_check').hide();
                                                                        }
                                                                        $(".select2").select2();
                                                                        $('#find_duplicates').hide();
                                                                        $('#pincode, #mobile_no, #other_no, #year_establishment').on('change keyup', function () {
                                                                            var sanitized = $(this).val().replace(/[^-.0-9]/g, '');
                                                                            sanitized = sanitized.replace(/(.)-+/g, '$1');
                                                                            sanitized = sanitized.replace(/\.(?=.*\.)/g, '');
                                                                            $(this).val(sanitized);
                                                                        });
                                                                        $("#landline_no, #mobile_no, #other_no").on('change paste keyup input', function () {
                                                                            var landline_no = $("#landline_no").val();
                                                                            var mobile_no = $("#mobile_no").val();
                                                                            var other_no = $("#other_no").val();
                                                                            $.ajax({
                                                                                url: "<?php echo base_url(); ?>reseller/check_duplicates/",
                                                                                type: "POST",
                                                                                data: {landline_no: landline_no, mobile_no: mobile_no, other_no: other_no},
                                                                                dataType: "JSON",
                                                                                success: function (data)
                                                                                {
                                                                                    if (data > 0) {
                                                                                        $('#btn-step-1').attr('disabled', true);
                                                                                        $('#find_duplicates').show();
                                                                                    } else {
                                                                                        $('#btn-step-1').attr('disabled', false);
                                                                                        $('#find_duplicates').hide();
                                                                                    }
                                                                                }
                                                                            });
                                                                        });
                                                                        $('#dual_timings').change(function () {
                                                                            if ($(this).is(':checked')) {
                                                                                $('#dual_timings_check').show();
                                                                            } else {
                                                                                $('#dual_timings_check').hide();
                                                                            }
                                                                        });
                                                                        $("#copy_timings").click(function () {
                                                                            if ($(this).is(':checked')) {
                                                                                var from_time = $('#from_timings-0').val();
                                                                                var to_time = $('#to_timings-0').val();
                                                                                $('#from_timings-1').val(from_time);
                                                                                $('#from_timings-2').val(from_time);
                                                                                $('#from_timings-3').val(from_time);
                                                                                $('#from_timings-4').val(from_time);
                                                                                $('#from_timings-5').val(from_time);
                                                                                $('#from_timings-6').val(from_time);
                                                                                $('#to_timings-1').val(to_time);
                                                                                $('#to_timings-2').val(to_time);
                                                                                $('#to_timings-3').val(to_time);
                                                                                $('#to_timings-4').val(to_time);
                                                                                $('#to_timings-5').val(to_time);
                                                                                $('#to_timings-6').val(to_time);
                                                                            }
                                                                        });
                                                                        $('#category').change(function () {
                                                                            var category_id = $('#category').val();
                                                                            $.ajax({
                                                                                url: "<?php echo base_url(); ?>reseller/subcategories/",
                                                                                type: "POST",
                                                                                data: {category_id: category_id},
                                                                                dataType: "JSON",
                                                                                success: function (data)
                                                                                {
                                                                                    $('#subcategory').empty();
                                                                                    $('#subcategory').html('<option value="">Select Subcategory</option>');
                                                                                    $.each(data, function (index, value) {
                                                                                        $('#subcategory').append($('<option>').text(value.name).attr('value', value.id));
                                                                                    });
                                                                                }
                                                                            });
                                                                        });
                                                                        $('#state').change(function () {
                                                                            var state_id = $('#state').val();
                                                                            $.ajax({
                                                                                url: "<?php echo base_url(); ?>reseller/cities/",
                                                                                type: "POST",
                                                                                data: {state_id: state_id},
                                                                                dataType: "JSON",
                                                                                success: function (data)
                                                                                {
                                                                                    $('#city').empty();
                                                                                    $('#city').html('<option value="">Select City</option>');
                                                                                    $.each(data, function (index, value) {
                                                                                        $('#city').append($('<option>').text(value.name).attr('value', value.id));
                                                                                    });
                                                                                }
                                                                            });
                                                                        });
                                                                    });
                                                                    function set_closed(from_id, to_id) {
                                                                        $('#' + from_id).val("Closed");
                                                                        $('#' + to_id).val("Closed");
                                                                    }
                                                                    $(document).on('ready', function () {
                                                                        $("#input-2").fileinput({
                                                                            previewFileType: "image",
                                                                            browseClass: "btn btn-danger",
                                                                            browseLabel: "Pick Image",
                                                                            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                                                                            removeClass: "btn btn-warning",
                                                                            removeLabel: "Delete",
                                                                            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                                                                            uploadClass: "btn btn-info",
                                                                            uploadLabel: "Upload",
                                                                            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
                                                                            allowedFileExtensions: ["jpg", "png", "gif"],
                                                                            defaultPreviewContent: '<img src="<?php echo base_url(); ?>include_files/<?php echo (!empty($businessinfo)) ? 'banners/' . $businessinfo['banner'] . '' : 'resseller/plugin/imageupload/img/noimage.jpg' ?>" alt="Your Avatar" style="width:160px;margin:0 auto;display:block">',
                                                                            minImageWidth: 800,
                                                                            minImageHeight: 500
                                                                        });
                                                                        var btnCust = '';
                                                                        $("#input-1").fileinput({
                                                                            previewFileType: "image",
                                                                            browseClass: "btn btn-danger",
                                                                            browseLabel: "Pick Image",
                                                                            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
                                                                            removeClass: "btn btn-warning",
                                                                            removeLabel: "Delete",
                                                                            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
                                                                            uploadClass: "btn btn-info",
                                                                            uploadLabel: "Upload",
                                                                            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> ",
                                                                            allowedFileExtensions: ["jpg", "png", "gif"],
                                                                            defaultPreviewContent: '<img src="<?php echo base_url(); ?>include_files/<?php echo (!empty($businessinfo)) ? 'logo/' . $businessinfo['logo'] . '' : 'resseller/plugin/imageupload/img/noimage.jpg' ?>" alt="Your Avatar" style="width:160px;margin:0 auto;display:block">',
                                                                            maxImageWidth: 80,
                                                                            maxImageHeight: 80
                                                                        });
                                                                    });
        </script>
    </body>
</html>