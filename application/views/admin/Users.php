
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Add New User</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input id="formName" class="form-control" type="text"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" id="formEmail" type="email">
                </div>
                <div class="form-group">
                    <label>Set Password</label>
                    <input class="form-control" id="formPassword" type="password">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success btn-block" id="btnSaveUsers">Save</button>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">List User</div>
            <div class="card-body" style="min-height: 100px;">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
<!--                        <th class="t-center" style="width: 1%;">No</th>-->
                        <th class="t-center">User</th>
<!--                        <th class="t-center">Email</th>-->
                        <th class="t-center" style="width: 25%;">Acton</th>
                    </tr>
                    </thead>
                    <tbody id="dataUsers"></tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        loadDataUsers();
    });

    $('#btnSaveUsers').click(function () {
        var process = [];

        var formName = $('#formName').val(); if(formName==''){process.push(0);$('#formName').css('border','1px solid red');}
        var formEmail = $('#formEmail').val(); if(formEmail==''){process.push(0);$('#formEmail').css('border','1px solid red');}
        var formPassword = $('#formPassword').val(); if(formPassword==''){process.push(0);$('#formPassword').css('border','1px solid red');}

        if($.inArray(0,process)==-1){

            loadingButton('#btnSaveUsers');
            $('#formName,#formEmail,#formPassword').prop('disabled',true);

            var formData = {
                action : 'add',
                Data : {
                    Name : formName,
                    Email : formEmail,
                    Password : formPassword,
                    Status : 1,
                    UpdateBy : UpdateBy,
                    UpdateAt : UpdateAt
                }
            };

            var url = base_url_js+'admin/__crudUsers';
            $.post(url,{formData:formData},function (result) {

                if(result!=0){
                    toastr.success('Data Saved','Success');
                    loadDataUsers();
                    setTimeout(function () {
                        $('#btnSaveUsers').html('Save').prop('disabled',false);
                        $('#formName,#formEmail,#formPassword').prop('disabled',false).val('');
                    },1000);
                } else {
                    toastr.warning('Email is Exist','Warning');
                    setTimeout(function () {
                        $('#btnSaveUsers').html('Save').prop('disabled',false);
                        $('#formName,#formEmail,#formPassword').prop('disabled',false);
                    },1000);
                }

            });
        } else {
            setTimeout(function () {
                $('#formName,#formEmail,#formPassword').css('border','1px solid #ccc');
                // alert('Form Required');
            },5000);
        }


    });

    $(document).on('click','.btn-reset',function () {
        var ID = $(this).attr('data-id');
        var Email = $(this).attr('data-email');
        $('#modalGLobal .modal-dialog').addClass('modal-sm');
        $('#modalGLobal .modal-body').html('<div class="form-group">' +
            '<label>New Password</label>' +
            '<input type="text" class="form-control" id="formNewPassword">' +
            '</div> <div class="form-group" style="text-align: right;">' +
            '<button class="btn btn-success" data-id="'+ID+'" data-email="'+Email+'" id="btnReset">Reset</button> | ' +
            '<button class="btn btn-default" id="btnCancle" data-dismiss="modal">Cancle</button>' +
            '</div> ');

        $('#modalGLobal').modal({
            show : true,
            backdrop : 'static'
        });
    });
    
    $(document).on('click','#btnReset',function () {

        var ID = $(this).attr('data-id');
        var Email = $(this).attr('data-email');
        var NewPassword = $('#formNewPassword').val();
        
        var formData = {
            action : 'reset',
            ID : ID,
            Email : Email,
            NewPassword : NewPassword,
            UpdateBy : UpdateBy,
            UpdateAt : UpdateAt
        };

        loadingButton('#btnReset');
        $('#btnCancle').prop('disabled',true);
        var url = base_url_js+'admin/__crudUsers';
        $.post(url,{formData:formData},function (result) {
            toastr.success('Updated','Success');
            setTimeout(function () {
                $('#modalGLobal').modal('hide');
                if(Email==UpdateBy){
                    window.location.href= base_url_js+'admin/logOut';
                }
            },1000);
        });
    });
    
    $(document).on('click','.btn-delete',function () {
        var ID = $(this).attr('data-id');
        $('#modalGLobal .modal-dialog').addClass('modal-sm');
        $('#modalGLobal .modal-body').html('<div style="text-align:center;">Delete user? ' +
            '<button data-id="'+ID+'" id="btnDeleteYes" class="btn btn-primary">Yes</button> ' +
            '<button class="btn btn-default" id="btnDeleteNo" data-dismiss="modal">No</button></div>');

        $('#modalGLobal').modal({
            show : true,
            backdrop : 'static'
        });
    });

    $(document).on('click','#btnDeleteYes',function () {
        var ID = $(this).attr('data-id');
        var formData = {
            action : 'delete',
            ID : ID
        };

        loadingButton('#btnDeleteYes');
        $('#btnDeleteNo').prop('disabled',true);

        var url = base_url_js+'admin/__crudUsers';
        $.post(url,{formData:formData},function (result) {
            loadDataUsers();
            setTimeout(function () {
                $('#modalGLobal').modal('hide');
            },1000);


        });
    });

    function loadDataUsers() {

        var formData = {
            action : 'read'
        };

        var url = base_url_js+'admin/__crudUsers';
        $.post(url,{formData:formData},function (result) {

            var dis = (result.length==1) ? 'disabled' : '';

            var tr = $('#dataUsers');
            tr.html('');
            for(var i=0;i<result.length;i++){

                var data = result[i];
                var dis2 = (data.Email==UpdateBy) ? 'disabled' : '';

                tr.append('<tr>' +
                    '<td><b>'+data.Name+'</b><br/><span style="color: blue;">'+data.Email+'<span></td>' +

                    '<td class="t-center">' +
                    '<button data-id="'+data.ID+'" class="btn btn-danger btn-delete" '+dis+' '+dis2+'><i class="fa fa-trash" aria-hidden="true"></i></button> | ' +
                    '<button data-id="'+data.ID+'" data-email="'+data.Email+'" class="btn btn-warning btn-reset"><i class="fa fa-retweet" aria-hidden="true"></i></button>' +
                    '</td>' +
                    '</tr>');
            };

        });

    }
</script>