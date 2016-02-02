<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            @include('admin.partial.alert')
            <div class="panel panel-default">
                <div class="panel-heading">{{ $head }}</div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">{!! $dataTable->table() !!}</div>

                </div>
                <!-- /.panel-body --> </div>
            <!-- /.panel --> </div>
        <!-- /.col-lg-12 --> </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<form id='form_del' action='/admin/{{$path}}/:ID'>
    {!! csrf_field() !!}
    <input type="hidden" name='_method' value='DELETE'></form>