@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Edit Role</li>
@endsection
@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit Role : {{$role->name}}
       </div>

	   <div class="panel-body">
			<form action ="{{ route('roles.update', ['id'=>$role->id]) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" value="{{$role->name}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="salary">Salary</label>
					<input type="number" name="salary" value="{{$role->salary}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="department">Select a department</label>
					<select name="department_id" id="department"  cols="5" rows="5" class="form-control">
						@foreach($departments as $department)
							<option value="{{ $department->id }}"
								@if($role->department->id == $department->id)
									selected
								@endif
							   >{{ $department->name }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<div class="text-center">
						<button class ="btn.btn.success" type="submit">Update</button>
					</div>
				</div>
			</form>
	    </div>
	</div>

@endsection
