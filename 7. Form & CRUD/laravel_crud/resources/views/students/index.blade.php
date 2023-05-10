@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Action</th>
			</tr>
			@if(count($students) > 0)

				@foreach($students as $row)

					<tr>
						<td>{{ $row->name }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ $row->gender }}</td>
						<td>{{ $row->age }}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('students.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('students.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
	</div>
</div>

@endsection