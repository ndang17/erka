<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ERKA INTERINDO | Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/'); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>font-awesome/css/font-awesome.min.css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/'); ?>datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">

    <link href="<?php echo base_url('assets/toastr/toastr.min.css'); ?>" rel="stylesheet" type="text/css" />

    <style>
        .t-center {
            text-align: center;
        }
    </style>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('assets/'); ?>datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/'); ?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('assets/'); ?>js/sb-admin-datatables.min.js"></script>
<!--    <script src="--><?php //echo base_url('assets/'); ?><!--js/sb-admin-charts.min.js"></script>-->

    <script src="<?php echo base_url('assets/'); ?>tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>moment/moment.js"></script>
    <script src="<?php echo base_url('assets/'); ?>toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function () {
            window.base_url_js = '<?php echo base_url(); ?>';
            window.UpdateBy = '<?php echo $this->session->userdata("Email"); ?>';
            window.UpdateAt = moment().format('YYYY-MM-DD HH:mm:ss');
        });

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        function loadingButton(element) {
            $(element).prop('disabled',true).html('<i class="fa fa-refresh fa-spin fa-fw"></i> Loading...');
        }
    </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="javascript:void(0)"><b>ERKA</b> Interindo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item <?php if($this->uri->segment(2)=='home'){ echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url('admin/home'); ?>">
                    <i class="fa fa-fw fa-home" aria-hidden="true"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=='about-us'){ echo 'active';} ?>">
                <a class="nav-link" href="<?php echo base_url('admin/about-us'); ?>">
                    <i class="fa fa-fw fa-info-circle" aria-hidden="true"></i>
                    <span class="nav-link-text">About</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-wrench" aria-hidden="true"></i>
                    <span class="nav-link-text">Services</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-database"></i>
                    <span class="nav-link-text">Projects</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Teams</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-address-book-o"></i>
                    <span class="nav-link-text">Clients</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-phone-square"></i>
                    <span class="nav-link-text">Contact Us</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="<?php echo base_url(''.$this->uri->segment(2)); ?>" target="_blank" class="btn btn-primary" type="button">
                    Preview Web On New Tab
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/users'); ?>">
                    <i class="fa fa-users" aria-hidden="true"></i> Users
                </a>
            </li>
            <li class="nav-item">
<!--                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">-->
                <a class="nav-link" href="<?php echo base_url('admin/logOut'); ?>">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">

        <ol class="breadcrumb">
            <?php
                $segmentArr = $this->uri->segment_array();
                if(count($segmentArr)>1){
                    for($i=2;$i<=count($segmentArr);$i++){

                        if($i==count($segmentArr)){
                            echo '<li class="breadcrumb-item active">'.ucwords(str_replace('-',' ',$this->uri->segment($i))).'</li>';
                        } else {
                            echo '<li class="breadcrumb-item"><a href="'.$url_back.'">'.ucwords(str_replace('-',' ',$this->uri->segment($i))).'</a></li>';
                        }

//                        $act = ($i==count($segmentArr)) ? 'active' : '';
//                        $urlB = ($i==count($segmentArr)) ? '' : ;
                    }
                }

            ?>


        </ol>

        <?php echo $content; ?>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © <b>ERKA</b> Interindo 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalGLobal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                <h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
<!--            </div>-->
            <div class="modal-body">
                ...
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
        </div>
    </div>
</div>

</body>

</html>
