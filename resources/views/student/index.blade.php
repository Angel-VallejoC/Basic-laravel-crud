@extends('../master')

@section('title', 'Students list')

@section('content')
	<h2>Students list</h2>
	<hr>
	<div class="students">
		@if(count($students) > 0)
			<table class="table">
				<thead>
					<th>Name</th>
					<th>Last name</th>
					<th>Grade</th>
					<th>Actions</th>
				</thead>
				<tbody>
				@foreach($students as $student)				
					<tr>
						<td>{{$student->name}}</td>
						<td>{{$student->last_name}}</td>
						<td>{{$student->grade}}</td>												
						<td>
							<a href="{{ route('students.edit', [$student->id]) }}" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
							<a href="{{ route('students.delete', [$student->id]) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>			
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>								
		@else
			<h3>There is no students</h3>
		@endif
		
		<a href=" {{ route('students.add') }} " class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span>Add student</a>
	</div>
@endsection