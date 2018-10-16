@extends('layouts.app')

@section('content')
  <div class="container-fluid">

	<hr>
		<h1 class="text-center">All Users</h1>
    <div class="col-md-8 ">
        <form action="{{route('searchusers')}}" method="get">
          <div class="input-group">
            <input type="search" class="form-control" name="search">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary">Search</button>
            </span>
          </div>
        </form>
    </div>
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
