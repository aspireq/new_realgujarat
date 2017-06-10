<!DOCTYPE html>
<html>
    <head>
        <?php echo $common; ?>
    </head>
    <body>
        <?php echo $header; ?>
        <div>
            <div class="container">
                <div class="row">
                    <?php echo $sidebar; ?>                    
                    <div class="col-md-9 col-sm-8 col-xs-12 p-r-0">
                        <div class="form-container">
                            <h3><i class="fa fa-user"></i>&nbsp;&nbsp;Your Ads</h3>
                            <hr class="form-hr" />
                            <?php
                            if (!empty($results)) {
                                array_pop($results);
                                $i = 1;
                                foreach ($results as $data) {
                                    ?>
                                    <div class="row adlist">
                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                            <img src="<?php echo base_url(); ?>include_files/logo/<?php echo ($data->logo != "" && (file_exists(FCPATH . 'include_files/logo/' . $data->logo))) ? $data->logo : 'noimage.jpg' ?>" alt="" class="img-responsive img-thumbnail" />                                            
                                            <?php echo ($data->is_approved == 1) ? '<p class="pending-text">Pending</p>' : '<p class="approved-text">Approved</p>'; ?>                                            
                                        </div>
                                        <div class="col-md-8 col-sm-6 col-xs-12">
                                            <h4><?php echo $data->name; ?></h4>
                                            <ul class="list">
                                                <li><i class="fa fa-map-marker"></i> <?php echo $data->address; ?></li>
                                                <li><i class="fa fa-phone"></i> <?php echo $data->mobile_code . $data->mobile_no; ?></li>
        <!--                                                <li><i class="fa fa-star"></i> Rating</li>-->
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                            <?php if ($data->is_approved != 1) { ?>
                                                <a href="<?php echo base_url(); ?>reseller/add_business/<?php echo $data->id; ?>"><button class="btn btn-danger">Edit <i class="fa fa-edit"></i></button></a>                                            
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <img src="<?php echo base_url(); ?>include_files/norecordfound.png" class="img-responsive" />
                            <?php }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
        </div>
        <?php echo $footer; ?>
        <script src="<?php echo base_url(); ?>include_files/resseller/js/bootstrap.min.js"></script>        
        <script src="<?php echo base_url(); ?>include_files/resseller/js/resseller.js"></script>   
    </body>
</html>