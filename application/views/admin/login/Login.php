<div class="container">
    <div class="card card-login mx-auto mt-5">
<!--        <div class="card-header">Login</div>-->
        <div class="card-body">
            <div style="text-align: center;">
                <img src="<?php echo base_url('images/logo/ERKA-INTERINDO.jpg'); ?>" style="max-width: 150px;">
                <hr/>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" id="formEmail" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="formPassword" type="password" placeholder="Password">
                </div>

                <a class="btn btn-primary btn-block" id="btnLogin" href="javascript:void(0)">Login</a>
            </form>
            <div class="text-center">
                <a class="d-block small" href="<?php echo base_url('admin/forgot-password'); ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

<script>
    
    $('#btnLogin').click(function () {
        loginPage();
    });

    $('#formEmail,#formPassword').keypress(function (e) {

        if (e.which == 13) {
            loginPage();
            return false;    //<---- Add this line
        }
    });

    function loginPage() {
        var process = [];
        var formEmail = $('#formEmail').val(); if(formEmail==''){process.push(0);$('#formEmail').css('border','1px solid red');}
        var formPassword = $('#formPassword').val(); if(formPassword==''){process.push(0);$('#formPassword').css('border','1px solid red');}
        var dateNow = moment().format('YYYY-MM-DD HH:mm:ss');


        if($.inArray(0,process)==-1){
            $('#btnLogin').html('<i class="fa fa-refresh fa-spin fa-fw"></i> Loading...');
            $('#formEmail,#formPassword,#btnLogin').prop('disabled',true);

            var url = base_url_js+'admin/auth';
            $.post(url,{email:formEmail,password:formPassword,dateNow:dateNow},function (result) {
                setTimeout(function () {
                    $('#btnLogin').html('Login');
                    $('#formEmail,#formPassword,#btnLogin').prop('disabled',false);
                },1000);
                if(result==1){
                    window.location.href = base_url_js+'admin/home';
                } else {
                    $('.card').animateCss('shake');
                    setTimeout(function () {
                        $('#formEmail,#formPassword').css('border','1px solid #ccc');
                        alert('Email & Password Not Match');
                    },5000);
                }

            });
        } else {
            $('.card').animateCss('shake');
            setTimeout(function () {
                $('#formEmail,#formPassword').css('border','1px solid #ccc');
            },5000);
            // alert('Form Required');
        }


    }
</script>