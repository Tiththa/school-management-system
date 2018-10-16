@extends('layouts.app')
<title>Student Achievements</title>
@section('content')
  <div class="container-fluid">

	<hr>
		<h1 class="text-center">Achievements</h1>
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
			<th>Student Name</th>
			<th>Achievement</th>
			<th>Year</th>

		</thead>

		<tbody>
			@if($achievements->count()> 0)
				@foreach($achievements as $achievement)
					<tr>

						<td>{{ $achievement->name }}</td>
						<td>{{ $achievement->name }}</td>
            <td>{{ $achievement->year }}</td>

						<td>
							

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
	<div class="text-center">{{ $achievements->links() }}</div>
	</div>
@endsection
