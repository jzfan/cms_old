@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
<div class="col-md-2">
    


<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Users
</button>
<div class="collapse" id="collapseExample">
        <ul class="list-group">
        <li class="list-group-item"><a class='btn btn-default' href=''>list</a></li>
        <li class="list-group-item"><a class='btn btn-default' href=''>role</a></li>
        <li class="list-group-item"><a class='btn btn-default' href=''>permission</a></li>
        </ul>
</div>

</div>

    </div>
</div>
@endsection