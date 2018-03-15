

<div class="row">
    <div class="col-md-12">
        <div class="card mb-1">
            <div class="card-header">
                Add Slider
            </div>
            <div class="card-body">

                <form id="formID" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="">
                    <div class="form-group">
                        <label>Tittle</label>
                        <input class="form-control" id="formTittle" name="formTittle">
                    </div>
                    <div class="form-group">
                        <label>Descriptions</label>
                        <textarea id="formDescription2" name="formDescription" class="form-control" rows="3">
                        </textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Photo</label><br/>
                                <label class="btn btn-primary">
                                    Browse (image) &hellip; <input type="file" id="formPhotoSlider" name="userfile" style="display: none;" accept="image/*">
                                </label>
                            </div>
                            <input id="inputSlider" name="inputSlider" hidden readonly />
                            <input id="fileName" name="fileName" hidden readonly/>
                            <div id="previewPhotoSlider">
                            </div>
                        </div>
<!--                </form>-->
<!--                <form id="formID2" enctype="multipart/form-data" accept-charset="utf-8">-->
                        <div class="col-sm-6" style="border-left: 1px solid #ccc;">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="btnAddReadMore"> Add Read More
                                    </label>
                                </div>
                                <label id="styBtnPDF" class="btn btn-warning disabled">
                                    Browse (.pdf) &hellip; <input id="formReadMore" type="file" style="display: none;" accept="application/pdf" disabled>
                                </label>
                                <div id="viewPDF"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer small text-muted">
                <div style="text-align: right;">
                    <button class="btn btn-success" id="btnSaveSlider">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        tinymce.init({
            selector: '#formDescription',
            height: 150,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help wordcount'
            ],
            toolbar: 'undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css']
        });
        $('#inputSlider').val(moment().unix());
    });

    // $('#formPhotoSlider').change(function () {
    //
    // });

    $('#btnSaveSlider').click(function () {
        uploadImage();
    });

    function uploadImage() {

        if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $("#formID")[0] );

            var url = '<?php echo base_url('action/do-upload'); ?>';

            $.ajax({
                url : url,  // Controller URL
                type : 'POST',
                data : formData,
                async : false,
                cache : false,
                contentType : false,
                processData : false,
                success : function(data) {
                    var jsonData = JSON.parse(data);

                    if(typeof jsonData.success=='undefined'){
                        alert(jsonData.error);
                    } else {
                        alert('Data Tersimpan');
                    }

                }
            });

        } else {
            message("Your Browser Don't support FormData API! Use IE 10 or Above!");
        }
    }

    $('#btnAddReadMore').change(function () {

        if($(this).is(':checked')){
            $('#styBtnPDF').removeClass('disabled');
            $('#formReadMore').prop('disabled',false);

            // var file = $('#fileName').val();
            // if(file!=''){
            //     $('#styBtnPDF').removeClass('disabled');
            //     $('#formReadMore').prop('disabled',false);
            // } else {
            //     $('#formReadMore').prop('disabled',true);
            //     $(this).prop('checked',false);
            //     alert('Upload Image Slider Dulu');
            // }
            //
        } else {
            $(this).prop('checked',false);
            $('#styBtnPDF').addClass('disabled');
            $('#formReadMore').prop('disabled',true);
        }
    });

    $("#formPhotoSlider").change(function() {
        // uploadImage(this);
        readURL(this);
    });

    $("#formReadMore").change(function() {
        readURLFile(this);
    });

    function readURL(input) {

        if (input.files && input.files[0]) {
            var data = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                // $('#previewPhotoSlider').attr('src', e.target.result);
                $('#previewPhotoSlider').html('<table class="table table-bordered">' +
                    '<tr>' +
                    '<td colspan="2" style="text-align: center;">' +
                    '<img id="" src="'+e.target.result+'" style="max-width: 250px;" />' +
                    '</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td>'+data.name+'</td>' +
                    '<td style="width: 100px;">'+formatBytes(data.size,2)+'</td>' +
                    '</tr>' +
                    '</table>');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURLFile(input) {

        if (input.files && input.files[0]) {
            var data = input.files[0];
            console.log(data);
            $('#viewPDF').html('<table class="table table-bordered">' +
                '<tr>' +
                '<td>'+data.name+'</td>' +
                '<td style="width:100px;">'+formatBytes(data.size,2)+'</td>' +
                '</tr>' +
                '</table>');

        }
    }


</script>