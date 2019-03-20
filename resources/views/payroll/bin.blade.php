@extends('layouts.admin')
@section('breadcrumb')

<li class="active">Bin</li>
@endsection

@section('content')
    <div class="col-lg-12">
		<h1 class="page-header">Bin</h1>
	</div>

	<table class= "table table-hover">
		<thead>

			<th>
				Name
			</th>

			<th>
				Restore
			</th>

			<th>
				Permanaently Destroy
			</th>

		</thead>

		<tbody>
			@if($payrolls->count() > 0)
				@foreach($payrolls as $payroll)
					<tr>

						<td>{{ $payroll->employee->name}}</td>

						<td>
							<a href="{{ route('payrolls.restore', ['id' => $payroll->id]) }}" class="btn btn-xs btn-info">Restore</a>
						</td>
						<td>
							<a href="{{ route('payrolls.kill', ['id' => $payroll->id]) }}" class="btn btn-xs btn-danger">Permanaently Delete</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr>
					<th colspan="5" class="text-center">Bin Empty</th>
				</tr>
			@endif
		</tbody>

	</table>
@endsection
