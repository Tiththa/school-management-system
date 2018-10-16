<html>
<head>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="box">
			<h1 class="page-header">Payslip</h1>
			
			<address id="address-header">
				<p>{{ $employee->name }}</p>
				<p>{{ $employee->email }}</p>
				<p>{{ $employee->street }}</p>
				<p>{{ $employee->town }}</p>
				<p>{{ $employee->city }}</p>
				<p>{{ $employee->country }}</p>
			</address>		
			
			<hr>
			<p><b>Department: </b> {{ $employee->role->department->name }}</p>
			<p><b>Role: </b> {{ $employee->role->name }}</p>
				
			@if($employee->full_time)
				<p><b>Full-Time</b> :  Yes</p>
				<p><b>Base Salary</b>: {{ $employee->role->salary }}</p>
			@else
				<p><b>Part-Time</b> : Yes</p>
				<p><b>Base Salary</b>: 0</p>
			@endif				
			<hr>
			<table style= "width:100%">
				<thead>
				<tr>	
					<th>Date-issued</td>
					<th>Over-Time</th>
					<th>Hours</th>
					<th>Rate</th>
					<th>Gross</th>
				</tr>
				</thead>
				@if($employee->payrolls->count()> 0)
					@foreach($employee->payrolls as $payroll)
						<tbody>
					
							<tr>		
								<td>{{ $payroll->created_at->toDateString() }}
								<td>
									@if($payroll->over_time)
										<b>Yes</b>				
									@else
										<b>No</b>							
									@endif				
								</td>
								<td>{{ $payroll->hours }}</td>
								<td>{{ $payroll->rate }}</td>
								<td>{{ $payroll->gross }}</td>							
							</tr>
							
						</tbody>
					@endforeach
				@else
					<tr> 
						<th colspan="5" class="text-center">No payroll issued</th>
					</tr>
				@endif
										
			</table>					
		</div>
	</div>
	
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
