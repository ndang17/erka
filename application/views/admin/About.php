<!--<pre>-->
<!--    --><?php //print_r($about); ?>
<!--</pre>-->

<div class="form-group">
    <label>Tittle</label>
    <input type="text" readonly hidden id="formID" value="<?php echo $about['ID']; ?>">
    <input type="text" class="form-control" id="formTittle" value="<?php echo $about['Tittle']; ?>">
</div>

<div class="form-group">
    <label>Description</label>
    <textarea id="formDescription" name="formDescription"><?php echo $about['Description']; ?></textarea>
</div>

<div style="text-align: right;">
    <button class="btn btn-success" id="btnSaveAbout">Save</button>
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
    });

    $('#btnSaveAbout').click(function () {

        var process= [];

        var ID = $('#formID').val();
        var formTittle =$('#formTittle').val(); if(formTittle==''){process.push(0);$('#formTittle').css('border','1px solid red');}
        tinyMCE.triggerSave();
        var formDescription =$('#formDescription').val(); if(formDescription==''){process.push(0);$('#mceu_16').css('border','1px solid red');}

        if($.inArray(0,process)==-1){
            loadingButton('#btnSaveAbout');
            $('#formTittle,#formDescription').prop('disabled',true);
            var formData = {
                ID : ID,
                Data : {
                    Tittle : formTittle,
                    Description : formDescription,
                    UpdateBy : UpdateBy,
                    UpdateAt : UpdateAt
                }

            };

            var url = base_url_js+'admin/__crudAboutUs';
            $.post(url,{formData:formData},function (result) {
                setTimeout(function () {
                    $('#btnSaveAbout').prop('disabled',false).html('Save');
                    $('#formTittle,#formDescription').prop('disabled',false);
                },1000);
            });
        } else {
            setTimeout(function () {
                $('#formTittle,#mceu_16').css('border','1px solid #ccc')
            },5000);
        }

    });
</script>