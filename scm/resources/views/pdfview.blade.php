@extends('layouts.app')

@section('content')
<div class="container">
	<a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a>
	<table class="table table-bordered">
		<thead>
      <th>Id</th>
      <th>Name</th>
			<th>Email</th>
		</thead>
		<tbody>
			@foreach ($users as $key => $value)
			<tr>
        <td>{{ $value->id }}</td>
				<td>{{ $value->name }}</td>
				<td>{{ $value->email }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
