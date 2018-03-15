
<div class="row">
    <div class="col-md-12">

        <div class="card mb-0">
            <div class="card-header">
                Add Service
            </div>
            <div class="card-body" style="min-height: 100px;">

                <form id="formID" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="">
                    <div class="row">
                        <div class="col-sm-4">
                            <input id="formUnix" name="formUnix" class="hide" hidden readonly>
                            <div class="form-group">
                                <label>Photo</label><br/>
                                <label class="btn btn-primary">
                                    Browse (image) &hellip; <input type="file" id="formPhoto" name="userfile" style="display: none;" accept="image/*">
                                </label>
                            </div>
                            <div id="previewImage"></div>
                        </div>
                        <div class="col-sm-8" style="border-left: 1px solid #ccc;">
                            <div class="form-group">
                                <label>Tittle</label>
                                <input class="form-control" id="formTittle" name="formTittle">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="formDescription" name="formDescription"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer small text-muted">
                <div style="text-align: right;">
                    <button class="btn btn-success" id="btnSaveServices">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $('#formUnix').val(moment().unix());

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
    });

    $("#formPhoto").change(function() {
        // uploadImage(this);
        previewImageBeforeUpload(this,'#previewImage');
    });



    $('#btnSaveServices').click(function () {

        var file = $('#formPhoto').val();
        var formTittle = $('#formTittle').val();
        tinyMCE.triggerSave();
        var formDescription = $('#formDescription').val();
        // console.log(file);
        if(file!='' && formTittle!='' && formDescription!=''){
            saveServices();
        } else {
            alert('Isi semua fild');
        }



        // saveServices();
    });

    function saveServices() {

        tinyMCE.triggerSave();
        $('#formDescription').val()
        // $('#form2').val($('#formDescription').val());

        if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $("#formID")[0] );


            // console.log(formData);
            //
            // return false;
            var url = '<?php echo base_url('action/services/__addNewServices'); ?>';

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
                        window.location.href = base_url_js+'admin/services/add-new-services';
                    }

                }
            });

        } else {
            message("Your Browser Don't support FormData API! Use IE 10 or Above!");
        }
    }
</script>