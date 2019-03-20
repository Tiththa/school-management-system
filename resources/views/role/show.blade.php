@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Role Information</li>
@endsection
@section('content')
    <div class="col-lg-12">
		<h1 class="page-header">Role: {{ $role->name }}</h1>
		<h2>Salary: {{ $role->salary }}</h2>
	</div>
	<br>
	<table class= "table table-hover">
		<thead>
			<th>Employee</th>
			<th>Email</th>
			<th>Full-Time</th>
			<th>Department</th>
		</thead>

		<tbody>
			@if($role->employees->count() > 0)
				@foreach($role->employees as $employee)
					<tr>
						<td>{{ $employee->name }}</td>
						<td>{{ $employee->email }}</td>
						<td>@if($employee->full_time)
								<p> Yes</p>
							@else
								<p>Part-Time</p>
							@endif
						</td>
						<td>{{ $role->department->name }}</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">No Employee assigned to this role yet</th>
				</tr>
			@endif
		</tbody>
	</table>

@endsection
