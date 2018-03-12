<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ERKA INTERINDO | Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/'); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>animate/animate.css" rel="stylesheet">


    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>moment/moment.js"></script>

    <script>
        $(document).ready(function () {
            window.base_url_js = '<?php echo base_url(); ?>';
            $.fn.extend({
                animateCss: function(animationName, callback) {
                    var animationEnd = (function(el) {
                        var animations = {
                            animation: 'animationend',
                            OAnimation: 'oAnimationEnd',
                            MozAnimation: 'mozAnimationEnd',
                            WebkitAnimation: 'webkitAnimationEnd',
                        };

                        for (var t in animations) {
                            if (el.style[t] !== undefined) {
                                return animations[t];
                            }
                        }
                    })(document.createElement('div'));

                    this.addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass('animated ' + animationName);

                        if (typeof callback === 'function') callback();
                    });

                    return this;
                },
            });
        });
    </script>
</head>

<body class="bg-dark">

<?php echo $content; ?>
</body>


</html>
