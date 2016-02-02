@extends('layouts.admin')

@section('content')
<div id="page-wrapper" style="min-height: 118px;">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">用户编辑</h1>
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
              <form class="form-horizontal" action='/admin/user/{{ $user->id }}' method="POST">
              {{ csrf_field() }}
              <input type="hidden" name='_method' value='PUT'>
                <div class="form-group">
                  <label class="col-sm-2 control-label">名字</label>
                  <div class="col-sm-10">
                    <input type="text" name='name' class="form-control" value='{{ $user->name }}'></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">email</label>
                  <div class="col-sm-10">
                    <input type="email" name='email' class="form-control" value='{{ $user->email }}'></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">角色</label>
                  <div class="col-sm-10">
                    <select name='role_id' class="form-control">
                      @foreach ($roles as $key => $val)
                      <option 
            @if($val == $user->role_id)
              selected=true
            @endif
              value='{{ $val }}'>{{ $key }}
                      </option>
                      @endforeach
                    </select>
                  </div>

                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                  <div class="col-sm-10">
                    <input type="password" name='password' class="form-control" placeholder="不修改请留空！"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                  </div>
                </div>
              </form>
            </div>

            <!-- /.col-lg-6 (nested) --> </div>
          <!-- /.row (nested) --> </div>
        <!-- /.panel-body --> </div>
      <!-- /.panel --> </div>
    <!-- /.col-lg-12 --> </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection