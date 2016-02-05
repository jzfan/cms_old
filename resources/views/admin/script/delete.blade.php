<script type="text/javascript">
    function deleteRow(obj){
        var y = confirm('确定删除？？');
        if(y !== true) return;
        var id = $(obj).attr('row_id');
        var row = $(obj).parents('tr');
        var form = $('#form_del');
        var url = form.attr('action').replace(':ID', id);
        var data = form.serialize();        
        row.fadeOut();
        $.post(url, data, function(result){
            $('.alert').addClass('alert-success').html('<strong>' + result + ' 删除成功！</strong>').show();
        }).fail(function () {
            $('.alert').addClass('alert-danger').html('<strong>ID:' + id + ' 删除失败！！</strong>').show();
            row.fadeIn();
        });
        //重载 table
        $('.buttons-reload').click();
    }
</script>