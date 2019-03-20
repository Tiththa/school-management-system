@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Create Roles</li>
@endsection
@section('content')

	<hr>
		<h1 class="text-center">Roles</h1>
	<hr>
	<form action ="{{ route('roles.store') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group col-lg-6">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group col-lg-6">
			<label for="salary">Salary</label>
			<input type="number" name="salary" class="form-control">
		</div>

		<div class="form-group col-lg-12">
			<label for="department">Select a department</label>
			<select name="department_id"  cols="5" rows="5" class="form-control">
				@foreach($departments as $department)
					<option value="{{ $department->id}}">{{ $department->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<div class="text-center">
				<button class ="btn.btn.success" type="submit">Create</button>
			</div>
		</div>
	</form>
@endsection
