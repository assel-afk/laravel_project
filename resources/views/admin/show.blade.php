@extends('admin.appmain')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <h3>{{$user->name}}</h3>
        <h3>{{$user->surname}}</h3>

      </div>
    </div>

  </div>
</div>

@endsection
