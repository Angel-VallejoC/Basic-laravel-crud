@extends('master')

@section('title', 'Edit student')

@section('content')
		
	<h2>Edit student</h2>
	<hr>
	<form method="post" class="col-sm-8 col-sm-offset-1">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" value="{{ $student->name }}">

			<label for="last_name">Last name:</label>
			<input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}" >

			<label for="grade">Grade:</label>
			<input type="text" name="grade" class="form-control" value="{{ $student->grade }}" >
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</div>

		<a href="{{ route('students.index') }}" class="btn btn-danger pull-left">Cancel</a>
		<button type="submit" class="btn btn-primary pull-right">Edit</button>
	</form>


@endsection