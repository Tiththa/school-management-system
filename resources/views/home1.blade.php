@extends('layouts.app')

@section('content')
<div class="container">
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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Barcode</th>


      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>

          <td>{{ $user->id }}</td>
          <td>{{ $user->name}}</td>
          <td>{{ $user->email }}</td>

          <td><img src="data:image/png;base64,{{DNS1D::getBarcodePNG($user->id, 'C39')}}" alt="barcode" /></td>


        </tr>
        @endforeach
      </tbody>
    </table>


    </div>

</div>
@endsection
