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
                            <h4 class="page-title">Businesses</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url(); ?>auth_admin/dashboard">Dashboard</a></li>
                                <li class="active">Businesses</li>
                            </ol>
                        </div>                        
                    </div>
                    <div class="row">                                         
                        <div class="white-box">
                            <button class="fcbtn btn btn-success btn-outline btn-1d pull-right" onclick="window.location.href = '<?php echo base_url(); ?>auth_admin/add_business'" >Add Business</button>
                            <div class="table-responsive">
                                <table class="table product-overview" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No.</th>
                                            <th>Other No.</th>
                                            <th>Addded Date</th>
                                            <th>Is Approved</th>
                                            <th>Detail ?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    </body>
</html>