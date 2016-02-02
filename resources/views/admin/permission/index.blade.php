@extends('layouts.admin')

@section('content')
    @include('admin.partial.datatable', ['head'=>'用户权限', 'path'=>'permission'])

@endsection

@section('script')
    {!! $dataTable->scripts() !!}
    @include('admin.script.delete')
@endsection