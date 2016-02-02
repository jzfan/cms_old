@extends('layouts.admin')

@section('content')
    @include('admin.partial.datatable', ['head'=>'用户角色', 'path'=>'role'])

@endsection

@section('script')
    {!! $dataTable->scripts() !!}
    @include('admin.script.delete')
@endsection