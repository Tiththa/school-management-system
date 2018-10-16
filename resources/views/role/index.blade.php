@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Roles</li>
@endsection
@section('content')
    <hr>
		<h1 class="text-center">Roles</h1>
	<hr>

	<a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>

	<table class= "table table-hover">
		<thead>
			<th>Name</th>
			<th>Department</th>
			<th>Salary</th>
			<th>Edit</th>
			<th>Trash</th>
		</thead>

		<tbody>
			@if($roles->count()> 0)
				@foreach($roles as $role)
					<tr>
						<td><a href="{{ route('roles.show', ['slug' => $role->slug]) }}" >{{ $role->name}}</a></td>

						<td>{{ $role->department->name }}</td>
						<td>{{ $role->salary }}</td>
						<td>
							<a href="{{ route('roles.edit', ['id' => $role->id]) }}" class="btn btn-info">Edit</a>
						</td>
						<td>
							<form action="{{ route('roles.destroy', ['id' => $role->id]) }}" method="POST">
								{{csrf_field() }}
								{{method_field('DELETE')}}
								<button class="btn btn-danger">Bin</button>
							</form>
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
	<div class="text-center">{{ $roles->links() }}</div>
@endsection
