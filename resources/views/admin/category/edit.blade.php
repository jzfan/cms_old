@extends('layouts.admin')

@section('content')
<div id="page-wrapper" style="min-height: 118px;">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">分类编辑</h1>
    </div>
    <!-- /.col-lg-12 --> </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Basic Form Elements</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <form class="form-horizontal" action='/admin/category/{{ $category->
                id }}' method="POST">
              {{ csrf_field() }}
                <input type="hidden" name='_method' value='PUT'>
                <input type="hidden" name='id' value='{{ $category->id }}'>
                <div class="form-group">
                  <label class="col-sm-2 control-label">名字</label>
                  <div class="col-sm-10">
                    <input type="text" name='name' class="form-control" value='{{ $category->name }}'></div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">分类</label>
                  <div class="col-sm-10">
                    <select name='role_id' class="form-control">
                      <option 
            @if($category->
                        pid == 0)
              selected=true
            @endif
                    >顶级分类
                      </option>
                      @foreach ($tree as $key => $val)
                      <option 
            @if($val['id'] == $category->
                        pid)
              selected=true
            @endif
              value="{{ $val['id'] }}">
              {{ str_repeat('--', $val['level']) }} {{ $val['name'] }}
                      </option>
                      @endforeach
                    </select>
                  </div>

                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <a href='javascript:history.back()' class="btn btn-default">返回</a>
                    <button type="submit" class="btn btn-primary">提交</button>
                  </div>
                </div>

              </form>
            </div>

            <!-- /.row --> </div>
          <!-- /.row (nested) --> </div>
        <!-- /.panel-body --> </div>
      <!-- /.panel --> </div>
    <!-- /.col-lg-12 --> </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection