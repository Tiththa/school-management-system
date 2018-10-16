@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Edit Department</li>
@endsection
@section('content')
  <div class="container-fluid">

<div class="panel panel-default col-lg-8">
	<div class="panel-heading">
		<b> Edit Department:</b> {{ $department->name }}
   </div>

   <div class="panel-body">
		<form action ="{{ route('departments.update', ['id'=>$department->id]) }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="{{ $department->name }}" class="form-control">
			</div>

			<div class="form-group">
				<div class="text-center">
					<button class ="btn.btn.success" type="submit">Update Department</button>
				</div>
			</div>

		</form>
	</div>
</div>
</div>

@endsection
