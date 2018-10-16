@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            Student Overview
          </a>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
          <div class="row">


            <div class="col-lg-3 text-center">
              <div class="card">
                <div class="card-header bg-info text-white">Users</div>
                <div class="card-body">{{ $usersCount }}</div>
              </div>
            </div>


          </div>
          </div>
        </div>
      </div>
	<hr>
		<h1 class="text-center">Students</h1>
	<hr>
  @if (session('success'))
    <div class="alert alert-danger">
      {{ session('success') }}
    </div>
  @endif


	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Address</th>
			<th>Phone Number</th>
		</thead>

		<tbody>
			@if($users->count()> 0)
				@foreach($users as $user)
					<tr>
						<td><a href="{{ route('user.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->role }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->phone_number }}</td>
            <td><a href="{{ route('add-users-achievements-view', ['id' => $user->id]) }}" class="btn btn-success text-white">Achievement</a></td>
            <td><a href="{{ route('add.subject', ['id' => $user->id]) }}" class="btn btn-success text-white">Add Subjects</a></td>
            <td>
							<a href="{{ route('edit-register-view', ['id' => $user->id]) }}" class="btn btn-primary text-white">Edit</a>

						</td>

						<td>
              <a href = '/users/delete/{{ $user->id }}' class="btn btn-danger text-white ">Delete</a>
						</td>

					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			@endif
		</tbody>
	</table>
	<div class="text-center">{{ $users->links() }}</div>
	</div>
@endsection
