
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


<ol class='serialization vertical'>
    <?php foreach ($services AS $item) { ?>
    <li data-id="<?php echo $item['ID']; ?>">
        <!--        <div style="padding: 10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>-->
        <!--        <div style="padding: 10px;">-->
        <span style="padding-left: 15px">
        <img src="<?php echo base_url('images/services/'.$item['Photo']); ?>" style="max-width: 35px;">

        </span>

        <span style="padding-left: 15px;">
            <strong><?php echo $item['Tittle']; ?></strong>
        </span>
        <span style="padding-left: 15px;float: right;">
            <button class="btn btn-sm btn-info">Detail</button>
        </span>
        <!--            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
        <!--        </div>-->
    </li>
    <?php } ?>
</ol>

<script>
    $(function  () {
        var group = $("ol.serialization").sortable({
            group: 'serialization',
            delay: 500,
            onDrop: function ($item, container, _super) {
                var data = group.sortable("serialize").get();

                changeOrder(data);

                // var jsonString = JSON.stringify(data, null, ' ');
                //
                // $('#serialize_output2').text(jsonString);
                _super($item, container);
            }
        });

    });

    function changeOrder(dataArray) {
        var url = base_url_js+'action/services/__changeOrder';
        $.post(url,{dataArray:dataArray},function () {

        });
    }
</script>
