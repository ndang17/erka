<h1>Home</h1>

<a href="<?php echo base_url('admin/home/add-new-slider'); ?>" class="btn btn-success">Add New Slider</a>

<pre>
    <?php print_r($this->session->all_userdata()); ?>
</pre>

<style>
.serialization li {
    border: 1px solid #ccc;
    list-style-type: none;
    margin-bottom: 5px;
    padding: 15px;
    padding-left:0px;
}
.serialization li:before {
    content: "\f03a";
    font-family: FontAwesome;
     display: inline-block;
    margin-left: 0px;
    width: 2.3em;
    /* border: 1px solid #ccc; */
    padding: 10px;
    background: #343a40;
    color: #fff;
    margin-left: -2.3em;

}
</style>

<hr/>
<ol class='serialization vertical'>
    <li data-id="1">
<!--        <div style="padding: 10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>-->
<!--        <div style="padding: 10px;">-->
        <span style="padding-left: 15px">
        <img src="<?php echo base_url('images/slider/s1.jpg'); ?>" style="max-width: 250px;">

        </span>
        <br/>
        <span style="padding-left: 15px;">
            <strong>Judul Judul Judul Judul Judul Judul Judul  Judul Judul Judul Judul Judul </strong>
        </span>
        <br/>
        <span style="padding-left: 15px;">
            <button class="btn btn-sm btn-info">Detail</button>
        </span>
<!--            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
<!--        </div>-->
    </li>
    <li data-id="2"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Second</li>
    <li data-id="3"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Third</li>
</ol>

<pre>
    <span id="serialize_output2"></span>
</pre>

<script>
    $(function  () {
        var group = $("ol.serialization").sortable({
            group: 'serialization',
            delay: 500,
            onDrop: function ($item, container, _super) {
                var data = group.sortable("serialize").get();

                console.log(data);

                var jsonString = JSON.stringify(data, null, ' ');

                $('#serialize_output2').text(jsonString);
                _super($item, container);
            }
        });

    });
</script>