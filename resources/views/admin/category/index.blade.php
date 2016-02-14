@extends('layouts.admin')

@section('content')
    {{-- @include('admin.partial.datatable', ['head'=>'分类', 'path'=>'category']) --}}
<div id="page-wrapper">
    <br>
    <div class="row">
        <div class="col-lg-12">
            @include('admin.partial.alert')
            <div class="panel panel-default">
                <div class="panel-heading">分类</div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    	<table class="table table-striped table-bordered table-hover">
                    		<tr>
                    			<td>id</td>
                    			<td>name</td>
                    			<td width='200'>action</td>
                    		</tr>
                    		@foreach ($tree as $cate)

                    		<tr>
                    			<td>{{ $cate['id'] }}</td>
                    			<td>{{ str_repeat('----', $cate['level']) . ' '}} 
                                    <span class="label label-{{ $cate['color'] }}">{{$cate['name'] }}</span> 
                                </td>
                    			<td><div class="btn-group" role="group">
<a class='btn btn-info' href="/admin/category/{{ $cate['id'] }}/edit"><i class='fa fa-edit'></i>编辑</a>
<a row_id='{{ $cate['id'] }}' class='btn btn-warning' onclick='deleteRow(this)'><i class='fa fa-trash-o'></i>删除</a>
</div></td>
                    		</tr>
                    		@endforeach
                    	</table>


                </div>
                <!-- /.panel-body --> </div>
            <!-- /.panel --> </div>
        <!-- /.col-lg-12 --> </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<form id='form_del' action='/admin/category/:ID'>
    {!! csrf_field() !!}
    <input type="hidden" name='_method' value='DELETE'></form>
@endsection

@section('script')
    {{-- {!! $dataTable->scripts() !!} --}}
    @include('admin.script.delete')
@endsection