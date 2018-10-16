@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Departments</li>
@endsection
@section('content')


  <div class="container-fluid">

   <hr>
	<h1 class="text-center">Departments</h1>
	<hr>
	<a href="{{ route('departments.create') }}" class="btn btn-primary">Create</a>
	<table class= "table table-hover">
		<thead>
			<th>Department name</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@if($departments->count() > 0)
				@foreach($departments as $department)
					<tr>
						<td>
							<a href="{{ route('departments.show', ['slug' => $department->slug ]) }}">{{ $department->name }}</a>
						</td>
						<td>
							<a href="{{ route('departments.edit', ['id' => $department->id ]) }}" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td>
							<form action="{{ route('departments.destroy', ['id' => $department->id ]) }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}

								<button class="btn btn-xs btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No Departments yet</th>
				</tr>
			@endif
		</tbody>
	</table>
		<div class="text-center">{{ $departments->links() }}</div>
</div>
</div>
@endsection
