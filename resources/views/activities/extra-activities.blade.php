@extends('layouts.app')

@section('content')
  <div class="container-fluid">
	<hr>
		<h1 class="text-center">Extra Curricular Activities</h1>
	<hr>
  <a href="{{ route('extra-activities-add') }}" class="btn btn-primary">Add Activity</a>

  <hr>

	<!-- <a href="{{ route('employees.create') }}" class="btn btn-primary">Create</a>
	<a href="{{ route('import') }}" class="btn btn-primary">Import CSV</a>
	<a href="{{ route('employees.bin') }}" class="btn btn-danger">Recycle Bin</a> -->

	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>
			<th>Activity</th>
			<th>Name</th>

			<th>Position</th>
			<th>Year</th>
			<th>Teacher-In-Charge</th>
      <th></th>
      <th></th>
		</thead>

		<tbody>
			@if($activities->count()> 0)
				@foreach($activities as $activity)
					<tr>
						<td>{{ $activity->activity_name }}</td>
						<td>{{ $activity->name }}</td>

						<td>{{ $activity->position }}</td>
            <td>{{ $activity->year }}</td>
            <td>{{ $activity->tic }}</td>
            <td><a href="{{ route('edit.extra', ['user_id' => $activity->id]) }}" class="btn btn-primary text-white ">Edit</a></td>
            <td><a href = '/extra_activities/{{ $activity->id }}' class="btn btn-danger text-white ">Delete</a></td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			@endif
		</tbody>
	</table>
	<div class="text-center">{{ $activities->links() }}</div>
	</div>
@endsection
