@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Employees</li>
@endsection
@section('content')
  <div class="container-fluid">
	<hr>
		<h1 class="text-center">Employees</h1>
	<hr>

	<a href="{{ route('employees.create') }}" class="btn btn-primary">Create</a>
	<a href="{{ route('import') }}" class="btn btn-primary">Import CSV</a>
	<a href="{{ route('employees.bin') }}" class="btn btn-danger">Recycle Bin</a>

	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Edit</th>
			<th>Trash</th>
		</thead>

		<tbody>
			@if($employees->count()> 0)
				@foreach($employees as $employee)
					<tr>
						<td><a href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->name }}</a></td>
						<td>{{ $employee->email }}</td>
						<td>{{ $employee->role->name }}</td>
						<td>
							<a href="{{ route('employees.edit', ['id' => $employee->id]) }}" class="btn btn-info">Edit</a>
						</td>
						<td>
							<form action="{{ route('employees.destroy', ['id' => $employee->id]) }}" method="POST">
								{{csrf_field() }}
								{{method_field('DELETE')}}
								<button class="btn btn-danger">Bin</button>
							</form>
						</td>
						<td>
							<a href="{{ route('payrolls.show', ['id' => $employee->id]) }}" class="btn btn-info">Payroll</a>
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
	<div class="text-center">{{ $employees->links() }}</div>
	</div>
@endsection
