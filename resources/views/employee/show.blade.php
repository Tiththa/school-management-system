@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Employee Details</li>
@endsection
@section('content')
  <div class="container-fluid">
	<div class="col-lg-12">
		<h1 class="page-header">Employee: {{ $employee->name }}<h1>
	</div>

	@auth
		<a href="{{ route('employees.edit',['id'=>$employee->id]) }}" class="btn btn-primary">Edit</a>
		<a href="{{ route('employees.destroy',['id'=>$employee->id]) }}" class="btn btn-danger">Delete</a>
		<a href="{{ route('payrolls.pdf',['id'=>$employee->id]) }}" class="btn btn-info">Download PDF</a>
	@endauth

	<br>
	<br>

	<table style="width:100% ">
		<tr>
			<th>Name:</th>
			<td>{{ $employee->name }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $employee->email }}</td>
		</tr>
		<tr>
			<th>Department</th>
			<td>{{ $employee->role->department->name }}</td>
		</tr>
		<tr>
			<th>Role</th>
			<td>{{ $employee->role->name }}</td>
		</tr>
		<tr>
			<th>Salary</th>
			<td>{{ $employee->role->salary }}</td>
		</tr>
		<tr>
			<th>street</th>
			<td>{{ $employee->street }}</td>
		</tr>
		<tr>
			<th>town</th>
			<td>{{ $employee->town }}</td>
		</tr>
		<tr>
			<th>city</th>
			<td>{{ $employee->city }}</td>
		</tr>
		<tr>
			<th>country</th>
			<td>{{ $employee->country }}</td>
		</tr>
	</table>
	</div>
@endsection
