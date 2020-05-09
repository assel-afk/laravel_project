@extends('admin.appmain')

@section('content')

<div class="container">
  <h3 class="text-center">Users</h3>
  <a class="btn btn-success" href="{{route('admin.create')}}">Crate new User</a>
  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <table class="table">
        <thead>
          <tr>
            <td>Name</td>
            <td>Surname</td>
            <td>User IIN</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->user_iin}}</td>
            <td>
              <a href="{{route('admin.show', $user->id)}}">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a href="{{route('admin.edit', $user->id)}}">
                <i class="glyphicon glyphicon-edit"></i>
              </a>
              <form method="post" action="{{route('admin.destroy', $user->id)}}">
                  @csrf
                <button onclick="return confirm('Are you sure?')">
                  <i class="glyphicon glyphicon-remove"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>



<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in ADMIN!
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
