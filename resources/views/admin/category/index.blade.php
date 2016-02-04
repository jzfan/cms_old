@extends('layouts.admin')

@section('content')
    @include('admin.partial.datatable', ['head'=>'分类', 'path'=>'category'])

@endsection

@section('script')
    {!! $dataTable->scripts() !!}
    @include('admin.script.delete')
@endsection